@extends('layouts.app')

@section('content')
    <!-- hero section  -->
    <section class="homePage mt-5">
        <div class="container-fluid">
          <div class="container">
            <!-- first row -->
            <div class="row hero-section">
              <div class="col-12 mt-5 col-lg-6 col-xl-6 hero-text-section" id="text-color">
                <h1>Lorem ipsum dolor sit amet, consectetur.</h1>
    
                <div id="hero-focus">
                  <p class="px-2 fa-2x fw-bold">Lorem, ipsum</p>
                </div>
                <p class="py-2">Consectur adipiscing elitsedo eiusmod tempor incididuntem utaborate
                  dolore magna aliqua ad minim veniamque.</p>
    
                <div class="mb-5 pt-2 pb-4">
                  <a type="button" href="./signup.html" class="btn px-4 py-2 mb-2" style="background:linear-gradient(93.86deg, #063B00 9.41%, #000000 98.3%);
                  ;
                  font-size: 16px;color: white; border: none;">Start as student   <i class="fa-solid fa-chevron-right"></i></a>
                  <a type="button" href="./signup.html" class="btn px-4 py-2 mb-2" style="border: 1px solid lightgray;
                  font-size: 16px;font-family:'Outfit', sans-serif;">Join as Tutor
                    <span style="color:rgba(29, 161, 242, 1);">It’s Free <i class="fa-solid fa-exclamation"></i> </span>
                  </a>
                  <p class="">
                    <img src="./assets/images/Icon.png" alt="" srcset="">
                    Lorem ipsum, dolor sit amet consectetur <span class="text-primary">is adipisicing </span>
                  </p>
                </div>
              </div>
              <div class="col-md-6 d-none d-lg-flex justify-content-center">
    
                <div class="shapes-parent py-5">
                  <div class="shapes">
                    <img src="./assets/images/Ellipse 40.png" alt="" srcset="" class="shape">
                  </div>
                  <img src="./assets/images/Mask group.png" alt="" srcset="" class="model-header">
                  <!-- <img src="assets/images/brand-image-for-hero.png" alt="" class="w-50 img-card" id="img"> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- hero Sec end  -->
    
    
    
      <!-- Banner section  -->
      <div class="container-fluid py-3" style="background-color: rgba(0, 150, 255, 0.1);">
        <div class="row justify-content-lg-center gap-lg-5 py-3 banner-sec-home">
          <div class="col-lg-2 col-md-3 col-6 banner-border-first py-2">
            <div class="card text-center border-0 bg-transparent py-2 align-items-center">
              <div class="mb-2" id="banner-icon">
                <img src="./assets/images/books-stack-of-three 1.png" alt="" srcset=""
                  >
              </div>
              <h4>560,616</h4>
              <small>Subjects available for verified
                and top tutors</small>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-6 py-2">
            <div class="card text-center bg-transparent border-0 py-2 align-items-center">
              <div class="mb-2" id="banner-icon">
                <img src="./assets/images/portfolio 1.png" alt="" srcset=""
                  >
              </div>
              <h4>648,482</h4>
              <small>Total tuition job posted on the
                platform till date</small>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-6 banner-border-second py-2">
            <div class="card text-center border-0 bg-transparent py-2 align-items-center">
              <div class="mb-2" id="banner-icon">
                <img src="./assets/images/clock 1.png" alt="" srcset="" >
              </div>
              <h4>20+ Hours </h4>
              <small>User daily average time spent
                on the platform</small>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-6 banner-border-third py-2">
            <div class="card text-center border-0 bg-transparent py-2 align-items-center">
              <div class="mb-2" id="banner-icon">
                <img src="./assets/images/icons8-training-30 1.png" alt="" srcset=""
                  >
              </div>
              <h4>100 +</h4>
              <small>Active instructor and students
                available on the platform</small>
            </div>
          </div>
        </div>
      </div>
      <!-- Banner section end  -->
    
    
      <!-- Subject & Lang -->
      <div class="container-fluid lan-sec my-5">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10  py-5">
            <div class="row mb-5">
              <div class="col-12 text-center">
                <p class="fa-2x mb-0" id="text-color">Most Popular</p>
                <h1 class="fa-3x fw-bold" id="text-color">Subjects & Languages</h1>
              </div>
            </div>
            <div class="row justify-content--md-center mb-3 subject-card">
              <div class="col-6 col-lg-3 mb-3">
                <div class="subj-card text-center py-3"
                  style="border: 2px solid rgb(226, 226, 226); border-radius: 35px;">
                  <div class="subj-card-icon">
                    <img src="./assets/images/mathematics 1.svg" alt="" srcset="">
                  </div>
                  <h4>Mathematics</h4>
                  <p class="mb-0">98 Tutors Available </p>
                  <p class="mb-0">89 Students</p>
                </div>
              </div>
              <div class="col-6 col-lg-3 mb-3">
                <div class="subj-card text-center py-3"
                  style="border: 2px solid rgb(226, 226, 226); border-radius: 35px;">
                  <div class="subj-card-icon">
                    <img src="./assets/images/linguistics 1.svg" alt="" srcset="">
                  </div>
                  <h4>English</h4>
                  <p class="mb-0">80 Tutors Available </p>
                  <p class="mb-0">110 Students</p>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="subj-card text-center py-3"
                  style="border: 2px solid rgb(226, 226, 226); border-radius: 35px;">
                  <div class="subj-card-icon">
                    <img src="./assets/images/flask 1.svg" alt="" srcset="">
                  </div>
                  <h4>Chemistry</h4>
                  <p class="mb-0">55 Tutors Available </p>
                  <p class="mb-0">525 Students</p>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="subj-card text-center py-3"
                  style="border: 2px solid rgb(226, 226, 226); border-radius: 35px;">
                  <div class="subj-card-icon">
                    <img src="./assets/images/dna 1.svg" alt="" srcset="">
                  </div>
                  <h4>Biology</h4>
                  <p class="mb-0">100 Tutors Available </p>
                  <p class="mb-0">800 Students</p>
                </div>
              </div>
            </div>
            <!-- second row  -->
            <div class="row justify-content-center mb-5">
              <div class="col-6 col-lg-3 mb-3">
                <div class="subj-card text-center py-3 px-3 px-md-0"
                  style="border: 2px solid rgb(226, 226, 226); border-radius: 35px;">
                  <div class="subj-card-icon">
                    <img src="./assets/images/code 1.svg" alt="" srcset="">
                  </div>
                  <h4>Web Programming</h4>
                  <p class="mb-0">7 Tutors Available </p>
                  <p class="mb-0">95 Students</p>
                </div>
              </div>
              <div class="col-6 col-lg-3 mb-3">
                <div class="subj-card text-center py-2"
                  style="border: 2px solid rgb(226, 226, 226); border-radius: 35px; ">
                  <div class="subj-card-icon">
                    <img src="./assets/images/digital-drawing 1.svg" alt="" srcset="">
                  </div>
                  <h4>Scratch Programming</h4>
                  <p class="mb-0">8 Tutors Available </p>
                  <p class="mb-0">110 Students</p>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="subj-card text-center py-3 px-lg-3 px-xl-0"
                  style="border: 2px solid rgb(226, 226, 226); border-radius: 35px;">
                  <div class="subj-card-icon">
                    <img src="./assets/images/linguistics 1.svg" alt="" srcset="">
                  </div>
                  <h4>Spoken English</h4>
                  <p class="mb-0">4 Tutors Available </p>
                  <p class="mb-0">530 Students</p>
                </div>
              </div>
              <div class="col-6 col-lg-3">
                <div class="subj-card text-center py-3 px-lg-4 px-xl-0"
                  style="border: 2px solid rgb(226, 226, 226); border-radius: 35px;">
                  <div class="subj-card-icon">
                    <img src="./assets/images/mathematics 1.svg" alt="" srcset="">
                  </div>
                  <h4>Mental Maths</h4>
                  <p class="mb-0">2 Tutors Available </p>
                  <p class="mb-0">800 Students</p>
                </div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-12 text-center">
                <a href="" id="find-tutor">More Subjects</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Subject & Lang end  -->
    
      <!-- Why choose us start  -->
      <div class="container-fluid choose-us">
        <div class=" circle-box circle-box-1 d-none d-md-block"></div>
        <div class=" circle-box circle-box-2 d-none d-md-block"></div>
        <div class=" circle-box circle-box-3 d-none d-md-block"></div>
        <div class="container">
          <div class="row choose-title my-5">
            <div class="col-12 text-center">
              <h1 id="text-color">Why Choose Us?</h1>
            </div>
          </div>
          <!-- choose us card  -->
          <div class="row choose-card-sec">
            <div class="col-12 col-md-6 col-lg-3 my-3 d-flex justify-content-center">
              <div class="choose-card-blue p-3 d-flex flex-column align-items-center text-center justify-content-center">
                <img src="./assets/images/Layer_1.png" alt="" class="w-75">
                <h1 class="mb-0 pb-0">Expert Tutors</h1>
                <hr class="w-75">
                <div class=>
                  <p class="mb-0">Lorem ipsum dolor
                    sit amet.</p>
                  <p>Est magni cupiditate
                    ad laboriosam vitae a
                    Dicta nisi qui corrupti
                    laborum non repellat
                    molestiae. </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 my-3 d-flex justify-content-center">
              <div class="choose-card-green p-3 d-flex flex-column align-items-center text-center justify-content-center">
                <img src="./assets/images/verified 1.png" alt="" class="w-50">
                <h1 class="mb-0 pb-0">Verified profiles</h1>
                <hr class="w-75">
                <div class=>
                  <p class="mb-0">Lorem ipsum dolor
                    sit amet.</p>
                  <p>Est magni cupiditate
                    ad laboriosam vitae a
                    Dicta nisi qui corrupti
                    laborum non repellat
                    molestiae. </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 my-3 d-flex justify-content-center">
              <div class="choose-card-blue p-3 d-flex flex-column align-items-center text-center justify-content-center">
                <img src="./assets/images/Layer_1 (1).png" alt="" class="w-50">
                <h1 class="mb-0 pb-0">Your Price</h1>
                <hr class="w-75">
                <div class=>
                  <p class="mb-0">Lorem ipsum dolor
                    sit amet.</p>
                  <p>Est magni cupiditate
                    ad laboriosam vitae a
                    Dicta nisi qui corrupti
                    laborum non repellat
                    molestiae. </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 my-3 d-flex justify-content-center">
              <div class="choose-card-green p-3 d-flex flex-column align-items-center text-center justify-content-center">
                <img src="./assets/images/online-learning 2.png" alt="" class="w-50">
                <h1 class="mb-0 pb-0">Learn Anytime <br>
                  Anywhere</h1>
                <hr class="w-75 mt-2">
                <div class=>
                  <p class="mb-0">Lorem ipsum dolor
                    sit amet.</p>
                  <p>Est magni cupiditate
                    ad laboriosam vitae a
                    Dicta nisi qui corrupti
                    laborum non repellat
                    molestiae. </p>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
      <!-- Why choose us end  -->
    
      <!-- Review Section  -->
      <div class="container-fluid py-5">
        <div class="row mb-2 py-md-5" id="review-section-head">
          <div class="col-12 text-center">
            <h1 class="review-link" id="text-color">4.5/5 Review
              <a href=""><img src="./assets/images/Vector (1).png" style="margin-top: -10px; margin-right: 5px;" alt="" srcset="" width="35px" >Trustpilot</a>
            </h1>
            
          </div>
        </div>
        <div class="row py-3 justify-content-center">
          <div class="col-xl-8 col-md-10 col-12 text-center">
    
            <div class="card-center">
              <div>
                <div class="card text-center review-card mx-auto" style="width: 16rem;">
                  <div class="card-img-top px-4 pt-3 review-card mx-auto">
                    <p style="font-size: 15px;">The institute boasts an impressive roster of tutors who are not only experts
                      in
                      their respective fields but also skilled in online teaching methods.
                    </p>
                    <div class="card-img-div text-center">
                      <img src="./assets/images/Vector-1.png" class="mx-auto" alt="...">
                    </div>
                  </div>
                  <div class="card-body">
                    <img src="./assets/images/stars-steps.svg" alt="" srcset="" class="mx-auto">
                    <p class="mb-0 mt-2">Mr John </p>
                  </div>
                </div>
              </div>
    
              <div>
                <div class="card text-center review-card mx-auto" style="width: 16rem;">
                  <div class="card-img-top px-4 pt-3 review-card mx-auto">
                    <p style="font-size: 15px;">Flexible Scheduling: As a student with a busy schedule, I appreciate the flexibility [ Tutor 24/7 ] provides when it comes to scheduling sessions.
                    </p>
                    <div class="card-img-div">
                      <img src="./assets/images/Vector-1.png" class="mx-auto" alt="...">
                    </div>
                  </div>
                  <div class="card-body ">
                    <img src="./assets/images/Group (1).png" alt="" srcset="" class="mx-auto">
                    <p class="mb-0 mt-2">Miss Wick </p>
                  </div>
                </div>
              </div>
    
              <div>
                <div class="card text-center review-card mx-auto" style="width: 16rem;">
                  <div class="card-img-top px-4 pt-3 review-card mx-auto">
                    <p style="font-size: 15px;">Lorem ipsum dolor sit amet. Est magni cupiditate ad laboriosam vitae a dicta nisi qui corrupti laborum non repellat molestiae. 
                    </p>
                    <div class="card-img-div">
                      <img src="./assets/images/Vector-1.png" class="mx-auto" alt="...">
                    </div>
                  </div>
                  <div class="card-body">
                    <img src="./assets/images/stars-steps.svg" alt="" srcset="" class="mx-auto">
                    <p class="mb-0 mt-2">Jae Hopkins</p>
                  </div>
                </div>
              </div>
    
              <div>
                <div class="card text-center review-card mx-auto" style="width: 16rem;">
                  <div class="card-img-top px-4 pt-3 review-card mx-auto">
                    <p style="font-size: 15px;">Lorem ipsum dolor sit amet. Est magni cupiditate ad laboriosam vitae a dicta nisi qui corrupti laborum non repellat molestiae. 
                    </p>
                    <div class="card-img-div">
                      <img src="./assets/images/Vector-1.png" class="mx-auto" alt="...">
                    </div>
                  </div>
                  <div class="card-body">
                    <img src="./assets/images/stars-steps.svg" alt="" srcset="" class="mx-auto">
                    <p class="mb-0 mt-2">Mick Dobins</p>
                  </div>
                </div>
              </div>
    
              <div>
                <div class="card text-center review-card mx-auto" style="width: 16rem;">
                  <div class="card-img-top px-4 pt-3 review-card mx-auto">
                    <p style="font-size: 15px;">The institute boasts an impressive roster of tutors who are not only experts
                      in
                      their respective fields but also skilled in online teaching methods.
                    </p>
                    <div class="card-img-div">
                      <img src="./assets/images/Vector-1.png" class="mx-auto" alt="...">
                    </div>
                  </div>
                  <div class="card-body ">
                    <img src="./assets/images/stars-steps.svg" alt="" srcset="" class="mx-auto">
                    <p class="mb-0 mt-2">Mr John </p>
                  </div>
                </div>
              </div>
              <div>
                <div class="card text-center review-card mx-auto" style="width: 16rem;">
                  <div class="card-img-top px-4 pt-3 review-card mx-auto">
                    <p style="font-size: 15px;">The institute boasts an impressive roster of tutors who are not only experts
                      in
                      their respective fields but also skilled in online teaching methods.
                    </p>
                    <div class="card-img-div">
                      <img src="./assets/images/Vector-1.png" class="mx-auto" alt="...">
                    </div>
                  </div>
                  <div class="card-body">
                    <img src="./assets/images/stars-steps.svg" alt="" srcset="" class="mx-auto">
                    <p class="mb-0 mt-2">Mr John </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Review Section end  -->
    
      <!-- Find tutor section -->
      <div class="container-fluid px-0" style="position: relative;overflow: hidden;">
        <div class="ellipse"></div>
        <div class="container text-center py-5 mb-5">
          <h3 class="fa-2x fw-bold pb-4" id="text-color">Book a free meeting with a tutor today</h3>
          <a href="./Find a Tutor.html" id="find-tutor">Find a Tutor</a>
        </div>
        <div class="py-4 text-dark mt-5">
          <nav class="navbar navbar-expand" id="btn-bg">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-100 justify-content-around flex-wrap" id="subject">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Maths</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Biology</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Chemistry</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Physics</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Science</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">English</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">German</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Spanish</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    
        </div>
      </div>
      <!-- Find tutor section end-->
    
@endsection