@extends('layouts.app')

@section('title','Login')

@section('content')

<h1>Se connecter</h1>

<form method="POST" action="/login">

    {{ csrf_field() }}

    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email">
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password">
    </div>

    <div class="form-group">
        <input type="submit" value="Login" class="btn btn-primary">
    </div>
</form>

<a href="/register">Pas de compte?</a>


@endsection
