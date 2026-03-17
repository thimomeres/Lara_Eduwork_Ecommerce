@extends('layout')
@section('title', 'Cart')
@section('content')

<!-- Cart Section -->
    <section class="py-5">
    <div class="container">

        <h2 class="mb-4 fw-bold">Keranjang Belanja</h2>

        <div class="row">

            <!-- Cart Items -->
            <div class="col-lg-8">

                <div class="card shadow-sm">

                    <div class="card-body">

                        <table class="table align-middle">

                            <thead class="table-light">
                                <tr>
                                    <th>Produk</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>

                                <!-- Item 1 -->
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/80" class="me-3 rounded">
                                            <div>
                                                <h6 class="mb-0">Produk 1</h6>
                                                <small class="text-muted">Kategori Produk</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td>Rp 150.000</td>

                                    <td style="width:120px;">
                                        <input type="number" class="form-control" value="1">
                                    </td>

                                    <td>Rp 150.000</td>

                                    <td>
                                        <button class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>


                                <!-- Item 2 -->
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="https://via.placeholder.com/80" class="me-3 rounded">
                                            <div>
                                                <h6 class="mb-0">Produk 2</h6>
                                                <small class="text-muted">Kategori Produk</small>
                                            </div>
                                        </div>
                                    </td>

                                    <td>Rp 200.000</td>

                                    <td>
                                        <input type="number" class="form-control" value="2">
                                    </td>

                                    <td>Rp 400.000</td>

                                    <td>
                                        <button class="btn btn-sm btn-danger">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>


            <!-- Cart Summary -->
            <div class="col-lg-4">

                <div class="card shadow-sm">

                    <div class="card-body">

                        <h5 class="mb-3">Ringkasan Belanja</h5>

                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal</span>
                            <span>Rp 550.000</span>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <span>Ongkir</span>
                            <span>Rp 20.000</span>
                        </div>

                        <hr>

                        <div class="d-flex justify-content-between fw-bold mb-4">
                            <span>Total</span>
                            <span>Rp 570.000</span>
                        </div>

                        <button class="btn btn-primary w-100 mb-2">
                            Checkout
                        </button>

                        <a href="#" class="btn btn-outline-secondary w-100">
                            Lanjut Belanja
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
    </section>
@endsection


