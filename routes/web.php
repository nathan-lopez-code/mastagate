<?php

use App\Http\Controllers\PackController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// ----------------------------------------------------
// Routes Publiques
// Accessibles sans authentification.
// ----------------------------------------------------

use App\Http\Middleware\TrackTraffic;


Route::middleware([TrackTraffic::class])->controller(WebController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contacts');
    Route::get('services', 'services')->name('services');
    Route::get('portfolio', 'portfolio')->name('portfolio');
});


// Route de ressource pour les articles
Route::get('blogs/', [ArticleController::class, 'index'])->name('blogs.index');
Route::get('blogs/{slug}', [ArticleController::class, 'show'])->name('blogs.show');

// ----------------------------------------------------
// Routes Sécurisées - only authentificated user
// ----------------------------------------------------

Route::middleware('auth')->group(function () {

    // Routes du dashboard
    Route::get('/dashboard', [ArticleController::class, 'userArticles'])
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

    // Routes de gestion du profil utilisateur
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes de gestion des articles par un utilisateur connecté
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
        Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
        Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
        Route::get('/articles/list/', [ArticleController::class, 'listAdmin'])->name('articles.listAdmin');
        Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');
        Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
        Route::post('articles/ckeditor_upload', [ArticleController::class, 'ckeditorUpload'])->name('articles.ckeditor_upload');

    });

    // Route de gestion de pack
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::get('/pack/create', [PackController::class, 'create'])->name('packs.create');
        Route::get('/pack/', [PackController::class, 'index'])->name('packs.index');
        Route::post('/pack/', [PackController::class, 'store'])->name('packs.store');
        Route::delete('/pack/{pack}', [PackController::class, 'destroy'])->name('packs.destroy');
        Route::get('/pack/edit/{pack}', [PackController::class, 'edit'])->name('packs.edit');
        Route::put('/pack/update/{pack}', [PackController::class, 'update'])->name('packs.update');
    });
});


require __DIR__.'/auth.php';
