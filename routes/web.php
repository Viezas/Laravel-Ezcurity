<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminNewsController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
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

//Services routes
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/{service}', [ServicesController::class, 'service'])->name('service');

//News routes
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('article');
Route::post('/search', [NewsController::class, 'search'])->name('search');

//Subscribe routes
Route::get('/subscribe/{id}', [SubscribeController::class, 'show'])->name('subscribeForm');
Route::post('/subscribe/{id}', [SubscribeController::class, 'subscribe'])->name('subscribe');

//contact route
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('sendMail');

//Profile route
Route::middleware('auth:sanctum')->get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::middleware('auth:sanctum')->post('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::middleware('auth:sanctum')->get('/profile/subscriptions', [ProfileController::class, 'subscriptions'])->name('profile.subscriptions');
Route::middleware('auth:sanctum')->get('/profile/billing', [ProfileController::class, 'billing'])->name('profile.billing');

//Admin route
Route::middleware('auth:sanctum')->get('/admin/users', [AdminUsersController::class, 'index'])->name('admin.users');
Route::middleware('auth:sanctum')->get('/admin/users/{id}', [AdminUsersController::class, 'show'])->name('admin.showUpdateForm.user');
Route::middleware('auth:sanctum')->post('/admin/users/update/{id}', [AdminUsersController::class, 'update'])->name('admin.update.user');
Route::middleware('auth:sanctum')->post('/admin/users/delete/{id}', [AdminUsersController::class, 'delete'])->name('admin.delete.user');

Route::middleware('auth:sanctum')->get('/admin/news', [AdminNewsController::class, 'news'])->name('admin.news');
Route::middleware('auth:sanctum')->get('/admin/news/create', [AdminNewsController::class, 'showCreate'])->name('admin.news.showCreate');
Route::middleware('auth:sanctum')->post('/admin/news/create', [AdminNewsController::class, 'create'])->name('admin.news.create');
Route::middleware('auth:sanctum')->get('/admin/news/{id}', [AdminNewsController::class, 'show'])->name('admin.news.show');
Route::middleware('auth:sanctum')->post('/admin/news/update/{id}', [AdminNewsController::class, 'update'])->name('admin.update.news');
Route::middleware('auth:sanctum')->post('/admin/news/delete/{id}', [AdminNewsController::class, 'delete'])->name('admin.delete.news');
//Route::middleware('auth:sanctum')->get('/admin/subscriptions', [AdminController::class, 'subscriptions'])->name('admin.subscriptions');

require __DIR__.'/auth.php';
