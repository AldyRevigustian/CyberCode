<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdentityController;
use App\Http\Controllers\InboxController;
use App\Http\Controllers\LandingController;
use Illuminate\Routing\RouteUrlGenerator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\MockObject\Builder\Identity;

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

Route::get('/', [LandingController::class, 'index']);

Route::get('/home', function () {
    return redirect('/application');
});

Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/filter', [LandingController::class, 'filter'])->name('filter');

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

// Identity
Route::get('/identity', [IdentityController::class, 'index'])->name('identity');
Route::put('/identity/update', [IdentityController::class, 'update'])->name('edit.identity');

// Division
Route::get('/admin', [DivisionController::class, 'admin'])->name('admin');
Route::get('/android-developer', [DivisionController::class, 'android'])->name('android');
Route::get('/courses', [DivisionController::class, 'courses'])->name('courses');
Route::get('/content-creator', [DivisionController::class, 'contentCreator'])->name('content-creator');
Route::get('/service', [DivisionController::class, 'service'])->name('service');
Route::get('/website-developer', [DivisionController::class, 'website'])->name('website');
Route::post('/member/store', [DivisionController::class, 'store'])->name('add.member');
Route::put('/member/store/{id}', [DivisionController::class, 'update'])->name('update.member');
Route::delete('/member/destroy/{id}', [DivisionController::class, 'destroy'])->name('delete.member');

// Inbox
Route::get('/inbox', [InboxController::class, 'index'])->name('inbox');