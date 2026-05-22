
@extends('template')
@section('title','Llista de llibres')
@section('content')
    <h1>LLlibre llegint de la bb.dd</h1>
    <ul>
        @forelse($books as $book)
            <li><a href="{{ route('books.show',$book)}}">{{$book->title}},
                ({{$book->author->name}}),

            </a>

            <form action="{{ route('books.destroy',$book)}}" method="POST">
                @method('DELETE')
                @csrf
                <button>Borrar</button>
            </form>
            <form action="{{ route('books.edit', $book) }}">
                @csrf
                <button>Update</button>
            </form>
            </li>
        @empty
                <li>No hi han llibres que mostrar</li>
        @endforelse
    </ul>
    {{$books->links()}}
@endsection
