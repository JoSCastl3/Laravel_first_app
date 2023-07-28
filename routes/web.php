<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;

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

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
Route::get('/home', [App\Http\Controllers\ProductController::class, 'index'])->name('homme');
Route::get('/show', [App\Http\Controllers\ProductController::class, 'show'])->name('show');
Route::get('/create', [App\Http\Controllers\ProductController::class, 'create'])->name('create');
Route::post('/store', [\App\Http\Controllers\ProductController::class, 'store'])->name('store');
Route::get('/details/{id}', [\App\Http\Controllers\ProductController::class, 'details'])->name('details');
Route::get('/edit/{id}', [\App\Http\Controllers\ProductController::class, 'edit'])->name('edit');
Route::put('/update/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('update');
Route::delete('/destroy/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('destroy');
