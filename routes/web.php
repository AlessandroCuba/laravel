<?php

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

Route::view('/', 'site.home', [
    'name' => 'Manuel Alejandro'
])->name('home');

Route::get('/posts', 'PostController@index')->name('posts.index');

Route::get('/posts/{id}', 'PostController@show')->name('posts.show');

Route::view('/about', 'site.about')->name('about');

Route::view('/contact', 'site.contact')->name('contact');

Route::post('contact', 'ContactController@store')->name('contact');