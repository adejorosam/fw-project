<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payment;
use App\payment_status;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\course;
use Paystack;
use Carbon\Carbon;

class PaymentController extends Controller
{
    public function __construct(){
        return $this->middleware(['auth', 'suspend']);
    }
      
    public function payments(){
        $payments = payment::all();
        return view('admin.payments')->with('payments', $payments);
    }


    public function apply($id){
        $course = course::find($id);
        $payment_statuses = payment_status::all();
       
        return view("pages.apply")->with('course', $course)->with('payment_statuses', $payment_statuses);
        
    }

    public function repayment(){
        $user = Auth::user()->id;
        $payments = payment::where('user_id', $user)->get();
        // dd(count($payments));
        return view('pages.repayment')->with('payments', $payments);
    }

    public function payment_history(){
        $userPayment = Auth::user()->id;
        $payments = payment::where('user_id',$userPayment)->get();
        return view('dashboard.history')->with('payments', $payments);
    }

    public function defaultPayment(){
        return view('pages.disabled');
    }

    
   
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        $checkCourse = Auth::user()->courses()->get();
        $countCourse = count($checkCourse);
        // dd($paymentDetails);
        
        
        if($paymentDetails['data']['status'] === 'success'){
            // dd($paymentDetails);
            //Handles repayment
            if($countCourse >= 1){
                $outStandingBalance = Auth::user()->courses()->first()->pivot->remaining_balance;
                // Handles installmental final repayment
                if ($outStandingBalance === $paymentDetails['data']['amount']/100) {
                    $user = Auth::user();
                    $payment = new payment;
                    $payment->payment_status_id = 1;
                    $payment->transaction_id = $paymentDetails['data']['id'];
                    $payment->user_id = $user->id;
                    $payment->amount_paid = ($paymentDetails['data']['amount']/100);
                    $payment->payment_purpose = $paymentDetails['data']['metadata']['course_name'];
                    $payment->save();
                    $paymentStatus = 'fully-paid';
                    $dueDate = null;
                    $remainingBalance = 0;
                    $paid_course = $paymentDetails['data']['metadata']['course_id'];
                    $user->courses()->updateExistingPivot($paid_course,['repayment_date'=>$dueDate,'remaining_balance'=>$remainingBalance, 'payment_status'=>$paymentStatus]);
                    return redirect('/dashboard')->with('success','Successfully enrolled');

                }
                 // Handles additional installmental repayment
                elseif($outStandingBalance != ($paymentDetails['data']['amount']/100)){
                    $user = Auth::user();
                    $payment = new payment;
                    $payment->transaction_id = $paymentDetails['data']['id'];
                    $payment->payment_status_id = 1;
                    $payment->user_id = $user->id;
                    $payment->amount_paid = ($paymentDetails['data']['amount']/100);
                    $payment->payment_purpose = $paymentDetails['data']['metadata']['course_name'];
                    $payment->save();
                    $datePaid = Carbon::now();
                    $paymentStatus = 'installment';
                    $dueDate = $datePaid->add(30, 'days');
                    $remainingBalance = $outStandingBalance - ($paymentDetails['data']['amount']/100);
                    $paid_course = $paymentDetails['data']['metadata']['course_id'];
                    $user->courses()->updateExistingPivot($paid_course,['repayment_date'=>$dueDate,'remaining_balance'=>$remainingBalance, 'payment_status'=>$paymentStatus]);
                    return redirect('/dashboard')->with('success','Successfully enrolled');

                }
                
            }
            // Handles first time installmental payment
            elseif(($paymentDetails['data']['amount']/100) != ($paymentDetails['data']['metadata']['course_amount']))
            {
                $user = Auth::user();
                $payment = new payment;
                $payment->transaction_id = $paymentDetails['data']['id'];
                $payment->user_id = $user->id;
                $payment->payment_status_id = 1;
                $payment->amount_paid = ($paymentDetails['data']['amount']/100);
                $payment->payment_purpose = $paymentDetails['data']['metadata']['course_name'];
                $payment->save();
                $paymentStatus = 'installment';
                $datePaid = Carbon::now();
                $dueDate = $datePaid->add(30, 'days');
                $remainingBalance = $paymentDetails['data']['metadata']['course_amount'] - ($paymentDetails['data']['amount']/100);
                $payment_id = $payment->id;
                $paid_course = $paymentDetails['data']['metadata']['course_id'];
                $course = course::find($paid_course);
                $user->courses()->attach($course,['payment_id'=>$payment_id,'payment_status'=>$paymentStatus, 'remaining_balance'=>$remainingBalance, 'repayment_date'=>$dueDate]);
                return redirect('/dashboard')->with('success','Successfully enrolled');


            }
    
            // Handles first time full payment
            else{
                $user = Auth::user();
                $payment = new payment;
                $payment->transaction_id = $paymentDetails['data']['id'];
                $payment->user_id = $user->id;
                $payment->payment_status_id = 2;
                $payment->amount_paid = ($paymentDetails['data']['amount']/100);
                $payment->payment_purpose = $paymentDetails['data']['metadata']['course_name'];
                $paymentStatus = 'fully-paid';
                $payment->save();
                $remainingBalance = 0;
                $payment_id = $payment->id;
                $paid_course = $paymentDetails['data']['metadata']['course_id'];
                $course = course::find($paid_course);
                $user->courses()->attach($course,['payment_id'=>$payment_id, 'payment_status'=>$paymentStatus, 'remaining_balance'=>$remainingBalance]);
                return redirect('/dashboard')->with('success','Successfully enrolled');

            }

        }
        else{
            return('We are not able to process your payment at the moment.');
        }
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}