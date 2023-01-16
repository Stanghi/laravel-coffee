@extends('layout.main')

@section('content')
    <div class="container">

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href=" {{ route('coffees.create') }} " class="btn btn-primary my-4">Add Coffee</a>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Ingredients</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($coffees as $coffee)
                    <tr>
                        <td>
                            <img style="width: 100px" src="{{ $coffee->image }}" alt="{{ $coffee->title }}">
                        </td>
                        <td>{{ $coffee->title }}</td>
                        <td>{{ $coffee->ingredients }}</td>
                        <td>
                            <div class="d-flex justify-content-around">
                                <a href="#" title="Show" class="btn btn-outline-primary"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="#" title="Edit" class="btn btn-outline-primary"><i
                                        class="fa-solid fa-pen"></i></a>
                                <a href="#" title="Delete" class="btn btn-outline-danger"><i
                                        class="fa-solid fa-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
