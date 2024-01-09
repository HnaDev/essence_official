@extends('master')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách sản phẩm</li>
            <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo mới sản phẩm</h3>
                <div class="tile-body">
                    <form class="row" action="{{ route('admin.product_create') }}" method="POST"
                        enctype="multipart/form-data" id="usrform">
                        @csrf
                        <div class="form-group col-md-3">
                            <label class="control-label">Tên Sản Phẩm</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group  col-md-3">
                            <label class="control-label">Giá</label>
                            <input class="form-control" type="text" name="price" value="{{ old('price') }}">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group  col-md-3">
                            <label class="control-label">Giá Khuyến Mại</label>
                            <input class="form-control" type="text" name="sale_price" value="{{old('sale_price')}}">
                            @error('sale_price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group  col-md-3">
                            <label class="control-label">Xuất Xứ</label>
                            <input class="form-control" type="text" name="origin" value="{{ old('origin') }}">
                            @error('origin')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group  col-md-3">
                            <label class="control-label">Năm Sản Xuất</label>
                            <input class="form-control" type="text" name="year" value="{{ old('year') }}">
                            @error('year')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group  col-md-3">
                            <label class="control-label">Tồn kho</label>
                            <input class="form-control" type="number" name="stock" value="{{ old('stock') }}">
                            @error('stock')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleSelect1" class="control-label">Danh Mục</label>
                            <select class="form-control" id="exampleSelect1" name="category_id"
                                value="{{ old('category_id') }}">
                                <option value="null">-- Chọn Danh mục --</option>
                                @foreach ($category as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-3">
                            <label for="exampleSelect1" class="control-label">Thương Hiệu</label>
                            <select class="form-control" id="exampleSelect1" name="brand_id">
                                <option>-- Chọn Thương hiệu --</option>
                                @foreach ($brand as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                @endforeach
                            </select>
                            @error('brand_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="form-group col-md-3 ">
                            <label for="exampleSelect1" class="control-label">Trạng Thái</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="1"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Đang bán
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="0"
                                    id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">Ngừng bán</label>
                            </div>
                            @error('status')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleSelect1" class="control-label">Kích thước</label>
                            <div class="form-check">
                                @foreach ($size as $value)
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="check1"
                                            name="attr_size_id[]" value="{{ $value->id }}">
                                        <label class="form-check-label">{{ $value->value }}</label>
                                    </div>
                                @endforeach
                            </div>
                            @error('size_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleSelect1" class="control-label">Màu sắc</label>
                            <div class="form-check">
                                @foreach ($color as $value)
                                    <div>
                                        <input class="form-check-input" type="checkbox" id="check1"
                                            name="attr_color_id[]" value="{{ $value->id }}">
                                        <label class="form-check-label">{{ $value->value }}</label>
                                    </div>
                                @endforeach
                            </div>
                            @error('color_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group  col-md-12">
                            <label class="control-label">Mô tả</label>
                            <textarea id="editor1" rows="10" cols="80" form="usrform" name="description"
                                value="{{ old('description') }}">
                                Nhập mô tả sản phẩm
                            </textarea>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-12 p-3">
                            <label class="control-label pr-1">Ảnh Sản Phẩm:</label>
                            <input type="file" id="" name="image" value="{{ old('image') }}" />
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-12 p-3">
                            <label class="control-label pr-1">Ảnh mô tả sản phẩm:</label>
                            <input type="file" id="" name="images[]" multiple
                                value="{{ old('images') }}" />
                        </div>
                        <div class="form-group">
                            <td class="table-td-center">
                                <button type="submit" class="btn btn-success">Lưu</button>
                                <a href="{{ route('admin.product') }}" type="submit" class="btn btn-danger">Hủy</a>
                            </td>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@section('src')
    <script src="{{ url('assets-admin') }}/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor1');
    </script>
@endsection
@endsection
