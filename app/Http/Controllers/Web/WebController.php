<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Pack;

class WebController extends Controller
{
    public function home(){
        $articles = Article::latest()->take(3)->get();
        $packs = Pack::All()->where('active', true)->all();

        return view('home.index', compact('articles', 'packs'));
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
