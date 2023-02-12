<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Http\Requests\Category_addRequest;
use App\Http\Requests\Category_updateRequest;

class CategorysController extends Controller
{

    public function category()
    {
        // withQueryString() : retain parameters on url
        $Categories = Categories::search()->paginate(6)->withQueryString();
        return view('admin.pages.category', compact('Categories'));
    }

    public function category_add()
    {
        return view('admin.pages.category-add');
    }

    // create
    public function category_create(Category_addRequest $request)
    {
        $Categories = Categories::create($request->all());
        if ($Categories) {
            return redirect()->route('admin.category')->with('notification','Thêm Mới Thành Công');
        }
    }

    // update show
    public function category_update_show ($id)
    {
        $Categories = Categories::find($id);
        return view('admin.pages.category_update_show', compact('Categories'));

    }
    public function category_update(Category_updateRequest $request,$id)
    {
        $Categories = Categories::find($id);
        $Categories->update($request->all());
        if ($Categories) {
            return redirect()->route('admin.category')->with('notification','Cập Nhật Thành Công');
        }
    }

    // delete
    public function category_delete($id)
    {
        $Categories = Categories::find($id)->delete();
        return redirect()->back()->with('notification','Xóa Thành Công');;
    }
}
