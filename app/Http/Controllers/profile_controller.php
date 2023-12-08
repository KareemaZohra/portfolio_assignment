<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile_controller extends Controller
{
    //
    public function about(){
        return view('about_me');
    }

    public function projects(){
        return view('projects');
    }

    public function contact(){
        return view('contact');
    }
}
