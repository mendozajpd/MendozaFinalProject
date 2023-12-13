<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/dogs', 'DogController@index');
Route::get('/dogs/create', 'DogController@create');
Route::post('/dogs', 'DogController@store');
Route::get('/dogs/{dog}/edit', 'DogController@edit');
Route::put('/dogs/{dog}', 'DogController@update');
Route::delete('/dogs/{dog}', 'DogController@destroy');

Route::get('/', function () {
    return view('welcome');
});
