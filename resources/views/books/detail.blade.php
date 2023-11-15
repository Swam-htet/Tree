@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Book Detail Page</h1>

        {{-- UI d mhr sa p chg htr tl 😼🤞 --}}

        <div class="card mb-3 mt-4" style="max-width:auto;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://images.dog.ceo/breeds/weimaraner/n02092339_363.jpg" class="img-fluid rounded-start"
                        alt="..." width="450px" height="460px" height="450px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-text"><b>Book Title:</b> {{ $books->title }} </h3>
                        <p class="card-text"><b> Author Name:</b> BoBo,
                            <b>Page Number:</b> {{ $books->page }}
                            <br>
                            <b>Date: </b> {{ $books->release_date }}
                        </p>
                        <h2 class="card-text mt-4">
                            Description
                        </h2>
                        <p class="card-text">{{ $books->description }}</p>
                        <h5 class="card-text mt-4">
                            Rating ⭐⭐⭐⭐
                        </h5>
                        <p class="card-text">Downloak Here:
                            <a href="#"> {{ $books->download_link }} </a>
                            {{-- ⭕need to change above url to dynamically --}}
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <ul class="list-group mt-4">
            <li class="list-group-item list-group-item-primary">
                Leave a review
            </li>
        </ul>

        <li class="list-group-item mt-4">
            @foreach ($books->reviews as $review)
                <a href="{{ url("reviews/delete/$review->id") }}" class="btn-close float-end"></a>
                <b class="text-success">
                    Bobo
                </b>,
                <small class="text-muted">
                    {{ $review->created_at->diffForHumans() }}
                </small>
                <p class="card-text">
                    {{ $review->review_feedback }}
                </p>
                <hr>
            @endforeach
        </li>
        <form action="{{ url('reviews/add') }}" method="POST" class="mt-2">
            @csrf
            <input type="hidden" name="book_id" value="{{ $books->id }}">

            <textarea name="review_feedback" class="form-control mb-2" placeholder="Enter review here"></textarea>
            <button class="btn btn-info">Add Review</button>
        </form>
    </div>
@endsection
