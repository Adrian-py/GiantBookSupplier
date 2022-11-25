<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
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
            "publishers_id" => mt_rand(1, 3),
            "title" => $this->faker->words(mt_rand(2,4), true),
            "slug" => $this->faker->slug(),
            "author" => $this->faker->name(),
            "year" => $this->faker->year(),
            "synopsis" => $this->faker->paragraph(mt_rand(1,2)),
            "image" => "book_cover.jpg",
        ];
    }
}
