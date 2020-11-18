<?php

use App\Http\Controllers\EntryController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'GuestController@index');
Route::get('/user/{user}', 'UserController@show')->name('authorshow');

Route::get('/myentries','EntryController@index')->name('myentryindex');
Route::get('/entries/create','EntryController@create')->name('entrycreate');
Route::get('/myentries/{entri}','EntryController@edit')->name('entryedit');
Route::patch('/entries/{entri}','EntryController@update')->name('entryupdate');
Route::post('/entries','EntryController@store')->name('entrystore');
Route::get('/entries/{entri}','EntryController@show')->name('entryshow');


//Route::get('/')


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
