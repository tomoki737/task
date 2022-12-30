<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::prefix('articles')->name('articles.')->group(function() {
    Route::get('/', [ArticleController::class, 'index'])->name('index');
    Route::get('/create', [ArticleController::class, 'create'])->name('create');
    Route::post('/store', [ArticleController::class, 'store'])->name('store');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
