@extends('layouts.app')
@section('content')  

<!-- Student apply step cards -->

<div class="container step-card my-5">
    <div id="bg-img-line">
        <img src="./assets/images/Group 115.png" class="" alt="">
    </div>
    <div class="row py-5 text-center">
        <div class="col">
            <h1 class="fw-bolder simple-title" id="text-color">It is Simple</h1>
        </div>
    </div>
    <!-- second row Student step cards -->
    <div class="row">
        <!-- card 1 -->
        <div class="col-md-6 col-lg-3  bg-transparent my-2">

            <div class="step-card text-center">

                <div class="step-card-header">
                    <div class="step-card-header-icon">
                        <img src="./assets/images/icons8-register-50 1.png" alt="" class="p-4">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bolder" id="text-color">Get Started</h5>
                    <p class="card-text">Click register and create <br> your profile</p>
                </div>
            </div>
        </div>
        <!-- card 2 -->
        <div class="col-md-6 col-lg-3 my-2">
            <div class="car text-center">
                <div class="step-card-header">
                    <div class="step-card-header-icon">
                        <img src="./assets/images/icons8-online-class-64 1.png" alt="" class="p-4">
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="card-title fw-bold fs-5" id="text-color">Connect with a Tutor</h6>
                    <p class="card-text">You can offer tuition to all students & tutors on the platform. Your
                        details are private, but you can message your potential students anytime within the
                        platform.</p>
                </div>
            </div>
        </div>
        <!-- card 3 -->
        <div class="col-md-6 col-lg-3 my-2">
            <div class="car text-center">
                <div class="step-card-header">
                    <div class="step-card-header-icon">
                        <img src="./assets/images/icons8-online-class-60 1.png" alt="" class="p-4">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bolder" id="text-color">Take Free Demo</h5>
                    <p class="card-text">You can offer a free demo class to students to demonstrate your teaching
                        skills. In addition, you will be able to discuss tuition fees and timings during that class.
                    </p>
                </div>
            </div>
        </div>
        <!-- card 4 -->
        <div class="col-md-6 col-lg-3 my-2">
            <div class="car text-center">
                <div class="step-card-header">
                    <div class="step-card-header-icon">
                        <img src="./assets/images/icons8-tuition-30 1.png" alt="" class="p-3">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bolder" id="text-color">Start Tuition</h5>
                    <p class="card-text">Classes are auto-recorded for transparency & payment is calculated on a per
                        hour basis.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Student apply step cards end -->


@endsection