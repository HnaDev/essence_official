<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class LoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // If not logged in, switch to admin login
        if (!Auth::check()) {
            return redirect()->route('admin.loginAdmin');
        }
        if (Auth::user()->role == 1) {
            return $next($request);
        }
        return redirect()->back()->with('notification', 'Đăng nhập không thành công');
    }
}
