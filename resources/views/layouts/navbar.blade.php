<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid logo-img">
      <a class="navbar-brand logo-247" href='{{route('index')}}'><img src="./assets/images/247 NEW Logo 1.png" alt="" srcset="" class="img-fluid"></a>
      <div class="d-flex align-items-center gap-md-4">
        <div class="dropdown d-lg-none  ">
          <a class="dropdown-toggle me-2 text-dark" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="assets/images/translation.svg" alt="Translation" width="20" height="auto">
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink" style=" top: 35px !important;">
            <li><a class="dropdown-item" href="#">English</a></li>
            <li><a class="dropdown-item" href="#">Urdu</a></li>
            <li><a class="dropdown-item" href="#">chinese</a></li>
          </ul>
        </div>
        <button class="navbar-toggler buger-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0 fw-bold">
          <li class="nav-item active">
            <a class="nav-link active" aria-current="page" href='{{route('index')}}'>Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href='{{route('findTutor')}}'>Find a Tutor</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">How it's Work</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href='{{route('studentApplySteps')}}'>Become a Student</a></li>
              <li><a class="dropdown-item" href='{{route('tutorApplySteps')}}'>Become a Tutor</a></li>
              <li><a class="dropdown-item" href='{{route('organizationApplySteps')}}'>For Organization</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href='{{route('prices')}}' tabindex="-1" aria-disabled="true">Prices</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href='{{route('blogs')}}' tabindex="-1" aria-disabled="true">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href='{{route('faq')}}' tabindex="-1" aria-disabled="true">FAQs</a>
          </li>
        </ul>
        
        
        <div class="col-md-2 d-flex justify-content-end align-items-center header-btn gap-1" style="max-width: max-content;">
          <div class="dropdown d-none d-lg-inline-block ">
            <a class="dropdown-toggle me-2" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="assets/images/translation.svg" alt="Translation" width="20" height="auto">
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style=" top: 35px !important;">
              <li><a class="dropdown-item" href="#">English</a></li>
              <li><a class="dropdown-item" href="#">Urdu</a></li>
              <li><a class="dropdown-item" href="#">chinese</a></li>
            </ul>
          </div>
          <a href='{{route('login')}}' class="header-login px-3 py-2 mx-1 btn fw-bold" id="btn-bg" type="submit">Login</a>
          <div class="dropdown">
            <a class="btn px-3 py-2 fw-bold dropdown-toggle" href="#" role="button" id="dropdownMenuLink" style="  background-color: rgba(6, 59, 0, 1);
            color: rgba(255, 255, 255, 1);" data-bs-toggle="dropdown" aria-expanded="false">
              Regitration
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href='{{route('login')}}'>Join as Tutor</a></li>
              <li><a class="dropdown-item" href='{{route('login')}}'>Join as Student</a></li>
              <li><a class="dropdown-item" href='{{route('login')}}'>Join as Organization</a></li>
              <li><a class="dropdown-item" href='{{route('login')}}'>Join as Parents</a></li>
            </ul>
          </div>
         </div>
    </div>
    </div>
  </nav>