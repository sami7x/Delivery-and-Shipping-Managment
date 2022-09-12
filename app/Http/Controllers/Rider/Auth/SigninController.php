<?php

namespace App\Http\Controllers\Rider\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rider\Auth\SigninRequest;
use App\Models\signin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{


    public function authenticate(SigninRequest $request)
    {

        // dd($request->all());
        $credential = ['username'=>$request->get('username'), "password"=>$request->get('password')];
        if(Auth::guard('signup')->attempt($credential))
        {
            $request->session()->regenerate();
            return redirect()->intended('riderdashboard');
        }
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

        public function logout()
        {
            if(Auth::check())
            {
                Auth::logout();
            }
            return redirect()->route('rider.login');
        }



}
