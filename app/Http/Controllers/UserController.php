<?php

namespace App\Http\Controllers;
use App\User;
use App\privilege;
use App\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        // $this->middleware('suspend')->except(['suspend','about','contact','terms','policy']);
    }
    public function index()
    {
        //
        {
            //
            // $users = User::all();
            // return view('user.index')->with('users', $users);

            $users = User::all();
            $privileges = privilege::all();
            // foreach($users as $user){
            //     // foreach ($privileges as $privilege) {
            //         # code...
            //         dd($user->privilege->name);
               
            // }
            // $courses = course::all();
        
            return view('user.index')->with('users', $users);
        }
    }

    public function regusers()
    {
        //
        {
            //
            // $users = User::all();
            // return view('user.index')->with('users', $users);

            $users = User::where('privilege_id', '1')->paginate(10);
            // $courses = course::all();
        
            return view('user.regusers')->with('users', $users);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
     
    //     return view('user.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    //     $this->validate($request,[
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',

    //     ]);
    //         $users = new User();
    //         $users->name = $request->input('name');
    //         $users->email = $request->input('email');
    //         $users->password = Hash::make($request->input['password']);
    //         $users->privilege_id = 3;
            
    //         User::create($users);
    //         return redirect('/user')->with('success','User created');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $users = User::find($id);
        return view('user.show')->with('users', $users);

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
        $users = User::find($id);
        $privileges = privilege::all();
        return view('user.edit')->with('users', $users)->with('privileges',$privileges);
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
            'name'=>'required',
            'email'=>'required',
         ]);
 
         //Create new post
             $users = User::find($id);
             $users->name = $request->input('name');
             $users->email = $request->input('email');
             $users->suspend = $request->input('suspend');
             $users->privilege_id = $request->input('privilege_id');
             $users->save();
             
            
 
             return redirect('/user')->with('success', 'Successfully updated');

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
        $users = User::find($id);
        $users->delete();
        return redirect('/user')->with('success', 'User successfully deleted');

    }
}
