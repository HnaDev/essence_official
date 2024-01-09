@extends('master_user')
@section('container')
    <!-- banner category -->
    <section class="welcome_category">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="hero-content">
                        <h6>asoss</h6>
                        <h2>New Collection</h2>
                        <a href="{{route('newpro')}}" class="btn view_collection">view collection</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner category -->

    <!-- category male and female -->
    <div class="category_end_male_female padding-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card category_female">
                        <a href="{{route('womanpro')}}">
                            <img class="card-img-top" src="{{ url('assets-user') }}/img/banner/Card_1_DT.jpg"
                                alt="">
                            <div class="category_title flex_between">
                                <h3><a href="#">
                                        <span>Women</span>
                                    </a>
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card category_male">
                        <a href="{{route('manpro')}}">
                            <img class="card-img-top" src="{{ url('assets-user') }}/img/banner/Card_2_DT.jpg"
                                alt="">
                            <div class="category_title flex_between">
                                <h3>
                                    <a href="#">
                                        <span>Men</span>
                                    </a>
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- category male and female end -->

    <!-- global sale -->
    <div class="global_sale padding-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sale-content bg-img background-overlay"
                        style="background-image: url({{ url('assets-user') }}/img/bg-img/bg-5.jpg);">
                        <div class="h-100 d-flex align-items-center justify-content-end">
                            <div class="sale_text">
                                <h6>-60%</h6>
                                <h2>Global Sale</h2>
                                {{-- <a href="#" class="btn check-btn">Buy Now</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global sale end -->

    <!-- new product -->
    <section class="new_arrivals_area padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-heading text-center">
                        <h2>BERSHKA</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($bershka as $value)
                    <div class="col-lg-3 col-md-4 col-6">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <a href="{{ route('product', $value->id) }}">
                                    <img src="{{ url('upload.product') }}/{{ $value->image }}" alt=""></a>
                                <!-- Hover Thumb -->
                                {{-- <img class="hover-img" src="{{ url('assets-user') }}/img/product-img/product-2.jpg"
                                alt=""> --}}
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>{{ $value->getBrandName->name }}</span>
                                <a href="{{ route('product', $value->id) }}">
                                    <h6>{{ $value->name }}</h6>
                                </a>
                                <div class="d-flex justify-content-between">
                                    <p>
                                        <del class="product-price">{{ number_format($value->price) }}đ</del>
                                    </p>
                                    <p class="product-price text-danger" style="display: inline-block">{{ number_format($value->sale_price) }}đ</p>
                                </div>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{ route('product', $value->id) }}" class="btn essence-btn check-btn">View Product Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </section>
    <!-- new product end  -->
    <section class="new_arrivals_area padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-heading text-center">
                        <h2>ZARA</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($zara as $value)
                    <div class="col-lg-3 col-md-4 col-6">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <a href="{{ route('product', $value->id) }}">
                                    <img src="{{ url('upload.product') }}/{{ $value->image }}" alt=""></a>
                                <!-- Hover Thumb -->
                                {{-- <img class="hover-img" src="{{ url('assets-user') }}/img/product-img/product-2.jpg"
                                alt=""> --}}
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>{{ $value->getBrandName->name }}</span>
                                <a href="{{ route('product', $value->id) }}">
                                    <h6>{{ $value->name }}</h6>
                                </a>
                                <div class="d-flex justify-content-between">
                                    <p>
                                        <del class="product-price">{{ number_format($value->price) }}đ</del>
                                    </p>
                                    <p class="product-price text-danger" style="display: inline-block">{{ number_format($value->sale_price) }}đ</p>
                                </div>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{ route('product', $value->id) }}" class="btn essence-btn check-btn">View Product Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </section>
    <!-- banner info  -->
    <div class="banner-info">
        <div class="container-fuild">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-img bg-img">
                        <img src="{{ url('assets-user') }}/img/core-img/sp1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-title">
                        <h2>Essence</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus inventore a ipsam
                            doloremque aliquid impedit aperiam, accusantium consequatur numquam quasi fugit id. Eveniet
                            quos earum minima perferendis tempora perspiciatis vel!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner info end -->

    <!-- new product 2 -->
    <section class="new_arrivals_area padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-heading text-center">
                        <h2>NEW PRODUCTS</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($newpro as $value)
                    <div class="col-lg-3 col-md-4 col-6">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <a href="{{ route('product', $value->id) }}">
                                    <img src="{{ url('upload.product') }}/{{ $value->image }}" alt="">
                                </a>

                                <!-- Hover Thumb -->
                                {{-- <img class="hover-img" src="{{ url('assets-user') }}/img/product-img/product-2.jpg"
                                alt=""> --}}
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>{{ $value->getBrandName->name }}</span>
                                <a href="{{ route('product', $value->id) }}">
                                    <h6>{{ $value->name }}</h6>
                                </a>
                                <div class="d-flex justify-content-between">
                                    <p>
                                        <del class="product-price">{{ number_format($value->price) }}đ</del>
                                    </p>
                                    <p class="product-price text-danger" style="display: inline-block">{{ number_format($value->sale_price) }}đ</p>
                                </div>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{ route('product', $value->id) }}" class="btn essence-btn check-btn">View Product Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- new product 2 end  -->
    <section class="new_arrivals_area padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-heading text-center">
                        <h2>SALE PRODUCTS</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($salepro as $value)
                    <div class="col-lg-3 col-md-4 col-6">
                        <!-- Single Product -->
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img">
                                <a href="{{ route('product', $value->id) }}">
                                    <img src="{{ url('upload.product') }}/{{ $value->image }}" alt="">
                                </a>

                                <!-- Hover Thumb -->
                                {{-- <img class="hover-img" src="{{ url('assets-user') }}/img/product-img/product-2.jpg"
                                alt=""> --}}
                            </div>
                            <!-- Product Description -->
                            <div class="product-description">
                                <span>{{ $value->getBrandName->name }}</span>
                                <a href="{{ route('product', $value->id) }}">
                                    <h6>{{ $value->name }}</h6>
                                </a>
                                <div class="d-flex justify-content-between">
                                    <p>
                                        <del class="product-price">{{ number_format($value->price) }}đ</del>
                                    </p>
                                    <p class="product-price text-danger" style="display: inline-block">{{ number_format($value->sale_price) }}đ</p>
                                </div>

                                <!-- Hover Content -->
                                <div class="hover-content">
                                    <!-- Add to Cart -->
                                    <div class="add-to-cart-btn">
                                        <a href="{{ route('product', $value->id) }}" class="btn essence-btn check-btn">View Product Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- .discount -->
    <div class="discount padding-40">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Get <span>20% Off</span> Your Next Order</h2>
                    </div>
                    <div class="discount_container">
                        <div class="subscribe_form">
                            <form id="mc-form" class="mc-form footer-discount" novalidate="true">
                                <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email"
                                    name="EMAIL">
                                <button id="mc-submit">Subscribe</button>
                                <div class="email_icon">
                                    <i class="fa-regular fa-envelope"></i>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .discount end -->
@endsection
