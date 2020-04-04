<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\course;
use App\Assignment;
use App\Task;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AssignmentBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware(['auth', 'suspend', 'defaultPayment']);
    }

    public function index()
    {
        $tutorcourse = Auth::user()->courses()->first();
        $assignments = Assignment::where('course_name', $tutorcourse['name'])->get();
        return view('assignment.index')->with('assignments', $assignments)->with('tutorcourse', $tutorcourse);
    }

    public function latesubmission(){
        return view('assignment.latesubmission');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $courses = Auth::user()->courses()->get();
        $recent_course = end($courses);
        $course_name = '';
        foreach ($recent_course as $course) 
            $course_name = $course->name;
        $recent_task = Task::where('course_name',$course_name)->get();
        $tasks = end($recent_task);
        $time = Carbon::now();
        foreach($tasks as $task)
            if($task->deadline < $time)
                return redirect('/latesubmission');
           
        return view("assignment.create")->with('courses', $courses)->with('tasks', $tasks)->with('recent_course', $recent_course);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'file' => 'required|max:2048',
            'task_id' => 'required'
           
        ]);

        $assignment = new Assignment;
        if($request->hasFile('file')){
            $file = $request['file'];
            $ext = $file->getClientOriginalExtension();
            $filename = uniqid().'.'.$ext;
            $filePath = 'assignments/' . $filename;
            Storage::disk('s3')->put($filePath, file_get_contents($file));
            $assignment->file = $filename; 
                 
        }
        $assignment->name = $request->input('name');
        $assignment->course_name = $request->input('course_name');
        $assignment->remarks = "Yet to be graded";
        $assignment->task_id = $request->input('task_id');
        $assignment->save();
        $user = Auth::user();
        $progress = Auth::user()->courses()->first()->pivot->progress;
        $course_id =  Auth::user()->courses()->first();
        $assignment->users()->attach($user, ['course_id'=>$course_id['id']]);
        $user->courses()->updateExistingPivot($course_id['id'],['progress'=>$progress + 8]);
        return redirect('/performance')->with('success','Assignment submitted');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $assignment = Assignment::find($id);
        return view('assignment.show')->with('assignment', $assignment);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $assignment = Assignment::find($id);
        return view('assignment.edit')->with('assignment', $assignment);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
        
            'remarks'=>'required',
         ]);
 
         //Create new post
             $assignment = Assignment::find($id);
             $assignment->remarks = $request->input('remarks');
             $assignment->save();
             return redirect('/assignment')->with('success', 'Successfully graded');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    

    
}
