<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticlesController extends Controller
{

    public function index()
    {
        $article = Article::orderBy('id', 'desc')->get()->take(1);
        $articles = Article::orderBy('id', 'desc')->get();

        return view('index', compact('articles', 'article'));
    }

    public function fcgroningen()
    {
        $article = Article::orderBy('id', 'desc')->where('category','fcgroningen')->get()->take(1);
        $articles = Article::orderBy('id', 'desc')->where('category','fcgroningen')->get()->forget(0);
        return view('index', compact('articles', 'article'));
    }

    public function cryptovaluta()
    {
      $article = Article::orderBy('id', 'desc')->where('category','cryptovaluta')->get()->take(1);
      $articles = Article::orderBy('id', 'desc')->where('category','cryptovaluta')->get()->forget(0);
      return view('index', compact('articles', 'article'));
    }

    public function trump()
    {
      $article = Article::orderBy('id', 'desc')->where('category','trump')->get()->take(1);
      $articles = Article::orderBy('id', 'desc')->where('category','trump')->get()->forget(0);
      return view('index', compact('articles', 'article'));
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
