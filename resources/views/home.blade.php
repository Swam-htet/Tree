@extends('layouts.app')

@section('content')
    <div class="container text-center w-70 w-md-50" style="margin-top: 150px">

        <div class="d-flex w-100 justify-content-center align-content-center">
            <div class="d-block me-2"  style="margin-top: 8px">
                <i class="fa-solid fa-tree fa-2xl"></i>
            </div>
            <h1 class="d-block">Tree</h1>
        </div>
        <div class="input-group my-3">
            <input class="form-control" type="text" placeholder="Enter Book Name...">
            <button class="btn btn-secondary">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
        <p>Tree.com - Just a better place to learn new things for free</p>

    </div>
@endsection
