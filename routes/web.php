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








Route::get('/', function () {
    return view('landing.index');
})->name('home');

Route::get('/single', function () {
    return view('landing.single');
})->name('single');

Route::get('/blog', function () {
    return view('landing.blog');
})->name('blog');

Route::get('/test', function () {
    return view('landing.test');
});
Route::get('/faq', function () {
    return view('landing.faq');
});
Route::get('/contact', function () {
    return view('landing.contact');
});
Route::get('/announce', function () {
    return view('landing.announce');
})->name('announce');
