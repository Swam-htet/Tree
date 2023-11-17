@extends('layouts.app')
@section('content')
    <div class="container">
        {{-- New Added Gay Arrow < --}}
        <ol class="breadcrumb">
            <a class="breadcrumb-item active ms-1" href="{{ url('/books') }}"><i
                    class="fa-solid fa-chevron-left fa-xl"></i></a>
        </ol>

        {{-- Get alert when deleted with 2 seconds --}}
        @if (session('info'))
            <div class="alert alert-info" id="info">
                {{ session('info') }}
            </div>
            <script>
                setTimeout(function() {
                    document.getElementById('info').style.display = 'none';
                }, 2000);
            </script>
        @endif

        {{-- UI d mhr sa p chg htr tl 😼🤞 --}}

        <div class="card mb-3 mt-4" style="max-width:auto;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://images.dog.ceo/breeds/weimaraner/n02092339_363.jpg" class="img-fluid rounded-start"
                        alt="..." width="450px" height="460px" height="450px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-text"><b>Title:</b> {{ $books->title }} </h2>
                        <p class="card-text"><b>By </b> {{ $books->publisher }}
                            <br>
                            {{ $books->page }}<b> Pages</b>
                            <br>
                            <b>Released Date: </b> {{ $books->release_date }}

                        </p>
                        <h5 class="card-text mt-4">
                            Description
                        </h5>
                        <p class="card-text">{{ $books->description }}</p>
                        <h5 class="card-text mt-4">
                            Rating:
                            {{-- Adjust Bobo APP's Star base on rating input --}}
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $books->rating)
                                    ⭐
                                @else
                                    ✰
                                @endif
                            @endfor
                        </h5>
                        <p class="card-text">
                            <a class="btn btn-outline-success mt-4" href="#" role="button">Download</a>
                            {{-- ⭕need to change above url to dynamically --}}
                        </p>
                    </div>

                </div>
            </div>
        </div>

        {{-- Think this would suit --}}
        <ul class="list-group mt-4">
            <li class="list-group-item list-group-item-primary text-center">
                <h5>Reviews</h5>
            </li>
        </ul>

        <li class="list-group-item mt-4">
            @foreach ($books->reviews as $review)
                <a href="{{ url("reviews/delete/$review->id") }}" class="btn-close float-end"></a>
                <b class="text-successc">
                    {{$review->user->name}}
                </b>
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
            {{-- Also change placeholder of APP's --}}
            <textarea name="review_feedback" class="form-control mb-2" placeholder="Leave a review"></textarea>
            <button class="btn btn-outline-secondary">Add Review</button>
        </form>
    </div>
@endsection
