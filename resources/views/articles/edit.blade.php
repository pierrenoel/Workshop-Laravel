@extends('layouts.app')

@section('title',$article['title'])

@section('content')

<h1>Editer l'article</h1>

<form method="POST" action="/article/edit/{{ $article['id'] }}">

    {{ csrf_field() }}
    {{ method_field('PUT') }}

    <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $article['title'] }}">
    </div>
    <div class="form-group">
        <textarea name="content" class="form-control" placeholder="Le contenu de votre article" rows="10">{{ $article['content'] }}
        </textarea>

    </div>
    <div class="form-group">
        <input type="submit" value="Editer" class="btn btn-primary">
    </div>
</form>

@endsection
