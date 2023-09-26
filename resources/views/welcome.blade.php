@extends('layouts.app')

@section('content')
    <nav>
        <a href="{{route('home', null, false)}}">Home</a>
        <a href="{{route('articles.index', null, false)}}">Articles</a>
        <a href="{{route('pages.about', null, false)}}">About</a>
    </nav>
    <h1>Home page</h1>
@endsection
