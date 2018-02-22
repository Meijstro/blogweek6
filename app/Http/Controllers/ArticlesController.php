<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->get()->take(1);
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

        $article->save();

        return redirect("/");
    }

    public function show($id)
    {
      $post = Article::find($id);
      return view('articles.show', compact('post'));
    }
}
