<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Categories;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $books_list = Book::all();

        return view("pages.books", [
            "web_title" => "Homepage",
            "page_title" => "Books List",
            "books_list" => $books_list
        ]);
    }

    public function detail(Book $book){
        return view("pages.detail", [
            "web_title" => "Book | " . $book->title,
            "book" => $book,
        ]);
    }
}
