@extends('template')
@section('title', 'New LLanguage')
@section('content')
 <h1>Create new languager</h1>
 <form action="{{ route('language.store') }}" method="POST">
    @csrf
    <div class="form-group">
    <label for="title">Name:</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ old('name')}}">
    @if ($errors->has('name'))
        <div class="text-danger">
            {{ $errors->first('name') }}
        </div>
    @endif

 <input type="submit" name="send" value="Send" class="btn btn-success btn-block">
 </form>
@endsection
