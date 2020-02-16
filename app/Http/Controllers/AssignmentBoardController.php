<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use App\Assignment;
// use App\assignment;

class AssignmentBoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $assignments = Assignments::all;
        return view('assignment.create')->with('assignments',$assignments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("assignment.create");
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
        $assignment->save();
        return redirect('/assignment')->with('success','Assignment submitted');
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
}
