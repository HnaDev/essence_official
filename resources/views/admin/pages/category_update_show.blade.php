@extends('master')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh Sách Danh Mục</li>
            <li class="breadcrumb-item"><a href="#">Add category</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <form class="row" method="post">
                        @csrf
                        <div class="form-group col-md-3">
                            <label class="control-label">Loại Danh Mục</label>
                            <input class="form-control" type="text" name="type" value="{{ $Categories->type }}">
                            @error('type')
                                <div class="alert alert-danger cl-red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-3 ">
                            <label class="control-label">Tên Danh Mục</label>
                            <input class="form-control" type="text" name="name" value="{{ $Categories->name }}">
                            @error('name')
                                <div class="alert alert-danger cl-red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-3 ">
                            <label for="exampleSelect1" class="control-label">Trạng Thái</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="1"
                                    id="flexRadioDefault1" {{ $Categories->status == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Hiện
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="0"
                                    id="flexRadioDefault2" {{ $Categories->status == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Ẩn
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <td class="table-td-center">
                                <button type="submit" class="btn btn-success">Lưu</button>
                                <a href="{{ route('admin.category') }}" type="submit" class="btn btn-danger">Hủy</a>
                            </td>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
