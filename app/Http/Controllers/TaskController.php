<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Task;


class TaskController extends Controller
{
    //
    public function index(){
        $tasks = DB::table('tasks')->orderBy('created_at', 'desc')->get();
        $usercourse = Auth::user()->courses()->get();
        
        return view('tasks.create')->with('courses', $courses);
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',   
        ]);
        $task = new Task;
        $task->title = $request->input('title');
        $task->content = $request->input('content');
        $task->course_name = $request->input('course_name');
        $task->save();
        return redirect('task')->with('success', 'Assignment successfuly posted!');
        

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
            

        ]);
            $task = Task::find($id);
            $task->title = $request->input('title');
            $task->course_name = $request->input('course_name');
            $task->content = $request->input('content');
            $task->save();
            return redirect('/task')->with('success','Successfully updated');
    }
}
