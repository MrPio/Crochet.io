<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Catalog;

class ArticleController extends Controller
{
    protected Catalog $catalog;

    public function __construct()
    {
        $this->catalog = new Catalog;
    }

    public function index()
    {
        $articles = Article::where('removed_at', null); // here
        $view = view('resources.article.index');

        if (key_exists('search_string', $_GET)) {
            $search_string = $_GET['search_string'];
            $articles = $this->catalog->byName($articles, $search_string);
            $view->with('search_string', $search_string);
        }

        if (key_exists('available', $_GET)) {
            $available = $_GET['available'];
            $articles = $this->catalog->byAvailability($articles, $available);
            $view->with('available', $available);
        }

        if (key_exists('category', $_GET)) {
            $category = $_GET['category'];
            $articles = $this->catalog->byCategory($articles, $category);
            $view->with('category', $category);
        }

        if (key_exists('tool', $_GET)) {
            $tool = $_GET['tool'];
            $articles = $this->catalog->byTool($articles, $tool);
            $view->with('tool', $tool);
        }

        if (key_exists('min_price', $_GET) || key_exists('max_price', $_GET)) {
            $articles = $this->catalog->byPrice($articles, $_GET['min_price'],$_GET['max_price']);
            $view->with('min_price', $_GET['min_price'])->with('max_price', $_GET['max_price']);
        }

        // Sort by creation date
        if (count($articles->get()) > 0)
            $articles = $articles->orderBy('created_at', 'desc');

        return $view
            ->with('articles', $articles->paginate(15));
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
