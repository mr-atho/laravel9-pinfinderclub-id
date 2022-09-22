@extends('layouts.v_main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3 sidebar-filter">
                <h3 class="mt-5 mb-5">Showing <span class="primary-color">12</span> Products</h3>
                <h6 class="text-uppercase">Categories</h6>
                <div class="filter-checkbox">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="category-1">
                        <label class="custom-control-label" for="category-1">Accessories</label>
                    </div>
                </div>
                <div class="filter-checkbox">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="category-2">
                        <label class="custom-control-label" for="category-2">Coats &amp; Jackets</label>
                    </div>
                </div>
                <div class="filter-checkbox">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="category-3">
                        <label class="custom-control-label" for="category-3">Hoodies &amp; Sweatshirts</label>
                    </div>
                </div>
                <div class="filter-checkbox">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="category-4">
                        <label class="custom-control-label" for="category-4">Jeans</label>
                    </div>
                </div>
                <div class="filter-checkbox">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="category-5">
                        <label class="custom-control-label" for="category-5">Shirts</label>
                    </div>
                </div>
                <div class="filter-checkbox">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="category-6">
                        <label class="custom-control-label" for="category-6">Underwear</label>
                    </div>
                </div>
                <div class="divider"></div>
                <h6 class="text-uppercase">Size</h6>
                <div class="filter-checkbox">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="filter-size-1">
                        <label class="custom-control-label" for="filter-size-1">X-Small</label>
                    </div>
                </div>
                <div class="filter-checkbox">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="filter-size-2">
                        <label class="custom-control-label" for="filter-size-2">Small</label>
                    </div>
                </div>
                <div class="filter-checkbox">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="filter-size-3">
                        <label class="custom-control-label" for="filter-size-3">Medium</label>
                    </div>
                </div>
                <div class="filter-checkbox">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="filter-size-4">
                        <label class="custom-control-label" for="filter-size-4">Large</label>
                    </div>
                </div>
                <div class="filter-checkbox">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="filter-size-5">
                        <label class="custom-control-label" for="filter-size-5">X-Large</label>
                    </div>
                </div>
                <div class="divider"></div>
                <h6 class="text-uppercase">Price</h6>
                <div class="price-filter">
                    <input type="text" class="form-control" value="50" id="price-min">
                    <input type="text" class="form-control" value="150" id="price-max">
                </div>
                <br />
                <br />
                <input id="ex2" type="text" class="slider " value="" data-slider-min="10"
                    data-slider-max="200" data-slider-step="5" data-slider-value="[50,150]" />
                <div class="divider"></div>

                <a href="#" class="btn btn-lg btn-full-width btn-primary mt-2">Update Results</a>
            </div>

            <div class="col-md-8 col-lg-9">
                <section class="products">
                    <div class="container">
                        <div class="row sorting mb-5">
                            <div class="col-12">
                                <div class="dropdown float-left">
                                    <label class="mr-2">Sort by:</label>
                                    <a class="btn btn-lg btn-white dropdown-toggle" data-toggle="dropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Relevance <span
                                            class="caret"></span></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item"
                                            href="#">Relevance</a>
                                        <a class="dropdown-item" href="#">Price Descending</a>
                                        <a class="dropdown-item" href="#">Price Ascending</a>
                                        <a class="dropdown-item" href="#">Best Selling</a>
                                    </div>
                                </div>
                                <div class="btn-group float-right ml-3">
                                    <button type="button" class="btn btn-lg btn-white"><span
                                            class="fa fa-arrow-left"></span></button>
                                    <button type="button" class="btn btn-lg btn-white"><span
                                            class="fa fa-arrow-right"></span></button>
                                </div>
                                <div class="dropdown float-right">
                                    <label class="mr-2">View:</label>
                                    <a class="btn btn-lg btn-white dropdown-toggle" data-toggle="dropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">12 <span
                                            class="caret"></span></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item"
                                            href="#">12</a>
                                        <a class="dropdown-item" href="#">24</a>
                                        <a class="dropdown-item" href="#">48</a>
                                        <a class="dropdown-item" href="#">96</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-md-6 col-lg-4 col-product">
                                    <figure>
                                        <img class="rounded-corners img-fluid"
                                            src="{{ asset('images/' . $product->image) }}">
                                        <figcaption>
                                            <div class="thumb-overlay">
                                                <a href="{{ route('product_detail', ['id' => $product->id]) }}"
                                                    title="More Info">
                                                    <i class="fas fa-search-plus"></i>
                                                </a>
                                            </div>
                                            <div class="thumb-overlay">
                                                <form method="POST" action="{{ route('add_to_cart') }}">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                                    <input type="hidden" name="sale_price"
                                                        value="{{ $product->sale_price }}">
                                                    <input type="hidden" name="image" value="{{ $product->image }}">
                                                    <input type="hidden" name="quantity" value="1">

                                                    <button type="submit" class="btn btn-link btn-lg"
                                                        title="Tambahkan ke keranjang">
                                                        <i class="fas fa-shopping-cart" style="color:white"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <h4 class="mb-1">
                                        <a
                                            href="{{ route('product_detail', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                    </h4>
                                    @if ($product->sale_price != null)
                                        <p>
                                            <span class="emphasis">Rp.
                                                {{ number_format($product->sale_price) }}</span><br>
                                            <span class="emphasis" style="text-decoration: line-through">Rp.
                                                {{ number_format($product->price) }}</span>
                                        </p>
                                    @else
                                        <p><span class="emphasis">Rp. {{ number_format($product->price) }}</span></p>
                                    @endif
                                </div>
                            @endforeach

                        </div>
                        <div class="row sorting mb-5">
                            <div class="col-12"><a class="btn"><i class="fas fa-arrow-up mr-2"></i> Back to top</a>
                                <div class="btn-group float-right ml-3">
                                    <button type="button" class="btn btn-lg btn-white"><span
                                            class="fa fa-arrow-left"></span></button>
                                    <button type="button" class="btn btn-lg btn-white"><span
                                            class="fa fa-arrow-right"></span></button>
                                </div>
                                <div class="dropdown float-right">
                                    <label class="mr-2">View:</label>
                                    <a class="btn btn-white btn-lg dropdown-toggle" data-toggle="dropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">12 <span
                                            class="caret"></span></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown"><a class="dropdown-item"
                                            href="#">12</a>
                                        <a class="dropdown-item" href="#">24</a>
                                        <a class="dropdown-item" href="#">48</a>
                                        <a class="dropdown-item" href="#">96</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">
        // Without JQuery
        var slider = new Slider('#ex2', {});
        slider.on("slide", function(sliderValue) {
            document.getElementById("price-min").value = sliderValue[0];
        });
        slider.on("slide", function(sliderValue) {
            document.getElementById("price-max").value = sliderValue[1];
        });
    </script>
@endpush
