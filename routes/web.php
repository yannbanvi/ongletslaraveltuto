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
    return view('welcome');
});


Route::controller(\App\Http\Controllers\OngletController::class)
    ->as("onglets.")
    ->prefix("/onglets")
    ->group(function(){

        Route::get("/", "index")->name("index");
        Route::get("/agents", "index")->name("agents");
        Route::get("/responsables", "index")->name("responsables");
        Route::get("/membres", "index")->name("membres");
    });
