<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');});
Route::get('about', function () {return view('about');})->name('about');
Route::get('blog', function () {return view('blog');})->name('blog');
Route::get('booking', function () {return view('booking');})->name('booking');
Route::get('contact', function () {return view('contact');})->name('contact');
Route::get('destination', function () {return view('destination');})->name('destination');
Route::get('gallery', function () {return view('gallery');})->name('gallery');
Route::get('packages', function () {return view('packages');})->name('packages');