@extends('layouts.v_main')

@section('content')
    <section class="featured-block text-center">
        <div class="container">
            <div class="row">
                @foreach ($product_array as $product)
                    <div class="col-md-6 text-center">
                        <div class="product-image mt-3">
                            <img class="img-fluid" src="{{ asset('images/' . $product->image) }}">
                        </div>
                        @if ($product->image1 != null)
                            <div class="product-thumbnails">
                                <a href="#">
                                    <img class="mt-2 mr-2 img-fluid" src="{{ asset('images/' . $product->image1) }}">
                                </a>
                                @if ($product->image2 != null)
                                    <a href="#">
                                        <img class="mt-2 mr-2 img-fluid" src="{{ asset('images/' . $product->image2) }}">
                                    </a>
                                @endif

                            </div>
                        @endif

                    </div>
                    <div class="col-md-6 mt-5 mt-md-2 text-center text-md-left">
                        <h2 class="mb-3 mt-0">{{ $product->name }}</h2>

                        @if ($product->sale_price != null)
                            <span class="lead mt-2 mb-3 primary-color"><del>Rp.
                                    {{ number_format($product->price) }}</del></span>
                            <span class="lead mt-2 mb-3 primary-color"><strong> Rp.
                                    {{ number_format($product->sale_price) }}</strong></span>
                        @else
                            <p class="lead mt-2 mb-3 primary-color">Rp. {{ number_format($product->price) }}</p>
                        @endif

                        <h5 class="mt-4">Deskripsi</h5>
                        <p>{{ $product->description }}</p>

                        <form method="POST" action="{{ route('add_to_cart') }}">
                            @csrf
                            Quantity: <input type="number" class="form-control quantity mb-4" name="quantity"
                                value="1">

                            <div class="thumb-overlay">

                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="name" value="{{ $product->name }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">
                                <input type="hidden" name="sale_price" value="{{ $product->sale_price }}">
                                <input type="hidden" name="image" value="{{ $product->image }}">

                                <button type="submit" class="btn btn-full-width btn-lg btn-primary"
                                    title="Tambahkan ke keranjang belanja">Tambahkan ke Keranjang Belanja
                                </button>
                        </form>
                    </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
