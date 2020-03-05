<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\course;
use App\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



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
            $registered_courses = Auth::user()->courses()->get();
            $tasks = DB::table('tasks')->orderBy('created_at', 'desc')->get();
            $currently_enrolled = end($registered_courses);
            $course_name = '';
            foreach($currently_enrolled as $latest)
                $course_name = $latest->name;
            $course_tasks = Task::where('course_name',$course_name)->get();
            $recent_task = end($course_tasks);
            $user = Auth::user()->courses();
            $progress = Auth::user()->courses()->first()->pivot->progress;
            $assignments = count(Auth::user()->assignments()->get());
            
            
            return view('dashboard.dashboard')->with('assignments',$assignments)->with('progress',$progress)->with('currently_enrolled', $currently_enrolled)->with('recent_task',$recent_task)->with('registered_courses', $registered_courses)->with('tasks', $tasks);
       
        }
        elseif($privilege == 2){
            $registered_courses = Auth::user()->courses()->get();
            $tutorcourse = Auth::user()->courses()->first();
            $num_students = count($tutorcourse->users()->get()) - 1;
            $tasks = DB::table('tasks')->paginate(15);
           
            
            return view('tutor.dashboard')->with('registered_courses', $registered_courses)->with('tasks', $tasks)->with('num_students', $num_students);     
        }
        elseif ($privilege == 3) {
           
            return view("admin.profile");
            
        }

       
        }

        public function mycourses(){
            $data = array('mycourses' => Auth::user()->courses()->get(), 'progress'=>Auth::user()->courses()->first()->pivot->progress,
            'tutors' => User::where('privilege_id', '2')->get());
            return view("dashboard.mycourses")->with($data); 
             
    }

        public function performance(){
            $data  = array('assignments' => Auth::user()->assignments()->get(),
        );
            
            return view('dashboard.performance')->with($data);
        }

        public function students(){
            $students = User::where('privilege_id', '1')->paginate(10);
            $tutor = Auth::user()->courses()->get();
            return view('dashboard.students')->with('students', $students)->with('tutor',$tutor);
            
        }
}
