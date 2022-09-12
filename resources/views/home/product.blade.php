@extends("layouts.cargo.layout")
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Add Your Product</h2>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container">
            <div class="card">
                <div class="card-body">


                    @if(session('msg'))
                    <div class="alert alert-success alert-dismissible">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <h4><i class="icon fa fa-check"></i> Success!</h4>{{session('msg')}}
                    </div>
                    @endif


      <h4 class="card-title">SHIPPING FORM</h4>
      <form class="forms-sample" action="{{route('cargo-store')}}" method="POST">
        @csrf


        <p class="card-description">
            Senders Information
        </p>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label"> Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="exampleInputEmail3" name="sender_name" value="{{old('sender_name')}}">
                <span class="text-danger">{{$errors->first('sender_name')}}</span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Phone No.</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" id="exampleInputPassword4" name="sender_phone" value="{{old('sender_phone')}}">
                <span class="text-danger">{{$errors->first('sender_phone')}}</span>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
             <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Location</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="sender_location" value="{{old('sender_location')}}" >
                        <option>Inside Valley</option>
                        <option>Outside Valley</option>
                    </select>
                    <span class="text-danger">{{$errors->first('sender_location')}}</span>
                    </div>
                </div>
             </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Address</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="exampleInputEmail3" name="sender_address" value="{{old('sender_address')}}">
                <span class="text-danger">{{$errors->first('sender_address')}}</span>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label"> Product Description</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="exampleInputEmail3" name="product" value="{{old('product')}}">
                  <span class="text-danger">{{$errors->first('product')}}</span>
                </div>
              </div>
            </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Product Weight</label>
              <div class="col-sm-9">
                <input type="float" class="form-control" id="exampleInputEmail3" name="product_weight" value="{{old('product_weight')}}" placeholder="in kg">
                <span class="text-danger">{{$errors->first('product_weight')}}</span>
              </div>
            </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Product Type</label>
              <div class="col-sm-4">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="product_type" id="membershipRadios1" value=" Fragile">
                    Fragile
                  <i class="input-helper"></i></label>
                </div>
              </div>
              <div class="col-sm-5">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="product_type" id="membershipRadios2" value="Non-Fragile">
                    Non-Fragile
                  <i class="input-helper"></i></label>
                </div>
                <span class="text-danger">{{$errors->first('product_type')}}</span>
              </div>
            </div>
          </div>
        </div>




        <p class="card-description">
          Receiver Information
        </p>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Name</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="exampleInputEmail3" name="receiver_name" value="{{old('receiver_name')}}">
                <span class="text-danger">{{$errors->first('receiver_name')}}</span>
            </div>
          </div>
        </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Phone No.</label>
              <div class="col-sm-9">
                <input type="number" class="form-control" id="exampleInputEmail3" name="receiver_phone" value="{{old('receiver_phone')}}">
                <span class="text-danger">{{$errors->first('receiver_phone')}}</span>
              </div>
            </div>
          </div>
    </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Locations</label>
                  <div class="col-sm-9">
                    <select class="form-control" name="receiver_location" value="{{old('receiver_location')}}">
                      <option>Inside Valley</option>
                      <option>Outside Valley</option>
                      <span class="text-danger">{{$errors->first('receiver_location')}}</span>
                    </select>
                  </div>

                </div>
              </div>

          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Adress</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="exampleInputEmail3" name="receiver_address" value="{{old('receiver_address')}}">
                <span class="text-danger">{{$errors->first('receiver_address')}}</span>
              </div>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mr-2" >ADD PRODUCT</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>





    </form>
</div>
</div>
</section>
@endsection
