@extends('master')

@section('content')
<label for="name">Filter on category:</label> <br><br>
<select class="dropdown" name="category_selection" onchange="">
  <option value="">All</option>
  <option value="fcgroningen">FC Groningen</option>
  <option value="cryptovaluta">Cryptovaluta</option>
  <option value="trump">Trump</option>
</select>
<hr>


  @foreach ($articles as $article)
    <h3>{{ $article->title }}</h3>
    <p>{{ $article->body }}</p>
    <p>{{ $article->category }}</p>
    <hr>
  @endforeach

<hr>
<a href="create"> Add Article</a>

@endsection
