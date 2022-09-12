@extends('layouts.rideregister.layout')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Administrator</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Admin</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container">
            <div class="containerr">
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-6 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">

              <h3>New here?</h3>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" action="{{route('auth.register-user')}}" method="POST">
                  @csrf
                <div class= "form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Company Name" name="company_name" value="{{old('company_name')}}">
                  <span class="text-danger">{{$errors->first('company_name')}}</span>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="email" value="{{old('email')}}">
                  <span class="text-danger">{{$errors->first('email')}}</span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="User Name" name="user_name" value="{{old('user_name')}}">
                    <span class="text-danger">{{$errors->first('user_name')}}</span>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="password">
                  <span class="text-danger">{{$errors->first('password')}}</span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password" name="password_confirmation">
                    <span class="text-danger">{{$errors->first('password_confirmation')}}</span>
                  </div>

                  @if(session('msg'))
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>{{session('msg')}}
                  </div>
                  @endif
                  {{--  @if ($errors->any())
                  @foreach ($errors->all() as $error)
                  <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Alert!</h4>{{$error}}
                  </div>
                  @endforeach
              @endif  --}}

                <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="{{ route('auth.login') }}"class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
@endsection
