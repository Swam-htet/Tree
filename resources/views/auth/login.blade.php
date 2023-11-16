@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                    <div class="card-body">
                        <div class="row justify-content-evenly">

                            <div class="col-lg-5 col-md-11 ">
                                <div class="d-flex  justify-content-center " style="margin-top: 50px">
                                    <div class="d-block me-2"  style="margin-top: 7px">
                                        <i class="fa-solid fa-tree fa-2xl"></i>
                                    </div>
                                    <h1>Tree</h1>

                                </div>
                            </div>

                            <div class="col-lg-5 col-md-11">

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                        <input id="email " type="email" class="my-3 form-control @error('email') is-invalid @enderror"
                                               name="email" placeholder="Email address" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror


                                        <input id="password" type="password" class="my-3 form-control @error('password') is-invalid @enderror"
                                               name="password" placeholder="Password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                    <button type="submit" class="form-control btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
