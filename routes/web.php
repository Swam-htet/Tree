<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Book\BookController;
use App\Http\Controllers\HomeController;

// home route -> to render home page
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

// about -> to render about page
Route::get('/about', [HomeController::class, 'about']);

// content route -> to render content page
Route::get('/content', [HomeController::class, 'content']);



// book route -> to render books/index page
Route::get('/books', [BookController::class, 'index']);

// book route -> to render books/add-book page
Route::get('/books/add-book', [BookController::class, 'add']);
Route::post('books/add-book', [BookController::class, 'create']);

// book route -> to render books/detail page
Route::get('/books/detail/{id}', [BookController::class, 'detail']);

// search box -> to render books/search page
Route::get('/books/search?keyword={searchParam}', [HomeController::class, 'index']);

// search book route -> to render books/search page
Route::get('/books/az-list/{searchParam}', [HomeController::class, 'index']);




Auth::routes();

