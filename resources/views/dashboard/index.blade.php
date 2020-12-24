@extends('layouts.app')

@section('title','Dashboard')

@section('content')

<h1>Bienvenue {{ auth()->user()->name }}</h1>

<a href="/article/create">Créer un nouvel article</a>

@endsection
