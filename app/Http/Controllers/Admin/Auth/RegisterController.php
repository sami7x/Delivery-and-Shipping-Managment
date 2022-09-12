<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class RegisterController extends Controller
{
    public function user() {
        $user = FacadesDB::table('user')->get()->count();
        return view('admin.dashboard.index', compact('user'));
  }

    //opens form
    public function registerForm()
    {
        if(auth()->check())
        return redirect()->route('dashboard');
        return view('admin.auth.register');
    }

    public function loginForm()
    {
        if(auth()->check())
        return redirect()->route('dashboard');
        return view('admin.auth.login');
    }

    public function registerUser(RegisterRequest $request)
    {
        $user = new User();
        $user->company_name =  $request->get('company_name');
        $user->email =  $request->get('email');
        $user->user_name =  $request->get('user_name');
        $user->password =  bcrypt($request->get('password'));

        if($user->save()){
            return redirect()->route('auth.register')->with(['msg'=>"User create successfully"]);
        return redirect()->route('auth.register')->withError(['msg'=>"User cannot be registerd at the moment"]);
    }

    //register users

    }

}
