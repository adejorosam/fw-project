<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashBoard extends Controller
{
    //
    public function dashboard(){
        return view('admin.dashboard');
    }
}
