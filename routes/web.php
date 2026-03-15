<?php

use App\Http\Controllers\Contohcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;




Route::get('/', function () {
    return "Hallo ini website laravel saya";
});
Route:: get('/Cart', function(){
    return "keranjang Belanja";
});

Route:: get('/Checkout', function(){
    return "Halaman Checkout";
});
Route:: get('/Contoh', [Contohcontroller::class, 'index']); 
Route:: resource('/products-r', ProductController::class); // menautkan ke controller contohcontroller dengan function index
