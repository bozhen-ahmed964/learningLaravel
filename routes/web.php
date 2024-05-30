<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('homePage');


Route::get('/about', function () {
    return view('about');
})->name('aboutPage');


Route::get('/service', function () {
    return view('service');
})->name('servicePage');


Route::get('/contact', function () {
    return view('contact');
})->name('contactPage');
