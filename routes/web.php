<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [\App\Http\Controllers\Controller::class, 'index'])->name('index');

Route::post('/signup-with-order', [\App\Http\Controllers\Controller::class, 'checkout'])->name('checkout');
//Route::get('/test', function () {
//    return view('welcome2');
//});
