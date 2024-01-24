<?php

use App\Http\Middleware\LogMessageMiddleware;
use Illuminate\Http\Request;
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

Route::view('/', 'welcome');

Route::redirect('/home', '/');

Route::middleware(LogMessageMiddleware::class)
->name('admin.movies.')
->prefix('admin')
->group(function() {
    Route::get('/movies', function(Request $request) {
        dd($request->route());
    })->name('index');
    
    Route::get('/movies/{id}', function(int $id) {
        dd($id);
    })->whereNumber('id');
    
    Route::view('/movies/create', 'movies.create');
    
    Route::post('/movies/store', function() {
        // logika za spremanje
    
        return redirect()->route('admin.movies.index');
    });
});