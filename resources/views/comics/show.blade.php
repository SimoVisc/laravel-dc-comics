@extends('layouts.app');

@section('page-title')
    {{ $comic->title }}
@endsection

@section('page-content')
    <h1>{{ $comic->title }}</h1>
    <h3>{{ $comic->type }}</h3>
    <p>{{ $comic->description }}</p>
    <h5>{{ $comic->price }}€</h5>
@endsection
