<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

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
    public function store(Request $request)
    {
        // 1. Validation des données
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:10548',
        ]);

        // 2. Création de l'article sans les images Trix pour l'instant
        $article = new Article;
        $article->title = $request->title;
        $article->user_id = Auth::id();

        // 3. Traitement de l'image de couverture
        if ($request->hasFile('image')) {
            $imageName = Str::uuid()->toString() . '.' . $request->image->extension();
            $request->image->move(public_path('images/articles/'), $imageName);
            $article->image = $imageName;
        }

        // Lier et corriger le contenu des images Trix
        $content = $request->input('content');
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        // Ajoutez cette ligne pour prendre en charge l'UTF-8
        $dom->loadHTML('<?xml encoding="UTF-8">' . $content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (Str::contains($src, '/articles/upload_trix_image')) {
                $media = Media::where('file_name', basename($src))->first();
                if ($media) {
                    $media->model_id = $article->id;
                    $media->model_type = Article::class;
                    $media->save();
                    $img->setAttribute('src', $media->getUrl());
                }
            }
        }

        // On met à jour le contenu de l'article avec le HTML corrigé et propre
        $article->content = $dom->saveHTML($dom->getElementsByTagName('body')->item(0));

        // Sauvegarde de l'article
        $article->save();

        // Redirection
        return redirect()->route('dashboard')->with('success', 'Article créé avec succès !');

    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        $otherArticles = Article::where('id', '!=', $article->id)
            ->latest()
            ->take(5)
            ->get();

        return view('articles.show', compact('article', 'otherArticles'));
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

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * methode pour televerser les images depuis le formulaire Trix
     */
    public function uploadTrixImage(Request $request)
    {
        // Ajoutez ceci pour vérifier si la requête arrive bien ici
        dd('Request received.');

        // Assurez-vous que le champ 'file' existe
        if (!$request->hasFile('file')) {
            dd('No file found in request.');
        }

        // Testez si l'utilisateur est authentifié
        if (!Auth::user()) {
            dd('User not authenticated.');
        }

        try {
            $request->validate([
                'file' => 'required|image|max:5000',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Affichez les erreurs de validation
            dd($e->errors());
        }

        $media = Auth::user()
            ->addMediaFromRequest('file')
            ->toMediaCollection('trix_images');

        // Vérifiez si le média a été créé
        if (!$media) {
            dd('Media object not created.');
        }

        return response()->json([
            'url' => $media->getUrl(),
            'id' => $media->id,
        ]);
    }


    public function destroy(Article $article)
    {
        //
    }
}
