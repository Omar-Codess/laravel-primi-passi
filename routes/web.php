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
    $data = [
        "pageTitle" => "La mia prima pagina con Laravel",
        "description" => "lorem ipsum dolor",
        "menu" => [
            "Info",
            "About us",
            "Learn more"
        ],
    ];
    return view('home', $data);
})->name("home");
