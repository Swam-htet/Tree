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
    public function __construct()
    {
        $this->middleware('auth')->except(['index','home','detail','search']);
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $books = Book::WHERE(function ($query) use ($keyword) {
            $query->WHERE('title', 'like', "%$keyword%")
                ->orWHERE('title', 'like', "%$keyword%");
        })->get();
        return view('books/search', compact('books', 'keyword'));
    }

    public function index()
    {
        $data = Book::latest()->paginate(8);

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

    public function create(Request $request)
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
        $newBook->page = request()->page;
        $newBook->description = request()->description;
        $newBook->publisher = request()->publisher;
        $newBook->release_date = request()->release_date;
        $newBook->rating = request()->rating;
        $newBook->genre_id = request()->genre_id;
        $newBook->download_link = request()->link;
        $newBook->user_id = auth()->user()->id;
        if(request()->hasFile('photo')){
            $originalName=request()->file('photo')->getClientOriginalName();
            $imgPath=request()->file('photo')->storeAs('public/images',$originalName);
            $newBook->photo = $imgPath;
        }
        $newBook->save();
        return redirect('/books')->with('info', 'Book Added');
    }

    public function detail($id)
    {
        $data = Book::find($id);
        return view('books.detail', ['books' => $data]);
    }

}
