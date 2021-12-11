<?php

use App\Http\Controllers\MainController;
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

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');
Route::get('/services', function () {
    return view('pages.services');
})->name('services');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');
Route::get('/elements', function () {
    return view('pages.elements');
})->name('elements');

Route::get('/single-blog', function () {
    return view('single-blog');
})->name('single-blog');
// Download CV
Route::get('/download/cv',[MainController::class,'download_cv'])->name('download.cv');
