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
                        {{-- change here --}}
                        <div class="box-bought">
                            <div class="single_box_buy">
                                @foreach ($Order_details as $item)
                                <div class="delivery">
                                    <div>
                                        @if ($item->status == 1)
                                        <td><span class="badge bg-info">Chờ Xử Lý</span></td>
                                        
                                    @elseif ($item->status == 2)
                                        <td><span class="badge bg-warning">Đang Xử Lý</span></td>
                                    @else
                                        <i class="fa-solid fa-truck"></i>
                                        <span>Giao hàng thành công</span>
                                        <td><span class="badge bg-success">Hoàn Thành</span></td>
                                    @endif
                                    </div>
                                </div>
                                <div class="card product_purchased">
                                    <div class="row">
                                        <div class="col-md-10 product">
                                            <div class="product_img">
                                                
                                                <img src="{{ url('upload.product') }}//{{ $item->image }}"
                                                    class="img-fluid rounded-start" alt="...">
                                            </div>
                                            <div class="product_title">
                                                <div>
                                                    <h5>{{ $item->name }}</h5>
                                                    <span>Phân loại Hàng :{{$item->size}} </span>
                                                    <p>Số lượng : {{ $item->quantity }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 product_price">
                                                <del>{{ $item->price }}</del>
                                                <span>{{ $item->sale_price }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="into_money--product">
                                    <div>
                                        <i class="fa-solid fa-money-check-dollar"></i>
                                        <span>Thành Tiền :</span>
                                    </div>
                                    <div>{{$item->total_price}}</div>
                                    
                                </div>
                                @endforeach
                                
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
