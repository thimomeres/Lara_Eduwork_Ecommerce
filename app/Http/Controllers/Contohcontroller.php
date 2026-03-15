<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // menggunakan request untuk mengambil data dari form

class Contohcontroller extends Controller
{
    // disini function ktia 
    // menautkan ke rout
    public function index()
    {
        $title = "Contoh View dengan Controller"; // contoh data judul
        $products = ['Laptop 1', 'Keyboard 2', 'Mouse 3']; // contoh data produk
        return view('contoh', compact('products','title')); // menampilkan view contoh
    }
}
  