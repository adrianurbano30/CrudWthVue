<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', function () {
    return view('inicio');
})->middleware('auth');



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
