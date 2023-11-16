@extends('layouts.app')
@section('content')
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-warning">
                <o>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </o>
            </div>
        @endif

        <form method="post">
            @csrf
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="mb-3">
                <label>Page Number</label>
                <input type="number" name="page" class="form-control">
            </div>
            <div class="mb-3">
                <label>Publisher</label>
                <input type="text" name="publisher" class="form-control">
            </div>
            <div class="mb-3">
                <label for="rating">Rating:</label>
                {{-- Change the rating input to minimum and maximum --}}
                <input type="number" name="rating" min="1" max="5" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Release Date</label>
                <input type="date" name="release_date" class="form-control">
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control mb-2"></textarea>
            </div>
            <div class="mb-3">
                <label>Genre</label>
                <select class="form-select" name="genre_id">
                    @foreach ($genres as $genre)
                        <option value="{{ $genre['id'] }}">
                            {{ $genre->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label>Download Link</label>
                <input type="text" name="link" class="form-control">
            </div>
            <input type="submit" value="Add Book" class="btn btn-outline-success">
        </form>
    </div>
@endsection
