<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\course;
use App\Assignment;

class AssignmentBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
  
        $assignments = Assignment::all();
        $tutorcourse = Auth::user()->courses()->get();
        return view('assignment.index')->with('assignments', $assignments)->with('tutorcourse', $tutorcourse);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $courses = Auth::user()->courses()->get();
       
        return view("assignment.create")->with('courses', $courses);
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
            
            
        ]);

        $assignment = new Assignment;
        // dd($request['assignment']);
        if($request->hasFile('file')){
            $file = $request['file'];
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/assignments',$filename);
            $assignment->file = $filename;      
        }
        $assignment->name = $request->input('name');
        $assignment->course_name = $request->input('course_name');
        $assignment->remarks = "Yet to be graded";
        $assignment->save();
        $user = Auth::user();
        $course_id =  Auth::user()->courses()->first();
        $assignment->users()->attach($user, ['course_id'=>$course_id['id']]);
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
             return redirect('/assignment')->with('success', 'Successfully updated');
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

    public function download($id){
        $assignment = Assignment::find($id);
        $file_name = $assignment->file;
        $pathToFile = public_path('storage/assignments/'.$file_name);
        return response()->download($pathToFile);
       
    }

    
}
