<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SubscribeController;
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

Route::get('/', [IndexController::class, 'index'])->name('home');

//Auh routes
Route::view('/login', 'auth/login')->name('login');
Route::view('/register', 'auth/register')->name('register');

//Services routes
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/{service}', [ServicesController::class, 'service'])->name('service');

//News routes
Route::view('/news', 'articles/news')->name('news');
Route::view('/news/{id}', 'articles/article')->name('article');
Route::view('/search', 'articles/searchResult')->name('search');

//Subscribe routes
Route::get('/subscribe/{id}', [SubscribeController::class, 'show'])->name('subscribeForm');
Route::post('/subscribe/{id}', [SubscribeController::class, 'subscribe'])->name('subscribe');

//contact route
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('sendMail');

//Profile route
Route::view('/profile', 'profile/profile')->name('profile');
Route::view('/profile/subscriptions', 'profile/subscriptions')->name('profile.subscriptions');
Route::view('/profile/billing', 'profile/billing')->name('profile.billing');

//Admin route
Route::view('/admin/users', 'admin/users')->name('admin.users');
Route::view('/admin/news', 'admin/news')->name('admin.news');
Route::view('/admin/subscriptions', 'admin/subscriptions')->name('admin.subscriptions');
