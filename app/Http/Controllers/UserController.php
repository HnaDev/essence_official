<?php

namespace App\Http\Controllers;

use App\Helper\Cart;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Product_attrs;
use App\Models\Attributes;
use DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Cart $cart)
    {
        $categories = Categories::all();
        $zara = Products::where('brand_id','3')->get(); //lấy đúng id của brand
        $bershka = Products::where('brand_id','4')->get();//lấy đúng id của brand
        $newpro = Products::orderBy('id','DESC')->limit(8)->get();
        $salepro = Products::where('sale_price','>','0')->get();
        return view('user.index',compact('categories','zara','bershka','newpro','salepro','cart'));
    }

    //Show chi tiết sản phẩm
    public function product($id)
    {
        $prodetail = Products::find($id);
        return view('user.product_details',compact('prodetail'));
    }
    //Show các sản phẩm của Woman
    public function womanpro()
    {
        $product_woman = DB::Table('Categories')
                        ->join('category_types','category_types.id','=','categories.type')
                        ->join('products','products.category_id','=','categories.id')
                         ->where('categories.type','=','1')
                        ->select('products.*','categories.type')
                        ->get();
      
        return view('user.product_woman',compact('product_woman'));
    }
    public function manpro()
    {
        $product_man = DB::Table('Categories')
                        ->join('category_types','category_types.id','=','categories.type')
                        ->where('categories.type','=','2') //Để đúng id khớp với Man
                        ->join('products','products.category_id','=','categories.id')
                        ->select('products.*',)
                        ->get();
      
        return view('user.product_man',compact('product_man'));
    }
    public function search()
    {
        $search_product = Products::search()->paginate(10)->withQueryString();
        return view('user.search',compact('search_product'));
    }
    public function OrderManagement()
    {
        return view('user.OrderManagement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function shop()
    {
        return view('user.search');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
