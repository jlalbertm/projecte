

@extends('template')
@section('title','Dades del llibre')
@section('content')
    <h1>TITOL: {{$book->title}}</h1>
    <h2>EDITORIAL: {{$book->editorial}}</h2>
    <h3>PREU: {{$book->price}}</h3>
    <h3>AUTOR: {{ $book->author->name ?? 'Autor no trobat' }}</h3>
    <p>CREAT: {{$book->created_at}}</p>

@endsection
