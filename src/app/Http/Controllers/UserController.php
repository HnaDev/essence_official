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

        #get id brand
        $zara = Products::where('brand_id','3')->get();
        $bershka = Products::where('brand_id','4')->get();
        $newpro = Products::orderBy('id','DESC')->limit(8)->get();
        $salepro = Products::where('sale_price','>','0')->get();
        return view('user.index',compact('categories','zara','bershka','newpro','salepro','cart'));
    }

    //Show chi tiết sản phẩm
    public function product($id)
    {
        $prodetail = Products::find($id);
        $product = Products::all();
        $similar_pro = Products::where('id','!=',$id)->where('category_id',$prodetail->category_id)->get();
        return view('user.product_details',compact('prodetail','similar_pro'));
    }
    //Show các sản phẩm của Woman
    public function womanpro()
    {
        $categories = Categories::where('type','1')->get();
        $product_woman = DB::Table('Categories')
                        ->join('category_types','category_types.id','=','categories.type')
                        ->join('products','products.category_id','=','categories.id')
                         ->where('categories.type','=','1')
                        ->select('products.*','categories.type')
                        ->get();

        return view('user.product_woman',compact('product_woman','categories'));
    }
    public function manpro()
    {
        $categories = Categories::where('type','2')->get();
        $product_man = DB::Table('Categories')
                        ->join('category_types','category_types.id','=','categories.type')
                        ->where('categories.type','=','2') //Để đúng id khớp với Man
                        ->join('products','products.category_id','=','categories.id')
                        ->select('products.*',)
                        ->get();

        return view('user.product_man',compact('product_man','categories'));
    }
    public function newpro(){
        $categories = Categories::All();
        $newpro = Products::orderBy('created_at','ASC')->paginate(5);
        return view('user.product_new',compact('newpro','categories'));
    }
    public function search()
    {
        $categories = Categories::all();
        $search_product = Products::search();

        if (isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];
            if ($sort_by == 'price_highest_low') {
                $search_product->orderBy('price', 'DESC');
            } elseif ($sort_by == 'price_lowest_high') {
                $search_product->orderBy('price', 'ASC');
            } elseif ($sort_by == 'highest_rated') {
                $search_product->orderBy('stock', 'DESC');
            } elseif ($sort_by == 'newest') {
                $search_product->orderBy('created_at', 'ASC');
            }
        }

        if (isset($_GET['keyword'])) {
            $search_product->where('name', 'like', "%{$_GET['keyword']}%");
        }

        $search_product = $search_product->paginate(15)->withQueryString();

        return view('user.search', compact('search_product', 'categories'));
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
