@extends('template')
@section('title', 'Editar Post')
@section('content')
 <h1>Crear nova entrada al blog</h1>
 <form action="{{ route('posts.update',$post) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
    <label for="title">Titol:</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}" >
    </div>
    <div class="form-group">
    <label for="content">Contingut:</label>
    <input type="text" class="form-control" name="content" id="content" value="{{ $post->content }}">
    </div>
   <div class="form-group">
    <label for="user">Usuari:</label>
    <select class="form-control" name="user_id" id="user_id">
        @foreach ($users as $user)
            @if ($user->id==$post->user_id)
            <option value="{{ $user->id }}" selected>
                {{ $user->login }}
            </option>
            @else
            <option value="{{ $user->id }}">
                {{ $user->login }}
            </option>
            @endif
        @endforeach
    </select>
    </div>
 <input type="submit" name="send" value="Edita" class="btn btn-warning btn-block">
 </form>
 <form action="{{ route('posts.destroy', $post) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="button" class="btn btn-danger btn-block">Borrar</button>
</form>
@endsection
