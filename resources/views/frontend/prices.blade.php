@extends('layouts/app')
@section('content')

<div class="container">

    <div class="row mt-5 justify-content-center">
      <div class="hero-section-title col-12 col-md-7 col-lg-7  mt-5">
        <h1><b>Tutors in your<br> Range or Budgets</b></h1>
        <p>Consectur adipiscing elitsedo eiusmod tempor incididuntem utaborate
          dolore magna aliqua ad minim veniamque.</p>
        <img src="./assets/images/Icon.png" alt="">
        <text>You can also join as parent to explore<a href="#"> Join today</a></text>
      </div>
      <div class="col-12 col-lg-4 col-md-5 p-3 d-none d-md-flex align-items-end">
        <div class="first-header-model pt-5 pt-md-0">
          <img src="./assets/images/Image.png" alt="" class="header-shape">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="boxes-center">
        <div class="price-boxes row d-flex justify-content-center mt-5">
          <div class="p-box col-sm-6 col-md-4 col-lg-3" id="box1">
            <h2><b>£20 - £29</b></h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos dolores nostrum in iusto
              hfjd lkvfpdfkdfs lhiuhiuo</p>
          </div>
          <div class="p-box col-sm-6 col-md-4 col-lg-3" id="box2">
            <h2><b>£40 - £87</b></h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos dolores nostrum in iustond
              ojvio djvpodpohjhj</p>
          </div>
          <div class="p-box col-sm-6 col-md-4 col-lg-3" id="box3">
            <h2><b>£90 - £119</b></h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos dolores nostrum in iustoni
              hvioshvoid jiofhoikkl</p>
          </div>
        </div>
      </div>
    </div>


    <div class="boxcontent container w-75 mt-4">
      <p>We charge a small service fee for processing your lessons. It just helps us keep your
        bookings neat and timely. These prices do not include University level tutors who charge up to £52/hr
      </p>
    </div>
    <div class="find-tutor-budget mt-5 mb-4 py-3">
      <h1><b> Find a Tutor for your Budget </b></h1>
    </div>
    <div class="find-1-content d-flex justify-content-center mb-5">
      <div class="find-1-text">
        <h5><b> Find £20 - £29 Tutors </b></h5>
      </div>
      <div class="find-1-text ms-3">
        <h5><b> Find £40 - £89 Tutors </b></h5>
      </div>
      <div class="find-1-text ms-3">
        <h5><b> Find £90 - £119 Tutors </b></h5>
      </div>
    </div>

  </div>

  <div class="container mt-5">
    <div class="row  pt-5 justify-content-xl-center align-items-center mb-5">
      <div class="mid-content1 col-12 col-lg-6 col-md-offset-1 mt-5">
        <h1>Meet Tutors<br> for Free </h1>
        <p>Lorem ipsum dolor sit amet. Est magni cupiditate ad laboriosam vitae a dicta nisi qui corrupti
          laborum non repellat molestiae. Sit eaque quam cum itaque dolores vel culpa maiores. Aut
          architecto earum ut quidem assumenda ad dicta harum aut voluptatem iure qui consequuntur nihil
          et internos rerum eum velit eaque. Vel optio vitae et ipsa impedit dolorum reiciendis.</p>
      </div>
      <div class="col-12 col-lg-5 d-flex justify-content-center justify-content-lg-start">
        <img src="./assets/images/Frame@2x.png" alt="" class="mid-content1-img img-fluid">
      </div>
    </div>
    <div class="row justify-content-lg-center">
      <div class="col-12 col-lg-5 mt-4 order-2 order-lg-1 d-flex justify-content-center justify-content-lg-start">
        <img src="./assets/images/Character.png" alt="" width="100%" class="mid-content2-img img-fluid">
      </div>
      <div class="mid-content2 col-12 col-lg-6 col-md-offset-1 mt-4 order-1 order-lg-2 d-flex flex-column ">
        <h1 class="mt-2">You’ll only pay for<br> what you use</h1>
        <p>Lorem ipsum dolor sit amet. Est magni cupiditate ad laboriosam vitae a dicta nisi qui corrupti
          laborum non repellat molestiae. Sit eaque quam cum itaque dolores vel culpa maiores. Aut
          architecto earum ut quidem assumenda ad dicta harum aut voluptatem iure qui consequuntur nihil
          et internos rerum eum velit eaque. Vel optio vitae et ipsa impedit dolorum reiciendis.</p>
      </div>
    </div>
  </div>
  <!-- Review Section  -->
  <div class="container-fluid py-5">
    <div class="row py-md-5" id="review-section-head">
      <div class="review-trustpilot col-12 text-center">
        <h1><text>4.5/5 Review <a href="#">on Trustpilot</a></text></h1>
      </div>
    </div>
    <div class="row py-3 justify-content-center mt-5">
      <div class="col-12 col-md-10 text-center">

        <div class="card-center">
          <div>
            <div class="card text-center review-card mx-auto">
              <div class="card-img-top px-4 pt-3 review-card mx-auto">
                <p>The institute boasts an impressive roster of tutors who are not only experts
                  in
                  their respective fields but also skilled in online teaching methods.
                </p>
                <div class="card-img-div">
                  <img src="./assets/images/imgpsh_fullsize_anim.png" class="mx-auto" alt="...">
                </div>
              </div>
              <div class="card-body">
                <img src="./assets/images/stars-steps.svg" alt="" srcset="" class="mx-auto">
                <p class="mb-0 mt-2">Mr John </p>
              </div>
            </div>
          </div>

          <div>
            <div class="card text-center review-card mx-auto">
              <div class="card-img-top px-4 pt-3 review-card mx-auto">
                <p>Flexible Scheduling: As a student with a busy schedule, I appreciate the flexibility [ Tutor 24/7 ]
                  provides when it comes to scheduling sessions.
                </p>
                <div class="card-img-div pt-4">
                  <img src="./assets/images/imgpsh_fullsize_anim.png" class="mx-auto" alt="...">
                </div>
              </div>
              <div class="card-body ">
                <img src="./assets/images/stars-steps.svg" alt="" srcset="" class="mx-auto">
                <p class="mb-0 mt-2">Miss Wick </p>
              </div>
            </div>
          </div>

          <div>
            <div class="card text-center review-card mx-auto">
              <div class="card-img-top px-4 pt-3 review-card mx-auto">
                <p>The institute boasts an impressive roster of tutors who are not only experts
                  in
                  their respective fields but also skilled in online teaching methods.
                </p>
                <div class="card-img-div">
                  <img src="./assets/images/imgpsh_fullsize_anim.png" class="mx-auto" alt="...">
                </div>
              </div>
              <div class="card-body">
                <img src="./assets/images/stars-steps.svg" alt="" srcset="" class="mx-auto">
                <p class="mb-0 mt-2">Jae Hopkins</p>
              </div>
            </div>
          </div>

          <div>
            <div class="card text-center review-card mx-auto">
              <div class="card-img-top  px-4 pt-3 review-card mx-auto">
                <p>Flexible Scheduling: As a student with a busy schedule, I appreciate the flexibility [ Tutor 24/7 ]
                  provides when it comes to scheduling sessions.
                </p>
                <div class="card-img-div pt-4">
                  <img src="./assets/images/imgpsh_fullsize_anim.png" class="mx-auto" alt="...">
                </div>
              </div>
              <div class="card-body">
                <img src="./assets/images/stars-steps.svg" alt="" srcset="" class="mx-auto">
                <p class="mb-0 mt-2">Mick Dobins</p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center review-card mx-auto">
              <div class="card-img-top px-4 pt-3 review-card mx-auto">
                <p>Flexible Scheduling: As a student with a busy schedule, I appreciate the flexibility [ Tutor 24/7 ]
                  provides when it comes to scheduling sessions.
                </p>
                <div class="card-img-div pt-4">
                  <img src="./assets/images/imgpsh_fullsize_anim.png" class="mx-auto" alt="...">
                </div>
              </div>
              <div class="card-body">
                <img src="./assets/images/stars-steps.svg" alt="" srcset="" class="mx-auto">
                <p class="mb-0 mt-2">Mick Dobins</p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center review-card mx-auto">
              <div class="card-img-top px-4 pt-3 review-card mx-auto">
                <p>Flexible Scheduling: As a student with a busy schedule, I appreciate the flexibility [ Tutor 24/7 ]
                  provides when it comes to scheduling sessions.
                </p>
                <div class="card-img-div pt-4">
                  <img src="./assets/images/imgpsh_fullsize_anim.png" class="mx-auto" alt="...">
                </div>
              </div>
              <div class="card-body">
                <img src="./assets/images/stars-steps.svg" alt="" srcset="" class="mx-auto">
                <p class="mb-0 mt-2">Mick Dobins</p>
              </div>
            </div>
          </div>
          <div>
            <div class="card text-center review-card mx-auto">
              <div class="card-img-top px-4 pt-3 review-card mx-auto">
                <p>Flexible Scheduling: As a student with a busy schedule, I appreciate the flexibility [ Tutor 24/7 ]
                  provides when it comes to scheduling sessions.
                </p>
                <div class="card-img-div pt-4">
                  <img src="./assets/images/imgpsh_fullsize_anim.png" class="mx-auto" alt="...">
                </div>
              </div>
              <div class="card-body">
                <img src="./assets/images/stars-steps.svg" alt="" srcset="" class="mx-auto">
                <p class="mb-0 mt-2">Mick Dobins</p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
  <!-- Review Section end  -->
  <div class="container my-5">
    <div class="speak-tutor d-flex justify-content-center mt-3">
      <h1>Speak to a Tutor and get Tuition Sorted Today</h1>
    </div>

    <div class="findtutor d-flex justify-content-center mt-5">
      <a href="./Find tuotr.html"><b>
          <h1>Find a Tutor</h1>
        </b></a>
    </div>
  </div>


@endsection