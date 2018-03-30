<?php

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('types', 'TypeController');
Route::resource('books', 'BookController');
Route::resource('members', 'MemberController');
Route::resource('sells', 'SellController');
