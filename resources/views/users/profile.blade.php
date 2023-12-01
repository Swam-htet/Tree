@extends('layouts.app')
@section('content')
    <main class="container mt-4">
        <div class="row">
            <div class="col-md-2">
                <img src="https://i.pinimg.com/originals/da/24/e6/da24e61e38cf8b2db08b6d4b6895c11b.png" alt="Profile Image"
                    class="img-fluid rounded-circle" width="200" height="200">
            </div>
            <div class="col-md-10">
                <div class="d-flex justify-content-between align-items-center">
                    {{-- margin top ko 5 to 4 chg lk tl gayy toe mt-5 -> mt->4 --}}
                    <div class="mt-4">
                        <h2>{{ $user->name }}</h2>
                        <p>{{$user->email}}</p>
                        <p class="border border-2 border-success rounded-pill text-center">Writer</p>
                    </div>
                    <button class="btn btn-outline-dark">Edit Profile</button>
                </div>
            </div>
        </div>
    </main>
    {{-- Information --}}
    <section class="radient-custom-2">
        <div class="container py-5">
            <hr>
            <div class="row">
                <div class="col">
                    <h2>Info</h2>
                </div>
                <div class="col">
                    <h2>Books</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-4 mb-md-0">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-4 mb-md-0 px-2">
                        <div class="row">
                            <div class="col-md-4 mb-4 mt-3">
                                <div class="card">
                                    <img src="https://static.vecteezy.com/system/resources/previews/020/765/399/non_2x/default-profile-account-unknown-icon-black-silhouette-free-vector.jpg"
                                        class="card-img-top" alt="Image 2">
                                    <div class="card-body">
                                        <p class="card-text">Book</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mt-3">
                                <div class="card">
                                    <img src="https://static.vecteezy.com/system/resources/previews/020/765/399/non_2x/default-profile-account-unknown-icon-black-silhouette-free-vector.jpg"
                                        class="card-img-top" alt="Image 2">
                                    <div class="card-body">
                                        <p class="card-text">Book</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mt-3">
                                <div class="card">
                                    <img src="https://static.vecteezy.com/system/resources/previews/020/765/399/non_2x/default-profile-account-unknown-icon-black-silhouette-free-vector.jpg"
                                        class="card-img-top" alt="Image 2">
                                    <div class="card-body">
                                        <p class="card-text">Book</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4 mt-3">
                                <div class="card">
                                    <img src="https://static.vecteezy.com/system/resources/previews/020/765/399/non_2x/default-profile-account-unknown-icon-black-silhouette-free-vector.jpg"
                                        class="card-img-top" alt="Image 2">
                                    <div class="card-body">
                                        <p class="card-text">Book</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        </div>
        </div>
    </section>
@endsection
