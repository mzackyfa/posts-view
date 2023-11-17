@extends('layouts.main')

@section('container')
    <h1>{{ $name }} </h1>
    <h4>{{ $welcome }}</h4>
    <img src="img/{{ $image }}" alt="{{ $name }}"  width="200" class="img-thumbnail rounded-circle ">
@endsection
