<?php

use App\Http\Controllers\Api\BookController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/add/{id}', [App\Http\Controllers\Api\BookController::class, 'addToList'])->name('add');
Route::get('/mybooks/{id}', [App\Http\Controllers\Api\UserController::class, 'showListBooks'])->name('mybooks');
Route::get('/dropbook/{id}',[App\Http\Controllers\Api\UserController::class, 'dropBook'])->name('dropBook');
