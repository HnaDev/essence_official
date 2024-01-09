@extends('master')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh Sách Thương Hiệu</li>
            <li class="breadcrumb-item"><a href="#">Thêm Mới Thương Hiệu</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Thêm Mới Thương Hiệu</h3>
                <div class="tile-body">
                    <form class="row" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-3">
                            <label class="control-label">Tên Thương Hiệu</label>
                            <input class="form-control" type="text" name="name" value="{{ $Brands->name }}">
                            @error('name')
                                <div class="alert alert-danger cl-red">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-3 ">
                            <label for="exampleSelect1" class="control-label">Trạng Thái</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="1"
                                    id="flexRadioDefault2" {{ $Brands->status == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Hiện
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="0"
                                    id="flexRadioDefault1"{{ $Brands->status == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Ẩn
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-12 p-3">
                            <label class="control-label pr-1">Logo</label>
                            <input type="file" id="" name="logo">
                            <div>
                                <img src="{{ url('image_brands') }}/{{ $Brands->logo }}" alt="" width="200px"
                                    style="margin:10px 0px ;padding: 40px; border: 1px solid #ccc">
                            </div>
                            @error('logo')
                                <div class="alert alert-danger cl-red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="table-td-center">
                            <button type="submit" class="btn btn-success">Lưu</button>
                            <a href="{{ route('admin.brands') }}" type="submit" class="btn btn-danger">Hủy</a>
                        </div>
                    </form>
                </div>
            </div>
        @endsection
