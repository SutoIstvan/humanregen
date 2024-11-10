<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])



    {{-- -------------------- --}}

    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet"> --}}
    <style>

  
      
    </style>
  
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
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

@include('layouts.nav')



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
            <a href="{{ route('appointments') }}" class="btn-get-started">Időpontot foglalok</a>
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
        {{-- <div class="bg bg-image bounce-y" style="background-image: url(&quot;/https://purerelax-next.vercel.app/images/resource/flower1.png&quot;);">
        </div> --}}
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
  


@include('layouts.footer')

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
