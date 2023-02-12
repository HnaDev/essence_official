@extends('master')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách Thương Hiệu</b></a></li>
        </ul>
        {{-- allert notification --}}
        @if (session('notification'))
            <div class="alert alert-success">
                {{ session('notification') }}
            </div>
        @endif
        {{-- allert notification end --}}
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="{{ route('admin.brands_add') }}" title="Thêm"><i
                                    class="fas fa-plus"></i>
                                Tạo mới Thương Hiệu</a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên Thương Hiệu</th>
                                <th>Trạng Thái</th>
                                <th>Logo</th>
                                <th>Tính Năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Brands as $Brands)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $Brands->name }}</td>
                                    @if ($Brands->status == 1)
                                        <td class="m-3 p-1 badge bg-success">Hiện</td>
                                    @else
                                        <td class="m-3 p-1 badge bg-danger">Ẩn</td>
                                    @endif
                                    <td>
                                        <img src="{{ url('image_brands') }}/{{ $Brands->logo }}" alt=""
                                            width="50px" height="50px">
                                    </td>
                                    <td class="table-td-center">
                                        <a href="{{ route('admin.brands_update_show', $Brands->id) }}"
                                            class="btn btn-success">Sửa</a>
                                        <a href="{{ route('admin.brands_delete', $Brands->id) }}"
                                            class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
@endsection
