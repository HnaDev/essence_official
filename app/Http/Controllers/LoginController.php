<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // return form login
    public function index()
    {
        return view('user.login_user');
    }

    // form register
    public function register()
    {
        return view('user.register_user');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register_create(RegisterRequest $request)
    {
        try {
            $User = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                // hash password
                'password' => Hash::make($request->password)
            ]);
            if ($User) {
                return redirect()->route('login')->with('login_success', 'Sign Up Success !');
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //  login user
    public function loginUser(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->route('user.index');
        }
        return redirect()->back()->with('notification', 'Login unsuccessful !');
    }

    // logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.index');
    }


}
