<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Pack;
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

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:10548',
            'categorie' => 'required|string',
        ]);


        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->input('content');
        $article->categorie = $request->input("categorie");
        $article->user_id = Auth::id();


        if ($request->hasFile('image')) {
            // Enregistre l'image temporairement pour la lier plus tard avec Spatie
            $imageName = Str::uuid()->toString() . '.' . $request->image->extension();
            $request->image->move(public_path('images/articles/'), $imageName);
            $article->image = $imageName;
        }

        // Sauvegarder l'article AVANT de traiter le contenu des images
        $article->save();


        $content = $request->input('content');
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML('<?xml encoding="UTF-8">' . $content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            // Nous allons chercher les images attachées à l'utilisateur
            if (Str::contains($src, '/articles-images/')) { // Remplacez par le bon chemin d'upload de Summernote
                $media = Media::where('file_name', basename($src))->first();
                if ($media) {
                    // Attacher le média à l'article qui vient d'être créé
                    $media->model_id = $article->id;
                    $media->model_type = Article::class;
                    $media->save();
                    $img->setAttribute('src', $media->getUrl());
                }
            }
        }
        libxml_clear_errors();


        $article->content = $dom->saveHTML($dom->getElementsByTagName('body')->item(0));
        $article->save();


        return redirect()->route('dashboard')->with('success', 'Article créé avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $otherArticles = Article::where('id', '!=', $article->id)
            ->latest()
            ->take(5)
            ->get();

        return view('articles.show', compact('article', 'otherArticles'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(Article $article){
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'categorie' => 'required|string',
            'image' => 'nullable|image|max:10548',
        ]);

        $article->title = $validateData['title'];
        $article->categorie = $request->input('categorie');
        $article->content = $request->input('content');

        // 3. Traitement de l'image de couverture
        if ($request->hasFile('image')) {
            $imageName = Str::uuid()->toString() . '.' . $request->image->extension();
            $request->image->move(public_path('images/articles/'), $imageName);
            $article->image = $imageName;
        }


        // Lier et corriger le contenu des images
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
        return redirect()->route('dashboard')->with('success', 'Article Mise à jour avec succès !');

    }


    public function userArticles()
    {
        $articles = Article::all();
        $packs = Pack::all();

        return view('dashboard', compact('articles', 'packs'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * methode pour televerser les images depuis le formulaire Trix
     */
    public function ckeditorUpload(Request $request)
    {

        $request->validate([
            'file' => 'required|image|max:10500',
        ]);

        // On sauvegarde l'image avec Spatie Media Library
        $media = Auth::user()
            ->addMediaFromRequest('file')
            ->toMediaCollection('ckeditor_images');

        // On renvoie la réponse JSON attendue par CKEditor


        return response()->json([
            'uploaded' => 1,
            'fileName' => $media->file_name,
            'url' => $media->getUrl(), // C'est ici que l'URL est générée par Spatie
        ]);

    }


    public function destroy(Article $article)
    {

        $article->clearMediaCollection('ckeditor_images');

        // Supprime l'article
        $title_article = $article->title;
        $article->delete();

        // Redirection après la suppression
        return redirect()->route('dashboard')->with('success', 'Article '.$title_article.' supprimé avec succes!' );
    }
}
