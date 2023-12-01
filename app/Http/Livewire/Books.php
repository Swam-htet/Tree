<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book;

class Books extends Component
{
    public $books;
    public $searchBook = '';

    public function render()
    {

        if(empty($this->books)){
            $this->books = Book::WHERE('title',$this->searchBook)->get();
        } else {
           $this->books=Book::WHERE('title','like','%'.$this->searchBook.'%')->get();
        }
       
        return view('livewire.books');
    }
}
