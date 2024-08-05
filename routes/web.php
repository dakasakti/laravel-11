<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
})->name('home.index');

Route::get('blogs', function () {
    $blogs = Blog::latest('published_at')->paginate(5);
    return view('blogs.index', compact('blogs'));
})->name('blogs.index');

Route::get('blogs/{blog:slug}', function (Blog $blog) {
    return view('blogs.show', compact('blog'));
})->name('blogs.show');

Route::get('about', function () {
    return view('about');
})->name('about.index');

Route::get('contacts', function () {
    return view('contacts.index');
})->name('contacts.index');
