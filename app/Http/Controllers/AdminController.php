<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;


class AdminController extends Controller
{
    //
    public function dashboard(){

        return view('admin.dashboard');
    }

    public function index(){
        // $admin = User::where('privilege_id', '3')->paginate(10);
        return view('admin.profile');
    }

    public function update(Request $request, $id) {
        // dd($request->file);
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'image'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $request->user()->fill([
            'password' => Hash::make($request->input('password'))
        ]);
        // $request->user()->fill([
        // 'password' => Hash::make($request->input('password'))];
        // $user->password = $request->input('password');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $filename = uniqid().'.'.$ext;
            $image->storeAs('public/uploads',$filename);
            // Storage::delete("public/pics/{$courses->image}");
            $user->image = $filename;   
              
        }
        $user->save();
        return redirect('/profile')->with('success', 'Profile successfully updated');
    }
}
