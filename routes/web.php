<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/product', [ProductController::class, 'index']);

Route::get('/news/{id}', [NewsController::class, 'index']);

Route::get('/program', [ProgramController::class, 'index']);

Route::get('/about', function () {
    return view('about-us');
});

//resource only contact-us
Route::resource('contact-us', ContactController::class) -> only(['index', 'store']);




