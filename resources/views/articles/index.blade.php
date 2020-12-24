@extends('layouts.app')

@section('title','Tous les articles')

@section('content')

    @foreach($articles as $article)
    <h2><a href="/article/show/{{$article['id']}}">{{ $article['title'] }}</a></h2>
    <h6>{{ date('j F, Y', strtotime($article['created_at'])) }}</h6>

    <hr/>
    @endforeach

@endsection
