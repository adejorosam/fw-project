<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\program;
use App\course;
use App\Curriculum;

class PagesController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('suspend')->except(['suspend','about','contact','terms','policy']);
    }

    public function about(){
        return view("pages.about");
    }

    public function access(){
        return view("pages.access");
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

    public function suspend(){
        return view("pages.suspend");
    }

    public function webdev(){
        $courses = course::where('program_id', '1')->get();
        return view("pages.webdev")->with('courses', $courses);
    }

    public function datascience(){
        $courses = course::where('program_id','2')->get();
        // dd($file);
        return view("pages.datascience");
    }

    public function uiux(){
        $courses = course::where('program_id','3')->get();
        return view("pages.uiux");
    }

    public function mobile(){
        $courses = course::where('program_id','4')->get();
        return view("pages.mobile");
    }
}
