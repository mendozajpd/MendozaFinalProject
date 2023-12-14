<?php

use App\Http\Controllers\HomeController;
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


// Route::resource("/student", StudentController::class);

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/components', function () {
    return view('components');
})->name('components');

Route::get('/login', function () {
    return view('login');
})->name('login');