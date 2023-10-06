<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login()
    {
        // dd('123')
        return view('admin.auth.login');
    }

    public function store(LoginRequest $request)
    {
        ;
    }
}
