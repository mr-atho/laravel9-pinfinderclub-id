@extends('layouts.v_main')

@section('content')
    <div id="carousel" class="carousel slide" data-ride="carousel">

        <script>
            $('.carousel').carousel({
                interval: 200
            })
        </script>

        <!-- Carousel Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ul>

        <!-- Carousel -->
        <div class="carousel-inner">

            <!--Text only with background image-->
            <div class="carousel-item active" style="background: url({{ asset('images/cover-bg-1.jpg') }}) center;">
                <div class="container slide-textonly">
                    <div>
                        <h1>Believe The Promise</h1>
                        <p class="lead">Pin Perkemahan</p>
                        <a href="#" class="btn btn-outline-secondary">Lihat Koleksi</a>
                    </div>
                </div>
            </div>

            <!--Text with image-->
            <div class="carousel-item" style="background: url({{ asset('images/cover-bg-3.jpg') }}) center;">
                <div class="container
                slide-withimage">
                    <div class="description">
                        <h1>Change<br>The World</h1>
                        <p class="lead">Pin Event</p>
                        <a href="#" class="btn btn-outline-secondary">Lihat Koleksi</a>
                    </div>

                </div>
            </div>

            <!--Text only with background image-->
            <div class="carousel-item" style="background: url({{ asset('images/cover-bg-2.jpg') }}) center;">
                <div class="container slide-textonly">
                    <div>
                        <h1>I Will Go</h1>
                        <p class="lead">Pin Event</p>
                        <a href="#" class="btn btn-outline-secondary">Lihat Koleksi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="collections text-center ">
        <div class="container-fluid">
            <div class="row">
                <div class="collection col-md-6 alt-background">
                    <div class="container container-right text-center">
                        <div>
                            <h1>Pin Perkemahan</h1>
                            <p class="lead">Koleksi Pin Perkemahan</p>
                            <a href="catalog.html" class="btn btn-outline-secondary">Telusuri</a>
                        </div>
                    </div>
                </div>
                <div class="collection col-md-6 bg-secondary inverted">
                    <div class="container container-left text-center">
                        <div>
                            <h1>Pin Event</h1>
                            <p class="lead">Koleksi Pin Event</p>
                            <a href="catalog.html" class="btn btn-outline-white">Telusuri</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-block text-center">
        <div class="container">
            <div class="row justify-center">
                <div class="col-md-6 text-center">
                    <img class="mt-4 mb-4 img-fluid" src="{{ asset('images/72nd_Special_Edition_2_600x.jpg') }}"
                        style="width: 100%;">
                </div>
                <div class="col-md-6 text-center text-md-left">
                    <h2 class="mb-3">Pin 72 Tahun Pathfinder (Edisi Khusus)</h2>
                    <p class="lead mt-2 mb-3">72nd Year Anniversary – 2022 World Pathfinder Day Special Edition "Maranatha"
                        Spinner Pin </p>
                    <p>We introduce to you the Special Edition Maranatha spinner pin!
                        It features a 3D design of the second coming of Jesus Christ and it i</p>
                    <p>Theme: "Change the World"</p>
                    <a href="#" class="btn btn-md btn-outline-primary mt-3">Shop Now</a>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="products text-center">
        <div class="container">
            <h3 class="mb-4">Sedang Diskon</h3>
            <div class="row">

                @foreach ($products as $product)
                    <div class="col-sm-6 col-md-3 col-product">
                        <figure>
                            <img class="rounded-corners img-fluid" src="{{ asset('images/' . $product->image) }}"
                                width="240" height="240">
                            <figcaption>
                                <div class="thumb-overlay">
                                    <a href="{{ route('product_detail', ['id' => $product->id]) }}" title="Detail Produk">
                                        <i class="fas fa-search-plus"></i>
                                    </a>
                                </div>
                                <div class="thumb-overlay">
                                    <form method="POST" action="{{ route('add_to_cart') }}">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <input type="hidden" name="name" value="{{ $product->name }}">
                                        <input type="hidden" name="price" value="{{ $product->price }}">
                                        <input type="hidden" name="sale_price" value="{{ $product->sale_price }}">
                                        <input type="hidden" name="image" value="{{ $product->image }}">
                                        <input type="hidden" name="quantity" value="1">

                                        <button type="submit" class="btn btn-link btn-lg" title="Tambahkan ke keranjang">
                                            <i class="fas fa-shopping-cart" style="color:white"></i>
                                        </button>
                                    </form>
                                </div>
                            </figcaption>
                        </figure>
                        <h4><a href="{{ route('product_detail', ['id' => $product->id]) }}">{{ $product->name }}</a></h4>
                        @if ($product->sale_price != null)
                            <p>
                                <span class="emphasis">Rp. {{ number_format($product->sale_price) }}</span><br>
                                <span class="emphasis" style="text-decoration: line-through">Rp.
                                    {{ number_format($product->price) }}</span>
                            </p>
                        @else
                            <p><span class="emphasis">Rp. {{ number_format($product->price) }}</span></p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
