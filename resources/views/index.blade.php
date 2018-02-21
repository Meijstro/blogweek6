@extends('master')

@section('content')
<hr>

  @foreach ($articles as $article)
    <p>{{ $article->title }}</p>
    <p>{{ $article->body }}</p>
  @endforeach

<hr>
<a href="create"> Add Article</a>

@endsection
