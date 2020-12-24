@extends('layouts.app')

@section('title','Nouvel article')

@section('content')

<h1>Ajouter un article</h1>

<form method="POST" action="/article/create">

    {{ csrf_field() }}

    <div class="form-group">
        <input type="text" name="title" class="form-control" placeholder="Le titre de votre article" value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <textarea name="content" class="form-control" placeholder="Le contenu de votre article" rows="10" value="{{ old('content') }}"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Créer" class="btn btn-primary">
    </div>
</form>



@endsection
