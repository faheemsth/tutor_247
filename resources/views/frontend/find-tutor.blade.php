@extends('layouts.app')
@section('content')  
  <!-- ***********************************************************************************************************************************
  *                                             Search BAR Start
  ****************************************************************************************************************************************-->

  <div class="container">
    <!-- row 1 -->
    <div class="row align-items-md-end align-items-baseline mt-5">
      <div class="col-md-6 col-12">
        <h4>132,576 Search result in <strong>"Mathematic"</strong> tutors</h4>
      </div>
      <div class="col-md-6 col-12">
        <div class="d-flex gap-2 gap-md-2 justify-content-md-end align-items-baseline">
          <small>Sort by: </small>
          <ul class="navbar-nav px-2">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <strong>Price low to high</strong>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <div class="btn border border-1 border-muted"><img src="./assets/images/menu-bar.png"></div>
          <div>
            <img src="./assets/images/menu.png">
          </div>
        </div>
      </div>
    </div>
    <!-- row 2 -->
    <div class="row py-4">
      <div class="col-md-10 col-12 align-items-baseline">
        <div class="row border border-muted rounded-1 border-1">
          <div class="col-xl-7 col-md-6 col-12 py-3">
            <img src="./assets/images/Search.png">
            <input style="width: 80%;" class="border-0 search-bar-filter" type="text" placeholder="What do you want to explore?">
          </div>
          <div class="col-xl-3 col-md-3 col-12 py-2 d-flex justify-content-md-end">
            <ul class="navbar-nav px-2 ">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="./assets/images/logo.png">
                  <strong class="pe-2">Select Category</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="col-xl-2 col-md-3 col-12 py-2 d-flex">
            <button class="btn filter-search-btn  rounded-0">
              <small>Search now</small>
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-2 d-none d-lg-flex">
        <div>
          <img src="./assets/images/Type.png">
        </div>
      </div>
    </div>
    <!-- row 3 -->
    <div class="row">
      <div class="col-md-12">
        <div class="d-flex flex-wrap gap-2">
          <a class="py-1 px-3 border-muted border fw-bold rounded-2 text-dark" style="text-decoration: none;"
            href="#"><small>Pre-School</small> <img src="./assets/images/cross.png"></a>
          <a class="py-1 px-3 border-muted border fw-bold rounded-2 text-dark" style="text-decoration: none;"
            href="#"><small>Middle (Class 6-8)</small> <img src="./assets/images/cross.png"></a>
          <a class="py-1 px-3 border-muted border fw-bold rounded-2 text-dark" style="text-decoration: none;"
            href="#"><small>Intermediate</small> <img src="./assets/images/cross.png"></a>
          <a class="py-1 px-3 border-muted border fw-bold rounded-2 text-dark" style="text-decoration: none;"
            href="#"><small>5.0 Stars </small><img src="./assets/images/cross.png"></a>
          <a class="py-1 px-3 border-muted border fw-bold rounded-2 text-dark" style="text-decoration: none;"
            href="#"><small>Online bookings</small> <img src="./assets/images/cross.png"></a>
          <a class="py-1 px-3 border-muted border fw-bold rounded-2 text-dark" style="text-decoration: none;"
            href="#"><small>Male only</small> <img src="./assets/images/cross.png"></a>
        </div>
      </div>
    </div>
  </div>

  <!-- ***********************************************************************************************************************************
  *                                             Search BAR End
  ****************************************************************************************************************************************-->



  <!--***********************************************************************************************************************************
  *                                             Main Section Start
  ****************************************************************************************************************************************-->

  <div class="container mt-5 tutor-list">
    <div class="row justify-content-lg-center">
      <div class="col-md-12">


        <div class="row">
          <!-- ***********************************************************************************************************************************
          *                                            Left Section Start
          ****************************************************************************************************************************************-->
          <div class="col-md-4 d-none d-lg-block">

            <div class="card">
              <div class="card-body">


                <div class="education-level py-2 my-2">
                  <label for="">
                    <h5>Education level</h5>
                  </label>

                  <select name="" id="outline-remove" class="form form-control form-select">
                    <option value="">All Subjects</option>
                    <option value="English">English</option>
                  </select>
                </div>


                <div class="check my-2">
                  <label for="">
                    <h5>Choose subjects</h5>
                  </label>

                  <div class="mx-3">

                    <input type="checkbox" class="checkbox1">
                    <label for="checkbox1" class="mx-2">Social studies</label><br>
                    <input type="checkbox" class="checkbox1">
                    <label for="checkbox1" class="mx-2">Urdu</label><br>
                    <input type="checkbox" class="checkbox1">
                    <label for="checkbox1" class="mx-2">Mathematic</label><br>
                    <input type="checkbox" class="checkbox1">
                    <label for="checkbox1" class="mx-2">Drawing</label><br>
                    <input type="checkbox" class="checkbox1">
                    <label for="checkbox1" class="mx-2">Computer science</label><br>


                  </div>

                  <div class="d-grid findButton  py-2">
                    <button class="btn py-2" type="button" id="bg-btn-action"><b>Load more</b></button>
                  </div>
                </div>




                <div class="range my-2">
                  <label for="">
                    <h5>Education level</h5>
                  </label>


                  <div class="range-input">
                    <input type="number" placeholder="Min Price " class="form form-control mx-1 " id="outline-remove">
                    <input type="number" placeholder="Max Price" class="form form-control  " id="outline-remove">
                  </div>


                  <form class="multi-range-field my-4 mx-3">
                    <input type="text" id="sampleSlider" />
                  </form>

                </div>



                <div class="rating my-2 ">
                  <label for="">
                    <h5>Rating</h5>
                  </label>


                  <div class="single-rating mx-3 d-flex align-items-baseline ">
                    <input type="checkbox">
                    <label class="d-flex align-items-baseline">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid mx-2 w-75 h-75"
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid w-75 h-75" width=""
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid mx-2 w-75 h-75" width=""
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid w-75 h-75" width=""
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid mx-2 w-75 h-75" width=""
                        style="margin-top: -10px;">

                      <span>5.0/5.0</span>
                    </label>

                  </div>
                  <div class="single-rating mx-3 d-flex align-items-baseline ">
                    <input type="checkbox">
                    <label class="d-flex align-items-baseline">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid mx-2 w-75 h-75"
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid w-75 h-75" width=""
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid mx-2 w-75 h-75" width=""
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid w-75 h-75" width=""
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid mx-2 w-75 h-75" width=""
                        style="margin-top: -10px;">

                      <span>4.0//5.0</span>
                    </label>

                  </div>
                  <div class="single-rating mx-3 d-flex align-items-baseline ">
                    <input type="checkbox">
                    <label class="d-flex align-items-baseline">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid mx-2 w-75 h-75"
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid w-75 h-75" width=""
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid mx-2 w-75 h-75" width=""
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid w-75 h-75" width=""
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid mx-2 w-75 h-75" width=""
                        style="margin-top: -10px;">

                      <span>3.0/5.0</span>
                    </label>

                  </div>
                  <div class="single-rating mx-3 d-flex align-items-baseline ">
                    <input type="checkbox">
                    <label class="d-flex align-items-baseline">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid mx-2 w-75 h-75"
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid w-75 h-75" width=""
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid mx-2 w-75 h-75" width=""
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid w-75 h-75" width=""
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid mx-2 w-75 h-75" width=""
                        style="margin-top: -10px;">

                      <span>2.0/5.0</span>
                    </label>

                  </div>
                  <div class="single-rating mx-3 d-flex align-items-baseline ">
                    <input type="checkbox">
                    <label class="d-flex align-items-baseline">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid mx-2 w-75 h-75"
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid w-75 h-75" width=""
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid mx-2 w-75 h-75" width=""
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid w-75 h-75" width=""
                        style="margin-top: -10px;">
                      <img src="./assets/images/full_star.png" alt="" class="img-fluid mx-2 w-75 h-75" width=""
                        style="margin-top: -10px;">

                      <span>1.0/5.0</span>
                    </label>
                  </div>
                </div>




                <div class="location my-2">
                  <label for="">
                    <h5>Location</h5>
                  </label>

                  <div class="location-content mx-3">
                    <input type="text" class="form-control" id="outline-remove" style=" height: 50px; "
                      placeholder="Enter zipcode ">

                  </div>


                  <form class="multi-range-field my-4 mx-3">
                    <input type="text" id="rangeSlider" />
                  </form>
                </div>

                <div class="">
                  <div class="row mx-2">
                    <h5> Miscellaneous</h5>
                  </div>
                  <div class="single-rating mx-3 py-2">
                    <input type="checkbox" class="mx-2">
                    Online bookings
                  </div>

                  <div class="single-rating mx-3 py-2">
                    <input type="checkbox" class="mx-2">
                    Profile photos
                  </div>

                  <div class="single-rating mx-3 py-2">
                    <input type="checkbox" class="mx-2">
                    Male only
                  </div>

                  <div class="single-rating mx-3 py-2">
                    <input type="checkbox" class="mx-2">
                    Female only
                  </div>
                </div>


                <div class="filters-btn">

                  <div class="d-grid py-2" >
                    <button class="btn py-2" type="button" id="bg-btn-action"><b>Filter</b></button>
                  </div>

                  <button class="btn w-100 filter-clear" type="button"><b>Clear</b></button>

                </div>


              </div>
            </div>
          </div>

          <!-- ***********************************************************************************************************************************
          *                                             Left Section End
          ****************************************************************************************************************************************-->



          <!-- ***********************************************************************************************************************************
          *                                             Right Section Start
          ****************************************************************************************************************************************-->
          <div class="col-lg-8 col-12">

            <div class="row py-3">
              <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <img src="./assets/images/image 1.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9 justify-content-lg-start mt-4 mt-md-0">
                        <div class="row">
                            <div class="col-md-8 ">
                                <div class="d-flex justify-content-between pb-1">

                                    <div class="d-flex align-items-center">
                                        <h3>Arman D</h3>
                                        <img src="./assets/images/Verified-p.png" class="correctiocn mx-1" alt="">
                                    </div>
                                    <div class="d-sm-block d-md-none">
                                        <img src="./assets/images/Icon4.png" alt="">
                                        Saved
                                    </div>
                                </div>
                                <p>Spreading knowledge everywhere that's all I do</p>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <span>Starting from:</span>
                                    <div class="dollor">
                                        <span>$562.32/hr</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex py-ld-3">
                            <button class="custom-button">
                                <img class="button-img mx-2 d-none d-md-inline-block" src="./assets/images/Icon2.png" alt="Button Image">Student's home
                            </button>
                            <button class="custom-button mx-2">
                                <img class="button-img mx-2 d-none d-md-inline-block" src="./assets/images/Icon3.png" alt="Button Image">Online
                            </button>
                        </div>
                        <div class="row align-items-center mt-2">
                            <div class="col-xl-2 col-md-3  d-none d-md-block">
                                <img src="./assets/images/Icon4.png" alt="">
                                Saved
                            </div>
                            <div class="col-xl-10 col-md-9 d-flex justify-content-center justify-content-md-end ">
                                <a href="" class="btn button1 text-center border-1"><b>Let’s chat</b></a>
                                <a href="./profile.html" class="btn button2 mx-1 "><b>View full profile</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <!-- 2nd   -->
            <div class="row py-3">
              <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <img src="./assets/images/image.1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9 justify-content-lg-start mt-4 mt-md-0">
                        <div class="row">
                            <div class="col-md-8 ">
                                <div class="d-flex justify-content-between pb-1">

                                    <div class="d-flex align-items-center">
                                        <h3>Kriti Jam</h3>
                                        <img src="./assets/images/Verified-p.png" class="correctiocn mx-1" alt="">
                                    </div>
                                    <div class="d-sm-block d-md-none">
                                        <img src="./assets/images/Icon4.png" alt="">
                                        Saved
                                    </div>
                                </div>
                                <p>Spreading knowledge everywhere that's all I do</p>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <span>Starting from:</span>
                                    <div class="dollor">
                                        <span>$562.32/hr</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex py-ld-3">
                            <button class="custom-button">
                                <img class="button-img mx-2 d-none d-md-inline-block" src="./assets/images/Icon2.png" alt="Button Image">Student's home
                            </button>
                            <button class="custom-button mx-2">
                                <img class="button-img mx-2 d-none d-md-inline-block" src="./assets/images/Icon3.png" alt="Button Image">Online
                            </button>
                        </div>
                        <div class="row align-items-center mt-2">
                            <div class="col-xl-2 col-md-3  d-none d-md-block">
                                <img src="./assets/images/Icon4.png" alt="">
                                Saved
                            </div>
                            <div class="col-xl-10 col-md-9 d-flex justify-content-center justify-content-md-end ">
                                <a href="" class="btn button1 text-center border-1"><b>Let’s chat</b></a>
                                <a href="./profile.html" class="btn button2 mx-1 "><b>View full profile</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <!-- 3rd  -->
            <div class="row py-3">
              <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <img src="./assets/images/Mask group (1).png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9 justify-content-lg-start mt-4 mt-md-0">
                        <div class="row">
                            <div class="col-md-8 ">
                                <div class="d-flex justify-content-between pb-1">

                                    <div class="d-flex align-items-center">
                                        <h3>Micki K</h3>
                                        <img src="./assets/images/Verified-p.png" class="correctiocn mx-1" alt="">
                                    </div>
                                    <div class="d-sm-block d-md-none">
                                        <img src="./assets/images/Icon4.png" alt="">
                                        Saved
                                    </div>
                                </div>
                                <p>Spreading knowledge everywhere that's all I do</p>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <span>Starting from:</span>
                                    <div class="dollor">
                                        <span>$562.32/hr</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex py-ld-3">
                            <button class="custom-button">
                                <img class="button-img mx-2 d-none d-md-inline-block" src="./assets/images/Icon2.png" alt="Button Image">Student's home
                            </button>
                            <button class="custom-button mx-2">
                                <img class="button-img mx-2 d-none d-md-inline-block" src="./assets/images/Icon3.png" alt="Button Image">Online
                            </button>
                        </div>
                        <div class="row align-items-center mt-2">
                            <div class="col-xl-2 col-md-3  d-none d-md-block">
                                <img src="./assets/images/Icon4.png" alt="">
                                Saved
                            </div>
                            <div class="col-xl-10 col-md-9 d-flex justify-content-center justify-content-md-end ">
                                <a href="" class="btn button1 text-center border-1"><b>Let’s chat</b></a>
                                <a href="./profile.html" class="btn button2 mx-1 "><b>View full profile</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <!-- 4th  -->
            <div class="row py-3">
              <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <img src="./assets/images/Mask group (2).png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9 justify-content-lg-start mt-4 mt-md-0">
                        <div class="row">
                            <div class="col-md-8 ">
                                <div class="d-flex justify-content-between pb-1">

                                    <div class="d-flex align-items-center">
                                        <h3>willson F</h3>
                                        <img src="./assets/images/Verified-p.png" class="correctiocn mx-1" alt="">
                                    </div>
                                    <div class="d-sm-block d-md-none">
                                        <img src="./assets/images/Icon4.png" alt="">
                                        Saved
                                    </div>
                                </div>
                                <p>Spreading knowledge everywhere that's all I do</p>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <span>Starting from:</span>
                                    <div class="dollor">
                                        <span>$562.32/hr</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex py-ld-3">
                            <button class="custom-button">
                                <img class="button-img mx-2 d-none d-md-inline-block" src="./assets/images/Icon2.png" alt="Button Image">Student's home
                            </button>
                            <button class="custom-button mx-2">
                                <img class="button-img mx-2 d-none d-md-inline-block" src="./assets/images/Icon3.png" alt="Button Image">Online
                            </button>
                        </div>
                        <div class="row align-items-center mt-2">
                            <div class="col-xl-2 col-md-3  d-none d-md-block">
                                <img src="./assets/images/Icon4.png" alt="">
                                Saved
                            </div>
                            <div class="col-xl-10 col-md-9 d-flex justify-content-center justify-content-md-end ">
                                <a href="" class="btn button1 text-center border-1"><b>Let’s chat</b></a>
                                <a href="./profile.html" class="btn button2 mx-1 "><b>View full profile</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <!-- 5th  -->
            <div class="row py-3">
              <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <img src="./assets/images/Mask group (3).png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-9 justify-content-lg-start mt-4 mt-md-0">
                        <div class="row">
                            <div class="col-md-8 ">
                                <div class="d-flex justify-content-between pb-1">

                                    <div class="d-flex align-items-center">
                                        <h3>Dean A</h3>
                                        <img src="./assets/images/Verified-p.png" class="correctiocn mx-1" alt="">
                                    </div>
                                    <div class="d-sm-block d-md-none">
                                        <img src="./assets/images/Icon4.png" alt="">
                                        Saved
                                    </div>
                                </div>
                                <p>Spreading knowledge everywhere that's all I do</p>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <span>Starting from:</span>
                                    <div class="dollor">
                                        <span>$562.32/hr</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex py-ld-3">
                            <button class="custom-button">
                                <img class="button-img mx-2 d-none d-md-inline-block" src="./assets/images/Icon2.png" alt="Button Image">Student's home
                            </button>
                            <button class="custom-button mx-2">
                                <img class="button-img mx-2 d-none d-md-inline-block" src="./assets/images/Icon3.png" alt="Button Image">Online
                            </button>
                        </div>
                        <div class="row align-items-center mt-2">
                            <div class="col-xl-2 col-md-3  d-none d-md-block">
                                <img src="./assets/images/Icon4.png" alt="">
                                Saved
                            </div>
                            <div class="col-xl-10 col-md-9 d-flex justify-content-center justify-content-md-end ">
                                <a href="" class="btn button1 text-center border-1"><b>Let’s chat</b></a>
                                <a href="./profile.html" class="btn button2 mx-1 "><b>View full profile</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <div class="container mt-5 pt-xl-5">
              <nav aria-label="Page navigation">
                <ul class="pagination mt-3 justify-content-md-center justify-content-lg-start">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="visually-hidden">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <!-- Add more page items here -->
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- ***********************************************************************************************************************************
          *                                             Right Section End
          ****************************************************************************************************************************************-->
        </div>




        <div class="py-5 mt-5">
          <div class="text-center speaktutor">
            <h2>Speak to a Tutor and get Tuition Sorted Today</h2>
          </div>
          <div class="text-center findButton mt-4">
            <a type="button" class="btn fw-bold px-4 py-2">Find a Tutor</a>
          </div>

        </div>


      </div>
    </div>
  </div>
  <!-- ***********************************************************************************************************************************
  *                                             Main Section End
  ****************************************************************************************************************************************-->
@endsection