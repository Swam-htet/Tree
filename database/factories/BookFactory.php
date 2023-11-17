<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->text,
            'publisher' => $this->faker->name,
            'release_date' => $this->faker->date('Y-m-d h:m:s'),
            'page' => rand(100, 200),
            'rating' => rand(1, 5),
            'download_link' => 'https://' . $this->faker->word . '-' . $this->faker->word . '.com',
            'genre_id' => rand(1, count(Genre::all())),
            'user_id' => rand(1,5),
        ];
    }
}
