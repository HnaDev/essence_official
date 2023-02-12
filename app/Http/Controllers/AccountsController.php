<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class AccountsController extends Controller
{
    public function account()
    {
        $Users = Users::all();
        return view('admin.pages.account',compact('Users'));
    }
    public function account_delete($id)
    {
        Users::find($id)->delete();
        return redirect()->back()->with('notification','Xóa Thành Công');
    }
}
