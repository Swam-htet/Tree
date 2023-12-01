@extends('layouts.app')

@section('content')
{{-- @livewireStyles() --}}
    <div class="container" style="margin-top: 15%">
        <div class="d-flex w-100 justify-content-center align-content-center">
            <div class="d-block me-2" style="margin-top: 9px">
                <i class="fa-solid fa-tree fa-2xl"></i>
            </div>
            <h1 class="d-block">Tree</h1>
        </div>
        {{-- Move "search form" to "views/livewire/books.blad.php --}}
        <div>
            <form method="get" action="{{ url('books/search') }}">
                <div class="d-flex">
                    <div class="col-12 col-md-5" style="margin:0 auto">
                        <div class="input-group w-100">
                            <input class="form-control" wire:model="searchBook" name="keyword" type="text"
                                placeholder="Search here...">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        {{-- @livewire('books') --}}

        <div class="text-center mt-3">
            <p>Tree.com - Just a better place to learn new things for free</p>
        </div>
    </div>
    {{-- @livewireScripts() --}}
@endsection

