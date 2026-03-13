<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;


Route::get('/', function () {
    return "Hallo ini website laravel saya";
});

Route:: get('/products', function(){
    return "Daftar Produk";
});
Route:: get('/Cart', function(){
    return "keranjang Belanja";
});

Route:: get('/Checkout', function(){
    return "Halaman Checkout";
});