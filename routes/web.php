<?php

use App\Http\Controllers\Contohcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;




Route::get('/', [HomeController::class, 'index']);
Route:: get('/cart', [HomeController::class, 'cart']);

Route:: get('/Checkout', function(){
    return "Halaman Checkout";
});
Route:: get('/coba', function(){
    return view('coba', [
        'nama' => 'Rizky',
        'umur' => 20,
        'alamat' => 'Jl. Raya No. 123',
    ]);
});
Route:: get('/Contoh', [Contohcontroller::class, 'index']); 
Route:: resource('/products-r', ProductController::class); // menautkan ke controller contohcontroller dengan function index
