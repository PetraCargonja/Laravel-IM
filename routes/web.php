<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\LogMessageMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'welcome')
    ->name('home');

Route::redirect('/home', '/');

Route::resource('movies', MovieController::class)
    ->except('edit', 'update', 'destroy')
    ->middleware(LogMessageMiddleware::class);

Route::get('/genres', GenreController::class);

Route::get('/members/account', [MemberController::class, 'account'])
    ->name('members.account');

Route::resource('members', MemberController::class);

Route::apiResource('media', MediaController::class);

Route::singleton('profile', ProfileController::class);