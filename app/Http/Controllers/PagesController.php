<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('welcome',[
            'foo'=>'foobaar'
        ]);
    }

    public function about(){
        return view('aboutus');
    }

    public function contact(){
        return view('contact');
    }
    
}
