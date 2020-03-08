<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payment;
use App\payment_status;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\course;
use Paystack;

class PaymentController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }
      
    public function payments(){
        $payments = payment::all();
        return view('admin.payments')->with('payments', $payments);
    }


    public function apply($id){
        $course = course::find($id);
        $payment_statuses = payment_status::all();
        $course_info = array('course_id' => $course->id, 'course_name'=>$course->name );
       
        $course_paid = json_encode($course_info);
       
        return view("pages.apply")->with('course_paid',$course_paid)->with('course', $course)->with('payment_statuses', $payment_statuses);
        
    }

    public function payment_history(){
        $userPayment = Auth::user()->id;
        $payments = payment::where('user_id',$userPayment)->get();
        return view('payment.history')->with('payments', $payments);
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
        
        if($paymentDetails['data']['status'] == 'success'){
            $user = Auth::user();

            $payment = new payment;
            $payment->transaction_id = $paymentDetails['data']['id'];
            $payment->user_id = $user->id;
            $payment->amount_paid = $paymentDetails['data']['amount'];
            $payment->payment_purpose = $paymentDetails['data']['metadata']['course_name'];
            $payment->save();
            $payment_id = $payment->id;
            $paid_course = $paymentDetails['data']['metadata']['course_id'];
            $course = course::find($paid_course);
            $user->courses()->attach($course,['payment_id'=>$payment_id]);
            return redirect('/dashboard')->with('success','Successfully enrolled');

        }
        else{
            return('We are not able to process your payment at the moment.');
        }
        

        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    

    
}
