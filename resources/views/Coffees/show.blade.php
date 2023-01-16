@extends('layout.main')


@section('content')
 <div class="container m-auto text-center">
    <img class="mb-4" src="{{ $coffee->image }}" alt="{{ $coffee->title }}">
    <h3>{{ $coffee->title }}</h3>
    <p>{{ $coffee->description }}</p>
    <p>List: {{ $coffee->ingredients }}</p>
 </div>
@endsection
