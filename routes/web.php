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

Route::get('/index2', [App\Http\Controllers\CustomerController::class, 'create'])->name('index2');

//CRUD customer
Route::get('customer/index', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
Route::post('customer/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');
Route::delete('customer/destroy/{id}', [App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer.destroy');
Route::GET('customer/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');

// Customer Transaction
Route::get('transaction/index', [App\Http\Controllers\CustomerTransactionController::class, 'index'])->name('transaction.form');
Route::post('transaction/store', [App\Http\Controllers\CustomerTransactionController::class, 'store'])->name('transaction.store');
Route::delete('transaction/destroy/{id}', [App\Http\Controllers\CustomerTransactionController::class, 'destroy'])->name('transaction.destroy');
Route::get('transaction/edit/{id}', [App\Http\Controllers\CustomerTransactionController::class, 'edit'])->name('transaction.edit');
