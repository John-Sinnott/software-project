<?php

use App\Models\Article;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

Route::middleware('auth')->group(
    function () {
        Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

        Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

        Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');

        Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');
    }
);
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $articles = Article::all();

    return view('dashboard', compact('articles'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
