@extends('master')
@section('content')
    <div class="row">
      <div class="col-md-12">
        <div class="app-title">
          <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="#"><b>Bảng Thống Kê</b></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <!--Left-->
      <div class="col-md-12 col-lg-12">
        <div class="row">
          <!-- col-6 -->
          <div class="col-md-6">
            <div class="widget-small primary coloured-icon"><i class='icon bx bxs-user-account fa-3x'></i>
              <div class="info">
                <h4>Tổng khách hàng</h4>
                <p><b>{{$Users}}</b></p>
                <p class="info-tong">Tổng số khách hàng được quản lý.</p>
              </div>
            </div>
          </div>
          <!-- col-6 -->
          <div class="col-md-6">
            <div class="widget-small info coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
              <div class="info">
                <h4>Tổng sản phẩm</h4>
                <p><b>{{$Products}}</b></p>
                <p class="info-tong">Tổng số sản phẩm được quản lý.</p>
              </div>
            </div>
          </div>
          <!-- col-6 -->
          <div class="col-md-6">
            <div class="widget-small warning coloured-icon"><i class='icon bx bxs-shopping-bags fa-3x'></i>
              <div class="info">
                <h4>Tổng đơn hàng</h4>
                <p><b>{{$Orders}}</b></p>
                <p class="info-tong">Tổng số hóa đơn bán hàng trong tháng.</p>
              </div>
            </div>
          </div>
          <!-- col-6 -->
          <div class="col-md-6">
            <div class="widget-small danger coloured-icon"><i class='icon bx bxs-error-alt fa-3x'></i>
              <div class="info">
                <h4>Sắp hết hàng</h4>
                <p><b>{{$Order_end}}</b></p>
                <p class="info-tong">Số sản phẩm cảnh báo hết cần nhập thêm.</p>
              </div>
            </div>
          </div>
          <!-- col-12 -->
          <div class="col-md-12">
            <div class="tile">
              <h3 class="tile-title">Tình trạng đơn hàng</h3>
              <div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ID đơn hàng</th>
                      <th>Tên khách hàng</th>
                      <th>Tổng tiền</th>
                      <th>Trạng thái</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($Order as $item)
                      <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->full_name}}</td>
                      <td>{{number_format($item->total_price)}}đ</td>
                      @if ($item->status == 1)
                      <td><span class="badge bg-info">Chờ Xử Lý</span></td>
                       @elseif ($item->status == 2)
                      <td><span class="badge bg-warning">Đang Xử Lý</span></td>
                      @else
                      <td><span class="badge bg-success">Hoàn Thành</span></td>
                  @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- / div trống-->
            </div>
          </div>
          <!-- / col-12 -->
          <!-- col-12 -->
          <div class="col-md-12">
            <div class="tile">

              <h3 class="tile-title">Khách hàng mới</h3>
              <div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tên khách hàng</th>
                      <th>Email</th>
                      <th>Địa chỉ</th>
                      <th>Số điện thoại</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($User as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->full_name}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->address}}</td>
                      <td><span class="tag tag-success">{{$item->phone}}</span></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

            </div>
          </div>
          <!-- / col-12 -->
        </div>
      </div>
    </div>
@endsection
