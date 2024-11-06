<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <style>
          .hero {
            width: 100%;
            min-height: 40vh !important;
            position: relative;
            padding: 80px 0 80px 0;
            display: flex;
            align-items: center;
          }
    </style>
</head>

<body>

    @include('layouts.nav')
    

      <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">
    <img src="assets/img/hero-bg-8.jpg" alt="" class="hero-bg">

    <div class="container">
      <div class="row gy-4 text-center">


        <div class="col-lg-12  d-flex flex-column justify-content-center" data-aos="fade-in" >
          <h1><span>Árak</span></h1>


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



  <div class="px-4 pt-5 my-5 text-center border-bottom">
    <h2 class="alex-brush-regular" style="color: #c2a74e; size: 44px;">Töltsd fel a tested és ébredj új életre</h2>

    <h1 class="display-4 fw-bold text-body-emphasis">Humán Regenerátor Sports</h1>
    <div class="col-lg-10 mx-auto">

      <p class="lead mb-4">A Humán Regenerátor Sports kezelés <strong>orvosi alapja egy 18 éves kutatássorozat eredményeként </strong>megszületett és folyamatosan fejlesztett&nbsp;világszerte egyedülálló high-tech eszköz, amely <strong>sejtszinten aktiválja a szervezet öngyógyító folyamatait, ellensúlyozza a sejtekben lévő oxidatív stresszt és akkumulátorként tölti fel a sejteket</strong>. A<strong> Humán Regenerátor Sports a piacon elérhető legerősebb generátorral büszkélkedhet</strong>. Kimagasló generátor teljesítményével túlszárnyalja a Humán Regenerátor Power Jet és Professionel modelleket, kifejezetten erős hatást gyakorolva már a vázizmokra is.</p>
      <!-- <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p> -->

    </div>
    <div class="overflow-hidden" style="max-height: 40vh;">
      <div class="container px-5">
        <img src="{{ asset('assets/img/humanregensport.png') }}" class="img-fluid border rounded-3 shadow-lg mb-4" width="900" height="500" loading="lazy">
      </div>
    </div>
  </div>

  <!-- <div class="px-4 pt-5  text-center">
    <h1 class="display-4 fw-bold text-body-emphasis">HATÁSOK</h1>

  </div> -->

        <!-- Section Title -->
        <div class="container section-title pt-5" data-aos="fade-up">

          <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
              <h2 class="alex-brush-regular" style="color: #c2a74e; size: 44px;">Jótékony hatások</h2>
    
              <p class=" mb-md-5 pb-md-0 lead">
                Ismerd meg a Humán Regenerátor Jótékony hatásait
              </p>
            </div>
          </div>
    
        </div><!-- End Section Title -->



  


    @include('layouts.footer')
  
</body>
</html>
