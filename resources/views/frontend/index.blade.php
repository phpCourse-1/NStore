@extends('frontend.master')
@section('main')
    @include('frontend.home.slider')
    @include('frontend.home.features_categories')
    @include('frontend.home.banner')
    @include('frontend.home.new_product')
    @include('frontend.home.features_products')

    <section class="product-tabs section-padding position-relative">
        <div class="container">
            <div class="section-title style-2 wow animate__animated animate__fadeIn">
                <h3>Snacks</h3>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row product-grid-4">
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".1s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                            <img class="default-img"
                                                src="{{ asset('frontendAssets/images/shop/product-1-1.jpg') }}"
                                                alt="" />
                                            <img class="hover-img"
                                                src="{{ asset('frontendAssets/images/shop/product-1-2.jpg') }}"
                                                alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i
                                                class="fi-rs-shuffle"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="hot">Hot</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Snack</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Seeds of Change Organic Quinoa, Brown, </a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a
                                                href="vendor-details-1.html">NestFood</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$28.85</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="shop-cart.html"><i
                                                    class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                            <img class="default-img"
                                                src="{{ asset('frontendAssets/images/shop/product-2-1.jpg') }}"
                                                alt="" />
                                            <img class="hover-img"
                                                src="{{ asset('frontendAssets/images/shop/product-2-2.jpg') }}"
                                                alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i
                                                class="fi-rs-shuffle"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="sale">Sale</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Hodo Foods</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">All Natural Italian-Style Chicken Meatballs</a>
                                    </h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 80%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (3.5)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a
                                                href="vendor-details-1.html">Stouffer</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$52.85</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="shop-cart.html"><i
                                                    class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn"
                                data-wow-delay=".3s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                            <img class="default-img"
                                                src="{{ asset('frontendAssets/images/shop/product-3-1.jpg') }}"
                                                alt="" />
                                            <img class="hover-img"
                                                src="{{ asset('frontendAssets/images/shop/product-3-2.jpg') }}"
                                                alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i
                                                class="fi-rs-shuffle"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="new">New</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Snack</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Angie’s Boomchickapop Sweet & Salty Kettle
                                        </a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 85%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a
                                                href="vendor-details-1.html">StarKist</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$48.85</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="shop-cart.html"><i
                                                    class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn"
                                data-wow-delay=".4s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                            <img class="default-img"
                                                src="{{ asset('frontendAssets/images/shop/product-4-1.jpg') }}"
                                                alt="" />
                                            <img class="hover-img"
                                                src="{{ asset('frontendAssets/images/shop/product-4-2.jpg') }}"
                                                alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i
                                                class="fi-rs-shuffle"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Vegetables</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Foster Farms Takeout Crispy Classic Buffalo </a>
                                    </h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a
                                                href="vendor-details-1.html">NestFood</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$17.85</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="shop-cart.html"><i
                                                    class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                            <div class="product-cart-wrap mb-30 wow animate__animated animate__fadeIn"
                                data-wow-delay=".5s">
                                <div class="product-img-action-wrap">
                                    <div class="product-img product-img-zoom">
                                        <a href="shop-product-right.html">
                                            <img class="default-img"
                                                src="{{ asset('frontendAssets/images/shop/product-5-1.jpg') }}"
                                                alt="" />
                                            <img class="hover-img"
                                                src="{{ asset('frontendAssets/images/shop/product-5-2.jpg') }}"
                                                alt="" />
                                        </a>
                                    </div>
                                    <div class="product-action-1">
                                        <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i
                                                class="fi-rs-heart"></i></a>
                                        <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i
                                                class="fi-rs-shuffle"></i></a>
                                        <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal"
                                            data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                    </div>
                                    <div class="product-badges product-badges-position product-badges-mrg">
                                        <span class="best">-14%</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap">
                                    <div class="product-category">
                                        <a href="shop-grid-right.html">Pet Foods</a>
                                    </div>
                                    <h2><a href="shop-product-right.html">Blue Diamond Lightly Salted
                                            Vegetables</a></h2>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    <div>
                                        <span class="font-small text-muted">By <a
                                                href="vendor-details-1.html">NestFood</a></span>
                                    </div>
                                    <div class="product-card-bottom">
                                        <div class="product-price">
                                            <span>$23.85</span>
                                        </div>
                                        <div class="add-cart">
                                            <a class="add" href="shop-cart.html"><i
                                                    class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding mb-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 wow animate__animated animate__fadeInUp"
                    data-wow-delay="0">
                    <h4 class="section-title style-1 mb-30 animated animated"> Hot Deals </h4>
                    <div class="product-list-small animated animated">
                        @foreach ($hot_deals as $item)
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="{{ url('product/details/' . $item->id . '/' . $item->product_slug) }}"><img
                                            src="{{ asset($item->product_thambnail) }}" alt="" /></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="{{ url('product/details/' . $item->id . '/' . $item->product_slug) }}">
                                            {{ $item->product_name }} </a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    @if ($item->discount_price == null)
                                        <div class="product-price">
                                            <span>${{ $item->selling_price }}</span>

                                        </div>
                                    @else
                                        <div class="product-price">
                                            <span>${{ $item->discount_price }}</span>
                                            <span class="old-price">${{ $item->selling_price }}</span>
                                        </div>
                                    @endif
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-md-0 wow animate__animated animate__fadeInUp"
                    data-wow-delay=".1s">
                    <h4 class="section-title style-1 mb-30 animated animated"> Special Offer </h4>
                    <div class="product-list-small animated animated">
                        @foreach ($special_offer as $item)
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="{{ url('product/details/' . $item->id . '/' . $item->product_slug) }}"><img
                                            src="{{ asset($item->product_thambnail) }}" alt="" /></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="{{ url('product/details/' . $item->id . '/' . $item->product_slug) }}">
                                            {{ $item->product_name }} </a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    @if ($item->discount_price == null)
                                        <div class="product-price">
                                            <span>${{ $item->selling_price }}</span>

                                        </div>
                                    @else
                                        <div class="product-price">
                                            <span>${{ $item->discount_price }}</span>
                                            <span class="old-price">${{ $item->selling_price }}</span>
                                        </div>
                                    @endif
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-lg-block wow animate__animated animate__fadeInUp"
                    data-wow-delay=".2s">
                    <h4 class="section-title style-1 mb-30 animated animated">Recently added</h4>
                    <div class="product-list-small animated animated">
                        @foreach ($new as $item)
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="{{ url('product/details/' . $item->id . '/' . $item->product_slug) }}"><img
                                            src="{{ asset($item->product_thambnail) }}" alt="" /></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="{{ url('product/details/' . $item->id . '/' . $item->product_slug) }}">
                                            {{ $item->product_name }} </a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    @if ($item->discount_price == null)
                                        <div class="product-price">
                                            <span>${{ $item->selling_price }}</span>

                                        </div>
                                    @else
                                        <div class="product-price">
                                            <span>${{ $item->discount_price }}</span>
                                            <span class="old-price">${{ $item->selling_price }}</span>
                                        </div>
                                    @endif
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 mb-sm-5 mb-md-0 d-none d-xl-block wow animate__animated animate__fadeInUp"
                    data-wow-delay=".3s">
                    <h4 class="section-title style-1 mb-30 animated animated"> Special Deals </h4>
                    <div class="product-list-small animated animated">
                        @foreach ($special_deals as $item)
                            <article class="row align-items-center hover-up">
                                <figure class="col-md-4 mb-0">
                                    <a href="{{ url('product/details/' . $item->id . '/' . $item->product_slug) }}"><img
                                            src="{{ asset($item->product_thambnail) }}" alt="" /></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h6>
                                        <a href="{{ url('product/details/' . $item->id . '/' . $item->product_slug) }}">
                                            {{ $item->product_name }} </a>
                                    </h6>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                    @if ($item->discount_price == null)
                                        <div class="product-price">
                                            <span>${{ $item->selling_price }}</span>
                                        </div>
                                    @else
                                        <div class="product-price">
                                            <span>${{ $item->discount_price }}</span>
                                            <span class="old-price">${{ $item->selling_price }}</span>
                                        </div>
                                    @endif
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.home.vendor_list')
@endsection
