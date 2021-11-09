<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{

    public function checkLogin()
    {
        if (
            auth('admin')->check() 
            && auth('admin')->user()->privileges == 'super')
            return redirect()->route('admins.home');
        $MainTitle = 'Sign in as admin';
        return view('Admin::_auth.login', compact('MainTitle'));
    }

    public function login()
    {
        if (auth()->guard('admin')->attempt(['email' => request('email'), 'password' => request('password'), 'privileges' => 'super'], request('rememberme') == 1 ? true : false))
            return redirect()->route('admins.home');
        return redirect()->route('admins.login')->with(['error' => "Email and password doesn't match our records"]);
    }

    public function logout()
    {
        if (auth('admin')->check() && auth('admin')->user()->privileges == 'super') {
            auth('admin')->logout();
            return redirect()->route('admins.login');
        }
        return redirect()->back();
    }
}
