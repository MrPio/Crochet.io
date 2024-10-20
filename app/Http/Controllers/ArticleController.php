<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $view = view('resources.article.index');

        return $view
            ->with('articles', $articles);
    }

    public function show($id)
    {
        $article = Article::find($id);
        if ($article == null)
            abort(400);
        return view("resources.article.show")
            ->with('article', $article);
    }

}
