<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::prefix('articles')->middleware('auth')->name('articles.')->group(function() {
    Route::get('/create', [ArticleController::class, 'create'])->name('create');
    Route::post('/', [ArticleController::class, 'store'])->name('store');
});
Route::get('/', [ArticleController::class, 'index'])->name('home');


require __DIR__.'/auth.php';
