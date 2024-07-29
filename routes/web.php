<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
})->name('home.index');

Route::get('blogs', function () {
    return view('blogs.index');
})->name('blogs.index');

Route::get('about', function () {
    return view('about');
})->name('about.index');

Route::get('contacts', function () {
    return view('contacts.index');
})->name('contacts.index');
