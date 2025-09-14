<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', [ArticleController::class, 'index'])->name('home');

Route::get('/create', function () {
    return view('create');
});

Route::post('/', [ArticleController::class, 'store'])->name('articles.store');

Route::get('/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');

Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');

Route::delete('/articles/{article}', [ArticleController::class, 'delete'])->name('articles.delete');