<?php

namespace App\Http\Controllers;

use App\privilege;
use Illuminate\Http\Request;

class PrivilegesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware(['auth', 'suspend']);
    }
    public function index()
    {
        //
        $privileges = privilege::all();
        return view('privileges.index')->with('privileges', $privileges);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('privileges.create');
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
        $this->validate($request,[
            
            'name' => 'required',
        ]);

        //Create new post
            $privileges= new privilege;
            $privileges->name = $request->input('name');
            $privileges->save();

            return redirect('/privilege')->with('success','privileges created');
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
        $privileges = privilege::find($id);
        return view('privileges.show')->with('privileges', $privileges);
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
        $privileges = privilege::find($id);
        return view('privileges.edit')->with('privileges', $privileges);
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
            'name' => 'required',
        ]);

        //Create new post
            $privileges = privilege::find($id);
            $privileges->name = $request->input('name');
           

            return redirect('/privilege')->with('success', 'Privileges successfully updated');
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
        $privileges = privilege::find($id);
        $privileges->delete();
        return redirect('/privilege')->with('success', 'Privileges successfully deleted');
    }
}
