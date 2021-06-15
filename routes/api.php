<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ServicesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//AUTH routes
Route::post('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/register', [AuthController::class, 'register'])->name('register');
Route::middleware('auth:sanctum')->post('auth/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware('auth:sanctum')->post('auth/me', [AuthController::class, 'me'])->name('me');

//NEWS routes
Route::get('/posts', [NewsController::class, 'apiNews'])->name('api.news');
Route::get('/posts/{id}', [NewsController::class, 'apiShow'])->name('api.show');

//CONTACT route
Route::post('/contact', [ContactController::class, 'apiSend'])->name('api.sendMail');

//SUBSCRIPTIONS routes
Route::get('/plans/{category}', [ServicesController::class, 'apiServices'])->name('api.services');
