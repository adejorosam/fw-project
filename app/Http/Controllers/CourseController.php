<?php

namespace App\Http\Controllers;


use App\course;
use App\program;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return all courses in database
        $courses = course::all();
        return view('course.index')->with('courses', $courses);
    }

    public function courses()
    {
        //return all courses in database
        $courses = course::all();
        return view('course.course')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    
    public function create()
    {
        //
        $courses = course::all();
        $programs = program::all();
        return view('course.create')->with('courses', $courses)->with('programs', $programs);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
    
        //
        $this->validate($request,[
            'description' => 'required',
            'name' => 'required',
            'duration' => 'required',
            'program_id'=>'required',
            
        ]);

        //Create new post
        // dd($request->image);
            $courses = new course;
            $courses->description = $request->input('description');
            $courses->name =  $request->input('name');
            $courses->duration = $request->input('duration');
            $courses->program_id = $request->input('program_id');
            $courses->price= $request->input('price');
            $courses->save();
            return redirect('/course')->with('success','Courses created');
            
        }
            
    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courses = course::find($id);
        return view('course.show')->with('courses', $courses);
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
        $programs = program::all();
        $courses = course::find($id);
        
        return view('course.edit')->with('courses', $courses)->with('programs', $programs);

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
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'program_id' =>'required',
            'duration'=>'required',
            'price'=>'required'

        ]);

        

        //Create new post
            $courses = course::find($id);
            $courses->name = $request->input('name');
            $courses->description = $request->input('description');
            $courses->duration = $request->input('duration');
            $courses->price = $request->input('price');
            $courses->program_id = $request->input('program_id');
            $courses->save();
            // dd($courses);

            return redirect('/course')->with('success', 'Course successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = course::find($id);
        $courses->delete();
        return redirect('/course')->with('success', 'Courses successfully deleted');
    }

   
}
