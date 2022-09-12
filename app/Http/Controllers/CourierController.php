<?php

namespace App\Http\Controllers;

use App\Http\Requests\CargoRequest;
use App\Models\Cargo;
use Illuminate\Http\Request;

class CourierController extends Controller
{

    public function tracker(Request $request)
    {
        $id = $request->input('tracker');
        $cargo =cargo::find($id);
        // dd($cargo->pickup_status);
        if($cargo->pickup_status==1 &&  $cargo->cargo_status==1)
        {
                return redirect()->route('track')->with(['msg'=>"Your parcel has been successfully pickedup & your parcelled "]);

                return redirect()->route('track')->withError(['msg'=>"Your order ID doesn't exist"]);
         }
         elseif($cargo->pickup_status==1 &&  $cargo->cargo_status==0)
         {
                 return redirect()->route('track')->with(['msg'=>"Your parcel has been successfully pickedup & is yet to be delivered "]);

                 return redirect()->route('track')->withError(['msg'=>"Your order ID doesn't exist"]);
          }
          elseif($cargo->pickup_status==0 &&  $cargo->cargo_status==0)
         {
                 return redirect()->route('track')->with(['msg'=>"Your parcel hasn't been pickedup yet."]);

                 return redirect()->route('track')->withError(['msg'=>"Your order ID doesn't exist"]);
          }
          else
          {
            return redirect()->route('track')->with(['msg'=>"Your order ID doen't exist"]);

            return redirect()->route('track')->withError(['msg'=>"Your order ID doesn't exist"]);
          }
        }






    public function shipping()
    {
        $cargo = Cargo::get();
        return view('rider.display.shipping', compact('cargo'));

    }

    public function shippingstatus()
    {
        $cargo = Cargo::get();
        return view('admin.display.shippingstatus', compact('cargo'));
    }

    public function pickedup()
    {
        $cargo = Cargo::get();
        return view('rider.display.pickedup', compact('cargo'));

    }

    public function dropped()
    {
        $cargo = Cargo::get();
        return view('rider.display.dropped', compact('cargo'));

    }


    public function cargodetail()
    {


        $cargo = Cargo::get();
        return view('rider.display.cargodetail', compact('cargo'));

    }

    public function index()
    {
        //
    }

    public function cargo()
    {

        return view('home.product');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CargoRequest $request)
    {
        $cargo = new Cargo();
        $cargo->sender_name= $request->get('sender_name');
        $cargo->sender_phone = $request->get('sender_phone');
        $cargo->sender_location = $request->get('sender_location');
        $cargo->sender_address = $request->get('sender_address');
        $cargo->product = $request->get('product');
        $cargo->product_weight = $request->get('product_weight');
        $cargo->product_type = $request->get('product_type');

        $cargo->receiver_name = $request->get('receiver_name');
        $cargo->receiver_phone = $request->get('receiver_phone');
        $cargo->receiver_location = $request->get('receiver_location');
        $cargo->receiver_address = $request->get('receiver_address');
        $cargo->cargo_status = $request->get('cargo_status');



        //Calculate shipping charge

        $total= 0;
        $weightprice = 15;
        $sender_location = $request->input('sender_location');
        $weights = $request->input('product_weight');
        $type = $request->input('product_type');
        $receiver_location = $request->input('receiver_location');


        // II

        if($sender_location == "Inside Valley" && $type== "Fragile" && $receiver_location ="Inside Valley")
        {
            $cargo->total= 100 + $weights*$weightprice+50 +100;
        }
        else if ($sender_location == "Inside Valley"  && $type=="Non Fragile" && $receiver_location ="Inside Valley")
        {
            $cargo->total= 100 + $weights*$weightprice+100;
        }


        //OI
        else if ($sender_location == "Outside Valley"  && $type== "Non Fragile" && $receiver_location ="Inside Valley")
        {
            $cargo->total= 200 + $weights*$weightprice+100;
        }
        else if ($sender_location == "Outside Valley"  && $type== "Fragile" && $receiver_location ="Inside Valley")
        {
            $cargo->total= 200 + $weights*$weightprice+50+100;
        }

        //OO
        else if ($sender_location == "Outside Valley"  && $type== " Fragile" && $receiver_location ="Outside Valley")
        {
            $cargo->total= 200 + $weights*$weightprice+50+200;
        }
        else if ($sender_location == "Outside Valley"  && $type== "Non Fragile" && $receiver_location ="Outside Valley")
        {
            $cargo->total= 200 + $weights*$weightprice+200;
        }


        //IO
        else if ($sender_location == "Inside Valley"  && $type== "Fragile" && $receiver_location ="Outside Valley")
        {
            $cargo->total= 100 + $weights*$weightprice+50+200;
        }
        else if ($sender_location == "Inside Valley"  && $type== "Non Fragile" && $receiver_location ="Outside Valley")
        {
            $cargo->total= 100 + $weights*$weightprice+200;
        }

        else
        {
            $cargo->total=1000;
        }





        if($cargo->save())
        {
            return redirect()->route('cargo')->with(['msg'=>"Your order has been placed successfully. Your total is $cargo->total & ORDER ID is $cargo->id."]);
            return redirect()->route('cargo')->withError(['msg'=>"Your order could not be placed at the moment"]);
        }

    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */

    public function show(Cargo $cargo)
    {
/**$dd= Cargo::count();*/

         $cargo= Cargo::get();
        return view('home.product', compact('Cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cargo=Cargo::find($id);
        return view('admin.add.edit',compact('Cargo'));
    }



    public function setStatus(Request $request, Cargo $cargo,$id)
    {

        $cargo = Cargo::find($request->id);
        $cargo->pickup_status = $request->get('pickup_status');
        if($cargo->update())
        {
            return response()->json(['success'=>'User status change successfully.']);

        }

        // dd($request->all());

        }


        public function cargoStatus(Request $request, Cargo $cargo,$id)
    {

        $cargo = Cargo::find($request->id);
        $cargo->pickup_status = $request->get('pickup_status');
        if($cargo->update())
        {
            return response()->json(['success'=>'User status change successfully.']);

        }

    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargo,$id)
    {
        $cargo= Cargo::find($id);
        $cargo->sender_name= $request->get('sender_name');
        $cargo->sender_phone = $request->get('sender_phone');
        $cargo->sender_location = $request->get('sender_location');
        $cargo->sender_address = $request->get('sender_address');
        $cargo->product = $request->get('product');
        $cargo->product_weight = $request->get('product_weight');
        $cargo->product_type = $request->get('product_type');

        $cargo->receiver_name = $request->get('receiver_name');
        $cargo->receiver_phone = $request->get('receiver_phone');
        $cargo->receiver_location = $request->get('receiver_location');
        $cargo->receiver_address = $request->get('receiver_address');
        if($cargo->update())
        {
            return redirect()->route('cargo')->with(['msg'=>"User create successfully"]);
            return redirect()->route('cargo')->withError(['msg'=>"User cannot be registerd at the moment"]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cargo  $cargo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo , $id)
    {
        $cargo = Cargo::find($id);
        if($cargo->delete()){
            return redirect()->route('Cargo-display')->with(['msg' => "Order deleted successfully"]);
        } else {
            return redirect()->route('Cargo-display')->withErrors(['msg' => "Order couldn't be deleted."]);
        }
    }

    public  function toogleCargoStatus($cargoId){
        $cargo = Cargo::find($cargoId);
        if(!empty($cargo)){
            $cargo->pickup_status = $cargo->pickup_status?0:1;
            $cargo->save();
        }

        return redirect()->back();
    }

    public  function toogleCargosStatus($cargoId){
        $cargo = Cargo::find($cargoId);
        if(!empty($cargo)){
            $cargo->cargo_status = $cargo->cargo_status?0:1;
            $cargo->save();
        }
        return redirect()->back();
    }

}
