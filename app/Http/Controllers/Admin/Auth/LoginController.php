<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class LoginController extends Controller
{
    public function authenticate(LoginRequest $request)
    {


        $credential = ['user_name'=>$request->get('user_name'), "password"=>$request->get('password')];
        if (Auth::attempt($credential)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout()
    {
        if(Auth::check())
        {
            Auth::logout();
        }
        return redirect()->route('auth.login');
    }


}

