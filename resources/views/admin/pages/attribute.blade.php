@extends('master')
@section('content')
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách Thuộc tính</b></a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="{{ route('admin.attribute_add') }}" title="Thêm"><i
                                    class="fas fa-plus"></i>
                                Tạo mới Thuộc Tính</a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên Thuộc Tính</th>
                                <th>Gía Trị</th>
                                <th>Tính Năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Attribute as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    @if ($item->name == 'Color')
                                        <td>
                                            <p style="background-color: {{ $item->value }}">
                                                {{ $item->value }}
                                            </p>
                                        </td>
                                    @endif
                                    @if ($item->name == 'Size')
                                        <td>{{ $item->value }}</td>
                                    @endif
                                    <td class="table-td-center">
                                        <a type="submit" href="{{ route('admin.attribute_update_show', $item->id) }}"
                                            class="btn btn-success">Sửa</a>
                                        <a type="submit" href="{{ route('admin.attribute_delete', $item->id) }}"
                                            class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
