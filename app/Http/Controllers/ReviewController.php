<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function create()
    {
        $review = new Review;
        $review->review_feedback = request()->review_feedback;
        $review->book_id = request()->book_id;
        $review->save();
        return back();
    }

    public function delete($id)
    {
        $review = Review::find($id);
        $review->delete();
        return back();  
    }

}
