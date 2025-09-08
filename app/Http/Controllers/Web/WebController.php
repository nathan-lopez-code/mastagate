<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home(){
        return view('home.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contacts');
    }

    public function services(){
        return view('pages.services');
    }
}
