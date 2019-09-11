<?php

// DB::listen(function($query){
//     echo "<pre>{$query->sql}</pre>";
// });

Route::view('/', 'home')->name('home');
Route::view('/nosotros', 'about')->name('about');

Route::resource('portfolio', 'PortfolioController');
Route::resource('usuarios', 'UsersController');
Route::resource('messages', 'MessagesController');

Route::view('/contacto', 'contact')->name('contacto');
Route::post('/contact', 'MessagesController@store')->name('contact');

Route::view('/servicios', 'servicios')->name('servicios');

Auth::routes();

App\User::class;
