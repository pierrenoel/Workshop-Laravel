@extends('layouts.app')

@section('title','Login')

@section('content')

<h1>Nouveau compte?</h1>

<form method="POST" action="/register">

    {{ csrf_field() }}

    <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="Ton nom" value="{{ old('name') }}">
        @error('name')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Ton email" value="{{ old('email') }}">
        @error('email')<small class="text-danger">{{ $message }}</small>@enderror
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Ton mot de passe?">
        @error('password')<small class="text-danger">{{ $message }}</small>@enderror
    </div>

    <div class="form-group">
        <input type="password" name="password_confirmation" class="form-control" placeholder="Ton mot de passe encore ^^?">
    </div>

    <div class="form-group">
        <input type="submit" value="Creer mon compte" class="btn btn-primary">
    </div>
</form>

@endsection
