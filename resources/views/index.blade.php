@extends('layout.master')

@section('content')
<hr>

  @foreach ($articles as $article)
    <p>{{ $article->title }}</p>
    <p>{{ $article->body }}</p>


<hr>
<a href="create"> Add Article</a>

@endsection
