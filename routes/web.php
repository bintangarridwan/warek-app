<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" => 'Home'
    ]);
});
Route::get("/about", function(){
    return view('about', [
        "title" => 'About'
    ]);
});
Route::get("/contact", function(){
    return view('contact', [
        "title" => 'Contacts'
    ]);
});

Route::get('/menu', function(){
    return view('menu', [
        'title' => 'menu'
    ]);
});

Route::get("/category", [CategoryController::class, 'index']);

Route::get("/cart", function(){
    return view('cart', [
        "title" => 'Carts'
    ]);
});