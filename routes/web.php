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
    $name = "Andrea";
    return view('home', compact('name'));
});

Route::get('/coffeePageName', function () {
    $data = [
        "title" => "Coffee Types",
        "description" => "Here is a list of some types of coffee.",
        "types" => [
            "Espresso", "Ristretto", "Decaffeinato", "Macchiato", "Corretto", "Cappuccino", "Mocaccino"
        ],
    ];
    return view('coffee', $data);
})->name("coffeeRef");

Route::get('/fishingPageName', function () {
    $data = [
        "title" => "Fishing Types",
        "description" => "Here is a list of some types of fishing.",
        "types" => [
            "Carpfishing", "Spinning", "Bait casting", "Fly fishing", "Angling"
        ],
    ];
    return view('fishing', $data);
})->name("fishingRef");

Route::get('/teaPageName', function () {
    $data = [
        "title" => "Tea Types",
        "description" => "Here is a list of some types of tea.",
        "types" => [
            "Black Tea", "Green Tea", "Herbal Tea", "White Tea", "Oolong Tea", "Rooibos Tea"
        ],
    ];
    return view('tea', $data);
})->name("teaRef");
