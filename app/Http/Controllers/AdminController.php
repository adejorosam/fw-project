<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Assignment;
use App\Task;
use DB;


class AdminController extends Controller


{
    public function __construct()
    {
        $this->middleware(['auth','verifyRole'])->except('creates');
    }

    public function admins(){
        $admins = User::where('privilege_id', 3)->paginate(10);
        return view('admin.admins')->with('admins', $admins);
    }
    
    public function index(){
        
        return view('admin.profile');
    }

    public function submissions(){
        $assignments = Assignment::all();
        return view('admin.assignment')->with('assignments',$assignments);
    }

    public function tasks(){
        $tasks = Task::all();
        return view('admin.task')->with('tasks', $tasks);
    }

    public function dashboard(){

        return view('admin.dashboard');
    }

    public function create()
    {
        //
        return view('admin.create');
    }

    public function creates(){
        return view('admin.creates');
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
            // dd($admin);
            $admin->save();
            // return redirect('/creat')->with('success','Admin created');
            return back()->with("success", "Admin has been successfully created");
            // return back()->with("success", "$user->name has been $action successfully");
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

    public function searchpayments(Request $request){
        // $user = Auth::user()->id;
        $transaction_id = $request->get('transaction_id');
        $course = $request->get('course');
        $payments = DB::table('payments')->where('transaction_id', 'LIKE', '%'.$transaction_id.'%')->where('payment_purpose', 'LIKE','%'.$course.'%')->get();
        if($payments){
            return view('admin.payments')->with('payments', $payments);
        }else{
            return view('admin.payments')->with('success', 'No file found!');
        }
       

    }
    
}
