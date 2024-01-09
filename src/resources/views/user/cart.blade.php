@extends('master_user')
@section('container')
    <div class="container padding-80">
        @if (Session()->get('cart'))
        <h2 class="text-center pb-5 shopping_cart">Shopping Cart</h2>
        <div class="row bb-1">
            <div class="col-md-8 col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" colspan="3">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Size</th>
                            <th scope="col">Color</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cart->getItem() as $item)
                            <tr>
                                <td class="pd-15 icon-close">
                                    <a href="{{ route('cart.delete', $item['id']) }}">
                                        <i class="fa-solid fa-xmark"></i>
                                    </a>
                                </td>
                                <td class="pd-15 product-image">
                                    <img src="{{ url('upload.product') }}/{{ $item['image'] }}" width="75"
                                        height="75" alt="">
                                </td>
                                <td class="pd-15 product-name">
                                    <a href="{{ route('product', $item['id']) }}">{{ $item['name'] }}</a>
                                </td>
                                <th class="pd-15 product-price">{{ number_format($item['price']) }}</th>
                                <td class="pd-15 product-size">
                                    {{ $item['attribute_size_id'] }}
                                </td>
                                <td class="pd-15 product-color">
                                    {{ $item['attribute_color_id'] }}
                                </td>
                                <td class="pd-15 product-quantity">
                                    <form action="{{ route('cart.update', $item['id']) }}" method="post">
                                        @csrf
                                        <input type="number" step="1" max="100" value="{{ $item['quantity'] }}"
                                            name="quantity" class="quantity-field border-0 text-center w-25">
                                        <button type="submit" class="btn-change">Change</button>
                                    </form>
                                </td>
                                <th class="pd-15 product-total">
                                    {{ number_format($item['quantity'] * $item['price']) }}đ
                                </th>
                            </tr>
                        @endforeach
                </table>
            </div>
            <div class="col-md-4 col-12 cart-right">
                <div class="cart_checkout">
                    <div class="plus_cart">Plus Shopping Cart</div>
                </div>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th class="pd-15">Provisional Amount</th>
                            <td class="pd-15">{{ number_format($cart->totalPrice()) }}đ</td>
                        </tr>
                        <tr>
                            <th class="pd-15">Transport fee</th>
                            <td class="pd-15">30.000đ</td>
                        </tr>
                        <tr>
                            <th class="pd-15">Total Money</th>
                            <td class="pd-15">{{ number_format($cart->totalPrice() + 30000) }}đ</td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-checkout">
                    <a href="{{ route('checkout') }}">Proceed to Payment</a>
                </div>
            </div>
        </div>
        @else
            <h2 class="text-center pb-5 shopping_cart">You Have No Products In Shopping Cart !</h2>
        @endif
    </div>
@endsection
