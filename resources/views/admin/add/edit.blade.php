@extends("layouts.admin.layout")
@section('content')

@if(session('msg'))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <h4><i class="icon fa fa-check"></i> Success!</h4>{{session('msg')}}
</div>
@endif
{{-- {{route('rider-edit'),[$rider->id] }} --}}
<form class="forms-sample" action="#" method="POST">

    <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Update Data</h4>
        <p class="card-description">
          Personal Details
        </p>

            @csrf
       <div class="form-group">
            <label for="exampleInputName1">Rider No.</label>
            <input type="number" class="form-control" id="exampleInputName1" name="rider_no" value="{{$rider('rider_no')}}">
          </div>



          <div class="form-group">
            <label for="exampleInputEmail3">Full Name</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="rider_name"  value="{{ $rider['rider_name'] }}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Address</label>
                <input type="text" class="form-control" id="exampleInputEmail3" name="rider_address" value="{{$rider['rider_address']}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Phone No.</label>
            <input type="number" class="form-control" id="exampleInputPassword4" name="rider_phone" value="{{$rider['rider_phone']}}">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Gender</label>
              <select class="form-control" id="exampleSelectGender"name="gender" value="{{$rider['gender']}}" >
                <option>Male</option>
                <option>Female</option>
              </select>
          </div>
            <div class="form-group">
            <label for="exampleInputEmail3">License No.</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="license_no" value="{{$rider['license_no']}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Vehicle No.</label>
            <input type="text" class="form-control" id="exampleInputEmail3" name="vehicle_no" value="{{$rider['vehicle_no']}}">
          </div>





          {{--  <div class="form-group">
            <label>File upload</label>
            <input type="file" name="img[]" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeh$riderer="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
              </span>
            </div>
          </div>  --}}



        {{--  </form>  --}}

        <button type="submit" class="btn btn-primary mr-2" >UPDATE</button>
        <button class="btn btn-light">CANCEL</button>
      </div>
    </div>
  </div>


</form>
@endsection
