@extends('layouts.app')
@section('content')
<div class="container">

@if (session('info'))
<div class="alert alert-info">
    {{ session('info') }}
</div>
@endif

<h1>Books List</h1>

<ul>
 @foreach($books as $book)
 <li>{{ $book['title'] }}</li>
 @endforeach
 </ul>

 </div>
@endsection
