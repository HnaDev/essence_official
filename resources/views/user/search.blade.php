@extends('master_user')
@section('search')
 <!-- banner shop -->
 <div class="banner-shop">
    <div class="container h-100">
        <div class="row flex_center h-100">
            <div class="col-12">
                <h2>dresses</h2>
            </div>
        </div>
    </div>
</div>
<!-- banner shop end -->

<!-- shop gird area -->

<div class="shop_gird_area padding-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop_sidebar_area">
                    <!-- ##### Single Widget ##### -->
                    <div class="widget catagory mb-50">
                        <!-- Widget Title -->
                        <h6 class="widget-title mb-30">Catagories</h6>

                        <!--  Catagories  -->
                        <div class="catagories-menu">
                            <ul id="menu-content2" class="menu-content collapse show">
                                <!-- Single Item -->
                                <li data-toggle="collapse" data-target="#clothing">
                                    <a href="#" class="menu-title1">clothing</a>
                                    <ul class="sub-menu collapse show" id="clothing">
                                        <li><a href="#">All</a></li>
                                        @foreach($categories as $item)
                                        <li><a href="#">{{$item ->name}}</a></li>
                                        @endforeach
                                        {{-- <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Hoodies &amp; Sweats</a></li>
                                        <li><a href="#">Jackets &amp; Coats</a></li>
                                        <li><a href="#">Jeans</a></li>
                                        <li><a href="#">Pants &amp; Leggings</a></li>
                                        <li><a href="#">Rompers &amp; Jumpsuits</a></li>
                                        <li><a href="#">Shirts &amp; Blouses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Sweaters &amp; Knits</a></li> --}}
                                    </ul>
                                </li>
                                <!-- Single Item -->
                                <li data-toggle="collapse" data-target="#shoes" class="collapsed">
                                    <a href="#" class="menu-title2">shoes</a>
                                    <ul class="sub-menu collapse" id="shoes">
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">Bodysuits</a></li>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Hoodies &amp; Sweats</a></li>
                                        <li><a href="#">Jackets &amp; Coats</a></li>
                                        <li><a href="#">Jeans</a></li>
                                        <li><a href="#">Pants &amp; Leggings</a></li>
                                        <li><a href="#">Rompers &amp; Jumpsuits</a></li>
                                        <li><a href="#">Shirts &amp; Blouses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Sweaters &amp; Knits</a></li>
                                    </ul>
                                </li>
                                <!-- Single Item -->
                                <li data-toggle="collapse" data-target="#accessories" class="collapsed">
                                    <a href="#">accessories</a>
                                    <ul class="sub-menu collapse" id="accessories">
                                        <li><a href="#">All</a></li>
                                        <li><a href="#">Bodysuits</a></li>
                                        <li><a href="#">Dresses</a></li>
                                        <li><a href="#">Hoodies &amp; Sweats</a></li>
                                        <li><a href="#">Jackets &amp; Coats</a></li>
                                        <li><a href="#">Jeans</a></li>
                                        <li><a href="#">Pants &amp; Leggings</a></li>
                                        <li><a href="#">Rompers &amp; Jumpsuits</a></li>
                                        <li><a href="#">Shirts &amp; Blouses</a></li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">Sweaters &amp; Knits</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="shop_grid_product_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-topbar d-flex align-items-center justify-content-between">
                                <!-- Total Products -->
                                <div class="total-products">
                                    <p><span>{{count($search_product)}}</span> products found</p>
                                </div>
                                <!-- Sorting -->
                                        {{-- <div class="product-sorting d-flex">
                                            <p>Sort by category:</p>
                                            <form   >
                                                @csrf                                   
                                                <select name="sort1" id="sort1" class="form-control">
                                                    <option value="{{Request::url()}}?sort_by=highest_rated">Highest Rated</option>
                                                    <option value="{{Request::url()}}?sort_by=newest">Newest</option>
                                                    <option value="{{Request::url()}}?sort_by=price_highest_low">Price: $$ - $</option>
                                                    <option value="{{Request::url()}}?sort_by=price_lowest_high">Price: $ - $$</option>
                                                </select>
                                                
                                            </form>
                                        </div>       --}}
                                <!-- Sorting -->
                                <div class="product-sorting d-flex">
                                    <p>Sort by:</p>
                                    <form   >
                                        @csrf                                   
                                        <select name="sort" id="sort" class="form-control">
                                            <option value="{{Request::url()}}?sort_by=none">No sort</option>
                                            <option value="{{Request::url()}}?sort_by=highest_rated">Highest Rated</option>
                                            <option value="{{Request::url()}}?sort_by=newest">Newest</option>
                                            <option value="{{Request::url()}}?sort_by=price_highest_low">Price: $$ - $</option>
                                            <option value="{{Request::url()}}?sort_by=price_lowest_high">Price: $ - $$</option>
                                        </select>
                                        <input type="submit" class="d-none" value="">   
                                        {{--         --}}
                                    </form>
                                </div>      
                            </div>  
                        </div>
                    </div>

                    <div class="row">

                        <!-- Single Product -->
                        @foreach($search_product as $item)
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <a href="{{route('product',$item->id)}}">
                                        <img src="{{ url('upload.product') }}/{{$item->image}}" alt="">
                                    </a>
                                    {{-- <img src="{{ url('upload.product') }}/{{$item->image}}" alt=""> --}}
                                    <!-- Hover Thumb -->
                                    {{-- <img class="hover-img" src="{{ url('assets-user') }}/img/product-img/product-2.jpg" alt=""> --}}

                                    <!-- Product Badge -->
                                    <div class="product-badge offer-badge">
                                        <span>-30%</span>
                                    </div>
                                    <!-- Favourite -->
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>

                                <!-- Product Description -->
                                <div class="product-description">
                                    <span>{{$item->name}}</span>
                                    <a href="single-product-details.html">
                                        <h6>Knot Front Mini Dress</h6>
                                    </a>
                                    <p class="product-price"><span class="old-price"></span>{{$item->price}}</p>

                                    <!-- Hover Content -->
                                    <div class="hover-content">
                                        <!-- Add to Cart -->
                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn essence-btn check-btn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
        $(document).ready(function()    {
                $('#sort').on('change',function(){
                    var url = $(this).val();
                    // alert(url);                 
                        if(url){
                            window.location = url;
                        }
                        return false;
                }); 
        })  
    </script>       
<!-- shop gird area end -->
@endsection