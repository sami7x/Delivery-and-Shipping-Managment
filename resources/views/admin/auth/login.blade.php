@extends('layouts.login.layout')
@section('content')
<main id="main">
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
<div class="img">
<img src="{{asset('resources/Content/assets/img/dash.svg')}}">
</div>
<div class="login-content">
<form action="{{route('auth.login-user')}}" method="POST">
    @csrf
    <img src="{{asset('resources/Content/assets/img/admin.svg')}}">
    <h3 class="title">Admin</h3>
    <div class="input-div one">
        <div class="i">
            <i class="fas fa-user"></i>
        </div>
        <div class="div">
            <h5>Username</h5>
            <input type="text" class="input" id="exampleInputEmail1" name="user_name" value="{{old('user_name')}}">
            <br><br><span class="text-danger">{{$errors->first('user_name')}}</span>

        </div>
    </div>
    <div class="input-div pass">
        <div class="i">
            <i class="fas fa-lock"></i>
        </div>
        <div class="div">
            <h5>Password</h5>
             <input type="password" class="input" id="exampleInputPassword1" name="password">
             <br> <br><span class="text-danger">{{$errors->first('password')}}</span>
            </div>
    </div>
    <br><input type="submit" class="btnn" value="Login">
    New here? <a href="/register"> SignUp as Administrator
</form>
</div>
</div>

    </div>
</section>

</main><!-- End #main -->

@endsection
