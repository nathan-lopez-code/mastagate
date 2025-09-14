<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:1000',
            'content' => 'required|string',
            'image' => 'nullable|image|max:10508',
        ]);

        // recuperer le nom de l'image televerse
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = Str::uuid()->toString() . '.' . $request->image->extension();
            $request->image->move(public_path('images/articles'), $imageName);
        }

        $article = new Article();
        $article->title  = $request->input('title');
        $article->content = $request->input('content');
        $article->image = $imageName;
        $article->user_id = auth()->user()->id;
        $article->save();

        return redirect()->route('dashboard')->with('success', 'Article créé avec succès !');

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }


    public function userArticles()
    {
        $articles = auth()->user()->articles;

        return view('dashboard', compact('articles'));
    }

    public function destroy(Article $article)
    {
        //
    }
}
