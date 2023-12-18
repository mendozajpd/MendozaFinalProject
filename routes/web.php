<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/edit_page', [HomeController::class, 'edit_page'])->name('editpage');
Route::post('/edit_page', [AboutController::class, 'store'])->name('about.store');


Route::get('/login_page', function () {
    return view('loginpage');
})->name('loginpage');

// Route::get('/edit_page', function () {
//     return view('editpage');
// })->name('editpage');

Route::post('/login', [HomeController::class, 'login'])->name('login');

Route::get('/components', function () {
    return view('components');
})->name('components');

