<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;
use App\course;

class AssignmentController extends Controller
{
    //
    public function create(){
        return view("assignment.create");
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            
            'file' => 'required|file|max:2048',
            
        ]);

        $assignment = new Assignment;
        if($request->hasFile('file')){
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/assignments',$filename);
            $assignment->file = $filename;      
        }
        $assignment->save();
        return redirect('/assignment')->with('success','Assignment submitted');
    }
}
