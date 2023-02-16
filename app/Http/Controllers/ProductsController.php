<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use App\Models\Brands;
use App\Models\Attributes;
use App\Models\Product_images;
use App\Models\Product_Attrs;
use App\Models\Category_Type;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductsController extends Controller
{
    public function product()
    {   
        $products = Products::search()->paginate(6)->withQueryString();
        return view('admin.pages.product',compact('products'));
    }
    
    public function product_add()
    {
        $category = Categories::all();
        $cate_type = Category_type::all();
        $brand = Brands::all();
        $size = Attributes::where('name', 'size')->get();
        $color = Attributes::where('name', 'color')->get();
        return view('admin.pages.product_add', compact('category','cate_type', 'brand', 'size', 'color'));
    }

    //Create
    public function product_create(CreateProductRequest $req)
    {
        if ($req->hasFile('image')) {
            $file = $req->image;
            $file_name = $file->getClientOriginalName();
            $file->move('upload.product', $file_name);
        }
        //Thêm mới sản phẩm
        $product = Products::create([
            'name' => $req->name,
            'price' => $req->price,
            'sale_price' => $req->sale_price,
            'description' => $req->description,
            'image' => $file_name,
            'status' => $req->status,
            'category_id' => $req->category_id,
            'brand_id' => $req->brand_id,
            'origin' => $req->origin,
            'year' => $req->year,
            'stock' => $req->stock
        ]);

        if ($product) {
            if ($req->hasFile('images')) {
                $files = $req->images;
                foreach ($files as $key => $f) {
                    $file_name1 = $f->getClientOriginalName();
                    $f->move(public_path('upload.product'), $file_name1);
                    Product_images::create([
                        'product_id' => $product->id,
                        'image' => $file_name1
                    ]);
                }

            }
        }
        $atrr = $req->attr_size_id;
        foreach($atrr as $value){
            Product_Attrs::create([
                    'product_id' => $product->id,
                    'attribute_size_id'=> $value
            ]);
        }
       
        $atrr_color = $req->attr_color_id;
            foreach($atrr_color as $value){
                Product_Attrs::create([
                    'product_id' => $product->id,
                    'attribute_color_id'=> $value
                ]);
        }



        return redirect()->route('admin.product')->with('notification', 'Thêm mới thành công');
    }


    //Update_show
    public function product_update_show($id)
    {
        $category = Categories::all();
        $brand = Brands::all();
        $size = Attributes::where('name', 'size')->get();
        $color = Attributes::where('name', 'color')->get();
        $product = Products::find($id);
        $product_images = Product_images::where('product_id', $id)->get();
        $product_attrs = Product_attrs::where('product_id',$id)->first();
        return view('admin.pages.product_update_show', compact('product','product_images', 'category', 'brand', 'size', 'color','product_attrs'));
    }

    //Update
    public function product_update(UpdateProductRequest $req, $id)
    {


        $product_update = Products::find($id);

        if ($req->hasFile('image')) {
            $file = $req->image;
            $file_name = $file->getClientOriginalName();
            $file->move('upload.product', $file_name);
        } else {
            $file_name = $product_update->image;
        }
        //Sửa sản phẩm
        $product_update = products::where('id', $id)->update([
            'name' => $req->name,
            'price' => $req->price,
            'sale_price' => $req->sale_price,
            'description' => $req->description,
            'image' => $file_name,
            'status' => $req->status,
            'category_id' => $req->category_id,
            'brand_id' => $req->brand_id,
            'origin' => $req->origin,
            'year' => $req->year,
            'stock' => $req->stock
        ]);

        // if ($product_update) {
        //     $product_images_update = Product_images::find($id);
        //     if ($req->hasFile('images')) {
        //         $files = $req->images;

        //         foreach ($files as $key => $f) {
        //             $file_name1 = $f->getClientOriginalName();

        //             $f->move(public_path('upload.product'), $file_name1);

        //             Product_images::update([
        //                 'product_id' => $product_update->id,
        //                 'image' => $file_name1
        //             ]);
        //         }
        //         ;
        //     } else {
        //         $file_name1 = $product_images_update->image;
        //     }
        // }


            $product_attrs = Product_attrs::where('product_id',$id)->delete();
                $atrr = $req->attr_size_id;

                foreach($atrr as $value){

                    Product_Attrs::create([
                     'product_id' => $id,
                     'attribute_size_id'=> $value
                    ]);
                }



                $atrr_color = $req->attr_color_id;

                foreach($atrr_color as $value){
                    Product_Attrs::create([
                     'product_id' => $id,
                     'attribute_color_id'=> $value
                    ]);
                }



        return redirect()->route('admin.product')->with('notification', 'Cập nhật Thành Công');
    }


    // Delete
    public function product_delete($id)
    {
        $product_images = Product_images::where('product_id', $id)->delete();

        $product_attrs = Product_attrs::where('product_id',$id)->delete();

        $Products = Products::find($id)->delete();

        return redirect()->back()->with('notification', 'Xóa Thành Công');
    }
}
