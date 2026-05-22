
@extends('template')
@section('title','Formulari nou llibre')
@section('content')
    <h1>Crear llibre</h1>
    {{--
    @if ($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    --}}
    <form action="{{route('books.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titul:</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ old('title')}}">

            @if($errors->has('title'))
                <div class="text-danger">{{$errors->first('title')}}</div>
            @endif

        </div>
        <div class="form-group">
            <label for="editorial">Editorial:</label>

            <input type="text" class="form-control" name="editorial" id="editorial" value="{{ old('editorial ')}}">
                @if($errors->has('editorial'))
                <div class="text-danger">{{$errors->first('editorial')}}</div>
            @endif

        </div>
        <div class="form-group">
            <label for="price">Preu:</label>
            <input type="text" class="form-control" name="price" id="price" value="{{ old('price')}}">

            @if($errors->has('price'))
                <div class="text-danger">{{$errors->first('price')}}</div>
            @endif


        </div>
        <div class="form-group">
            <label for="author">Autor:</label>
            <select class="form-control" name="author" id="author">
                @foreach($authors as $author)
                    <option value={{$author->id}}>{{$author->name}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" name="Crear" value="Crear" class="btn btn-dark btn-block">

    </form>
@endsection
