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

//Simple
Route::resource('clothes', App\Http\Controllers\ClothesController::class);

//Ajax
Route::resource('ajax', App\Http\Controllers\AjaxClothesController::class);
//Route::get('ajax', [App\Http\Controllers\AjaxClothesController::class, 'index'])->name('clothes.ajax');