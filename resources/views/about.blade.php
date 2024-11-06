<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
  {{-- <body data-bs-theme="dark"> --}}

    @include('layouts.nav')
    

  
      <!-- CONTACT FORM -->
  

    
      <!-- END CONTACT FORM -->
  
    <!-- SLIDER -->
    <div class="container my-5 pt-5" data-aos="fade-up">
      <div class="p-5 text-center bg-body-tertiary rounded-3">
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
  
              <a class="navbar-brand" href="./index.html" aria-label="Front">
                <img class="navbar-brand-logo " src="assets/img/avatar.png" height="120" alt="Logo">
              </a>
              <h1 class="text-body-emphasis">Jumbo Jhon</h1>
              <p class="col-lg-8 mx-auto fs-5 text-muted">
                {{__('menu.comment1')}}
              </p>
              <div class="d-inline-flex gap-2 mb-5 pb-5">
                <img src="assets/img/stars.png" height="30" alt="">
              </div>
  
            </div>
            <div class="carousel-item" data-bs-interval="2000">
  
              <a class="navbar-brand" href="./index.html" aria-label="Front">
                <img class="navbar-brand-logo " src="assets/img/avatar.png" height="120" alt="Logo">
              </a>
              <h1 class="text-body-emphasis">Jumbo Jhon</h1>
              <p class="col-lg-8 mx-auto fs-5 text-muted">
                {{__('menu.comment2')}}
              </p>
              <div class="d-inline-flex gap-2 mb-5 pb-5">
                <img src="assets/img/stars.png" height="30" alt="">
              </div>
  
            </div>
  
            <div class="carousel-item" data-bs-interval="2000">
  
              <a class="navbar-brand" href="./index.html" aria-label="Front">
                <img class="navbar-brand-logo " src="assets/img/avatar.png" height="120" alt="Logo">
              </a>
              <h1 class="text-body-emphasis">Jumbo Jhon</h1>
              <p class="col-lg-8 mx-auto fs-5 text-muted">
                {{__('menu.comment3')}}
              </p>
              <div class="d-inline-flex gap-2 mb-5 pb-5">
                <img src="assets/img/stars.png" height="30" alt="">
              </div>
  
            </div>
  
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
  
      </div>
    </div>
  
    <!-- SLIDER END -->
  
  
  
  
  
  

  
    <!-- FOOTER -->

    @include('layouts.footer')
  
    <!-- TOP BUTTON  -->

    <button type="button" class="btn btn-outline-primary btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>
  
  </body>
</html>
