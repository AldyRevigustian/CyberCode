<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Category
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::post('/category/store', [CategoryController::class, 'store'])->name('add.category');
Route::put('/category/{id}', [CategoryController::class, 'update'])->name('edit.category');
Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('delete.category');

// Application
Route::get('/application', [ApplicationController::class, 'index'])->name('application');
Route::post('/application/store', [ApplicationController::class, 'store'])->name('add.application');
Route::put('/application/{id}', [ApplicationController::class, 'update'])->name('edit.application');
Route::delete('/application/{id}', [ApplicationController::class, 'destroy'])->name('delete.application');

