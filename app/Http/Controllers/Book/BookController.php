<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    //
    public function index()
    {
        return view("books/add-book");
    }

    public function add(Request $request)
    {
        $newBook = new Book();
        $newBook->title = "Testing Book";
        $newBook->page  = 1;
        $newBook->download_link = "www.YouTube.com";
        // $newBook->released_date = date("Y-m-d H:i:s");
        $newBook->save();
        redirect("/");
    }
}

