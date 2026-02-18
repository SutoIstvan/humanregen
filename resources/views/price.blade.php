<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title', __('menu.title'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

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
            z-index: 10;
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
            position: relative;
            text-align: center;
            background-image: radial-gradient(circle at 39% 47%, rgba(107, 107, 107, 0.08) 0%, rgba(107, 107, 107, 0.08) 33.333%, rgba(72, 72, 72, 0.08) 33.333%, rgba(72, 72, 72, 0.08) 66.666%, rgba(36, 36, 36, 0.08) 66.666%, rgba(36, 36, 36, 0.08) 99.999%), radial-gradient(circle at 53% 74%, rgba(182, 182, 182, 0.08) 0%, rgba(182, 182, 182, 0.08) 33.333%, rgba(202, 202, 202, 0.08) 33.333%, rgba(202, 202, 202, 0.08) 66.666%, rgba(221, 221, 221, 0.08) 66.666%, rgba(221, 221, 221, 0.08) 99.999%), radial-gradient(circle at 14% 98%, rgba(184, 184, 184, 0.08) 0%, rgba(184, 184, 184, 0.08) 33.333%, rgba(96, 96, 96, 0.08) 33.333%, rgba(96, 96, 96, 0.08) 66.666%, rgba(7, 7, 7, 0.08) 66.666%, rgba(7, 7, 7, 0.08) 99.999%), linear-gradient(45deg, rgb(97, 14, 117), rgb(20, 32, 127));
            color: white;
        }

        .inner-header {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .flex {
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .waves {
            position: relative;
            width: 100%;
            height: 100vh;
            margin-bottom: -7px;
            min-height: 100px;
            max-height: 200px;
        }

        .parallax>use {
            animation: move-forever 25s cubic-bezier(.55, .5, .45, .5) infinite;
        }

        .parallax>use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
        }

        .parallax>use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
        }

        .parallax>use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
        }

        .parallax>use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
        }

        @keyframes move-forever {
            0% {
                transform: translate3d(-90px, 0, 0);
            }

            100% {
                transform: translate3d(85px, 0, 0);
            }
        }

        .plans {
            padding: 0px !important;
        }
    </style>
</head>

<body>

    @include('layouts.nav')

    <section id="hero" class="hero section dark-background">
        <img src="assets/img/hero-bg-8.jpg" alt="" class="hero-bg">

        <div class="container">
            <div class="row gy-4 text-center">
                <section>
                    <div class="pricing pricing-palden">
                        <div class="pricing-item features-item ja-animate" data-animation="move-from-bottom"
                            data-delay="item-0" style="min-height: 397px;">
                            <div class="pricing-deco">
                                <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px"
                                    id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100"
                                    width="300px" x="0px" xml:space="preserve" y="0px">
                                    <path class="deco-layer deco-layer--1"
                                        d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                                        fill="#FFFFFF" opacity="0.6"></path>
                                    <path class="deco-layer deco-layer--2"
                                        d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                                        fill="#FFFFFF" opacity="0.6"></path>
                                    <path class="deco-layer deco-layer--3"
                                        d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z"
                                        fill="#FFFFFF" opacity="0.7"></path>
                                    <path class="deco-layer deco-layer--4"
                                        d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                                        fill="#FFFFFF"></path>
                                </svg>
                                <div class="pricing-price"><span class="pricing-currency"></span>30
                                </div>
                                <h3 class="pricing-title">HumanRegenSport</h3>
                            </div>
                            <ul class="pricing-feature-list">
                                <li class="pricing-feature">30 perces kezelés</li>
                                <li class="pricing-feature">
                                    <h4>{{ number_format($price1->amount, 0, ',', ' ') }} Ft</h4>
                                </li>
                            </ul>
                            <a href="{{ route('appointments') }}" class=" btn-get-started"
                                style="    margin: auto 3em 2em 3em;">Időpontot foglalok</a>
                        </div>

                        <div class="pricing-item features-item ja-animate" data-animation="move-from-bottom"
                            data-delay="item-2" style="min-height: 397px;">
                            <div class="pricing-deco">
                                <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px"
                                    id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100"
                                    width="300px" x="0px" xml:space="preserve" y="0px">
                                    <path class="deco-layer deco-layer--1"
                                        d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                                        fill="#FFFFFF" opacity="0.6"></path>
                                    <path class="deco-layer deco-layer--2"
                                        d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                                        fill="#FFFFFF" opacity="0.6"></path>
                                    <path class="deco-layer deco-layer--3"
                                        d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z"
                                        fill="#FFFFFF" opacity="0.7"></path>
                                    <path class="deco-layer deco-layer--4"
                                        d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                                        fill="#FFFFFF"></path>
                                </svg>
                                <div class="pricing-price"><span class="pricing-currency"></span>60
                                </div>
                                <h3 class="pricing-title">HumanRegenSport</h3>
                            </div>

                            <ul class="pricing-feature-list">
                                <li class="pricing-feature">60 perces kezelés</li>
                                <li class="pricing-feature">
                                    <h4>{{ number_format($price2->amount, 0, ',', ' ') }} Ft</h4>
                                </li>
                            </ul>
                            <a href="{{ route('appointments') }}" class=" btn-get-started"
                                style="    margin: auto 3em 2em 3em;">Időpontot foglalok</a>
                        </div>

                                                <div class="pricing-item features-item ja-animate" data-animation="move-from-bottom"
                            data-delay="item-2" style="min-height: 397px;">
                            <div class="pricing-deco">
                                <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px"
                                    id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100"
                                    width="300px" x="0px" xml:space="preserve" y="0px">
                                    <path class="deco-layer deco-layer--1"
                                        d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z"
                                        fill="#FFFFFF" opacity="0.6"></path>
                                    <path class="deco-layer deco-layer--2"
                                        d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z"
                                        fill="#FFFFFF" opacity="0.6"></path>
                                    <path class="deco-layer deco-layer--3"
                                        d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716H42.401L43.415,98.342z"
                                        fill="#FFFFFF" opacity="0.7"></path>
                                    <path class="deco-layer deco-layer--4"
                                        d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z"
                                        fill="#FFFFFF"></path>
                                </svg>
                                <div class="pricing-price"><span class="pricing-currency"></span>30
                                </div>
                                <h3 class="pricing-title">INBODY 970S</h3>
                            </div>

                            <ul class="pricing-feature-list">
                                <li class="pricing-feature">30 perces mérés</li>
                                <li class="pricing-feature">
                                    <h4>{{ number_format($price6->amount, 0, ',', ' ') }} Ft</h4>
                                </li>
                            </ul>
                            <a href="{{ route('appointments') }}" class=" btn-get-started"
                                style="    margin: auto 3em 2em 3em;">Időpontot foglalok</a>
                        </div>
                    </div>
                </section>

            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                </path>
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
    </section>

    <div class="container section-title pt-5 pb-5" data-aos="fade-up">

        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-xl-6 text-center">
                <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Bérlet</h2>
                <p class="  pb-md-0 lead">
                    A Humán Regenerátor Sports szalonunkban 5 és 10 alkalmas bérleteket vásárolhat kedvező áron.
                </p>
            </div>
        </div>
    </div>

    <div class="pb-3" data-aos="fade-up">
        <div class="plans mb-5">
            <label class="plan basic-plan me-xxl-5 me-lg-3 " for="basic">
                <input checked type="radio" id="basic" name="duration" value="30" />
                <div class="plan-content ">
                    <img loading="lazy" src="{{ asset('assets/ico.png') }}" alt="" />
                    <div class="plan-details">
                        <span>5 alkalmas bérlet {{ number_format($price3->amount, 0, ',', ' ') }} ft</span>
                        <p>1 alkalom = 30 perces kezelés<br>Érvényesség: vásárlástól számított 185 napig</p>
                    </div>
                </div>
            </label>

            <label class="plan complete-plan ms-xxl-5 ms-lg-2" for="complete">
                <input type="radio" id="complete" name="duration" value="60" />
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


    <div class="container section-title pt-5 pb-5" data-aos="fade-up">

        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-xl-6 text-center">
                <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">InBody 970S</h2>
                <!-- <p class="  pb-md-0 lead">
                    A Humán Regenerátor Sports szalonunkban 5 és 10 alkalmas bérleteket vásárolhat kedvező áron.
                </p> -->
            </div>
        </div>
    </div>

    <div class="pb-3" data-aos="fade-up">
        <div class="plans mb-5">
            <label class="plan basic2-plan me-xxl-5 me-lg-3 " for="basic2">
                <input checked type="radio" id="basic2" name="duration" value="30" />
                <div class="plan-content ">
                    <img loading="lazy" src="{{ asset('assets/inbody-logo.png') }}" alt="" />
                    <div class="plan-details">
                        <span class="mt-4">Mérés + konzultáció {{ number_format($price5->amount, 0, ',', ' ') }} ft</span>
                        <!-- <p>1 alkalom = 30 perces kezelés<br>Érvényesség: vásárlástól számított 185 napig</p> -->
                    </div>
                </div>
            </label>

            <label class="plan complete2-plan ms-xxl-5 ms-lg-2" for="complete2">
                <input type="radio" id="complete2" name="duration" value="60" />
                <div class="plan-content">
                    <img loading="lazy" src="{{ asset('assets/inbody-logo.png') }}" alt="" />
                    <div class="plan-details">
                        <span class="mt-4">Mérés {{ number_format($price6->amount, 0, ',', ' ') }} ft</span>
                        <!-- <p>1 alkalom = 30 perces kezelés<br>Konzultáció nélkül</p> -->
                    </div>
                </div>
            </label>
        </div>
    </div>

    <div class="pb-3" data-aos="fade-up">
        <div class="plans mb-5">
            <label class="plan basic3-plan me-xxl-5 me-lg-3 " for="basic3">
                <input checked type="radio" id="basic3" name="duration" value="30" />
                <div class="plan-content ">
                    <img loading="lazy" src="{{ asset('assets/inbody-logo.png') }}" alt="" />
                    <div class="plan-details">
                        <span class="mt-4">5.-dik mérés {{ number_format($price7->amount, 0, ',', ' ') }} ft</span>
                        <!-- <p>1 alkalom = 30 perces kezelés<br>Konzultáció nélkül</p> -->
                    </div>
                </div>
            </label>

            <label class="plan complete3-plan ms-xxl-5 ms-lg-2" for="complete3">
                <input type="radio" id="complete3" name="duration" value="60" />
                <div class="plan-content">
                    <img loading="lazy" src="{{ asset('assets/inbody-logo.png') }}" alt="" />
                    <div class="plan-details">
                        <span class="mt-4">Konzultáció {{ number_format($price8->amount, 0, ',', ' ') }} ft</span>
                        <!-- <p>1 alkalom = 30 perces konzultáció<br>Mérés nélkül, korábbi adatokkal</p> -->
                    </div>
                </div>
            </label>
        </div>
    </div>



    @include('layouts.modal')

    @include('layouts.footer')

</body>
</html>
