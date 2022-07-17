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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::post('/book/add', [App\Http\Controllers\AdminController::class, 'add']);
Route::post('/book/edit', [App\Http\Controllers\AdminController::class, 'edit']);
Route::get('/book/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete']);
Route::get('/admin/book/detail/{id}', [App\Http\Controllers\AdminController::class, 'detail']);

