@extends("layouts.admin.layout")
@section('content')

@if(session('msg'))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-check"></i> Success!</h4>{{session('msg')}}

</div>
@endif

<form class="forms-sample" action="{{route('rider-store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Delivery Person</h4>
        <p class="card-description">
          Personal Details
        </p>
          <div class="form-group">
            <label for="exampleInputEmail3">Full Name</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="rider_name" value="{{old('rider_name')}}">
            <span class="text-danger">{{$errors->first('rider_name')}}</span>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Address</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="rider_address" value="{{old('rider_address')}}">
            <span class="text-danger">{{$errors->first('rider_address')}}</span>
        </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Phone No.</label>
            <input type="number" class="form-control" id="exampleInputPassword4" name="rider_phone" value="{{old('rider_phone')}}">
            <span class="text-danger">{{$errors->first('rider_phone')}}</span>
        </div>
          <div class="form-group">
            <label for="exampleSelectGender">Gender</label>
              <select class="form-control" id="exampleSelectGender"name="gender" value="{{old('gender')}}" >
                <option>Male</option>
                <option>Female</option>
              </select>
              <span class="text-danger">{{$errors->first('gender')}}</span>
          </div>
            <div class="form-group">
            <label for="exampleInputEmail3">License No.</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="license_no" value="{{old('license_no')}}">
            <span class="text-danger">{{$errors->first('license_no')}}</span>
        </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Vehicle No.</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="vehicle_no" value="{{old('vehicle_no')}}">
            <span class="text-danger">{{$errors->first('vehicle_no')}}</span>
        </div>
        <div class="form-group">
            <label>Add Image</label>
            <div class="input-group col-xs-12">
                <span class="input-group-append">
                <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="image">
                </span>
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-primary mr-2" >ADD</button>
           <button class="btn btn-light">Cancel</button>
       </div>
      </div>
    </div>
  </div>
</form>

@endsection
