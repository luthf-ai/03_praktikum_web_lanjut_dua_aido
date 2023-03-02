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
}) -> name('home');

Route::get('/product', [ProductController::class, 'index']) -> name('product');

Route::get('/news/{id}', [NewsController::class, 'index']) -> name('news');

Route::get('/program', [ProgramController::class, 'index']) -> name('program');

Route::get('/about', function () {
    return view('about-us');
}) -> name('about');

//resource only contact-us
Route::resource('contact-us', ContactController::class) -> only(['index', 'store']) -> names([
    'index' => 'contact',
    'store' => 'contact.store'
]);




