@extends('master_user')
@section('product')
    <!--  right side cart -->
    <div class="cart-bg-overlay"></div>
    <div class="right-card-cart">
        <!-- cart buton -->
        <a href="#" id="rightSideCart">
            <i class="fa-solid fa-bag-shopping"></i>
        </a>
        <!-- cart buton -->

        <!-- cart-list -->
        <div class="container-fuild d-flex">
            <div class="row">
                <div class="col-4">
                    <div class="single-cart-item">
                        <a href="#" class="product-image">

                            <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">

                            <!-- Cart Item Desc -->
                            <div class="cart-item-desc">
                                <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                                <span class="badge">Mango</span>
                                <h6>Button Through Strap Mini Dress</h6>
                                <p class="size">Size: S</p>
                                <p class="color">Color: Red</p>
                                <p class="price">$45.00</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-cart-item">
                        <a href="#" class="product-image">
                            <img src="img/product-img/product-2.jpg" class="cart-thumb" alt="">
                            <!-- Cart Item Desc -->
                            <div class="cart-item-desc">
                                <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                                <span class="badge">Mango</span>
                                <h6>Button Through Strap Mini Dress</h6>
                                <p class="size">Size: S</p>
                                <p class="color">Color: Red</p>
                                <p class="price">$45.00</p>
                            </div>
                        </a>
                    </div>
                    <div class="single-cart-item">
                        <a href="#" class="product-image">
                            <img src="img/product-img/product-3.jpg" class="cart-thumb" alt="">
                            <!-- Cart Item Desc -->
                            <div class="cart-item-desc">
                                <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                                <span class="badge">Mango</span>
                                <h6>Button Through Strap Mini Dress</h6>
                                <p class="size">Size: S</p>
                                <p class="color">Color: Red</p>
                                <p class="price">$45.00</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- end cart-list -->

                <!-- cart-summary -->
                <div class="col-8">
                    <div class="cart-amount-summary">
                        <h2>Summary</h2>
                        <ul class="summary-table">
                            <li class="d-flex justify-content-between">
                                <span>subtotal:</span>
                                <span>$274.00</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>delivery:</span>
                                <span>Free</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>discount:</span>
                                <span>-15%</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>total:</span> <span>$232.00</span>
                            </li>
                        </ul>
                        <div class="checkout-btn mt-100">
                            <a href="checkout.html" class="btn check-btn">check out</a>
                        </div>
                    </div>
                </div>
                <!--    end cart-summfary -->
            </div>
        </div>
    </div>
    <!-- right Side Cart end   -->

    <!-- product details -->
    <div class="product_details">
        <div class="container-fuild">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single_product_thumb">
                        <div class="product_thumbnail_slides owl-carousel">
                            @foreach ($prodetail->imgs as $value)
                                <div class="item">
                                    <img class="bg-img" src="{{ url('upload.product') }}\{{ $value->image }}"
                                        alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="single_product_desc">
                        <span>{{ $prodetail->getBrandName->name }}</span>
                        <a href="#">
                            <h2>{{ $prodetail->name }}</h2>
                        </a>
                        @if ($prodetail->sale_price > 0)
                            <p class="product-price"><span>{{ number_format($prodetail->price) }}đ</span>{{ number_format($prodetail->sale_price) }}đ</p>
                        @else
                            <p class="product-price">{{ number_format($prodetail->price) }}đ</p>
                        @endif
                        <p class="product-desc">{!! $prodetail->description !!}</p>

                        <!-- Form -->
                        <form action="{{ route('cart.add', $prodetail->id) }}" method="POST">
                            @csrf
                            {{-- quantity --}}
                            <div class="quatity">
                                <label for="">Số Lượng:</label>
                                <input type="number" step="1" max="100" value="1" name="quantity"
                                    class="quantity-field border-0 text-center w-25">
                            </div>
                            <!-- Select Box -->
                            <div class="select-box padding-40">
                                <select name="attribute_size_id" id="productSize">
                                    @foreach ($prodetail->attrs as $value)
                                        @if ($value->attribute_size_id != '')
                                            <option value="{{ $value->getSize($value->attribute_size_id)->value }}"
                                                name="attribute_size_id">
                                                {{ $value->getSize($value->attribute_size_id)->value }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                                <select name="attribute_color_id" id="productColor">
                                    @foreach ($prodetail->attrs as $value)
                                        @if ($value->attribute_color_id != '')
                                            <option value="{{ $value->getColor($value->attribute_color_id)->value }}"
                                                name="attribute_color_id">
                                                {{ $value->getColor($value->attribute_color_id)->value }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <!-- Cart & Favourite Box -->
                            <div class="cart-fav-box d-flex align-items-center">
                                <!-- Cart -->
                                <button type="submit" class="btn essence-btn check-btn">Add to
                                    cart</button>
                                    {{-- <div class="checkout">
                                        <a href="" class="btn essence-btn check-btn">Checkout</a>
                                    </div> --}}
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- product details ênd -->
    <script src="{{ url('assets-user') }}/js/cart.js"></script>
    <script src="{{ url('assets-user') }}/OwlCarousel/dist/jquery-3.6.2.min.js"></script>
    <script src="{{ url('assets-user') }}/OwlCarousel/dist/owl.carousel.min.js"></script>
    <script>
        $('.product_thumbnail_slides').owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: [`<i class="fa-solid fa-arrow-left item-left"></i>`,
                `<i class="fa-solid fa-arrow-right item-right"></i>`
            ],
            dots: false,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000
        });
    </script>
@endsection
