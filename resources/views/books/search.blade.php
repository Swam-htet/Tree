@extends('layouts.app')
@section('content')
    <div class="container">

        {{-- Show the message if u find the empty book's name --}}
        <div class="row flex-wrap">
            @if ($books->isEmpty())
            <div class="col-12">
                <div class="alert alert-warning" role="alert">
                    No results found.
                </div>
            </div>
        @else
            @foreach ($books as $book)
                    <div class="col-12 col-md-6 col-xl-3 p-3">
                        <div class="card p-3">
                            <div class="card-body">
                                <div class="row flex-wrap">
                                    <div class="col-6 col-md-12">
                                        <img src="{{ asset('storage/images/' . basename($book->photo)) }}" alt="Book Photo" width="240px" height="240px">
                                    </div>
                                    <div class="col-6 col-md-12 mt-lg-2">
                                        <div class="card-title"><b>Title: </b>{{ $book->title }}</div>
                                        <span class="card-text">
                                            <b>Genre:</b>
                                            <small class="text-secondary">{{ $book->genre->name }} </small>
                                            <br>
                                            <b> Publisher Name:</b>
                                            <small class="text-secondary"> {{ $book->publisher }} </small>
                                            <br>
                                            <b>Released Date:</b>
                                            <small
                                                class="text-secondary">{{ date('Y', strtotime($book->release_date)) }}</small>
                                            <br>
                                            <b>Date: </b>
                                            <small class="text-secondary">
                                                {{ $book->created_at->diffForHumans() }} </small>
                                            <br>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-outline-secondary" href="{{ url("/books/detail/$book->id") }}">See
                                    More</a>
                            </div>
                        </div>
                    </div>
            @endforeach
            @endif
        </div>
    @endsection
