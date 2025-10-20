<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function project(){
        return view('project');
    }
    public function web(){
        return view('web');
    }
}
