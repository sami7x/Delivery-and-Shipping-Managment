<?php

namespace App\Http\Controllers\Rider\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rider\Auth\SignupRequest;
use App\Models\signup;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function registerForm()
    {
        return view('rider.auth.register');
    }
    public function loginForm()
    {
        return view('rider.auth.login');
    }
    public function registerUser(SignupRequest $request)
    {
        //dd($request->all());
        $signup= new Signup();
        $signup->id=$request->get('id');
        $signup->username = $request->get('username');
        $signup->password =  bcrypt($request->get('password'));
        if($signup->save())
        {
            return redirect()->route('rider.register')->with(['msg'=>"signup create successfully"]);
            return redirect()->route('rider.register')->withError(['msg'=>"signup cannot be registerd at the moment"]);
        }
    }
}
