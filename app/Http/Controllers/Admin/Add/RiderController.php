<?php

namespace App\Http\Controllers\Admin\Add;

use App\Http\Controllers\Controller;
use App\Http\Requests\RiderRequest;
use App\Models\Rider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $uploadPath  ="uploads/rider";
    public function index()
    {

    }





    public function rider()
    {

        $rider = Rider::get();
        return view('rider.display.riderprofile', compact('rider'));

    }
    public function riderdisplay()
    {

        $rider = Rider::get();
        return view('admin.display.ridersdisplay', compact('rider'));

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
    public function store(RiderRequest $request)
    {
        $fileName = null;
        if($request->file('image')){
            $fileName = strtotime(Carbon::now());
            $fileName = $fileName.".".$request->file('image')->extension();
            $uploadPath = (public_path($this->uploadPath."/".$fileName));
            move_uploaded_file($request->file('image'), $uploadPath);



        }
        dd($fileName);


            $data = $request->all();
            $data['image'] = $fileName;


        if(Rider::create($data))

        {
            return redirect()->route('rider-index')->with(['msg'=>"User create successfully"]);
            return redirect()->route('rider-index')->withError(['msg'=>"User cannot be registerd at the moment"]);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function show(rider $rider)
    {
        $rider = Rider::all();
        return view('admin.add.display', compact('rider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rider=Rider::find($id);
        return view('admin.add.edit',compact('rider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function update(RiderRequest $request, rider $rider,$id)
    {
        $rider= Rider::find($id);
        $rider->rider_name= $request->get('rider_name');
        $rider->rider_address = $request->get('rider_address');
        $rider->rider_phone = $request->get('rider_phone');
        $rider->gender = $request->get('gender');
        $rider->license_no = $request->get('license_no');
        $rider->vehicle_no = $request->get('vehicle_no');
        $rider->update();
        //return view('admin.add.display',compact('rider'));

        if($rider->update())
        {
            return redirect()->route('rider-display')->with(['msg'=>"Updated successfully"]);
            return redirect()->route('rider-display')->withError(['msg'=>"Cannot be updated at the moment"]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function destroy(rider $rider, $id)
    {
        $rider = Rider::find($id);
        if($rider->delete()){
            return redirect()->route('allriders')->with(['msg' => "Rider deleted successfully"]);
        } else {
            return redirect()->route('allriders')->withErrors(['msg' => "Rider couldn't be deleted."]);
        }
    }
}
