<?php

namespace App\Http\Controllers;


use App\course;
use App\programs;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        return view('admin.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

     public function welcome(){
         $courses = course::all();
         $programs = programs::all();
         return view('admin.welcome')->with('courses', $courses)->with('programs', $programs);

     }
    public function create()
    {
        //
        $programs = programs::all();
        return view('admin.create')->with('programs', $programs);
        // $course = course::all();
        // return view('admin.create')->with('course', $course);
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
            'content' => 'required',
            'program_id'=>'required',
            'image'=> 'required',
        ]);

        //Create new post
            $c = 1;
            $course = new course;
            $course->description = $request->input('description');
            $course->name =  $request->input('name');
            $course->content = $request->input('content');
            $course->program_id = $request->input('program_id');
            #$course->image = $request->file('image');

            if($c){
                $image = $request->file('image');
                $extension = $image->getClientOriginalName();
                $filename = time() .'.'. $extension;
                $file->move('public/uploads/courses/', $filename);
                $course->image = $filename;

            }
            else{
                return redirect('/admin')->with('error','Issue!');
                $course->image = '';
            }
            
            $course->save();

            return redirect('/admin')->with('success','course created');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = course::find($id);
        return view('admin.show')->with('course', $course);
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
        $course = course::all();
        $course = course::find($id);
        return view('admin.edit')->with('course', $course)->with('course', $course);

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
            'content'=>'required'
        ]);

        //Create new post
            $course = course::find($id);
            $course->name = $request->input('name');
            $course->description = $request->input('description');
            $course->content = $request->input('content');
            $course->program_id = $request->input('program_id');
            $course->save();

            return redirect('/admin')->with('success', 'Course successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = course::find($id);
        $course->delete();
        return redirect('/admin')->with('success', 'Course successfully deleted');
    }
}
