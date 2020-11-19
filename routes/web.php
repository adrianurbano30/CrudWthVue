<?php

use App\Http\Controllers\EntryController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'GuestController@index');
Route::get('/@/{user}', 'UserController@show')->name('authorshow');

Route::get('/myentries','EntryController@index')->name('myentryindex')->middleware('auth');
Route::get('/entries/create','EntryController@create')->name('entrycreate')->middleware('auth');

Route::get('/myentries/{entri}','EntryController@edit')->name('entryedit')->middleware('auth');
Route::patch('/entries/{entri}','EntryController@update')->name('entryupdate')->middleware('auth');

Route::post('/entries','EntryController@store')->name('entrystore')->middleware('auth');

Route::get('/entries/{entryBySlug}','EntryController@show')->name('entryshow');


//Route::get('/')


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
