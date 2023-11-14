<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;
use App\Models\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Insert into the genre type
        $genre_name =
        [
            "Classics",
            "Historical",
            "Romance",
            "Thriller",
            "Horror",
            "Fantasy",
            "Comedy",
            "Law",
            "Supernatural",
            "Politics",
            "Sci-Fi",
            "Technology",
            "Travel",
            "Drama",
            "Business & Investing",
            "Food",
            "Art",
            "Biography",
            "Crime & Mystery",
            "Action",
            "Adventure",
            "Motivation"
        ];

        foreach ($genre_name as $name) {
            Genre::create(["name" => $name]);
        }

        Book::factory()->count(20)->create();
    }
}
