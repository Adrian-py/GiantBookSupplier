<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Categories;
use App\Models\Publishers;
use App\Models\BookCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Manually create data for Categories and Publishers
        Categories::create([
            "name" => "Romance",
        ]);
        Categories::create([
            "name" => "Horror",
        ]);
        Categories::create([
            "name" => "Action Adventure",
        ]);

        Publishers::create([
            "id" => 1,
            "name" => "Beforeminutes Books",
            "slug" => "beforeminutes-books",
            "address" => "Jl Cikutra 119, Jawa Barat",
            "phone" => "0361281415",
            "email" => "before-minutes@gmail.com",
            "image" => "afterhours.png",
        ]);

        Publishers::create([
            "id" => 2,
            "name" => "PT Limay Setangkai",
            "slug" => "pt-limay-setangkai",
            "address" => "Jl South Wiryopranoto 43 A-B, Dki Jakarta",
            "phone" => "0361483397",
            "email" => "limaysetangkai@gmail.com",
            "image" => "limay-setangkai.jpg",
        ]);

        Publishers::create([
            "id" => 3,
            "name" => "Kumulut Studio",
            "slug" => "kumulut-studio",
            "address" => "Jl Pangkur 10, Jawa Barat",
            "phone" => "0247623174",
            "email" => "kumulut.studio@gmail.com",
            "image" => "kumata.png",
        ]);

        // Generate data for Book using factory (faker)
        // Using the has() method to create 2 BookCategory for each Book
        Book::factory(20)->has(BookCategory::factory()->count(2))->create();
    }
}
