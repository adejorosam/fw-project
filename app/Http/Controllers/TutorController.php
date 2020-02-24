<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\course;
use Illuminate\Support\Facades\Auth;
use App\privilege;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tutors = User::where('privilege_id', '2')->paginate(10);
        $courses = course::all();
        
        return view('tutor.index')->with('tutors', $tutors)->with('courses', $courses);
    }

    public function create()
    {
        //
        $privileges = privilege::all();
        $courses = course::all();
        return view('tutor.create')->with('privileges', $privileges)->with('courses',$courses);
    }

    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);
            $users = new User;
            $users->name = $request->input('name');
            $users->email = $request->input('email');
            $users->password = \Hash::make($request['password']);
            $users->privilege_id = $request->input('privilege_id');
            $users->save();
            $course = $request->get('course');
            $users->courses()->attach($course);
            return redirect('/tutor')->with('success','User created');
    }

    public function show($id)
    {
        //
        $tutor = User::find($id);
        $courses = Auth::user()->courses()->get();
        return view('tutor.show')->with('tutor', $tutor)->with('courses', $courses);

    }
    
    public function edit($id)
    {
        //
        $tutor = User::find($id);
        $privileges = privilege::all();
        $courses = course::all();
        return view('tutor.edit')->with('tutor', $tutor)->with('privileges',$privileges)->with('courses',$courses);
        
    }

    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            

        ]);
            $tutor = User::find($id);
            $tutor->name = $request->input('name');
            $tutor->email = $request->input('email');
            $tutor->privilege_id = $request->input('privilege_id');
            $tutor->save();
            $course = $request->get('course');
            $tutor->courses()->attach($course);
            return redirect('/tutor')->with('success','User edited');
    }
}
