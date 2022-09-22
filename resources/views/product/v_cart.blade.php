@extends('layouts.v_main')

@section('content')
    <section class="cart text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 mb-3 mb-m-1 text-md-left"><a href="{{ route('products') }}"><i
                            class="fas fa-arrow-left mr-2"></i>
                        Lanjut Berbelanja</a></div>
                <div class="col-sm-6 text-md-right">
                    @if (Session::has('total'))
                        @if (Session::get('total') != null)
                            <form method="GET" action="{{ route('checkout') }}">

                                <input type="submit" class="btn btn-primary btn-lg pl-5 pr-5" value="Checkout"
                                    name="">
                            </form>
                        @endif
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="mt-5 mb-2">Keranjang Belanja Anda</h2>
                    <p class="mb-5"><span class="primary-color">{{ number_format(Session::get('total_item')) }}</span>
                        produk dalam keranjang belanja Anda</p>
                    <table id="cart" class="table table-condensed">
                        <thead>
                            <tr>
                                <th style="width:45%">Nama Produk</th>
                                <th style="width:11%">Harga</th>
                                <th style="width:13%">Jumlah</th>
                                <th style="width:15%">Sub Total</th>
                                <th style="width:16%"></th>
                            </tr>
                        </thead>
                        <tbody>

                            @if (Session::has('cart'))
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
                                                </div>
                                            </div>
                                        </td>
                                        <td data-th="Price">Rp. {{ number_format($product['price']) }}</td>
                                        <td data-th="Quantity">
                                            <form method="POST" action="{{ route('edit_product_quantity') }}">
                                                @csrf

                                                <input type="hidden" name="id" value="{{ $product['id'] }}">

                                                <div class="input-group">
                                                    <input class="btn btn-white btn-md text-center" type="submit"
                                                        value="-" name="decrease_product_quantity_btn"
                                                        title="Kurangi Jumlah">
                                                    <input type="text" class="form-control form-control-sm text-center"
                                                        value="{{ $product['quantity'] }}" name="quantity" readonly>
                                                    <input class="btn btn-white btn-md text-center" type="submit"
                                                        value="+" name="increase_product_quantity_btn"
                                                        title="Tambah Jumlah">
                                                </div>
                                            </form>

                                        </td>
                                        <td data-th="Product-price">
                                            Rp. {{ number_format($product['price'] * $product['quantity']) }}
                                        </td>
                                        <td class="actions" data-th="">
                                            <div class="text-right">
                                                <form method="POST" action="{{ route('remove_from_cart') }}">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $product['id'] }}">
                                                    <button class="btn btn-white btn-md mb-2" title="Hapus Produk"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    <div class="float-right text-right">
                        @if (Session::has('cart'))
                            <h4>Total:</h4>

                            @if (Session::has('total'))
                                <h1>Rp. {{ number_format(Session::get('total')) }}</h1>
                                <p>(Tidak termasuk ongkos kirim)</p>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 mb-3 mb-m-1 text-md-left"><a href="{{ route('products') }}"><i
                            class="fas fa-arrow-left mr-2"></i>
                        Lanjut Berbelanja</a></div>
                <div class="col-sm-6 text-md-right">
                    @if (Session::has('total'))
                        @if (Session::get('total') != null)
                            <form method="GET" action="{{ route('checkout') }}">

                                <input type="submit" class="btn btn-primary btn-lg pl-5 pr-5" value="Checkout"
                                    name="">
                            </form>
                        @endif
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection
