<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;


class AdminController extends Controller
{
    public function admins(){
        $admins = User::where('privilege_id', 3)->paginate(10);
        return view('admin.admins')->with('admins', $admins);
    }
    
    public function index(){
        
        return view('admin.profile');
    }

    public function dashboard(){

        return view('admin.dashboard');
    }

    public function create()
    {
        //
        return view('admin.create');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);
            $admin = new User;
            $admin->name = $request->input('name');
            $admin->email = $request->input('email');
            $admin->password = \Hash::make($request['password']);
            $admin->privilege_id = 3;
            $admin->save();
            return redirect('/admin')->with('success','Admin created');
    }

    public function edit($id){
        $admin = User::find($id);
        return view('admin.edit')->with('admin', $admin);
    }

    public function show($id){
        $admin = User::find($id);
        return view('admin.show')->with('admin', $admin);
    }

    public function update(Request $request, $id) {
       
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);

        $admin = User::findOrFail($id);
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->password = \Hash::make($request['password']);
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $filename = uniqid().'.'.$ext;
            $image->storeAs('public/uploads',$filename);
            // Storage::delete("public/pics/{$courses->image}");
            $admin->image = $filename;   
              
        }
        $admin->save();
        return redirect('/profile')->with('success', 'Profile successfully updated');
    }
}
