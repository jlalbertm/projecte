@extends('template')
@section('title','Mostra Post')
@section('content')
    <h1>Entrada del blog</h1>
    <h2>Titol:{{$post->title}}</h2>
    <h3>Escrit per: {{$post->user->login}}</h3>
    <p>Contigut: {{$post->content}}</p>
    <p>Creació: {{$post->created_at}}</p>
    <p>Editat: {{$post->updated_at}}</p>
    <form action="{{ route('posts.edit', $post) }}" method="GET">

        @csrf
        <button type="submit" class="btn btn-warning">Editar</button>
    </form>

    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Borrar</button>
    </form>
@endsection
