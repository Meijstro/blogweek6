@extends('master')

@section('content')
<label for="name">Filter on category:</label> <br><br>

  <a href="fcgroningen">FC Groningen</a>
  <a href="cryptovaluta">Cryptovaluta</a>
  <a href="trump">Trump</a>

<hr>


  @foreach ($articles as $article)
    <h3>{{ $article->title }}</h3>
    <p>{{ $article->created_at }}</p>
    <p>{{ $article->body }}</p>
    <p>{{ $article->category }}</p>
    <hr>
  @endforeach

<hr>
<a href="create"> Add Article</a>

@endsection
