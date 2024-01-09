<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Products;
use App\Models\Orders;
use App\Models\Users;
use App\Models\Categories;
use DB;
class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Products = Products::all()->count();
        $Orders = Orders::all()->count();
        $Users = Users::where('role',0)->count();
        $Order_end = Products::where('stock','<',40)->count();
        $User = Users::orderBy('created_at','ASC')->take(4)->get();
        $Order = DB::Table('orders')
                    ->join('users','users.id','=','orders.user_id')
                    // ->where('orders.status','1')
                    // ->orderBy('created_at','ASC')->take(4)
                    ->select('orders.*','full_name')
                    ->get();
        return view('admin.pages.index', compact('Products','Orders','Users','Order_end','User','Order'));
    }
    public function loginAdmin()
    {
        return view('admin.pages.login_admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PostloginAdmin(Request $req)
    {
        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->back()->with('message', 'Login unsuccessful !');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logoutAdmin()
    {
        Auth::logout();
        return redirect()->route('admin.loginAdmin');
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
