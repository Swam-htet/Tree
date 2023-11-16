@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row justify-content-center" >
        <div class="col-lg-5 col-md-8" >
            <div class="card" >
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body" >

                    <form method="POST" action="{{ route('register') }}" >
                        @csrf

                        <div class="form-floating mb-3">
                            <input id="floatingInput name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <label for="floatingInput">Name</label>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input id="floatingInput email" type="text" class="form-control @error('email') is-invalid @enderror"
                                   name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                            <label for="floatingInput">Email address</label>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                   name="password" placeholder="Password" required autocomplete="new-password">
                            <label for="floatingPassword">Password</label>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password"
                                   name="password_confirmation" required autocomplete="new-password">
                            <label for="floatingPassword">Confirm Password</label>
                        </div>

                        <button type="submit" class="form-control btn btn-primary">
                            {{ __('Register') }}
                        </button>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
