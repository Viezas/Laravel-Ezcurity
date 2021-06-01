<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'homepage/welcome')->name('home');
Route::view('/login', 'auth/login')->name('login');
Route::view('/register', 'auth/register')->name('register');
Route::view('/news', 'articles/news')->name('news');
Route::view('/news/{id}', 'articles/article')->name('article');
Route::view('/search', 'articles/searchResult')->name('search');