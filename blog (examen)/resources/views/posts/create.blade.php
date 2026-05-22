@extends('template')
@section('title', 'New Post')
@section('content')
 <h1>Crear nova entrada al blog</h1>
 <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="form-group">
    <label for="title">Titol:</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ old('title')}}">
    @if ($errors->has('title'))
        <div class="text-danger">
            {{ $errors->first('title') }}
        </div>
    @endif

    </div>
    <div class="form-group">
    <label for="content">Contingut:</label>
    <textarea class="form-control" name="content" id="content" placeholder="{{ old('content')}}"></textarea>
    @if ($errors->has('content'))
        <div class="text-danger">
            {{ $errors->first('content') }}
        </div>
    @endif
    </div>
   <div class="form-group">
    <label for="user">Usuari:</label>
    <select class="form-control" name="user" id="user" @selected(old('user'))>
        @foreach ($users as $user)
            <option value="{{ $user->id }}">
                {{ $user->login }}
        </option>
        @endforeach
    </select>
    </div>
 <input type="submit" name="send" value="Send" class="btn btn-success btn-block">
 </form>
@endsection
