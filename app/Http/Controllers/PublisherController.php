<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Categories;
use App\Models\Publishers;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    //
    public function index(){
        return view("pages.publisher", [
            "web_title" => "Publishers",
            "page_title" => "Publishers",
            "publishers" => Publishers::all(),
        ]);
    }

    public function detail(Publishers $publisher){
        return view("pages.publisher-detail", [
            "web_title" => "Publishers | " . $publisher->name,
            "page_title" => $publisher->name,
            "publisher" => $publisher,
            "books_list" => Book::latest()->whereHas("publishers", function($query) use ($publisher){
                $query->where("publishers_id", "like", $publisher->id);
            })->get(),
        ]);
    }
}
