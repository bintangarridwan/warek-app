<?php

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
        "title" => 'Home',
        "actived" => ''
    ]);
});
Route::get("/about", function(){
    return view('about', [
        "title" => 'About',
        "actived" => 'about'
    ]);
});
Route::get("/contact", function(){
    return view('contact', [
        "title" => 'Contacts',
        "actived" => 'contact'
    ]);
});
Route::get("/menu", function(){
    return view('menu', [
        "title" => 'Menus',
        "actived" => 'menu'
    ]);
});
Route::get("/cart", function(){
    return view('cart', [
        "title" => 'Carts',
        "actived" => 'cart'
    ]);
});