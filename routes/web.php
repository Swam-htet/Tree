<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Book\BookController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/', [BookController::class, 'index']);

Route::get('/books', [BookController::class, 'index']);

Route::get('/books/add-book', [BookController::class, 'add']);

Route::post('books/add-book', [BookController::class, 'create']);

Route::get('/books/detail/{id}', [BookController::class, 'detail']);




Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
