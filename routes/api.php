<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\StripeController;
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
Route::middleware('auth:sanctum')->post('auth/me/update', [AuthController::class, 'meUpdate'])->name('me.update');

//NEWS routes
Route::get('/posts', [NewsController::class, 'apiNews'])->name('api.news');
Route::get('/posts/{id}', [NewsController::class, 'apiShow'])->name('api.show');

//CONTACT route
Route::post('/contact', [ContactController::class, 'apiSend'])->name('api.sendMail');

//SUBSCRIPTIONS routes
Route::get('/plans/{category}', [ServicesController::class, 'apiServices'])->name('api.services');

//BILLING GATE routes
Route::middleware('auth:sanctum')->post('/billing', [StripeController::class, 'billingGate'])->name('api.billing');

//STRIPE routes
Route::middleware('auth:sanctum')->post('/stripe/plans/{id}', [StripeController::class, 'showPlan'])->name('api.stripe.showPlan');
Route::middleware('auth:sanctum')->post('/stripe/subscribe/{id}', [StripeController::class, 'subscribe'])->name('api.stripe.subscribe');