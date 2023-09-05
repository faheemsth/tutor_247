@extends('layouts.app')

@section('content')

<style type="text/css">

  #multistep_form fieldset:not(:first-of-type) {
    display: none;
  }

  .text-left-1 {
    text-align: left !important;
  }

  .form-1-bottom {
    bottom: 4%;
  }
  .form-3-bottom{
    top: 30%;
    z-index: -99;
  }
  .form-end-1 {
    top: 36%;
    right: 0px;
  }

  .form-end-2 {
    top: 49%;
  }
   @media screen and (max-width:1025px){.form-end-1 {top: 34%;right: 0px;}.form-end-2 {top:46%;}}
   @media screen and (max-width:770px){.form-end-1 {top: 29%;right: 0px;}.form-end-2 {top:42%; }}
</style>

<!-- logo -->
<div class="container mt-5">
    <div class="row">
      <div class="col-md-12 d-flex justify-content-center mt-5">
        <img src="./assets/images/247 NEW Logo 1.png" alt="Logo" width="250" height="auto">
      </div>
    </div>
  </div>

  <!-- logo end -->

  <!-- prograss bar -->

  <div class="container mt-3">
      <div class="d-flex justify-content-between align-items-center">
        <div class="col-md-1 text-center">
         <a href="#" class="link-dark previous" id="previous1" id="previous2" id="previous3"><i class="fa fa-light fa-arrow-left fa-2x"></i></a> 
        </div>
        <div class=" col-8 col-md-10">
          <div class="progress">
            <div class="progress-bar active" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="background-color: rgba(171, 254, 16, 1);"></div>
          </div>
        </div>
        <div class="col-md-1 text-center">
          <a href="#" class="link-dark"><i class="fa-solid fa-xmark fa-2x"></i></a>  
        </div>
      </div>
    </div>

  <!-- End prograss bar -->

  <!-- select type -->

  <div class="container mb-5 pb-5 pb-md-0 mb-md-0">
    <div class="panel-group">
      <div class="panel panel-primary">
        <form class="form-horizontal" action="" id="multistep_form">
          <fieldset id="account">
            <div class="panel-body mt-5">
              <h2 class="text-center fs-1" id="text-color"><strong>Apply as...</strong></h2><br>
              <div class="container">
                <div class="apply-as">
                  <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                    <a href="#" class="btn col-md-4 col-lg-3 col-12 text-left-1 text-dark fs-4 fw-bold next"
                    style="background-color: rgba(171, 254, 16, 1);"
                    id="next1" > <img src="assets/images/graduated.svg"
                        alt="student icon" class="px-3 next" width="60" height="auto"> Student</a>
                    <a href="#" class="btn col-md-4 col-lg-3 text-left-1 text-dark fs-4 fw-bold next" id="next1"
                    style="background-color: rgba(171, 254, 16, 1);"
                    > <img src="assets/images/tutor.svg"
                        alt="tutor icon" class="px-3" width="60" height="auto">Tutor</a>
                  </div>
                  <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mt-3">
                    <a href="#" class="btn col-md-4 col-lg-3 text-left-1 text-dark fs-4 fw-bold next" id="next1" style="background-color: rgba(171, 254, 16, 1);"> <img src="assets/images/fathers-day.svg"
                        alt="Parent icon" class="px-3" width="60" height="auto"> Parent</a>
                    <a href="#" class="btn col-md-4 col-lg-3 text-left-1 text-dark fs-4 fw-bold next d-flex" id="next1" style="background-color: rgba(171, 254, 16, 1);"> <img src="assets/images/school.svg"
                        alt="School icon" class="px-3" width="60" height="auto">Organization</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-md-flex justify-content-between position-relative d-none  mb-5">
              <div class="d-flex align-items-end">
                <img src="assets/images/tree 1.svg" alt="" width="30%" height="auto">
                <img src="assets/images/tree 2.svg" alt="" width="30%" height="auto">
              </div>
              <div>
                <img src="assets/images/tree 3.svg" alt="" width="60%" height="auto">
              </div>
              <div class="form-1-bottom position-absolute d-none d-md-inline-block">
                <img src="assets/images/form1 bottom.svg" alt="" width="100%" height="auto">
              </div>
            </div>
          </fieldset>

          <fieldset id="personal">
            <div class="panel-body mt-5">
              <h2 class="text-center fs-1" id="text-color"><strong>Your Full Name?</strong></h2><br>
              <div class="form-group">
                <div class="col-10 col-md-5 row m-auto">
                  <input type="text" class="form-control m-auto" id="fname" name="fname" placeholder="Type Your First & Last Name">
                  <small class="text-danger m-auto d-none"><i class="fa-solid fa-circle-exclamation"></i> First & Last name are Requird!</small>
                </div>
              </div>
              <div class="row col-2 col-md-1 m-auto">
                <input type="button" name="password" style="background-color: rgba(0, 150, 255, 1);" class="next btn mt-5" value="Next" id="next2"/>
              </div>
            </div>
            <div class="form-1-bottom d-none d-md-block mb-5">
              <img src="assets/images/form1 bottom.svg" alt="" width="100%" height="auto">
            </div>
          </fieldset>

          <fieldset id="contact">
            <div class="panel-body mt-5">
              <h2 class="text-center fs-1" id="text-color"><strong>Add your Phone Number or Email?</strong></h2><br>
              <div class="form-group">
                <div class="col-12 col-md-6 col-lg-5 row m-auto mb-3">
                  <div class="input-phone"></div>
                  <small class="text-secoundry" style="font-size: 18px">We’ll Keep your Number Confidential.
                  </small>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12 col-md-6 col-lg-5 m-auto">
                  <input type="email" class="form-control m-auto" id="email" name="email" placeholder="Type Your Email">
                  <div class="form-check mt-3 ms-2">
                    <input class="form-check-input me-1" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                      <strong>I would like to Receive, Tips, and offers by Email</strong>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row col-lg-2 col-3  col-md-3 m-auto" style="margin-bottom: 100px !important;">
                <input type="button" style="background-color: rgba(0, 150, 255, 1);" name="password" class="next btn mt-5 text-white" value="Next" id="next3"/>
              </div>
              <div class="form-3-bottom position-absolute text-center d-none d-md-block">
                <img src="assets/images/form3 bottom.svg" alt="" width="90%" height="auto">
              </div>
            </div>
            
          </fieldset>

          <fieldset id="personal">
            <div class="panel-body mt-5">
              <h2 class="text-center fs-1" id="text-color"><strong>Which Subject would you Like Help with?</strong></h2><br>
              <div class="container">
                <div class="d-flex flex-wrap justify-content-center">
                  <a href="#" class="next" id="next4" style="text-decoration: none">
                    <div class="card text-center py-4  px-3 m-3" style="border-radius: 15px; width: 135px; background-color: rgba(171, 254, 16, 1);">
                      <img src="assets/images/mathematics.svg" alt="Math" width="50" class="m-auto">
                      <span class="fw-bolder text-dark">Mathematics</span>
                    </div>
                  </a>
                  <a href="#" class="next" id="next4" style="text-decoration: none">
                    <div class="card text-center p-4 m-3" style="border-radius: 15px; width: 135px;background-color: rgba(171, 254, 16, 1);">
                      <img src="assets/images/english.svg" alt="Math" width="50" class="m-auto">
                      <span class="fw-bolder text-dark">English</span>
                    </div>
                  </a>
                  <a href="#" class="next" id="next4" style="text-decoration: none">
                    <div class="card text-center p-4 m-3" style="border-radius: 15px; width: 135px;
                    background-color: rgba(171, 254, 16, 1);">
                      <img src="assets/images/Chemistry.svg" alt="Math" width="50" class="m-auto">
                      <span class="fw-bolder text-dark">Chemistry</span>
                    </div>
                  </a>
                  <a href="#" class="next" id="next4" style="text-decoration: none">
                    <div class="card text-center p-4 m-3" style="border-radius: 15px; width: 135px;background-color: rgba(171, 254, 16, 1);">
                      <img src="assets/images/Biology.svg" alt="Math" width="50" class="m-auto">
                      <span class="fw-bolder text-dark">Biology</span>
                    </div>
                  </a>
                  <a href="#" class="next" id="next4" style="text-decoration: none">
                    <div class="card text-center p-4 m-3" style="border-radius: 15px; width: 135px;
                    background-color: rgba(171, 254, 16, 1);">
                      <img src="assets/images/physics.svg" alt="Math" width="50" class="m-auto">
                      <span class="fw-bolder text-dark">Physics</span>
                    </div>
                  </a>
                  
                </div>
              </div>
              <div class="row col-7 col-md-4 col-lg-3 col-xl-2 m-auto" >
                <a href="#" class="btn mt-5 py-2 px-4 text-white" style="background-color: rgba(0, 150, 255, 1);font-size:20px;">More Subjects</a>
              </div>
              <p style="font-size:20px;font-style:italic" class="text-center my-5 text-secondary text-italic">We’ll Select Tutors who Specialise in your Chosen Subject (with A/A*’s to Show for it)!.
              </p>
            </div>
          </fieldset>

          <fieldset id="personal">
            <div class="panel-body mt-5">
              <h3 class="text-center text-secondary"><strong>You’re all Set up, Name</strong></h3><br>
              <h2 class="text-center fs-1" id="text-color"><strong>Now Let’s find you a Great Tutor</strong></h2><br>
              <div class="card text-center col-md-6 col-10 col-xl-3 col-lg-4 py-5  m-auto" style="border-radius: 10px;background-color: rgba(171, 254, 16, 1); margin-bottom: 120px !important;">
                <img src="assets/images/Group 1122.png" alt="" width="200" class="m-auto">
                <p class="m-auto pt-4 col-md-10">We Interview all our Tutors
                  and only 1 in 8 Candidates
                  make the out.</p>
                  <div class="dropdown mt-2">
                    <button class="btn btn-light mb-0 col-md-10 col-10 justify-content-center dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      <strong>Let's Go</strong>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">Join as Tutor</a></li>
                      <li><a class="dropdown-item" href="#">Join as Student</a></li>
                      <li><a class="dropdown-item" href="#">Join as Organization</a></li>
                      <li><a class="dropdown-item" href="#">Join as Parent</a></li>
                    </ul>
                  </div>
              </div>
            </div>
            <div class="form-end-1 d-none d-md-block position-absolute">
              <img src="assets/images/Plant.svg" alt="" width="65%" height="auto">
            </div>
            <div class="form-end-2 position-absolute d-none d-md-block">
              <img src="assets/images/form1 bottom.svg" alt="" width="90%" height="auto">
            </div>
          </fieldset>

        </form>
      </div>
    </div>
  </div>
  
@endsection
