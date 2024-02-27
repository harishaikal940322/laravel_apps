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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test1', function () {
    return 'Hello World';
})->name('test1');

Route::get('/test2', function () {
    return view('customer.index');
})->name('test1');

Route::get('/index1', [App\Http\Controllers\CustomerController::class, 'index'])->name('index1');
Route::get('/index2', [App\Http\Controllers\CustomerController::class, 'create'])->name('index2');
