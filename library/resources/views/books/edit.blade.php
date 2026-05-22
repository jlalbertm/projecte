
@extends('template')
@section('title','Formulari editar llibre')
@section('content')
    <h1>Editar llibre</h1>
    <form action="{{route('books.update',$book)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="title">Titul:</label>
            <input type="text" class="form-control" name="title" id="title" value="{{$book->title}}">
        </div>
        <div class="form-group">
            <label for="editorial">Editorial:</label>
            <input type="text" class="form-control" name="editorial" id="editorial" value="{{$book->editorial}}">
        </div>
        <div class="form-group">
            <label for="price">Preu:</label>
            <input type="text" class="form-control" name="price" id="price" value="{{$book->price}}">
        </div>
        <div class="form-group">
            <label for="author">Autor:</label>
            <select class="form-control" name="author_id" id="author_id">
                @foreach($authors as $author)
                    @if ($author->id==$book->author_id)
                        <option value="{{$author->id}}" selected> {{$author->name}}</option>
                        @else
                            <option value={{$author->id}}>{{$author->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <input type="submit" name="Editar" value="Editar" class="btn btn-dark btn-block">

    </form>
@endsection
