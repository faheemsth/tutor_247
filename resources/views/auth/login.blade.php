@extends('layouts.app')

@section('content')
    <div class="container-fluid student-login-title text-center  mt-5">
        <div class="row">
            <div class="col">
                <a href="#" style="text-decoration: none;"><i class="fa-solid fa-arrow-left "
                        style="font-size: 25px;"></i> </a>
            </div>
            <div class="col-5">
                <h1 class="student-login-title" style="color: rgba(0, 150, 255, 1); font-weight:bold">
                    Student Log in</h1>
            </div>
            <div class="col">
                <a href="#"><i class="fa-solid fa-xmark" style="font-size: 25px;"></i></a>

            </div>

        </div>
        <!-- card details -->
        <div class="container my-3  d-flex justify-content-center ">
            <div class="card mb-3 shadow-lg p-3 mb-5 rounded "
                style="background-color:  rgba(171, 255, 0, 1);width:750px; ">
                <div class="row g-0">

                    <div class="col-md-6 col-border ">


    <body>
        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100">
                    <div class="col-xl-4 col-lg-4 col-md-4 m-auto">
                        <div class="authentication-form mx-auto">
                            <div class="logo-centered">
                                <a href="http://radmin.rakibhstu.com"><img height="40" src="{{ asset('img/logo.png') }}" alt="RADMIN" ></a>
                            </div>
                            <p>Welcome back! </p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group my-3">
                                    <input id="email" type="email" placeholder="Type email address"
                                        class="form-control @error('email') is-invalid @enderror bg-white" name="email"
                                        value="" required autocomplete="email" autofocus>
                                    <i class="ik ik-user"></i>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <span class="invalid-error text-danger email-error d-none">Please enter email</span>
                                </div>

                                <div class="password-data d-none">
                                    <div class="form-group">
                                        <input id="password" type="password" id="password" placeholder="Password"
                                            class="form-control bg-white @error('password') is-invalid @enderror" name="password"
                                            value="" required>
                                        <i class="ik ik-lock"></i>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <span class="invalid-error text-danger password-error d-none">Please enter password</span>
                                    </div>


                                    <div class="form-group my-3">
                                        <input type="checkbox" class="custom-control-input" id="item_checkbox"
                                            name="item_checkbox" value="option1">
                                        <span class="custom-control-label">&nbsp;Remember Me</span>
                                    </div>
                                </div>


                                <div class="d-grid gap-2 col-sm-8 mx-auto">
                                    <input type="button" class="btn btn-light login-with-password"
                                        value="Log in with Password" />

                                    <input type="submit" class="btn btn-light login-btn d-none"
                                        value="Login" />
                                    <a class="btn btn-primary text-white">Log in with Magic</i></a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- footer tags -->

        <div class="container-fluid" id="col-text">
            <div class="row justify-content-xl-center align-items-baseline mt-5 pt-5">
                <div class="col-md-4 col-lg-3">
                    <a href="#"> Need help call us on <strong>+447851012039</strong> or <strong>Email us</strong></a>
                </div>
                <div class="col-md-4 col-lg-2 ">
                    <a href="#">Help! I'm an <strong>Adult Learn</strong></a>
                </div>
                <div class="col-md-4 col-lg-2">
                    <a href="#">Log in as <strong>Primary Pupil</strong></a>
                </div>
                <div class="col-12 col-lg-5 col-xl-3 mt-4 mt-lg-0">
                    <div class="row">
                        <div class="">
                            <a type="button" class="btn btn-success " style="background-color:  #063B00;color: white;">Log
                                in as Super Admin</a>
                            <a type="button" class="btn btn-success col-sm"
                                style="background-color:  #063B00;color: white;">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
