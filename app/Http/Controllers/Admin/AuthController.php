<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use App\Models\Provinces;
use App\Models\Wards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('admin.auth.login');
    }

    public function store(LoginRequest $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::guard('admin')->attempt($credentials) && Auth::guard('admin')->user()->isAdmin()) {

            $request->session()->regenerate();
            // dd('d');
            return redirect()->intended('/admin');
        }
        return redirect()->route('admin.login')->with('error','Tài khoản không chính xác');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
