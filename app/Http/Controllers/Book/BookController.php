<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    //
    public function index()
    {
        $data = Book::all();

        return view('books.index', [
            'books' => $data
        ]);
    }

    public function add()
    {
        $genre_name = Genre::all();
        return view('books.add-book', [
            'genres' => $genre_name
        ]);
    }

    public function create()
    {
        $validator = Validator(request()->all(), [
            'title' => 'required',
            'page' => 'required',
            'link' => 'required',
            'genre_id' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $newBook = new Book();
        $newBook->title = request()->title;
        $newBook->description = request()->description;
        $newBook->page = request()->page;
        $newBook->publisher = request()->publisher;
        $newBook->release_date = request()->release_date;
        $newBook->rating = request()->rating;
        $newBook->genre_id = request()->genre_id;
        $newBook->download_link = request()->link;
        $newBook->save();
        return redirect('/books')->with('info', 'Book Added');
    }

    public function detail($id)
    {
        $data = Book::find($id);
        return view('books.detail', ['books' => $data]);
    }

}
