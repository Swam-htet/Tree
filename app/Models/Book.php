<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    public function genre()
    {
        //-----------------------One books have one genre:------------------------
        return $this->belongsTo('App\Models\Genre');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

}
