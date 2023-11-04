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

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

// Why box12 page
Route::get('/why-box', function () {
    return view('why-box12');
});

// Group Exercise page
Route::get('/group-exercise', function () {
    return view('group-exercise');
});

// Join page
Route::get('/join', function () {
    return view('join');
});

// Latest News page
Route::get('/news', function () {
    return view('news');
});

// Contact page
Route::get('/contact', function () {
    return view('contact');
});

// Operators page
Route::get('/operators', function () {
    return view('operators');
});