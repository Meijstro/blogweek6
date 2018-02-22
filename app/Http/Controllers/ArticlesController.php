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
    public function fcgroningen()
    {
        $articles = Article::orderBy('id', 'desc')->where('category','fcgroningen')->get();
        return view('index', compact('articles'));
    }
    public function cryptovaluta()
    {
        $articles = Article::orderBy('id', 'desc')->where('category','cryptovaluta')->get();
        return view('index', compact('articles'));
    }
    public function trump()
    {
        $articles = Article::orderBy('id', 'desc')->where('category','trump')->get();
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

    public function show($id)
    {
      $post = Article::find($id);
      return view('articles.show', compact('post'));
    }
}
