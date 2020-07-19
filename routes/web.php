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


//Home Page
Route::get('/', function () {
    return view('homepage');
});

//Note pages
Route::get('/notes', 'NotesController@notes');
Route::get('/notes/new', 'NotesController@index');
Route::get('/notes/{id}/delete', 'NotesController@delete');
Route::post('/notes/store', 'NotesController@store');
