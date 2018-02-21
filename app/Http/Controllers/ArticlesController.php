<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Article;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->get();
        return view('index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->category = $request->category;
        $article->created_at = $request->created_at;

        $article->save();

        return redirect("/");
    }

}
