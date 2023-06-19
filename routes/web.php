<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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


 Route::get('/product', function () {
     return view('products.index');
});



Route::get('/register', function () {
     return view('products.create');
});

Route::resource('/product', ProductController::class);

//edit
Route::get('/products/{id}/editar', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');


//delete
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');



//users

Route::get('/users', function () {
     return view('users.index');
});

Route::get('/create-user', function () {
     return view('users.create');
});

Route::resource('/users', UserController::class);


// orders

Route::get('/orders', function () {
     return view('orders.index');
});