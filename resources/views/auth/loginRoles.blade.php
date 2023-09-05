@extends('layouts.app')

@section('content')
    
<div class="container mt-5 ">
    <div class="row">
        <div class=" login col-6  ">
            <h3 class="fs-1 fw-bold">Log in</h3>
        </div>
        <div class="col-6 fs-4 mt-2 text-end"><a href="./index.html" class="text-dark"><i class="fa-solid fa-xmark fa-2xl"></i></a></div>
    </div>
    <!-- card1 -->
    <div class="row col-md-12 mt-5 gap-4 justify-content-center  text-center">
        <div class="card col-md-3" style="width: 16rem;background-color: rgba(171, 254, 16, 1);">
            <img src="./assets/images/1.png" class=" img-one card-img-top img-one img-fluid w-75 mx-auto" alt="...">
            <div class="card-body">
                <h4 class="card-title fw-bold">I am a Parent</h4>
                <p class="card-text">Manage Payments or Lessons for your Child</p>
                <a href="{{route('login')}}" class="btn d-grid gap-2 btn-light">Parent Log in</a>
            </div>
        </div>
        <!-- card2 -->
        <div class="card col-md-3" style="width: 16rem;background-color: rgba(171, 254, 16, 1);">
            <img src="./assets/images/2.png" class=" img-two card-img-top img-fluid w-75 mx-auto" alt="...">
            <img src="./assets/images/Group.png" alt="" srcset="" id="shape-mail">
            <img src="./assets/images/Pencil.png" alt="" srcset="" id="shape-pencil">
            <div class="card-body">
                <h4 class="card-title fw-bold">I am a Student</h4>
                <p class="card-text">Manage Payments or Lessons for your Child</p>
                <a href="./student-login.html" class="btn  d-grid gap-2 " style="background-color: #0096FF;">Student Log in</a>
            </div>
        </div>
        <!-- card3 -->
        <div class="card col-md-3" style=" width: 16rem;background-color: rgba(171, 254, 16, 1); ">
            <img src="./assets/images/3.png" class=" img-three card-img-top img-fluid w-75 mx-auto" alt="...">
            <img src="./assets/images/Layer_1 (2).png" alt="" srcset="" id="bg-shape-1">
            <img src="./assets/images/Speech Bubble (2).png" alt="" srcset="" id="bg-shape-2">
            <div class="card-body">
                <h4 class="card-title fw-bold">I am a Tutor</h4>
                <p class="card-text">Manage Payments or Lessons for your Child</p>
                <a href="./student-login.html" class="btn d-grid gap-2 btn-light">Tutor Log in</a>
            </div>
        </div>
        <!-- card4 -->
        <div class="card col-md-3" style="width: 16rem;background-color: rgba(171, 254, 16, 1);">
            <img src="./assets/images/4.png" class="card-img-top img-fluid  w-100 mx-auto" alt="...">
            <div class="card-body">
                <br>
                <h4 class="card-title fw-bold">I am a Organization</h4>
                <p class="card-text">Manage Payments or Lessons for your Child</p>
                <a href="./student-login.html" class="btn d-grid gap-2 btn-light">Organization Log in</a>
            </div>
        </div>
    </div>

</div>
<div class="container mt-5">
    <div class="row justify-content-between align-items-center bottom mx-xl-5">
        <div class="mt-2  col-md-7 d-flex justify-content-around flex-wrap">
            <div class="col-12 col-xl-4 "><a href="#" class="text-dark  text-decoration-none">Need help? Call us on
                   <b>+447851012039 </b>or <b> Email</b></a></div>
            <div class="col-12 col-xl-4"><a href="#" class="text-dark  text-decoration-none">Help! I'm an <b> Adult
                    Learn</b></a></div>
            <div class="col-12 col-xl-4"><a href="#" class="text-dark  text-decoration-none">Log in as a <b>Primary
                    Pupil</b></a></div>
        </div>
        <div class="mt-3 mt-md-0 col-lg-4 d-flex justify-content-center justify-content-md-end gap-3">
            <div><a href="./student-login.html" class="btn" style="background-color:  #063B00;color: white;">Login as Super Admin</a>
            </div>
            <div><a href="./signup.html" class="btn" style="background-color:  #063B00;color: white;">Sign up</a></div>
        </div>
    </div>
</div>

@endsection