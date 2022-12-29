<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        return view('articles.index');
    }

    public function create() {
        return view('articles.create');
    }

    public function store(Request $request, Article $article) {
        $article->fill($request->all());
        return view('articles.index');
    }
}
