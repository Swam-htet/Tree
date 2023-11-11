<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
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
        return view('books.add-book');
    }

    public function create()
    {
        $validator = Validator(request()->all(), [
            'title' => 'required',
            'page' => 'required',
            'link' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }


        $newBook = new Book();
        $newBook->title = request()->title;
        $newBook->page = request()->page;
        $newBook->download_link = request()->link;
        $newBook->save();

        return redirect('/books')->with('info', 'Book Added');
    }
}
