<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannersController extends Controller
{
    public function banners()
    {
        return view('admin.pages.banners');
    }
    public function banners_add()
    {
        return view('admin.pages.banners_add');
    }
}
