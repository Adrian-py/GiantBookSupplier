<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PublisherController;
use App\Models\Categories;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Homepage Routing
Route::get('/', [HomepageController::class, "index"]);
// Books Detail Page
Route::get('/book/{book:slug}', [HomepageController::class, "detail"]);

// Categories Page
Route::get('/category', [CategoryController::class, "index"]);
// Categories Detail Page
Route::get('/category/{category:name}', [CategoryController::class, "show"]);

// Publishers Page
Route::get("/publisher", [PublisherController::class, "index"]);
// Publishers Detail Page
Route::get("/publisher/{publisher:slug}", [PublisherController::class, "detail"]);

// Contact Page
Route::get("/contact", function() {
    return view("pages.contact", [
        "web_title" => "Contacts",
    ]);
});
