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
                <h3 class="tile-title">Sửa sản phẩm</h3>
                <div class="tile-body">
                    <form class="row" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-3">
                            <label class="control-label">Tên Sản Phẩm</label>
                            <input class="form-control" type="text" name="name" value="{{ $product->name }}">
                            {{-- @error('name')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror --}}
                        </div>
                        <div class="form-group  col-md-3">
                            <label class="control-label">Giá</label>
                            <input class="form-control" type="text" name="price" value="{{ $product->price }}">
                            {{-- @error('price')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror --}}
                        </div>
                        <div class="form-group  col-md-3">
                            <label class="control-label">Giá Khuyến Mại</label>
                            <input class="form-control" type="text" name="sale_price" value="{{ $product->sale_price }}">
                            {{-- @error('sale_price')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror --}}
                        </div>
                        <div class="form-group  col-md-3">
                            <label class="control-label">Xuất Xứ</label>
                            <input class="form-control" type="text" name="origin" value="{{ $product->origin }}">
                            {{-- @error('origin')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror --}}
                        </div>
                        <div class="form-group  col-md-3">
                            <label class="control-label">Năm Sản Xuất</label>
                            <input class="form-control" type="text" name="year" value="{{ $product->year }}">
                            {{-- @error('year')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror --}}
                        </div>
                        <div class="form-group  col-md-3">
                            <label class="control-label">Tồn kho</label>
                            <input class="form-control" type="number" name="stock" value="{{ $product->stock }}">
                            {{-- @error('stock')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror --}}
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleSelect1" class="control-label">Danh Mục</label>
                            <select class="form-control" id="exampleSelect1" name="category_id">
                                <option>-- Chọn Danh mục --</option>
                                @foreach ($category as $value)
                                    <option value="{{ $value->id }}"
                                        {{ $value->id == $product->category_id ? 'selected' : '' }}>{{ $value->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    
                        <div class="form-group col-md-3">
                            <label for="exampleSelect1" class="control-label">Thương Hiệu</label>
                            <select class="form-control" id="exampleSelect1" name="brand_id">
                                <option>-- Chọn Thương hiệu --</option>
                                @foreach ($brand as $value)
                                    <option value="{{ $value->id }}"
                                        {{ $value->id == $product->brand_id ? 'selected' : '' }}>{{ $value->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                       
                        <div class="form-group col-md-3 ">
                            <label for="exampleSelect1" class="control-label">Trạng Thái</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="1"
                                    id="flexRadioDefault1" {{ $product->status == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Đang bán
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status" value="0"
                                    id="flexRadioDefault2" {{ $product->status == 0 ? 'checked' : '' }}>
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
                                        @if ($product->getAtS($value->id, $product->id) != null)
                                            <input class="form-check-input" type="checkbox" id="check1"
                                                name="attr_size_id[]" value="{{ $value->id }}"
                                                {{ $product->getAtS($value->id, $product->id)->attribute_size_id == $value->id ? 'checked' : '' }}>
                                        @else
                                            <input class="form-check-input" type="checkbox" id="check1"
                                                name="attr_size_id[]" value="{{ $value->id }}">
                                        @endif

                                        <label class="form-check-label">{{ $value->value }}</label>

                                    </div>
                                @endforeach
                            </div>

                            {{-- @error('size_id')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror --}}
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleSelect1" class="control-label">Màu sắc</label>
                            <div class="form-check">
                                @foreach ($color as $value)
                                    <div>
                                        @if ($product->getAtC($value->id, $product->id) != null)
                                            <input class="form-check-input" type="checkbox" id="check1"
                                                name="attr_color_id[]" value="{{ $value->id }}"
                                                {{ $product->getAtC($value->id, $product->id)->attribute_color_id == $value->id ? 'checked' : '' }}>
                                        @else
                                            <input class="form-check-input" type="checkbox" id="check1"
                                                name="attr_color_id[]" value="{{ $value->id }}">
                                        @endif

                                        <label class="form-check-label">{{ $value->value }}</label>
                                    </div>
                                @endforeach
                            </div>
                            {{-- @error('color_id')
                  <div class="alert alert-danger">{{$message}}</div>
                  @enderror --}}
                            </select>
                        </div>

                        <div class="form-group  col-md-12">
                            <label class="control-label">Mô tả</label>
                            <textarea type="text" id="editor1" rows="10" cols="80" name="description">
                {{ $product->description }}
                </textarea>
                            {{-- @error('description')
                  <div class="alert alert-danger" >{{$message}}</div>
                @enderror --}}
                        </div>
                        <div class="form-group col-md-12 p-3">
                            <label class="control-label pr-1">Ảnh Sản Phẩm:</label>
                            <input type="file" id="" name="image" />
                            <img src="{{ url('upload.product') }}/{{ $product->image }}" alt="" width=100px>
                            {{-- @error('image')
                  <div class="alert alert-danger">{{$message}}</div>
                @enderror --}}
                        </div>
                        <div class="form-group col-md-12 p-3">
                            <label class="control-label pr-1">Ảnh mô tả sản phẩm:</label>
                            <input type="file" id="" name="images[]" multiple />
                            @foreach ($product_images as $item)
                                <img src="{{ url('upload.product') }}/{{ $item->image }}" alt="" width=100px>
                            @endforeach
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
@stop
@stop
{{--  --}}
