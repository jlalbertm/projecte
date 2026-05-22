@extends('template')
@section('title','Llista de llengües')
@section('content')
    <h1>List of language</h1>
    <ul>
        @forelse ($languages as $language )
            <li>
                {{$language->name}}
            </li>

        @empty
            <li>No hi han llengües</li>
        @endforelse
    </ul>
{{ $languages->links() }}
@endsection
