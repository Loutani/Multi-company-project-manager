<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Profile Routes
|--------------------------------------------------------------------------
|
| here where you can found:
| - GET profile page by user id
|
*/

Route::middleware(['auth'])->group(function() {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
});