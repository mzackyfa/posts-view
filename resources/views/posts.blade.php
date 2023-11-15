@extends('layouts.main')

@section('container')
    @foreach ($posts as $posts)
        <article class"mb-4">
            <h2>{{ $posts["title"] }}</h2>
            <h5>By : {{ $posts["author"] }}</h5>
            <p>{{ $posts["body"] }}</p>
        </article>
    @endforeach
@endsection
