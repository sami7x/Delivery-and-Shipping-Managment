
@extends('layouts.login.layout')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Login</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Rider</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
        <div class="container">
            <div class="containerr">
<div class="img">
    <img src="{{asset('resources/Content/assets/img/signup.svg')}}">
</div>
<div class="login-content">
    <form action="{{route('rider.login-user')}}" method="POST">
        @csrf
        <img src="{{asset('resources/Content/assets/img/login.svg')}}">
        <h3 class="title">LOGIN</h3>
        <div class="input-div one">
            <div class="i">
                <i class="fas fa-user"></i>
            </div>
            <div class="div">
                <h5>Username</h5>
                <input type="text" class="input"  id="exampleInputEmail1"  name="username" value="{{old('username')}}">
              <br><br>  <span class="text-danger">{{$errors->first('username')}}</span>
            </div>
        </div>
        <div class="input-div pass">
            <div class="i">
                <i class="fas fa-lock"></i>
            </div>
            <div class="div">
                <h5>Password</h5>
              <input type="password" class="input" id="exampleInputPassword1"  name="password">
             <br><br> <span class="text-danger">{{$errors->first('password')}}</span>
            </div>
        </div>
        <input type="submit" class="btnn" value="SIGN IN">
        New here? <a href="{{route('rider.register') }}"> SignUp as Rider
    </form>
</div>
</div>

        </div>
    </section>

</main><!-- End #main -->

@endsection
