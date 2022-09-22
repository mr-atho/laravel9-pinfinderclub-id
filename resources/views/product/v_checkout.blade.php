@extends('layouts.v_main')

@section('content')
    <section class="cart text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-center text-md-left">
                    <h3 class="mb-4">Alamat Pengiriman</h3>
                    <p class="mb-4">Silakan masukkan data alamat pengiriman barang Anda</p>

                    <form method="POST" action="{{ route('place_order') }}" class="row g-3">
                        @csrf
                        <div class="col-md-6">
                            <label for="checkout-name" class="form-label">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama Anda"
                                id="checkout-name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="checkout-email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Alamat Email"
                                id="checkout-email" required>
                        </div>

                        <div class="col-6">
                            <label for="checkout-phone" class="form-label">Nomor Telp.</label>
                            <input type="tel" name="phone" class="form-control" placeorder="Nomor Telepon"
                                id="checkout-phone" required>
                        </div>
                        <div class="col-12">
                            <label for="checkout-address" class="form-label">Alamat</label>
                            <input type="text" name="address" class="form-control" placeholder="Alamat"
                                id="checkout-address" required>
                        </div>
                        <div class="col-md-6">
                            <label for="checkout-city" class="form-label">Kota</label>
                            <input type="text" name="city" class="form-control" placeholder="Kota" id="checkout-city"
                                required>
                        </div>
                </div>

                <div class="col-sm-4 mb-5 text-center text-md-left">
                    <h3>Pesanan ({{ number_format(Session::get('total_item')) }} Produk)</h3>
                    <table id="cart" class="">
                        @foreach (Session::get('cart') as $product)
                            <tr>
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-md-3 text-left">
                                            <img src="{{ asset('images/' . $product['image']) }}" alt=""
                                                class="img-fluid">
                                        </div>
                                        <div class="col-md-9 text-left mt-sm-2">
                                            <h4>{{ $product['name'] }}</h4>
                                            <div class="row">
                                                <div class="col-md-6 text-left small">
                                                    Rp. {{ number_format($product['price']) }}
                                                </div>
                                                <div class="col-md-6 text-right small">
                                                    x{{ $product['quantity'] }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="divider"></div>
                    <h3>Total Pembayaran</h3>
                    @if (Session::has('total'))
                        @if (Session::get('total') != null)
                            <h1>Rp. {{ number_format(Session::get('total')) }}</h1>

                            <input type="submit" class="btn btn-primary btn-lg pl-5 pr-5" value="Buat Pesanan"
                                name="checkout_btn">
                        @endif
                    @endif
                </div>

                </form>
            </div>
        </div>
    </section>
@endsection
