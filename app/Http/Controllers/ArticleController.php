<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('removed_at', null);
        $view = view('resources.article.index');

        return $view
            ->with('articles', $articles->paginate(20));
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
