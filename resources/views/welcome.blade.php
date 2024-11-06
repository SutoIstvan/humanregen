<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title'))</title>
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}



    {{-- -------------------- --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
  
    <style>
      body {
        font-family: 'Poppins', 'Courier New', Courier, monospace;
        background-color: #f9f6f1 !important;
        /* height: 200vh; */
      }
  
      .alex-brush-regular {
        font-family: "Alex Brush", cursive;
        font-weight: 400;
        font-style: normal;
      }
  
      .bg-light {
        background-color: #f0f0f0 !important;
      }
  
      .btn {
        font-weight: 500;
        transition: .5s;
      }
  
      .btn.btn-primary {
        color: #FFFFFF;
      }
  
      .btn-sm-square {
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 32px;
        height: 32px;
        font-weight: normal;
      }
  
      .navbar .dropdown-toggle::after {
        border: none;
        content: "\f107";
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        vertical-align: middle;
        margin-left: 8px;
      }
  
      .navbar-light .navbar-nav .nav-link {
        margin-right: 30px;
        padding: 25px 0;
        color: #FFFFFF;
        font-size: 15px;
        font-weight: 500;
        text-transform: uppercase;
        outline: none;
      }
  
      .navbar-light .navbar-nav .nav-link:hover,
      .navbar-light .navbar-nav .nav-link.active {
        /* color: #006469 !important; */
        color: #e8b010 !important;
      }
  
      @media (max-width: 991.98px) {
        .navbar-light .navbar-nav .nav-link {
          margin-right: 0;
          padding: 10px 0;
        }
  
        .navbar-light .navbar-nav {
          border-top: 1px solid #EEEEEE;
        }
      }
  
      .navbar-light .navbar-brand,
      .navbar-light a.btn {
        height: 75px;
      }
  
      .navbar-light .navbar-nav .nav-link {
        color: black;
        font-weight: 500;
      }
  
      .navbar-light.sticky-top {
        top: -100px;
        transition: .5s;
      }
  
      @media (min-width: 992px) {
        .navbar .nav-item .dropdown-menu {
          display: block;
          border: none;
          margin-top: 0;
          top: 150%;
          opacity: 0;
          visibility: hidden;
          transition: .5s;
        }
  
        .navbar .nav-item:hover .dropdown-menu {
          top: 100%;
          visibility: visible;
          transition: .5s;
          opacity: 1;
        }
      }
  
      .bg-green {
        /* background-color: rgba(2, 177, 186, 0.01) !important; */
  
        background-color: #02b1ba70 !important;
      }
  
      .btn-green {
        color: #fff !important;
        background-color: #006469 !important;
        border-color: #006469 !important;
      }
  
      .btn-green:hover {
        color: #fff !important;
        background-color: #48b8aa !important;
        border-color: #48b8aa !important;
      }
  
      /*--------------------------------------------------------------
  # Hero Section
  --------------------------------------------------------------*/
      .hero {
        width: 100%;
        min-height: 70vh;
        position: relative;
        padding: 80px 0 80px 0;
        display: flex;
        align-items: center;
      }
  
      .hero .hero-bg {
        position: absolute;
        inset: 0;
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
      }
  
      .hero:before {
        content: "";
        background: color-mix(in srgb, var(--background-color), transparent 10%);
        position: absolute;
        inset: 0;
        z-index: 2;
      }
  
      .hero .container {
        position: relative;
        z-index: 3;
      }
  
      .hero h1 {
        margin: 0 0 20px 0;
        font-size: 48px;
        font-weight: 700;
        line-height: 56px;
        color: color-mix(in srgb, var(--heading-color), transparent 30%);
      }
  
      .hero h1 span {
        color: var(--heading-color);
        border-bottom: 4px solid var(--accent-color);
      }
  
      .hero p {
        color: color-mix(in srgb, var(--default-color), transparent 30%);
        margin: 5px 0 30px 0;
        font-size: 22px;
        font-weight: 400;
      }
  
      .hero .btn-get-started {
        color: #ffffff;
        background: #1acc8d;
        font-family: var(--heading-font);
        font-weight: 400;
        font-size: 15px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 10px 28px 12px 28px;
        border-radius: 50px;
        transition: 0.5s;
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.1);
        text-decoration: none;
      }
  
      .hero .btn-get-started:hover {
        color: var(--contrast-color);
        background: #f5e1a3a9;
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.1);
      }
  
      .hero .btn-watch-video {
        font-size: 16px;
        transition: 0.5s;
        margin-left: 25px;
        color: var(--default-color);
        font-weight: 600;
        text-decoration: none !important;
      }
  
      .hero .btn-watch-video i {
        color: var(--accent-color);
        font-size: 32px;
        transition: 0.3s;
        line-height: 0;
        margin-right: 8px;
      }
  
      .hero .btn-watch-video:hover {
        color: var(--accent-color);
      }
  
      .hero .btn-watch-video:hover i {
        color: color-mix(in srgb, var(--accent-color), transparent 15%);
      }
  
      .hero .animated {
        animation: up-down 2s ease-in-out infinite alternate-reverse both;
      }
  
      @media (max-width: 640px) {
        .hero h1 {
          font-size: 28px;
          line-height: 36px;
        }
  
        .hero p {
          font-size: 18px;
          line-height: 24px;
          margin-bottom: 30px;
        }
  
        .hero .btn-get-started,
        .hero .btn-watch-video {
          font-size: 13px;
        }
      }
  
      .hero .hero-waves {
        display: block;
        width: 100%;
        height: 60px;
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: 3;
      }
  
      .hero .wave1 use {
        animation: move-forever1 10s linear infinite;
        animation-delay: -2s;
        fill: var(--default-color);
        opacity: 0.6;
      }
  
      .hero .wave2 use {
        animation: move-forever2 8s linear infinite;
        animation-delay: -2s;
        fill: var(--default-color);
        opacity: 0.4;
      }
  
      .hero .wave3 use {
        animation: move-forever3 6s linear infinite;
        animation-delay: -2s;
        fill: var(--default-color);
      }
  
      @keyframes move-forever1 {
        0% {
          transform: translate(85px, 0%);
        }
  
        100% {
          transform: translate(-90px, 0%);
        }
      }
  
      @keyframes move-forever2 {
        0% {
          transform: translate(-90px, 0%);
        }
  
        100% {
          transform: translate(85px, 0%);
        }
      }
  
      @keyframes move-forever3 {
        0% {
          transform: translate(-90px, 0%);
        }
  
        100% {
          transform: translate(85px, 0%);
        }
      }
  
      @keyframes up-down {
        0% {
          transform: translateY(10px);
        }
  
        100% {
          transform: translateY(-10px);
        }
      }
  
      .dark-background {
        /* background-color: rgba(2, 177, 186, 0.5) !important; */
  
        --background-color: #006469c7;
        --default-color: #f9f6f1;
        --heading-color: #ffffff;
        --surface-color: #006469;
        --contrast-color: #ffffff;
      }
  
  
      /*--------------------------------------------------------------
  # Global Footer
  --------------------------------------------------------------*/
      .footer {
        color: var(--default-color);
        background-color: var(--background-color);
        font-size: 14px;
        position: relative;
      }
  
      .footer .footer-top {
        padding-top: 50px;
        border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
      }
  
      .footer .footer-about .logo {
        line-height: 1;
        margin-bottom: 25px;
      }
  
      .footer .footer-about .logo img {
        max-height: 40px;
        margin-right: 6px;
      }
  
      .footer .footer-about .logo span {
        font-size: 26px;
        font-weight: 700;
        letter-spacing: 1px;
        font-family: var(--heading-font);
        color: var(--heading-color);
      }
  
      .footer .footer-about p {
        font-size: 14px;
        font-family: var(--heading-font);
      }
  
      .footer .social-links a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: 1px solid color-mix(in srgb, var(--default-color), transparent 50%);
        font-size: 16px;
        color: color-mix(in srgb, var(--default-color), transparent 30%);
        margin-right: 10px;
        transition: 0.3s;
      }
  
      .footer .social-links a:hover {
        color: var(--accent-color);
        border-color: var(--accent-color);
      }
  
      .footer h4 {
        font-size: 16px;
        font-weight: bold;
        position: relative;
        padding-bottom: 12px;
      }
  
      .footer .footer-links {
        margin-bottom: 30px;
      }
  
      .footer .footer-links ul {
        list-style: none;
        padding: 0;
        margin: 0;
      }
  
      .footer .footer-links ul i {
        padding-right: 2px;
        font-size: 12px;
        line-height: 0;
      }
  
      .footer .footer-links ul li {
        padding: 10px 0;
        display: flex;
        align-items: center;
      }
  
      .footer .footer-links ul li:first-child {
        padding-top: 0;
      }
  
      .footer .footer-links ul a {
        color: color-mix(in srgb, var(--default-color), transparent 30%);
        display: inline-block;
        line-height: 1;
      }
  
      .footer .footer-links ul a:hover {
        color: var(--accent-color);
      }
  
      .footer .footer-contact p {
        margin-bottom: 5px;
      }
  
      .footer .footer-newsletter .newsletter-form {
        margin-top: 30px;
        margin-bottom: 15px;
        padding: 6px 8px;
        position: relative;
        border-radius: 4px;
        border: 1px solid color-mix(in srgb, var(--default-color), transparent 80%);
        display: flex;
        background-color: var(--background-color);
        transition: 0.3s;
      }
  
      .footer .footer-newsletter .newsletter-form:focus-within {
        border-color: var(--accent-color);
      }
  
      .footer .footer-newsletter .newsletter-form input[type=email] {
        border: 0;
        padding: 4px;
        width: 100%;
        background-color: var(--background-color);
        color: var(--default-color);
      }
  
      .footer .footer-newsletter .newsletter-form input[type=email]:focus-visible {
        outline: none;
      }
  
      .footer .footer-newsletter .newsletter-form input[type=submit] {
        border: 0;
        font-size: 16px;
        padding: 0 20px;
        margin: -7px -8px -7px 0;
        background: var(--accent-color);
        color: var(--contrast-color);
        transition: 0.3s;
        border-radius: 0 4px 4px 0;
      }
  
      .footer .footer-newsletter .newsletter-form input[type=submit]:hover {
        background: color-mix(in srgb, var(--accent-color), transparent 20%);
      }
  
      .footer .copyright {
        padding: 25px 0;
        border-top: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
      }
  
      .footer .copyright p {
        margin-bottom: 0;
      }
  
      .footer .credits {
        margin-top: 6px;
        font-size: 13px;
      }
  
      /*--------------------------------------------------------------
  # Gallery Section
  --------------------------------------------------------------*/
      .gallery .gallery-item {
        overflow: hidden;
        border-right: 3px solid var(--background-color);
        border-bottom: 3px solid var(--background-color);
      }
  
      .gallery .gallery-item img {
        transition: all ease-in-out 0.4s;
      }
  
      .gallery .gallery-item:hover img {
        transform: scale(1.1);
      }
  
      /* price section */
  
  
      .pricing-section {
      align-items: center !important;
      border-bottom: 1px dashed hsla(0, 0%, 44%, .25);
      display: flex !important;
      padding-bottom: 24px !important;
  }
  .inner-box {
      align-items: center !important;
      display: flex !important;
      padding-bottom: 24px !important;
  }
  .pricing-block {
      align-items: center !important;
      display: flex !important;
      padding-bottom: 24px !important;
  }
  
  .title {
    font-family: "Alex Brush", cursive;
    font-weight: 400;
    font-style: normal;
    color: #c2a74e; 
    size: 44px;
  }
  
  /* h2.title-price {
    color: #c2a74e;
    font-size: 44px;
  } */
  
      
    </style>
  
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

  <!-- <div class="container-fluid bg-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>XYZ Road, Delhi, India</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="far fa-clock text-primary me-2"></small>
                <small>Mon - Sat: 09:00 AM - 07:00 PM</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>+91 2222 000000</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div> -->

  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <!-- <h2 class="m-0 text-primary">LOGO</h2> -->
      <img src="{{asset('assets/logo.png')}}" height="75px" alt="">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="#" class="nav-item nav-link active">Főoldal</a>
        <a href="effects.html" class="nav-item nav-link">Jótékony hatások</a>
        <a href="#" class="nav-item nav-link">Árak</a>
        <a href="#" class="nav-item nav-link">Galéria</a>
        <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="#" class="dropdown-item">Products</a>
                    <a href="#" class="dropdown-item">Our Team</a>
                    <a href="#" class="dropdown-item">Testimonial</a>
                    <a href="#" class="dropdown-item">Our Works</a>
                </div>
            </div> -->
        <a href="#" class="nav-item nav-link">Kapcsolat</a>
      </div>
      <a href="#" class="btn btn-green py-4 px-lg-5 d-none d-lg-block">IDŐPONTFOGLALÁS<i
          class="fa fa-arrow-right ms-3"></i></a>
    </div>
  </nav>


  <!-- <div class="py-5 text-center text-white bg-green">
    <div class="container py-5">
      <div class="row py-5">
        <div class="mx-auto col-lg-10">
          <img src="main.png" height="400px" alt="">
          <h1 class="display-4 mb-4 ">Humán Regenerátor Sports</h1>
          <p class="lead mb-5">There is nothing more rare, nor more beautiful, than a woman being unapologetically
            herself; comfortable in her perfect imperfection. To me, that is the true essence of beauty. </p> <a
            href="#" class="btn btn-lg btn-outline-light mx-1">Take me there</a>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">
    <img src="{{ asset('assets/img/hero-bg-8.jpg') }}" alt="" class="hero-bg">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4 order-lg-last hero-img mb-4" data-aos="zoom-out" data-aos-delay="100">
          <img src="{{ asset('assets/img/main.png') }}" class="animated" height="400px" alt="">
        </div>

        <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
          <h1>Humán <span>Regenerátor</span> Sport Szalon</h1>
          <p>Sejtszinten aktiválja a szervezet öngyógyító folyamatait, ellensúlyozza a sejtekben lévő oxidatív stresszt
            és akkumulátorként tölti fel a sejteket.</p>
          <div class="d-flex">
            <a href="#" class="btn-get-started">Időpontot foglalok</a>
            <a href="#" class="glightbox btn-watch-video d-flex align-items-center">
              <i class="bi bi-play-circle"></i><span>További információk</span>
            </a>
          </div>
        </div>

      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3"></use>
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0"></use>
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9"></use>
      </g>
    </svg>

  </section><!-- /Hero Section -->



  <!-- <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8 mx-auto mt-5">
            <div class="title text-center pt-4 pb-4">
              <h2>Welcome to our website</h2>
              <h1>Your small business web design solution</h1>
              <p class="mb-0">We are an insight and behavior driven creative marketing agency. A Full Service Digital Creative Agency Specializing in: Video Production, Web Design, Branding, Brand Strategy</p>
            </div>
          </div>
        </div>
      </div> -->

  <!-- <div class="container col-xxl-8 px-4 py-5">
        <h2 class="alex-brush-regular" style="color: #c2a74e; size: 44px;">Hatások</h2>

      </div> -->

  <div style=" background-color: #f9f6f1;">
    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

        <div class="col-lg-6">
          <h2 class="alex-brush-regular" style="color: #c2a74e; size: 44px;">Miért a Humán Regenerátor Sports?</h2>
          <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">A Humán Regenerátor Sports -ot</h1>
          <p class="lead">
            A kiválóság, A transzparencia és az eredmények iránti
            elkötelezettsége különbözteti meg. <br> Mi meghaladjuk az átlagot, és az egyik legújabb tudományos
            felfedezést
            és technológiát alkalmazzuk annak érdekében, hogy olyan regenerációs megoldást nyújtsunk, amelyek
            valóban változást hozhatnak.
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" style="background-color: #c2a74e; border-color: #c2a74e;"
              class="btn btn-primary btn-lg px-4 me-md-2 ">További információ</button>
            <!-- <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button> -->
          </div>
        </div>



        <div class="col-10 col-sm-8 col-lg-6">
          <img src="{{ asset('assets/img/face.png') }}" class="d-block mx-lg-auto img-fluid" width="700" height="500"
            loading="lazy">

        </div>



      </div>
    </div>
  </div>

<div style=" background-color: #f9f6f1;" class="">
<div class="container pb-5" >

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">

        <div class="row d-flex justify-content-center">
          <div class="col-md-10 col-xl-8 text-center">
            <h2 class="alex-brush-regular" style="color: #c2a74e; size: 44px;">Jótékony hatások</h2>
  
            <p class="mb-4 pb-2 mb-md-5 pb-md-0 lead">
              Ismerd meg a Humán Regenerátor Jótékony hatásait
            </p>
          </div>
        </div>
  
      </div><!-- End Section Title -->


  <div class="row align-items-center ">
    <div class="content-column col-lg-4">
      <div class="pricing-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image overlay-anim mb-0"><img class="rounded-3" src="{{ asset('assets/img/effects/1.png') }}"
                  alt="Image"></figure>
          </div>
          <div class="content-box ms-2">
            <div class="inner">
              <h2 class="title">Hatással van</h2>
              <div class="lead"> a mozgásszervi betegségekre</div>
            </div><span class="price"></span>
          </div>
        </div>
      </div>
      <div class="pricing-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image overlay-anim mb-0"><img class="rounded-3" src="{{ asset('assets/img/effects/2.png') }}"
                  alt="Image"></figure>
          </div>
          <div class="content-box ms-2">
            <div class="inner">
              <h2 class="title">Hatással van</h2>
              <div class="lead">a véráramlás serkentése</div>
            </div><span class="price"></span>
          </div>
        </div>
      </div>
      <div class="pricing-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image overlay-anim mb-0"><img class="rounded-3" src="{{ asset('assets/img/effects/3.png') }}"
                  alt="Image"></figure>
          </div>
          <div class="content-box ms-2">
            <div class="inner">
              <h2 class="title">Hatással van</h2>
              <div class="lead">Immunrendszer erősítés</div>
            </div><span class="price"></span>
          </div>
        </div>
      </div>
      <div class="pricing-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image overlay-anim mb-0"><img class="rounded-3" src="{{ asset('assets/img/effects/4.png') }}"
                  alt="Image"></figure>
          </div>
          <div class="content-box ms-2">
            <div class="inner">
              <h2 class="title">Hatással van</h2>
              <div class="lead">Sérülésekre</div>
            </div><span class="price"></span>
          </div>
        </div>
      </div>
    </div>
    <div class="image-column col-lg-4">
      <div class="inner-box">
        <div class="bg bg-image bounce-y" style="background-image: url(&quot;/https://purerelax-next.vercel.app/images/resource/flower1.png&quot;);">
        </div>
        <figure class="image overlay-anim mb-0"><img height="500px" src="{{ asset('assets/img/effects/main.png') }}" alt="Image"></figure>
      </div>
    </div>
    <div class="content-column col-lg-4">
      <div class="pricing-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image overlay-anim mb-0"><img class="rounded-3" src="{{ asset('assets/img/effects/5.png') }}"
                  alt="Image"></figure>
          </div>
          <div class="content-box ms-2">
            <div class="inner">
              <h2 class="title">Hatással van</h2>
              <div class="lead">a szorongásra, stresszre</div>
            </div><span class="price"></span>
          </div>
        </div>
      </div>
      <div class="pricing-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image overlay-anim mb-0"><img class="rounded-3" src="{{ asset('assets/img/effects/6.png') }}"
                  alt="Image"></figure>
          </div>
          <div class="content-box ms-2">
            <div class="inner">
              <h2 class="title">Hatással van</h2>
              <div class="lead">Öregedésgátló hatás</div>
            </div><span class="price"></span>
          </div>
        </div>
      </div>
      <div class="pricing-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image overlay-anim mb-0"><img class="rounded-3" src="{{ asset('assets/img/effects/7.png') }}"
                  alt="Image"></figure>
          </div>
          <div class="content-box ms-2">
            <div class="inner">
              <h2 class="title">Hatással van</h2>
              <div class="lead">Kiegyensúlyozott alvás</div>
            </div><span class="price"></span>
          </div>
        </div>
      </div>

      <div class="pricing-block">
        <div class="inner-box">
          <div class="image-box">
            <figure class="image overlay-anim mb-0"><img class="rounded-3" src="{{ asset('assets/img/effects/8.png') }}"
                  alt="Image"></figure>
          </div>
          <div class="content-box ms-2">
            <div class="inner">
              <h2 class="title">Hatással van</h2>
              <div class="lead">Sejtregeneráció (sérülés, műtét) </div>
            </div><span class="price"></span>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
</div>

  <!-- <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

          <div class="col-lg-6">
            <h2 class="alex-brush-regular" style="color: #c2a74e; size: 44px;">Missziónk</h2>
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">A ReGEN missziója</h1>
            <p class="lead">
              Bemutatni az emberi sejtregeneráció jótékony hatásait és alkalmazni őket az
              életminőség javítására.<br> Elkötelezettek vagyunk az iránt, hogy bemutassunk (szolgáltassunk) egy olyan
              innovatív megoldást, amely elősegíti a test természetes regenerációs képességeinek fejlesztését.<br> Az emberi
              vitalitás és hosszú élettartam javítása a (szolgáltassunk) lényegét képezi.
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
              <button type="button" style="background-color: #c2a74e; border-color: #c2a74e;" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
              <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
            </div>
          </div>

          

          <div class="col-10 col-sm-8 col-lg-6">
            <img src="scaled.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>


        </div>
      </div> -->




  <!-- Gallery Section -->
  <section id="gallery" class="gallery section pb-5" style=" background-color: #f9f6f1;">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">

      <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-xl-8 text-center">
          <h2 class="alex-brush-regular" style="color: #c2a74e; size: 44px;">Fotóalbum és Galéria</h2>

          <p class="mb-4 pb-2 mb-md-5 pb-md-0 lead">
            Szalonunk pillanatai, ahol az egészségével törődünk.
          </p>
        </div>
      </div>

    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-1 ">

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{{ asset('assets/img/gallery/gallery-1.jpg') }}" class="glightbox" data-gallery="images-gallery">
              <img src="{{ asset('assets/img/gallery/gallery-1.jpg') }}" alt="" class="img-fluid">
            </a>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{{ asset('assets/img/gallery/gallery-2.jpg') }}" class="glightbox" data-gallery="images-gallery">
              <img src="{{ asset('assets/img/gallery/gallery-2.jpg') }}" alt="" class="img-fluid">
            </a>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{{ asset('assets/img/gallery/gallery-3.jpg') }}" class="glightbox" data-gallery="images-gallery">
              <img src="{{ asset('assets/img/gallery/gallery-3.jpg') }}" alt="" class="img-fluid">
            </a>
          </div>
        </div><!-- End Gallery Item -->

        <div class="col-lg-3 col-md-4">
          <div class="gallery-item">
            <a href="{{ asset('assets/img/gallery/gallery-4.jpg') }}" class="glightbox" data-gallery="images-gallery">
              <img src="{{ asset('assets/img/gallery/gallery-4.jpg') }}" alt="" class="img-fluid">
            </a>
          </div>
        </div><!-- End Gallery Item -->



      </div>

    </div>

  </section><!-- /Gallery Section -->


  <section>
    <div class="container pt-5 pb-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-10 col-xl-8 text-center">
          <h2 class="alex-brush-regular" style="color: #c2a74e; size: 44px;">Visszajelzés ügyfeleinktól</h2>

          <p class="mb-4 pb-2 mb-md-5 pb-md-0 lead">
            A kedves ügyfeleink értékelései inspirálnak minket.<br> A ti szavaitok a mi motivációnk!
          </p>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-md-4 mb-5 mb-md-0">
          <div class="d-flex justify-content-center mb-4">
            <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}" class="rounded-circle shadow-1-strong"
              width="150" height="150" />
          </div>
          <h5 class="mb-3">Farkas Balázs</h5>
          <p class="px-xl-3 lead">
            <i class="fas fa-quote-left pe-2"></i>
            A Humán Regenerátor Sports kezelést próbáltam ki a szalonban, és lenyűgözött az eredmény! Már az első alkalom után éreztem a különbséget, különösen az izmaim felfrissültek és a regeneráció sokkal gyorsabb volt. Igazi csúcstechnológia, amit csak itt találtam meg!
          </p>
          <ul class="list-unstyled d-flex justify-content-center mb-0">
            <li>
              <i class="fas fa-star fa-sm text-warning"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-warning"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-warning"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-warning"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-warning"></i>
            </li>
          </ul>
        </div>
        <div class="col-md-4 mb-5 mb-md-0">
          <div class="d-flex justify-content-center mb-4">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" class="rounded-circle shadow-1-strong"
              width="150" height="150" />
          </div>
          <h5 class="mb-3">Varga Edina</h5>
          <p class="px-xl-3 lead">
            <i class="fas fa-quote-left pe-2"></i>
            Egyszerűen fantasztikus, hogy egy ilyen high-tech készülék elérhető Magyarországon! A kezelés alatt teljesen feltöltődtem, a sejtjeimben mintha újra életre keltek volna az energiák. Azóta frissebb és fittebb vagyok minden sportolás után. Köszönöm, Revitavital!
          </p>
          <ul class="list-unstyled d-flex justify-content-center mb-0">
            <li>
              <i class="fas fa-star fa-sm text-warning"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-warning"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-warning"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-warning"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-warning"></i>
            </li>
          </ul>
        </div>
        <div class="col-md-4 mb-0">
          <div class="d-flex justify-content-center mb-4">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" class="rounded-circle shadow-1-strong"
              width="150" height="150" />
          </div>
          <h5 class="mb-3">Kovács László</h5>
          <p class="px-xl-3 lead">
            <i class="fas fa-quote-left pe-2"></i>
            Már több regenerációs technológiát is kipróbáltam, de a Humán Regenerátor Sports egyedülálló! A szalonban nyugodt környezetben, profi szakemberekkel dolgozhatok együtt, és a gép ereje valóban lenyűgöző. Sportolóként is maximálisan meg vagyok elégedve az eredménnyel.
          </p>
          <ul class="list-unstyled d-flex justify-content-center mb-0">
            <li>
              <i class="fas fa-star fa-sm text-warning"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-warning"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-warning"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-warning"></i>
            </li>
            <li>
              <i class="fas fa-star fa-sm text-warning"></i>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  


  <footer id="footer" class="footer dark-background">

    <div class="container footer-top mt-5">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <img src="{{ asset('assets/img/logo_footer.png') }}" height="80px" alt="">
          </a>
          <div class="footer-contact pt-3">
            <p><strong>Cím:</strong> 7030 Paks, Vasút utca 10.</p>
            <!-- <p>New York, NY 535022</p> -->
            <p class="mt-3"><strong>Telefon:</strong> <span>+36 00 0000 00</span></p>
            <p class="mt-3"><strong>Email:</strong> <span>info@humanregen.hu</span></p>
          </div>
          <!-- <div class="social-links d-flex mt-4">
                <a href=""><i class="bi bi-twitter-x"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div> -->
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Hasznos linkek</h4>
          <ul>
            <li><a href="#">Főoldal</a></li>
            <li><a href="#">Szolgáltatássunk</a></li>
            <li><a href="#">Árak</a></li>
            <li><a href="#">Galéria</a></li>
            <li><a href="#">Kapcsolat</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Nyitvatartás</h4>

          <ul>
            <i class="fa-regular fa-clock ms-5" style="font-size: 24px;"></i>
            <li><a href="" class="text-decoration-none">Hétfőtől – péntekig:</a></li>
            <li><a href="" class="text-decoration-none">8:00 - 18:00</a></li>
            <!-- <li><a href="">Product Management</a></li> -->
            <li><a href="" class="text-decoration-none">Szombat:</a></li>
            <li><a href="" class="text-decoration-none">9:00 - 12:00</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Hírlevelünk</h4>
          <p>Iratkozzon fel hírlevelünkre, és értesüljön legfrissebb híreinkről szolgáltatásainkkal kapcsolatban!
          </p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Feliratkozás">
            </div>
            <!-- <div class="loading">Loading</div> -->
            <div class="error-message"></div>
            <div class="sent-message">Adja meg az email címét!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright 2024</span> <span>All Rights Reserved</span></p>
      <div class="credits">

        Designed by <a href="https://pikft.hu/" style="color: #fff;">Paksi informatika</a>
      </div>
    </div>

  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

  <script>

    $(window).scroll(function () {
      if ($(this).scrollTop() > 250) {
        $('.sticky-top').addClass('sticky-nav').css('top', '0px');
      } else {
        $('.sticky-top').removeClass('sticky-nav').css('top', '-100px');
      }
    });
  </script>

</body>
</html>
