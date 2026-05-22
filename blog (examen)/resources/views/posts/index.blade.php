@extends('template')
@section('title','Llista de post')
@section('content')
    <h1>List of posts</h1>
    <ul>
        @forelse ($posts as $post )
            <li>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}, escrit per:
                    {{$post->user->login}}
                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="button" class="btn btn-danger">Borrar</button>
                </form>
            </li>

        @empty
            <li>No hi han post</li>
        @endforelse
    </ul>
{{ $posts->links() }}
@endsection
