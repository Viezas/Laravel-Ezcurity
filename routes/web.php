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

//Auh routes
Route::view('/login', 'auth/login')->name('login');
Route::view('/register', 'auth/register')->name('register');

//Services routes
Route::view('/services', 'services/services')->name('services');
Route::view('/services/service', 'services/service')->name('service');

//News routes
Route::view('/news', 'articles/news')->name('news');
Route::view('/news/{id}', 'articles/article')->name('article');
Route::view('/search', 'articles/searchResult')->name('search');

//Subscribe routes
//Route::view('/subscribe/{id}', 'stripe/subscribe')->name('subscribe');
Route::view('/subscribe', 'stripe/subscribe')->name('subscribe');
Route::view('/subscribe/confirmed/', 'stripe/subscribed')->name('subscribed');

//contact route
Route::view('/contact', 'contact/contact')->name('contact');

//Profile route
Route::view('/profile', 'profile/profile')->name('profile');
Route::view('/profile/subscriptions', 'profile/subscriptions')->name('profile.subscriptions');
Route::view('/profile/billing', 'profile/billing')->name('profile.billing');

//Admin route
Route::view('/admin/users', 'admin/users')->name('admin.users');
Route::view('/admin/news', 'admin/news')->name('admin.news');
Route::view('/admin/subscriptions', 'admin/subscriptions')->name('admin.subscriptions');
