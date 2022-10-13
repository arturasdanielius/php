<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController as C;
use App\Http\Controllers\MovieController as M;
use App\Http\Controllers\HomeController as H;
use App\Http\Controllers\RestoranController as R;
use App\Http\Controllers\DishController as D;


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



Auth::routes();

Route::get('/', [H::class, 'homeList'])->name('home')->middleware('gate:home');
Route::put('/rate/{restoran}', [H::class, 'rate'])->name('rate')->middleware('gate:user');
Route::post('/comment/{restoran}', [H::class, 'addComment'])->name('comment')->middleware('gate:user');

Route::prefix('restoran')->name('r_')->group(function () {
    Route::get('/', [R::class, 'index'])->name('index')->middleware('gate:user');
    Route::get('/create', [R::class, 'create'])->name('create')->middleware('gate:admin');
    Route::post('/create', [R::class, 'store'])->name('store')->middleware('gate:admin');
    Route::get('/show/{restoran}', [R::class, 'show'])->name('show')->middleware('gate:user');
    Route::delete('/delete/{restoran}', [R::class, 'destroy'])->name('delete')->middleware('gate:admin');
    Route::get('/edit/{restoran}', [R::class, 'edit'])->name('edit')->middleware('gate:admin');
    Route::put('/edit/{restoran}', [R::class, 'update'])->name('update')->middleware('gate:admin');
});

Route::prefix('dish')->name('d_')->group(function () {
    Route::get('/', [D::class, 'index'])->name('index')->middleware('gate:user');
    Route::get('/create', [D::class, 'create'])->name('create')->middleware('gate:admin');
    Route::post('/create', [D::class, 'store'])->name('store')->middleware('gate:admin');
    Route::get('/show/{dish}', [D::class, 'show'])->name('show')->middleware('gate:user');
    Route::delete('/delete/{dish}', [D::class, 'destroy'])->name('delete')->middleware('gate:admin');
    Route::get('/edit/{dish}', [D::class, 'edit'])->name('edit')->middleware('gate:admin');
    Route::put('/edit/{dish}', [D::class, 'update'])->name('update')->middleware('gate:admin');
});


Route::prefix('comment')->name('c_')->group(function () {
    Route::get('/', [C::class, 'index'])->name('index')->middleware('gate:user');
    Route::delete('/delete/{comment}', [C::class, 'destroy'])->name('delete')->middleware('gate:admin');
});