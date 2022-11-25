<?php

namespace App\Http\Controllers;


use App\Models\Book;
use App\Models\Categories;
use App\Models\BookCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        return view("pages.categories", [
            "web_title" => "Categories",
            "categories" => Categories::latest()->get(),
            "categories_list" => Categories::get(),
        ]);
    }

    public function show(Categories $category){
        return view("pages.books", [
            "web_title" => "Categories | " . $category->name,
            "page_title" => $category->name . " Books",
            "books_list" => Book::latest()->whereHas("bookCategory", function($query) use ($category){
                $query->where("categories_id", "like", $category->id);
            })->get(),
        ]);
    }
}
