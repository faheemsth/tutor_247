@extends('layouts/app')
@section('content')

  <!-- /*****************************************************************************************************************
  *                                              Logo and Blog Start                                              *
  ****************************************************************************************************************/ -->

  <div class="container-fluid mt-5">
    <div class="row justify-content-center text-center py-md-5 ">
      <img src="./assets/images/Group 162.png" alt="" class="w-25 img-fluid">
      <p class="fs-2 pb-4 fw-bolder" id="text-color">Your go-to guide for education advice.</p>
    </div>
  </div>


  <!-- /*****************************************************************************************************************
  *                                              Logo and Blog End                                                  *
  ****************************************************************************************************************/ -->




  <!-- /*****************************************************************************************************************
  *                                              Blog Catagory Start                                                     *
  ****************************************************************************************************************/ -->

  <div class="container blog-category-container">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10 category">

        <div class="blog-category">

          <div class="card-box card-box-first">

            <div class="card-box-circle">
              <img src="./assets/images/Group (2).png" alt="" class="card-box-img">
            </div>

            <div class="card-box-content">
              <h5 class=" fs-2">For Parents</h5>
              <p>Find up-to-date expert advice for supporting your teen's studies & wellbeing.</p>
            </div>

            <div class="card-box-btn">
              <a href="" class="button btn fw-bold fs-5">Go to Parents Blog</a>
            </div>

          </div>
        </div>

        <div class="blog-category">

          <div class="card-box card-box-mid">

            <div class="card-box-circle">
              <img src="./assets/images/Group (3).png" alt="" class="card-box-img">
            </div>

            <div class="card-box-content">
              <h5 class="fs-2">For Students</h5>
              <p>Get study tips, revision hacks & careers advice to help you achieve your best at school and beyond.
              </p>
            </div>

            <div class="card-box-btn">
              <a href="" class="button btn mt-3 fw-bold fs-5">Go to Students Blog</a>
            </div>

          </div>

        </div>

        <div class="last-blog-category">

          <div class="card-box ">

            <div class="card-box-circle">
              <img src="./assets/images/Group (4).png" alt="" class="card-box-img">
            </div>

            <div class="card-box-content">
              <h5 class="fs-2">For Tutors</h5>
              <p>Read up on the latest news from MyTutor, plus top tips from other tutors on how to support your
                students.</p>
            </div>

            <div class="card-box-btn">
              <a href="" class="button btn mt-3 fw-bold fs-5">Go to Tutor Blog</a>
            </div>

          </div>


        </div>

      </div>


      <!-- /*****************************************************************************************************************
  *                                              Blog Catagory End                                                    *
  ****************************************************************************************************************/ -->




      <!-- /*****************************************************************************************************************
  *                                              Cards Portion Start                                                    *
  ****************************************************************************************************************/ -->


      <div class="col-md-1"></div>
    </div>

  </div>


  <div class="container">
    <h1 class="text-center pt-5 my-5 fw-bold" id="text-color">Featured</h1>



    <div class="row blogs">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0">
          <img src="./assets/images/MyIC_Article_113863 1.png" alt="">
          <div class="card-body">
            <p class="mt-2 text-secondary">Exams and Revision</p>
            <p class="p3 fw-bold fs-5">
              What to do when Results
              Day doesn’t go to Plan
            </p>
            <p> <small>Lorem ipsum dolor sit amet. Est magni cupiditate ad laboriosam vitae a dicta .</small>
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0">
          <img src="./assets/images/advice-min-2 1.png" alt="">
          <div class="card-body">
            <p class="mt-2 text-secondary">A Level</p>
            <p class="p3 fw-bold fs-5">
              Your guide to UCAS Clearing: Time for Plan B
            </p>
            <p> <small>Lorem ipsum dolor sit amet. Est magni cupiditate ad laboriosam vitae a dicta .</small>
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0">
          <img src="./assets/images/dl.beatsnoop 3.png" alt="">
          <div class="card-body">
            <p class="mt-2 text-secondary">Just for Fun</p>
            <p class="p3 fw-bold fs-5">
              What type of Summer Holiday Parent are you?
            </p>
            <p> <small>Lorem ipsum dolor sit amet. Est magni cupiditate ad laboriosam vitae a dicta .</small>
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0">
          <img src="./assets/images/165-Graduation-Quotes-On-Success-Dreams-and-Your-Future 1.png" alt="">
          <div class="card-body">
            <p class="mt-2 text-secondary">Just for Fun</p>
            <p class="p3 fw-bold fs-5">
              What type of Summer Holiday parent are you?
            </p>
            <p> <small>Lorem ipsum dolor sit amet. Est magni cupiditate ad laboriosam vitae a dicta .</small>
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0">
          <img src="./assets/images/_128263221_gettyimages-1403066184 1.png" alt="">
          <div class="card-body">
            <p class="mt-2 text-secondary">MyTutor Updates</p>
            <p class="p3 fw-bold fs-5">
              July update from MyTutor: Pay changes, career advice, free meetings & more
            </p>
            <p> <small>Lorem ipsum dolor sit amet. Est magni cupiditate ad laboriosam vitae a dicta .</small>
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card border-0">
          <img src="./assets/images/shutterstock_1676998309 1.png" alt="">
          <div class="card-body">
            <p class="mt-2 text-secondary">Exams and Revision · 3 weeks ago</p>
            <p class="p3 fw-bold fs-5">
              Results day: How to support your teen before, during and after
            </p>
            <p> <small>Lorem ipsum dolor sit amet. Est magni cupiditate ad laboriosam vitae a dicta .</small>
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- /*****************************************************************************************************************
  *                                              Cards Portion End                                                    *
  ****************************************************************************************************************/ -->



  <!-- /*****************************************************************************************************************
  *                                           Over a 100+ and Last Button Start                                                       *
  ****************************************************************************************************************/ -->

  <div class="row">
    <div class="col text-center py-5">
      <h1 id="text-color" class="my-4"> <strong>Over a 100+ <br>
          Tutor are Available to Teach you</strong> </h1>
      <a href="" id="find-tutor">Find a Tutor</a>
    </div>

  </div>

  <!-- /*****************************************************************************************************************
  *                                           Over a 100+ and Last Button Start                                                       *
  ****************************************************************************************************************/ -->


@endsection