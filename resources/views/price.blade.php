<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title', __('menu.title'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <style>
          .hero {
            width: 100%;
            min-height: 40vh !important;
            position: relative;
            padding: 30px 0 80px 0;
            display: flex;
            align-items: center;
          }


          section {
            color: #7a90ff;
            padding: 2em 0;
            min-height: 100%;
            position: relative;
            -webkit-font-smoothing: antialiased;
            z-index:10;
        }
        
        .pricing {
            display: -webkit-flex;
            display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-justify-content: center;
            justify-content: center;
            width: 100%;
            margin: 0 auto;
        }
        
        .pricing-item {
            position: relative;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: stretch;
            align-items: stretch;
            text-align: center;
            -webkit-flex: 0 1 330px;
            flex: 0 1 330px;
        }
        
        .pricing-action {
            color: inherit;
            border: none;
            background: none;
            cursor: pointer;
        }
        
        .pricing-action:focus {
            outline: none;
        }
        
        .pricing-feature-list {
            text-align: left;
        }
        
        .pricing-palden .pricing-item {
            font-family: 'Open Sans', sans-serif;
            cursor: default;
            color: #84697c;
            background: #fff;
            box-shadow: 0 0 10px rgba(46, 59, 125, 0.23);
            border-radius: 20px 20px 10px 10px;
            margin: 1em;
        }
        
        @media screen and (min-width: 66.25em) {
            .pricing-palden .pricing-item {
                margin: 1em 2.5em;
            }
            .pricing-palden .pricing__item--featured {
                margin: 0;
                z-index: 10;
                box-shadow: 0 0 20px rgba(46, 59, 125, 0.23);
            }
        }
        
        .pricing-palden .pricing-deco {
            border-radius: 10px 10px 0 0;
            background: linear-gradient(135deg, #01656a, #49b8aa);
            /* background: linear-gradient(135deg,#4097f9,#0af0c7); */
            padding: 4em 0 9em;
            position: relative;
        }
        
        .pricing-palden .pricing-deco-img {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 160px;
        }
        
        .pricing-palden .pricing-title {
            font-size: 0.75em;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 5px;
            color: #fff;
        }
        
        .pricing-palden .deco-layer {
            -webkit-transition: -webkit-transform 0.5s;
            transition: transform 0.5s;
        }
        
        .pricing-palden .pricing-item:hover .deco-layer--1 {
            -webkit-transform: translate3d(15px, 0, 0);
            transform: translate3d(15px, 0, 0);
        }
        
        .pricing-palden .pricing-item:hover .deco-layer--2 {
            -webkit-transform: translate3d(-15px, 0, 0);
            transform: translate3d(-15px, 0, 0);
        }
        
        .pricing-palden .icon {
            font-size: 2.5em;
        }
        
        .pricing-palden .pricing-price {
            font-size: 5em;
            font-weight: bold;
            padding: 0;
            color: #fff;
            margin: 0 0 0.25em 0;
            line-height: 0.75;
        }
        
        .pricing-palden .pricing-currency {
            font-size: 0.15em;
            vertical-align: top;
        }
        
        .pricing-palden .pricing-period {
            font-size: 0.15em;
            padding: 0 0 0 0.5em;
            font-style: italic;
        }
        
        .pricing-palden .pricing__sentence {
            font-weight: bold;
            margin: 0 0 1em 0;
            padding: 0 0 0.5em;
        }
        
        .pricing-palden .pricing-feature-list {
            /* margin: 0;
            padding: 0.25em 0 2.5em;
            list-style: none;
            text-align: center; */
            margin: -79px 0px -53px 0px;
            padding: 0.25em 0 0.5em;
            list-style: none;
            text-align: center;
            z-index: 1;
        }
        
        .pricing-palden .pricing-feature {
            padding: 5px 0;
        }
        
        .pricing-palden .pricing-action {
            font-weight: bold;
            margin: auto 3em 2em 3em;
            padding: 1em 2em;
            color: #fff;
            border-radius: 30px;
            background: linear-gradient(135deg, #056a6e, #44c4b9);
            /* background: inear-gradient(135deg, #e8b010, #f6e4b0); */
            /* background: linear-gradient(135deg,#a93bfe,#584efd); */
            -webkit-transition: background-color 0.3s;
            transition: background-color 0.3s;
        }
        
        .pricing-palden .pricing-action:hover,
        .pricing-palden .pricing-action:focus {
            background: linear-gradient(135deg, #e8b010, #f6e4b0);
        }
        
        .pricing-palden .pricing-item--featured .pricing-deco {
            padding: 5em 0 8.885em 0;
        }

@import url(//fonts.googleapis.com/css?family=Lato:300:400);

.header {
  position:relative;
  text-align:center;
  background-image: radial-gradient(circle at 39% 47%, rgba(107, 107, 107,0.08) 0%, rgba(107, 107, 107,0.08) 33.333%,rgba(72, 72, 72,0.08) 33.333%, rgba(72, 72, 72,0.08) 66.666%,rgba(36, 36, 36,0.08) 66.666%, rgba(36, 36, 36,0.08) 99.999%),radial-gradient(circle at 53% 74%, rgba(182, 182, 182,0.08) 0%, rgba(182, 182, 182,0.08) 33.333%,rgba(202, 202, 202,0.08) 33.333%, rgba(202, 202, 202,0.08) 66.666%,rgba(221, 221, 221,0.08) 66.666%, rgba(221, 221, 221,0.08) 99.999%),radial-gradient(circle at 14% 98%, rgba(184, 184, 184,0.08) 0%, rgba(184, 184, 184,0.08) 33.333%,rgba(96, 96, 96,0.08) 33.333%, rgba(96, 96, 96,0.08) 66.666%,rgba(7, 7, 7,0.08) 66.666%, rgba(7, 7, 7,0.08) 99.999%),linear-gradient(45deg, rgb(97, 14, 117),rgb(20, 32, 127));
  color:white;
}

.inner-header {
  height:100%;
  width:100%;
  margin: 0;
  padding: 0;
}

.flex { /*Flexbox for containers*/
  justify-content: center;
  align-items: center;
  text-align: center;
}

.waves {
  position:relative;
  width: 100%;
  height:100vh;
  margin-bottom:-7px; /*Fix for safari gap*/
  min-height:100px;
  max-height:200px;
}

/* Animation */

.parallax > use {
  animation: move-forever 25s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}

.plans {
  padding: 0px !important;
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


        {{-- <div class="col-lg-12  d-flex flex-column justify-content-center" data-aos="fade-in" >
          <h1><span>Árak</span></h1>


        </div> --}}

        {{-- <div class="pricing-item features-item ja-animate pricing__item--featured" data-animation="move-from-bottom" data-delay="item-1" style="min-height: 497px;">
          <div class="pricing-deco" style="background: linear-gradient(135deg,#a93bfe,#584efd)">
              <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" y="0px">
                  <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                  <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                  <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                  <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
              </svg>
              <div class="pricing-price"><span class="pricing-currency">$TWD</span>2499
                  <span class="pricing-period">/ month</span>
              </div>
              <h3 class="pricing-title">Premium</h3>
          </div>
          <ul class="pricing-feature-list">
              <li class="pricing-feature">10 Pages/Screens</li>
              <li class="pricing-feature">Responsive Design</li>
              <li class="pricing-feature">Content Upload</li>
          </ul>
          <button class="pricing-action">Choose plan</button>
        </div> --}}

        <section>
            <div class="pricing pricing-palden">
                <div class="pricing-item features-item ja-animate" data-animation="move-from-bottom" data-delay="item-0" style="min-height: 397px;">
                    <div class="pricing-deco">
                        <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" y="0px">
                            <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                            <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                            <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                            <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
                        </svg>
                        <div class="pricing-price"><span class="pricing-currency"></span>30
                            {{-- <span class="pricing-period">/ perces</span> --}}
                        </div>
                        <h3 class="pricing-title">perc</h3>
                    </div>
                    <ul class="pricing-feature-list">
                      <li class="pricing-feature">30 perces kezelés</li>
                      <li class="pricing-feature"><h4>{{ number_format($price1->amount, 0, ',', ' ') }} Ft</h4></li>
                    </ul>
                    <a href="{{ route('appointments') }}" class=" btn-get-started" style="    margin: auto 3em 2em 3em;">Időpontot foglalok</a>
                  </div>
                {{-- <div class="pricing-item features-item ja-animate pricing__item--featured" data-animation="move-from-bottom" data-delay="item-1" style="min-height: 497px;">
                    <div class="pricing-deco" style="background: linear-gradient(135deg,#a93bfe,#584efd)">
                        <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" y="0px">
                            <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                            <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                            <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                            <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
                        </svg>
                        <div class="pricing-price"><span class="pricing-currency">$TWD</span>2499
                            <span class="pricing-period">/ month</span>
                        </div>
                        <h3 class="pricing-title">Premium</h3>
                    </div>
                    <ul class="pricing-feature-list">
                        <li class="pricing-feature">10 Pages/Screens</li>
                        <li class="pricing-feature">Responsive Design</li>
                        <li class="pricing-feature">Content Upload</li>
                    </ul>
                    <button class="pricing-action">Időpontot foglalok</button>
                </div> --}}
                <div class="pricing-item features-item ja-animate" data-animation="move-from-bottom" data-delay="item-2" style="min-height: 397px;">
                    <div class="pricing-deco">
                        <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" y="0px">
                            <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                            <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                            <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                            <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
                        </svg>
                        <div class="pricing-price"><span class="pricing-currency"></span>60
                            {{-- <span class="pricing-period">/ week</span> --}}
                        </div>
                        <h3 class="pricing-title">perc</h3>
                    </div>

                    <ul class="pricing-feature-list">
                      <li class="pricing-feature">60 perces kezelés</li>
                      <li class="pricing-feature"><h4>{{ number_format($price2->amount, 0, ',', ' ') }} Ft</h4></li>
                    </ul>
                    <a href="{{ route('appointments') }}" class=" btn-get-started" style="    margin: auto 3em 2em 3em;">Időpontot foglalok</a>
                </div>
            </div>
        </section>

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

        <!-- Section Title -->
        <div class="container section-title pt-5" data-aos="fade-up">

          <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-xl-6 text-center">
              <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Bérlet</h2>
    
              <p class="  pb-md-0 lead">
                A Humán Regenerátor Sports szalonunkban 5 és 10 alkalmas bérleteket vásárolhat kedvező áron.
              </p>
            </div>
          </div>
    
        </div><!-- End Section Title -->

  <div class="" data-aos="fade-up">
    <div class="plans mb-5">
        <label class="plan basic-plan me-xxl-5 me-lg-3 " for="basic">
            <input checked type="radio" id="basic" name="duration" value="35" />
            <div class="plan-content ">
                <img loading="lazy" src="{{ asset('assets/ico.png') }}" alt="" />
                <div class="plan-details">
                    <span>5 alkalmas bérlet {{ number_format($price3->amount, 0, ',', ' ') }} ft</span>
                    <p>1 alkalom = 30 perces kezelés<br>Érvényesség: vásárlástól számított 185 napig</p>
                </div>
            </div>
        </label>

        <label class="plan complete-plan ms-xxl-5 ms-lg-2" for="complete">
            <input type="radio" id="complete" name="duration" value="70" />
            <div class="plan-content">
                <img loading="lazy" src="{{ asset('assets/ico.png') }}" alt="" />
                <div class="plan-details">
                  <span>10 alkalmas bérlet {{ number_format($price4->amount, 0, ',', ' ') }} ft</span>
                  <p>1 alkalom = 30 perces kezelés<br>Érvényesség: vásárlástól számított 185 napig</p>
                </div>
            </div>
        </label>
    </div>
</div>

  <div class="px-4 pt-5 my-5 text-center border-bottom" data-aos="fade-up">
    <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Töltsd fel a tested és ébredj új életre</h2>

    <h1 class="display-4 fw-bold text-body-emphasis">Humán Regenerátor Sports</h1>
    <div class="col-lg-10 col-xl-10 col-xxl-8 mx-auto">

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
              <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Jótékony hatások</h2>
    
              <p class=" mb-md-5 pb-md-0 lead">
                Ismerd meg a Humán Regenerátor Jótékony hatásait
              </p>
            </div>
          </div>
    
        </div><!-- End Section Title -->


        <section class="bsb-faq-2 py-3 py-md-5 py-xl-8" data-aos="fade-up">
          <div class="container">
            <div class="row gy-5 gy-lg-0" id="accordionExample">
        
              <div class="col-12 col-lg-4">
                <div class="row justify-content-xl-end">
                  <div class="col-12 col-xl-12">
                    <div class="accordion accordion-flush" >
              
                      <div class="accordion-item mb-4 shadow-sm">
                        <h2 class="accordion-header" id="headingTwoRow1">
                          <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoRow1" aria-expanded="false" aria-controls="collapseTwoRow1">
                            Hatással van a mozgásszervi betegségekre
                          </button>
                        </h2>
                        <div id="collapseTwoRow1" class="accordion-collapse collapse" aria-labelledby="headingTwoRow1" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            A Humán Regenerátor a keringés javításával regenerálhatja az ízületi gyulladt felszíneket és a szinoviális folyadékokat. A keringés javításával erőteljes gyulladáscsökkentő hatásával kezelheti és gyógyíthatja a mozgásszervi eredetű betegségeket és az azzal járó fájdalmakat (izületi kopásos betegségek – arthorosis – csontritkulás – osteoporosis ) Hatása gyors, pár kezelés is érezhető változást eredményezhet.                  </div>
                        </div>
                      </div>
              
                      <div class="accordion-item mb-4 shadow-sm">
                        <h2 class="accordion-header" id="headingThreeRow1">
                          <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeRow1" aria-expanded="false" aria-controls="collapseThreeRow1">
                            Sérülésekre gyakorolt hatás
                          </button>
                        </h2>
                        <div id="collapseThreeRow1" class="accordion-collapse collapse" aria-labelledby="headingThreeRow1" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            A Humán Regenerátor serkentheti a kötőszövetek és izmok, a lábak és a csontok regenerálódását, ezáltal lehetőséget nyújthat a sportolóknak a legkorábbi visszatérésre. A regenerációs idő lerövidítése napjaink egyik legnagyobb elvárása. Komoly hatással lehet az életminőség javítására.                  </div>
                        </div>
                      </div>
              
                      <div class="accordion-item mb-4 shadow-sm">
                        <h2 class="accordion-header" id="headingFourRow1">
                          <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourRow1" aria-expanded="false" aria-controls="collapseFourRow1">
                            Kiegyensúlyozott alvás (insomnia)
                          </button>
                        </h2>
                        <div id="collapseFourRow1" class="accordion-collapse collapse" aria-labelledby="headingFourRow1" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            A Humán Regenerátor kezelés hatása alvás közben észlelhető, amely egyszerűbbé és mélyebbé teheti a légzést. Mindezek eredményeként pihentető, energiatudatos ébredés lehet. Mély alvás és friss ébredés után a nap aktívan indulhat. Ez azonban nem meglepő, mivel a jó vérellátás jó alapot nyújt erre. A Humán Regenerátor támogathatja a légzést azáltal, hogy feloldja a váladékot a maxilláris sinusban. Komoly segítséget nyújthat az allergiában is.                  </div>
                        </div>
                      </div>
              
                      <div class="accordion-item shadow-sm">
                        <h2 class="accordion-header" id="headingFiveRow1">
                          <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveRow1" aria-expanded="false" aria-controls="collapseFiveRow1">
                            Teljesítmény fokozás
                          </button>
                        </h2>
                        <div id="collapseFiveRow1" class="accordion-collapse collapse" aria-labelledby="headingFiveRow1" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>
                              A Humán Regenerátor javíthatja a mentális, kognitív és fizikai teljesítményt. A Humán Regenerátor növelheti a vér viszkozitását és a keringést a koncentráció és a teljesítmény javítása érdekében. A Humán Regenerátor másodpercek töredéke alatt milliónyi impulzust ad ki, hogy javítsa a test keringését azáltal, hogy kinyitja a kis ereket. Ez az erős mikrocirkulációs javítás logikus és komoly alapot nyújthat a teljesítmény növeléséhez. A Humán Regenerátor kezelés során rengeteg kapilláris és vaszkuláris ereket nyithat meg, amelyek mozgással vagy más erőkkel ilyen mértékben nem nyithatók meg. A nyirok áramlása is jelentősen megnőhet, ami párhuzamosan a vénás keringés javulásával jár. Ez a hatás gyors oxigéncserét biztosít, amely minden élő szervezet alapja. A Humán Regenerátor a véralvadás ellen működik, miközben optimalizálhatja a vér viszkozitását. A vérlemezkék tapadása jelentősen csökkenhet. A Humán Regenerátor növelheti a sejtek membránjainak áteresztőképességét, így az információ gyorsabban továbbadódik az oxigénben gazdag közegben.
                            </p>
                          </div>
                        </div>
                      </div>
              
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-12 col-lg-4">
                <div class="row justify-content-xl-end">
                  <div class="col-12 col-xl-11">
                    <div class="accordion accordion-flush" >
              
                      <div class="accordion-item mb-4 shadow-sm">
                        <h2 class="accordion-header" id="headingTwoRow2">
                          <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoRow2" aria-expanded="false" aria-controls="collapseTwoRow2">
                            Véráramlás serkentése
                          </button>
                        </h2>
                        <div id="collapseTwoRow2" class="accordion-collapse collapse" aria-labelledby="headingTwoRow2" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            A Humán Regenerátor növelheti a vér viszkozitását és a keringést a koncentráció és a teljesítmény javítása érdekében. A Humán Regenerátor másodpercek töredéke alatt milliónyi impulzust ad ki, hogy javítsa a test keringését azáltal, hogy kinyitja a kis ereket. Ez az erős mikrocirkulációs javítás logikus és komoly alapot nyújthat a teljesítmény növeléséhez. A Humán Regenerátor a kezelés során rengeteg kapilláris és vaszkuláris ereket nyithat meg, amelyek mozgással vagy más erőkkel ilyen mértékben nem nyithatók meg. A nyirok áramlása is jelentősen megnőhet, ami párhuzamosan a vénás keringés javulásával járhat. Ez a hatás gyors oxigéncserét biztosít, amely minden élő szervezet alapja. A Humán Regenerátor a véralvadás ellen működik, miközben optimalizálhatja a vér viszkozitását. A vérlemezkék tapadása jelentősen csökkenhet. A Humán Regenerátor növelheti a sejtek membránjainak áteresztőképességét, így az információ gyorsabban továbbadódik az oxigénben gazdag közegben.                  </div>
                        </div>
                      </div>
              
                      <div class="accordion-item mb-4 shadow-sm">
                        <h2 class="accordion-header" id="headingThreeRow2">
                          <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeRow2" aria-expanded="false" aria-controls="collapseThreeRow2">
                            Hatása van a szorongásra, stresszre, kiégésre
                          </button>
                        </h2>
                        <div id="collapseThreeRow2" class="accordion-collapse collapse" aria-labelledby="headingThreeRow2" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            A Humán Regenerátor csökkentheti a stresszt, szorongást, pánikot és depressziót.
                          </div>
                        </div>
                      </div>
              
                      <div class="accordion-item mb-4 shadow-sm">
                        <h2 class="accordion-header" id="headingFourRow2">
                          <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourRow2" aria-expanded="false" aria-controls="collapseFourRow2">
                            Sejtregeneráció (sérülés, műtét)
                          </button>
                        </h2>
                        <div id="collapseFourRow2" class="accordion-collapse collapse" aria-labelledby="headingFourRow2" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            A Humán Regenerátor csökkentheti a műtét utáni regeneráció idejét. Segítheti a sérült idegsejtek regenerálódását. Az idegek gyógyulása általában lassú folyamat. Általában naponta 1 mm regenerálható. A sérült ideg 10 cm-es regenerálása körülbelül 100 napot vesz igénybe. A nagyobb idegek regenerálódásához általában több év szükséges. Sérülések vagy műtét után a Humán Regenerátor jelentősen lerövidítheti a gyógyulás idejét.
                          </div>
                        </div>
                      </div>
              
                      <div class="accordion-item shadow-sm">
                        <h2 class="accordion-header" id="headingFiveRow2">
                          <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveRow2" aria-expanded="false" aria-controls="collapseFiveRow2">
                            Állóképesség és koncentráció növelés 
                          </button>
                        </h2>
                        <div id="collapseFiveRow2" class="accordion-collapse collapse" aria-labelledby="headingFiveRow2" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>
                              A Humán Regenerátor növelheti a vér viszkozitását és a keringést a koncentráció és a teljesítmény javítása érdekében. A Humán Regenerátor másodpercek töredéke alatt milliónyi impulzust ad ki, hogy javítsa a test keringését azáltal, hogy kinyitja a kis ereket. Ez az erős mikrocirkulációs javítás logikus és komoly alapot nyújthat a teljesítmény növeléséhez. A Humán Regenerátor kezelés során rengeteg kapilláris és vaszkuláris ereket nyit meg, amelyek mozgással vagy más erőkkel ilyen mértékben nem nyithatók meg. A nyirok áramlása is jelentősen megnőhet, ami párhuzamosan a vénás keringés javulásával jár. Ez a hatás gyors oxigéncserét biztosít, amely minden élő szervezet alapja. Az Humán Regenerátor a véralvadás ellen működik, miközben optimalizálhatja a vér viszkozitását. A vérlemezkék tapadása jelentősen csökkenhet. A Humán Regenerátor növelheti a sejtek membránjainak áteresztőképességét, így az információ gyorsabban továbbadódik az oxigénben gazdag közegben.
                            </p>
        
                          </div>
                        </div>
                      </div>
              
                    </div>
                  </div>
                </div>
              </div>
        
        
              <div class="col-12 col-lg-4">
                <div class="row justify-content-xl-end">
                  <div class="col-12 col-xl-11">
                    <div class="accordion accordion-flush" >
              
                      <div class="accordion-item mb-4 shadow-sm">
                        <h2 class="accordion-header" id="headingTwoRow3">
                          <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoRow3" aria-expanded="false" aria-controls="collapseTwoRow3">
                            Immunrendszer erősítés
                          </button>
                        </h2>
                        <div id="collapseTwoRow3" class="accordion-collapse collapse" aria-labelledby="headingTwoRow3" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            A Humán Regenerátor erős hatással van az egész testre, mivel sejtszinten stimulálja az immunrendszert, ami egészséges, erőteljes élethez vezethet. Fontos hangsúlyozni azokat az eszközöket, amelyek optimalizálhatják a vércukorszintre gyakorolt hatást, ami nagyon összetett folyamat.
                          </div>
                        </div>
                      </div>
              
                      <div class="accordion-item mb-4 shadow-sm">
                        <h2 class="accordion-header" id="headingThreeRow3">
                          <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeRow3" aria-expanded="false" aria-controls="collapseThreeRow3">
                            Öregedésgátló hatás (Anti-aging)
                          </button>
                        </h2>
                        <div id="collapseThreeRow3" class="accordion-collapse collapse" aria-labelledby="headingThreeRow3" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            A Humán Regenerátor növeli a szövetek kollagén termelését, amely az egész életen át csökken, és erősíti a bőr kötőszöveteinek szerkezetét. A Humán Regenerátor rendszeres használata megakadályozhatja a bőr természetes és fiziológiai vízvesztését, amely az öregedés természetes és logikus következménye. Ne feledje, hogy minden nap sok folyadékot kell fogyasztania, ha méregteleníteni akar. Kérjük, a Humán Regenerátor kezelés után is igyon sok folyadékot a kívánt hatás elérése érdekében.
                          </div>
                        </div>
                      </div>
              
                      <div class="accordion-item mb-4 shadow-sm">
                        <h2 class="accordion-header" id="headingFourRow3">
                          <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourRow3" aria-expanded="false" aria-controls="collapseFourRow3">
                            Bioenergetika (anyagcsere)
                          </button>
                        </h2>
                        <div id="collapseFourRow3" class="accordion-collapse collapse" aria-labelledby="headingFourRow3" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            A Humán Regenerátor optimalizálhatja a szervezet anyagcseréjét, pozitív, stimuláló hatása lehet a sejtosztódásra. Ez nagyon fontos, mert ha a folyamat lassú, a régi elemek bomlása meghosszabbodik, azonban a gyors folyamat nem ad elegendő időt a sejtek progressziójához. A hosszú és sikeres kutatások által kifejlesztett Humán Regenerátor technológia biztosíthatja az optimalizált hatás elősegítését az anyagcsere kiválasztásában.
                          </div>
                        </div>
                      </div>
              
                      <!-- <div class="accordion-item shadow-sm">
                        <h2 class="accordion-header" id="headingFiveRow3">
                          <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveRow3" aria-expanded="false" aria-controls="collapseFiveRow3">
                            How Do I Cancel My Account?
                          </button>
                        </h2>
                        <div id="collapseFiveRow3" class="accordion-collapse collapse" aria-labelledby="headingFiveRow3" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <p>To cancel your account, please follow these steps:</p>
                            <ul>
                              <li>Go to our website and sign in to your account...</li>
                            </ul>
                          </div>
                        </div>
                      </div> -->
              
                    </div>
                  </div>
                </div>
              </div>
        
        
            </div>
          </div>
        </section>
  


    @include('layouts.footer')
  
</body>
</html>
