<?php

namespace App\Http\Controllers;

use App\Models\Rider;
use Illuminate\Http\Request;
use App\Models\Cargo;

class HomeController extends Controller
{
    public function track()
    {
        return view ('home.track');
    }


    public function home()
    {
        return view('home.index');
    }

    public function aboutus()
    {
        return view('home.about');
    }

    // public function cargo()
    // {
    //     return view('home.product');
    // }
    public function dashboard()
    {
        $rider = Rider::count();
        $cargo = Cargo::count();
        $productdeliveriesCount= Cargo::where('pickup_status',1)->count();
        $productremainingCount= Cargo::where('pickup_status',0)->count();
        $cargodeliveriesCount= Cargo::where('cargo_status',1)->count();
        $cargoremainingCount= Cargo::where('cargo_status',0)->count();
        return view('admin.dashboard.index',compact('rider','cargo','productdeliveriesCount','productremainingCount','cargodeliveriesCount','cargoremainingCount'));

    }

    public function riderdashboard()
    {
        $cargo = Cargo::count();
        $productdeliveriesCount= Cargo::where('pickup_status',1)->count();
        $productremainingCount= Cargo::where('pickup_status',0)->count();
        $cargodeliveriesCount= Cargo::where('cargo_status',1)->count();
        $cargoremainingCount= Cargo::where('cargo_status',0)->count();
        return view('rider.dashboard.riderindex',compact('cargo','productdeliveriesCount','productremainingCount','cargodeliveriesCount','cargoremainingCount'));
    }

}
