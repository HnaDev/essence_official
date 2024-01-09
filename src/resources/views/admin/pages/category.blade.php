@extends('master')
@section('content')
    <div class="app-title d-flex justify-content-between">
        <ul class="app-breadcrumb breadcrumb side ">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách danh mục</b></a></li>
        </ul>
        <ul class="app-breadcrumb breadcrumb side ">
            <li class="breadcrumb-item active">
                <form action="" method="get">
                    <div class="input-group">
                        <input type="text" name="keyword" class="input-search form-control rounded" placeholder="Search"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn-search btn btn-outline-primary">Search</button>
                    </div>
                </form>
            </li>
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
                            <a class="btn btn-add btn-sm" href="{{ route('admin.category_add') }}" title="Thêm"><i
                                    class="fas fa-plus"></i>
                                Tạo mới Danh Mục</a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Loại Danh Mục</th>
                                <th>Tên Danh Mục</th>
                                <th>Trạng Thái</th>
                                <th>Tính Năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Categories as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    @if ($item->type == 1)
                                    <td>Women</td>
                                    @elseif ($item->type == 2)
                                    <td>Men</td>
                                    @elseif ($item->type == 3)
                                        <td>Kids</td>
                                    @endif
                                    <td>{{ $item->name }}</td>
                                    @if ($item->status == 1)
                                        <td class="m-3 p-1 badge bg-success">Hiện</td>
                                    @else
                                        <td class="m-3 p-1 badge bg-danger">Ẩn</td>
                                    @endif
                                    <td class="table-td-center">
                                        <a href="{{ route('admin.category_update_show', $item->id) }}" type="submit"
                                            class="btn btn-success">Sửa</a>
                                        <a href="{{ route('admin.category_delete', $item->id) }}" type="submit"
                                            class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        {{ $Categories->links() }}
    </div>
@endsection
