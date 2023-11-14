@extends('layouts.app')
@section('content')
    <div class="container">

        {{--        alert box message for session information       --}}
        @if (session('info'))
            <div class="alert alert-info">
                {{ session('info') }}
            </div>
        @endif

        <h1>Books List</h1>

        <div class="row flex-wrap">
            @foreach($books as $book)
                <div class="col-12 col-md-6 col-xl-3 p-3">
                    <div class="card p-3">
                        {{-- <div class="card-title">{{ $book['title'] }}</div> --}}
                        <div class="card-body">
                            <div class="row flex-wrap">
                                <div class="col-6 col-md-12">
                                    <img src="https://images.dog.ceo/breeds/weimaraner/n02092339_363.jpg"
                                         class="card-img">
                                </div>
                                <div class="col-6 col-md-12 mt-lg-2">
                                    <div class="card-title"><b>Title: </b>{{ $book['title'] }}</div>
                                    <p class="card-text">
                                       <b> Author Name:</b> BoBo
                                        <br>
                                        <b>Date: </b> {{ $book['created_at'] }}
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <a class="btn btn-outline-primary" href="{{ url("/books/detail/$book->id") }}">See More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
