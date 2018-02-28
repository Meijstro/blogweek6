@extends('master')

@section('content')

<main role="main" class="container">
  <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
  @foreach ($article as $article)
  <div class="col-md-6 px-0">
    <h1 class="display-4 font-italic">{{ $article->title }}</h1>
    <p class="lead my-3">{{ $article->body }}</p>
  </div>
  @endforeach
</div>


<div class="row">
@include('layouts.categories')
  <div class="col-md-8 blog-main">

    <div class="blog-post">

      @foreach ($articles as $article)

        <h2 class="blog-post-title">{{ $article->title }}</h2>
        <p class="blog-post-meta">Published {{ $article->updated_at }} in category {{ $article->category }}</p>
        <p>{{ $article->body }}</p>
        <hr>

      @endforeach


    </div><!-- /.blog-post -->



@endsection
