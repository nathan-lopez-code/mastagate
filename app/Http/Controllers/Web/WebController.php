<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;

class WebController extends Controller
{
    public function home(){
        $articles = Article::latest()->take(3)->get();

        return view('home.index', compact('articles'));
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
