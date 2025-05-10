<?php

use Illuminate\Support\Facades\Route;

// Route côté client

Route::get('/', function () {return view('client.pages.index');})->name('accueil');
Route::get('/a-propos', function(){ return view('client.pages.a-propos');})->name('a-propos');
Route::get('/services', function () {return view('client.pages.services');})->name('services');
Route::get('/packages', function () {return view('client.pages.packages');})->name('packages');

Route::get('/destination', function () {return view('client.pages.destination');})->name('destination');
Route::get('/tour', function () {return view('client.pages.tours');})->name('tour');
Route::get('/booking', function () {return view('client.pages.booking');})->name('booking');
Route::get('/gallery', function () {return view('client.pages.gallery');})->name('gallery');
Route::get('/guide', function () {return view('client.pages.guides');})->name('guides');
Route::get('/testimonial', function () {return view('client.pages.testimonial');})->name('testimonial');

Route::get('/contact', function () {return view('client.pages.contact');})->name('contact');