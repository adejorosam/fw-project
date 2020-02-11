<?php

namespace App\Http\Controllers;


use App\course;
use App\program;
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

    
    public function create()
    {
        //
        $courses = course::all();
        $programs = program::all();
        return view('admin.create')->with('courses', $courses)->with('programs', $programs);
        
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
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //Create new post
        // dd($request->image);
            $courses = new course;
            $courses->description = $request->input('description');
            $courses->name =  $request->input('name');
            $courses->content = $request->input('content');
            $courses->program_id = $request->input('program_id');
            $courses->price= $request->input('price');
            if($request->hasFile('image')){
                $image = $request->image;
                $ext = $image->getClientOriginalExtension();
                $filename = uniqid().'.'.$ext;
                $image->storeAs('public/pics',$filename);
                // Storage::delete("public/pics/{$courses->image}");
                $courses->image = $filename;
                    
            }else{
                return redirect('/admin')->with('error', 'Issues!');

            }
            $courses->save();
            return redirect('/admin')->with('success','Courses created');
            
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
        return view('admin.show')->with('courses', $courses);
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
        
        return view('admin.edit')->with('courses', $courses)->with('programs', $programs);

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
            'content'=>'required',
            'price'=>'required'

        ]);

        

        //Create new post
            $courses = course::find($id);
            $courses->name = $request->input('name');
            $courses->description = $request->input('description');
            $courses->content = $request->input('content');
            $courses->program_id = $request->input('program_id');
            $courses->save();
            // dd($courses);

            return redirect('/admin')->with('success', 'Courses successfully updated');
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
        return redirect('/admin')->with('success', 'Courses successfully deleted');
    }

   
}
