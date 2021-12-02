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
    return view('index');
});

// Explore for atoms
Route::prefix("explore")->group(function () {
    Route::get("/", function () {
    });

    Route::get("/{param}/{query}", function ($param, $query) {
        return view("explore.explore", [
            "param" => $param,
            "query" => $query
        ]);
    });
});

// Atoms
Route::prefix("atom")->namespace("Admin")->group(function () {
    Route::get("/", function () {
    });

    Route::get("/{atom}", "Atom@index");
});
