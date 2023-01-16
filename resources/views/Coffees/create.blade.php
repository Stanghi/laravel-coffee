@extends('layouts.main')

@section('content')
        <div class="container">

            <form action=" {{ route('coffees.store') }} " method="POST">
                @csrf

                {{-- ? Title --}}
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title"
                        class="form-control"
                        id="title" placeholder="inserire titolo" value=" {{old('title')}} ">
                </div>

                {{-- ? image --}}
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" name="image"
                        class="form-control"
                        id="image" placeholder="inserire la URL dell\'immagine" value=" {{old('image')}} ">
                </div>

                {{-- ? ingredients --}}
                <div class="mb-3">
                    <label for="image" class="form-label">ingredients</label>
                    <input type="text" name="ingredients"
                        class="form-control"
                        id="ingredients" placeholder="inserire ingredienti" value=" {{old('ingredients')}} ">
                </div>

                {{-- ? description --}}
                <div class="mb-3">
                    <label for="image" class="form-label">description</label>
                    <input type="text" name="description"
                        class="form-control"
                        id="description" placeholder="descrizione del caffè" value=" {{old('description')}} ">
                </div>

                <button class="btn btn-primary" type="submit">Create</button>

            </form>
        </div>
    </div>
@endsection
