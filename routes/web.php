<?php

use App\Http\Controllers\Book\BookController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/content', [HomeController::class, 'content']);


Route::get('/books', [BookController::class, 'index']);

Route::get('/books/add-book', [BookController::class, 'add']);
Route::post('books/add-book', [BookController::class, 'create']);

Route::get('/books/detail/{id}', [BookController::class, 'detail']);

Route::get('/books/search', [BookController::class, 'detail']);
Route::get('/books/az-list/{searchParams}', [BookController::class, 'search']);
Route::get('/books/search?keyword={searchParams}', [BookController::class, 'search']);


Route::post('reviews/add', [ReviewController::class,'create']);
Route::get('reviews/delete/{id}', [ReviewController::class,'delete']);


Route::get('/profile', [UserController::class, 'index']);

Auth::routes();
