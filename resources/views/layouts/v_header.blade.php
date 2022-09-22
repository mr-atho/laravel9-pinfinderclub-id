<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pin Pathfinder Club Store - Pin, Pathes, Scarves | PinFinderClub.id</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="{{ asset('js/bootstrap-slider.min.js') }}"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <section class="header text-center">
        <nav class="navbar navbar-expand-lg navbar-light navbar-custom">
            <div class="container">
                <a class="navbar-brand" href="/"><img src="{{ asset('images/PFCGold1080_200x@2x.png') }}"
                        height="50" class="primary-color"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-1"
                    aria-controls="navbar-1" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse pull-xs-right justify-content-end" id="navbar-1">
                    <ul class="navbar-nav mt-2 mt-md-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products') }}">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">Tentang</a>
                        </li>

                        <li class="nav-item dropdown mega-menu"><a class="nav-link dropdown-toggle" href="#"
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Shop </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="container">
                                    <div class="divider"></div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <h6 class="text-uppercase">Women's</h6>
                                            <ul class="nav flex-column">
                                                <li class="nav-item"><a class="nav-link active"
                                                        href="#">Active</a></li>
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h6 class="text-uppercase">Men's</h6>
                                            <ul class="nav flex-column">
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h6 class="text-uppercase">Girl's</h6>
                                            <ul class="nav flex-column">
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2">
                                            <h6 class="text-uppercase">Boy's</h6>
                                            <ul class="nav flex-column">
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link" href="#">Link item</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="text-uppercase">Featured Items</h6>
                                            <div class="row">
                                                <div class="col-6 text-center"><a href="item.html">
                                                        <img src="images/placeholder-product.jpg" alt=""
                                                            class="img-fluid mt-2 mb-3"></a>
                                                    <h6 class="mb-0"><a href="item.html">Product Name</a></h6>
                                                    <p><span class="emphasis">$49.00</span></p>
                                                    <a href="#"
                                                        class="btn btn-sm btn-outline-secondary mt-0">Buy Now</a>
                                                    <p>
                                                </div>
                                                <div class="col-6 text-center"><a href="item.html">
                                                        <img src="images/placeholder-product.jpg" alt=""
                                                            class="img-fluid mt-2 mb-3"></a>
                                                    <h6 class="mb-0"><a href="item.html">Product Name</a></h6>
                                                    <p><span class="emphasis">$49.00</span></p>
                                                    <a href="#"
                                                        class="btn btn-sm btn-outline-secondary mt-0">Buy Now</a>
                                                    <p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">Pages </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item"
                                    href="index.html">Homepage</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="catalog.html">Catalog</a>
                                <a class="dropdown-item" href="item.html">Item Detail</a>
                                <a class="dropdown-item" href="cart.html">Cart</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="contact.html">Contact</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><i class="fas fa-shopping-cart"></i> <span
                                    class="badge badge-pill badge-primary">{{ number_format(Session::get('total_item')) }}</span></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-cart"
                                aria-labelledby="navbarDropdown">
                                <h6>{{ number_format(Session::get('total_item')) }} Produk <span class="emphasis">Rp.
                                        {{ number_format(Session::get('total')) }}</span></h6>
                                <div class="dropdown-divider"></div>
                                <ul class="shopping-cart-items">

                                    @if (Session::has('cart'))
                                        @foreach (Session::get('cart') as $product)
                                            <li class="row">
                                                <div class="col-3">
                                                    <img src="{{ asset('images/' . $product['image']) }}"
                                                        width="60">
                                                </div>
                                                <div class="col-9">
                                                    <h6><a
                                                            href="{{ route('product_detail', ['id' => $product['id']]) }}">{{ $product['name'] }}</a>
                                                    </h6>
                                                    <span class="text-muted emphasis">{{ $product['quantity'] }} x
                                                    </span>
                                                    <span class="emphasis">Rp.
                                                        {{ number_format($product['price']) }}</span>
                                                </div>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>

                                <a href="{{ route('cart') }}" class="btn btn-lg btn-full-width btn-primary"
                                    style="margin: 0;">View Cart</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
