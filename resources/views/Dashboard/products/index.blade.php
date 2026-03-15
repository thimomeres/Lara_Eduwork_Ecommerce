@extends('layout')

@section('title', 'Daftar Produk')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0">Daftar Produk</h1>
            <p class="text-muted mb-0">Kelola produk yang ditampilkan di toko Anda.</p>
        </div>

        <a href="#" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah Produk
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Contoh data ketika belum ada produk --}}
                    <tr>
                        <td colspan="5" class="text-center py-5 text-muted">
                            Belum ada produk. <a href="#">Tambahkan produk baru</a>.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>