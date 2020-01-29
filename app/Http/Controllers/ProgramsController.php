<?php

namespace App\Http\Controllers;

use App\program;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programs = program::all();
        return view('program.index')->with('programs', $programs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('program.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //
         $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',

        ]);

        //Create new post
            $programs = new program;
            $programs->name = $request->input('name');
            $programs->description = $request->input('description');
            $programs->duration = $request->input('duration');
            $programs->save();

            return redirect('/program')->with('success','Program created');
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
        $programs = program::find($id);
        return view('program.show')->with('programs', $programs);

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
        $programs = program::find($id);
        return view('program.edit')->with('programs', $programs);
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
            'duration' => 'required',
            
        ]);

        //Create new post
            $programs = program::find($id);
            $programs->name = $request->input('name');
            $programs->description = $request->input('description');
            $programs->duration = $request->input('duration');
           

            $programs->save();

            return redirect('/program')->with('success', 'Program successfully updated');
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
        $programs = program::find($id);
        $programs->delete();
        return redirect('/program')->with('success', 'Program successfully deleted');
    }
}
