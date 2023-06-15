<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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


Route::get('/edit', function () {
    return view('products.edit');
});




Route::resource('/product', ProductController::class);