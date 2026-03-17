@extends('layout')

@section('title', 'Ecommerce Website')

@section('content')

<!-- Hero Section -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h1 class="fw-bold">Welcome to Our Store</h1>
        <p class="text-muted">Temukan produk terbaik dengan harga terbaik</p>
    </div>
</section>

<!-- Product Section -->
<section class="py-5">
    <div class="container">

        <div class="row g-4">

            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">

                    <img src="https://via.placeholder.com/300" class="card-img-top">

                    <div class="card-body">
                        <h5 class="card-title">Produk 1</h5>
                        <p class="card-text text-muted">
                            Deskripsi singkat produk.
                        </p>
                        <h6 class="text-primary fw-bold">
                            Rp 150.000
                        </h6>
                    </div>

                    <div class="card-footer bg-white border-0">
                        <button class="btn btn-primary w-100">
                            Tambah ke Keranjang
                        </button>
                    </div>

                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">

                    <img src="https://via.placeholder.com/300" class="card-img-top">

                    <div class="card-body">
                        <h5 class="card-title">Produk 2</h5>
                        <p class="card-text text-muted">
                            Deskripsi singkat produk.
                        </p>
                        <h6 class="text-primary fw-bold">
                            Rp 200.000
                        </h6>
                    </div>

                    <div class="card-footer bg-white border-0">
                        <button class="btn btn-primary w-100">
                            Tambah ke Keranjang
                        </button>
                    </div>

                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">

                    <img src="https://via.placeholder.com/300" class="card-img-top">

                    <div class="card-body">
                        <h5 class="card-title">Produk 3</h5>
                        <p class="card-text text-muted">
                            Deskripsi singkat produk.
                        </p>
                        <h6 class="text-primary fw-bold">
                            Rp 250.000
                        </h6>
                    </div>

                    <div class="card-footer bg-white border-0">
                        <button class="btn btn-primary w-100">
                            Tambah ke Keranjang
                        </button>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

@endsection