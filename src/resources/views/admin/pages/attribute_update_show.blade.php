@extends('master')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh Sách Thuộc tính</li>
            <li class="breadcrumb-item"><a href="#">Thêm Thuộc Tính</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo Mới Thuộc Tính</h3>
                <div class="tile-body">
                    <form class="row" method="post">
                        @csrf
                        <div class="form-group col-md-3 ">
                            <label class="control-label">Tên Thuộc Tính</label>
                            <select class="form-control inputchange" value="name" name="name" required>
                                <option class="Color" value="Color">Color</option>
                                <option value="Size">Size</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3 value_color">
                            <label class="control-label">Gía Trị</label>
                            <input class="form-control v1" type="color" name="value">
                        </div>
                        <div class="form-group col-md-3 value_size d-none">
                            <label class="control-label">Gía Trị</label>
                            <input class="form-control v2" type="text" name="">
                        </div>
                        
                        <div class="form-group ">
                            <td class="table-td-center">
                                <button type="submit" class="btn btn-success">Lưu</button>
                                <a href="{{ route('admin.attribute') }}" type="submit" class="btn btn-danger">Hủy</a>
                            </td>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@section('src')
    <script>
        let inputchange = document.querySelector('.inputchange');
        let value_color = document.querySelector('.value_color');
        let value_size = document.querySelector('.value_size');
        let v1 = document.querySelector('.v1');
        let v2 = document.querySelector('.v2');
        inputchange.addEventListener("click", toggleClick);

        function toggleClick() {
            if (inputchange.value == 'Size') {
                // ẩn color
                value_color.classList.add('d-none');
                // hiện size
                value_size.classList.remove('d-none');
                // set input size name="value"
                v2.setAttribute('name','value');
                // set input color name=" rooxng "
                v1.setAttribute('name','');
            }else{
                value_color.classList.remove('d-none');
                value_size.classList.add('d-none');
                v2.setAttribute('name','');
                v1.setAttribute('name','value');
            }
        }
    </script>
@endsection
@endsection
