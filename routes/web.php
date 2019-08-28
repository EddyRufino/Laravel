<?php

// DB::listen(function($query){
//     echo "<pre>{$query->sql}</pre>";
// });

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::resource('portfolio', 'PortfolioController');
Route::resource('usuarios', 'UsersController');
Route::resource('messages', 'MessagesController');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'MessagesController@store');

Auth::routes();

