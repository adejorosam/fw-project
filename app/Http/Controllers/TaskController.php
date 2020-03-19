<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Task;
use Carbon\Carbon;


class TaskController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['auth', 'suspend']);
    }
    public function index(){
        $usercourse = Auth::user()->courses()->first();
        $tasks = Task::where('course_name', $usercourse['name'])->get();
        
        return view('tasks.index')->with('tasks', $tasks)->with('usercourse', $usercourse);
    }

    public function create(){
        $courses = Auth::user()->courses()->get();
        // dd($courses);
        return view('tasks.create')->with('courses', $courses);
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required|unique:tasks',
            'content' => 'required',
            'course_name' => 'required',
            'deadline' => 'required'  
        ]);
        $task = new Task;
        $task->title = $request->input('title');
        $task->content = $request->input('content');
        $task->course_name = $request->input('course_name');
        $currentDate = Carbon::now();
        $task->deadline = $currentDate->addDays($request->input('deadline'));
        // $task->deadline = $deadline;
        $task->save();
        return redirect('task/create')->with('success', 'Assignment successfuly posted!');
        

    }

    public function show($id){
        $task = Task::find($id);
        return view('tasks.show')->with('task', $task);
    }

    public function edit($id){
        $courses = Auth::user()->courses()->get();
        $task = Task::find($id);
        return view('tasks.edit')->with('task', $task)->with('courses',$courses);
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'title' => 'required',
            'course_name' => 'required',
            'content' => 'required',
            'deadline' => 'required'
            

        ]);
            $task = Task::find($id);
            $task->title = $request->input('title');
            $task->course_name = $request->input('course_name');
            $task->content = $request->input('content');
            $task->deadline = $request->input('deadline');
            $task->save();
            return redirect('/task')->with('success','Successfully updated');
    }

    public function destroy($id)
    {
        //
        $task = Task::find($id);
        $task->delete();
        return redirect('/task')->with('success', 'Task successfully deleted');
    }
}
