@extends('layouts.app')

@section('title',$article['title'])

@section('content')

<h2>{{ $article['title'] }}</h2>
<h6>{{ date('j F, Y', strtotime($article['created_at'])) }}</h6>

<hr/>
<p class="text-align">{!! nl2br(e($article['content'])) !!}</p>

@if(Auth::check())
<hr/>
<nav class="navbar navbar-light bg-light">
        <a href="/article/edit/{{ $article['id'] }}" class="btn btn-outline-success" type="button">Editer</a>
        <form method="POST" action="/article/delete/{{ $article['id'] }}">

            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" value="Supprimer" class="btn btn-outline-danger">
        </form>
</nav>

@endif
<hr/>
<a href="/">Retour</a>



@endsection
