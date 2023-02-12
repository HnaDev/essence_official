@extends('master')
@section('content')
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
      </ul>
      <ul class="app-breadcrumb breadcrumb side ">
            <li class="breadcrumb-item active">
                <form action="" method="get">
                    <div class="input-group z-index-0">
                        <input type="text" name="keyword" class="input-search form-control rounded" placeholder="Search"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn-search btn btn-outline-primary">Search</button>
                    </div>
                </form>
            </li>
        </ul>
    </div>

    {{-- allert notification --}}
    @if (session('notification'))
      <div class="alert alert-success">
          {{ session('notification') }}
      </div>
    @endif
        {{-- allert notification end --}}
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" href="{{route('admin.product_add')}}" title="Thêm"><i class="fas fa-plus"></i>
                  Tạo mới sản phẩm</a>
              </div>
            </div>
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Tên Sản Phẩm</th>
                  <th>Giá</th>
                  <th>Giá Khuyến Mại</th>
                  <th>Ảnh</th>
                  <th>Mô Tả</th>
                  <th>Trạng Thái</th>
                  <th>Xuất Sứ</th>
                  <th>Năm Sản Xuất</th>
                  <th>Danh Mục</th>
                  <th>Thương Hiệu</th>
                  <th>Tồn kho</th>
                  {{-- <th>Loại danh mục</th> --}}
                  <th>Tính Năng</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $item)

                <tr>
                  <td>{{$item->name}}</td>
                  <td>{{number_format($item->price)}}đ</td>
                  <td>{{number_format($item->sale_price)}}đ</td>
                  <td>
                    <img src="{{url('upload.product')}}/{{$item->image}}" width="200px"
                      alt="">
                  </td>
                  <td width="300px">{{$item->description}}</td>
                  @if ($item->status == 1)
                  <td class="m-3 p-1 badge bg-success">Đang bán</td>
                  @else
                  <td class="m-3 p-1 badge bg-danger">Ngừng bán</td>
                  @endif
                  <td>{{$item->origin}}</td>
                  <td>{{$item->year}}</td>
                  <td>{{$item->getCategoryName->name}}</td>
                  <td>{{$item->getBrandName->name}}</td>
                  <td>{{$item->stock}}</td>
                  {{-- <td>{{$item->getTypeName->name}}</td> --}}
                  <td class="table-td-center">
                      <a href="{{route('admin.product_update_show',$item->id)}}" type="submit" class="btn btn-success">Sửa</a>
                      <a href="{{route('admin.product_delete',$item->id)}}" type="submit" class="btn btn-danger" onclick = "return confirm('Bạn có muốn xóa?')">Xóa</a>
                  </td>
                </tr>
                @endforeach
            </table>
          </div>

        </div>
      </div>
    </div>
@endsection
