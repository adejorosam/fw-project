<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\program;
use App\course;

class PagesController extends Controller
{
    //
    public function about(){
        return view("pages.about");
    }

    public function contact(){
        return view("pages.contact");
    }

    public function terms(){
        return view("pages.terms");
    }

    public function policy(){
        return view("pages.policy");
    }

    public function webdev(){
        // $comment = App\Post::find(1)->comments()->where('title', 'foo')->first();
        // $programs = program::all();
        $courses = program::find(1)->courses()->where('program_id','1')->first();
        // dd($courses);
        return view("pages.webdev")->with('courses', $courses);
    }

    public function uiux(){
        // $programs = programs
        return view("pages.uiux");
    }

    public function datascience(){
        // $programs = programs
        return view("pages.datascience");
    }

    public function mobile(){
        // $programs = programs
        return view("pages.mobile");
    }
}
