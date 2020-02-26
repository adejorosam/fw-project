<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\course;
use Illuminate\Support\Facades\Auth;
// use App
// use App\RegisteredCourses;
// use App\Schedule;
// use App\Assignment;

class CentralDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $privilege = auth()->user()->privilege_id;

        if($privilege == 1){
            
            // $mycourses = Auth::user()->courses()->get();
            return view("dashboard.index");

        }
        elseif($privilege == 2){
            // $user_privilege = 'tutor';
            return view("tutor.dashboard");
            
        }
        elseif ($privilege == 3) {
           
            return view("admin.profile");
            
        }

       
        }

        public function mycourses(){
            $data = array('mycourses' => Auth::user()->courses()->get(),
            'tutors' => User::where('privilege_id', '2')->get());
            return view("dashboard.mycourses")->with($data); 
             
    }

        public function performance(){
            $data  = array('assignments' => Auth::user()->assignments()->get(),
        );
            // dd($data);
            return view('assignment.performance')->with($data);
        }

        public function students(){
            $students = User::where('privilege_id', '1')->paginate(10);
            $tutor = Auth::user()->courses()->get();
            // dd($tutor);
            // $courses = course::all();
        
            return view('dashboard.students')->with('students', $students)->with('tutor',$tutor);
        }
}
