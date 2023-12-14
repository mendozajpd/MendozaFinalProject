<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginRegisterController;
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

Route::get('/login_page', function () {
    return view('loginpage');
})->name('loginpage');

Route::post('/login', [HomeController::class,'login'])->name('login');

Route::get('/components', function () {
    return view('components');
})->name('components');

