<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Atom\Atom;
use App\Http\Controllers;

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

Route::get('/', [Home::class, "index"]);

// Explore for atoms
Route::prefix("explore")->group(function () {
    Route::get("/", [Explore::class, "index"]);
});

// Atoms
Route::prefix("atom")->namespace("Atom")->group(function () {
    Route::get("/", function () {
    });

    Route::get("/{atom}", [Atom::class, "index"]);
});
