@extends('master_user')
@section('container')
    <div class="container">
        <div class="row" style="padding-top: 20px">
            @if (Auth::check())
                <div class="col-md-3">
                    @if (Auth::check())
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ Auth::user()->full_name }}</h5>
                                <p class="card-text">Quản Lý Đơn Hàng</p>
                            </div>
                        </div>
                    @endif
                    <ul class="list-group" style="padding: 10px 0px">
                        <li class="list-group-item active" aria-current="true">Đơn Mua</li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="box-order">
                        <div class="menu-order">
                            <ul class="d-flex">
                                <li><a href="#">Tất Cả</a></li>
                                <li><a href="#">Chờ Thanh Toán</a></li>
                                <li><a href="#">Vận Chuyển</a></li>
                                <li><a href="#">Đang Giao</a></li>
                                <li><a href="#">Hoàn Thành</a></li>
                                <li><a href="#">Đã Hủy</a></li>
                                <li><a href="#">Trả Hàng/Hoàn Tiền</a></li>
                            </ul>
                        </div>
                        <div class="search-order">
                            <form action="" method="get">
                                <input type="text" name="" id=""
                                    placeholder="Bạn có thể tìm kiếm theo tên Shop, ID đơn hàng hoặc Tên Sản phẩm">
                                <button type="submit">Tìm Kiếm</button>
                            </form>
                        </div>
                        {{-- change here --}}
                        <div class="box-bought">
                            <div class="single_box_buy">
                                <div class="delivery">
                                    <div>
                                        <i class="fa-solid fa-truck"></i>
                                        <span>Giao hàng thành công</span>
                                    </div>
                                    <div>Hoàn Thành</div>
                                </div>
                                <div class="card product_purchased">
                                    <div class="row">
                                        <div class="col-md-10 product">
                                            <div class="product_img">
                                                <img src="https://i.pinimg.com/564x/4c/73/20/4c7320a9d200b90bafbf1f79ffdef61e.jpg"
                                                    class="img-fluid rounded-start" alt="...">
                                            </div>
                                            <div class="product_title">
                                                <div>
                                                    <h5>Áo thun nam nữ Unisex ADLV acme de la vie  áo phông nam nữ form rộng áo thun stee áo thun unisex</h5>
                                                    <span>Phân loại Hàng : Đen,L </span>
                                                    <p>Số lượng : 1</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 product_price">
                                                <del>120.000đ</del>
                                                <span>90.000đ</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="into_money--product">
                                    <div>
                                        <i class="fa-solid fa-money-check-dollar"></i>
                                        <span>Thành Tiền :</span>
                                    </div>
                                    <div>120.000đ</div>
                                    <div>
                                        <button type="submit">Mua lại</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- change here --}}
                    </div>
                </div>
            @else
                <div class="container" style="height: 100vh">
                    <div class="row justify-content-center" style="padding: 350px">
                        <div class="col-12">
                            <h1 class="text-center" style="font-weight: 500">Chưa Có Đơn Hàng !</h1>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
