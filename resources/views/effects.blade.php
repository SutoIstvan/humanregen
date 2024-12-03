<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <style>
        .hero {
            width: 100%;
            min-height: 20vh !important;
            position: relative;
            padding: 80px 0 80px 0;
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>

    @include('layouts.nav')

    <section id="hero" class="hero section dark-background">
        <img src="assets/img/hero-bg-8.jpg" alt="" class="hero-bg">
        <div class="container">
            <div class="row gy-4 text-center">
                <div class="col-lg-12  d-flex flex-column justify-content-center" data-aos="fade-in">
                    <h1><span>Jótékony hatások</span></h1>
                </div>
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

    <div style=" background-color: #f9f6f1;" class="">
        <div class="container pb-5">

            <div class="container section-title px-4 pt-4 my-1" data-aos="fade-up">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 col-xl-8 text-center">
                        <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Jótékony hatások</h2>
                        <p class="mb-4 pb-2 mb-md-5 pb-md-0 lead">
                            Ismerd meg a Humán Regenerátor Jótékony hatásait
                        </p>
                    </div>
                </div>
            </div>

            {{-- <div class="row align-items-center ">
                <div class="content-column col-lg-4 d-block d-lg-none">
                    <div class="pricing-block">
                        <div class="inner-box">
                            <div class="image-box" data-aos="fade-up" data-aos-delay="10">
                                <figure class="image overlay-anim mb-0"><img class="rounded-3"
                                        src="{{ asset('assets/img/effects/1.png') }}" alt="Image"></figure>
                            </div>
                            <div class="content-box ms-2" data-aos="fade-up" data-aos-delay="100">
                                <div class="inner">
                                    <h2 class="title" style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                        Hatással van</h2>
                                    <div class="lead"> a mozgásszervi betegségekre</div>
                                </div><span class="price"></span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-block">
                        <div class="inner-box">
                            <div class="image-box" data-aos="fade-up" data-aos-delay="10">
                                <figure class="image overlay-anim mb-0"><img class="rounded-3"
                                        src="{{ asset('assets/img/effects/2.png') }}" alt="Image"></figure>
                            </div>
                            <div class="content-box ms-2" data-aos="fade-up" data-aos-delay="100">
                                <div class="inner">
                                    <h2 class="title" style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                        Hatással van</h2>
                                    <div class="lead">véráramlás serkentésére</div>
                                </div><span class="price"></span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-block">
                        <div class="inner-box">
                            <div class="image-box" data-aos="fade-up" data-aos-delay="10">
                                <figure class="image overlay-anim mb-0"><img class="rounded-3"
                                        src="{{ asset('assets/img/effects/3.png') }}" alt="Image"></figure>
                            </div>
                            <div class="content-box ms-2" data-aos="fade-up" data-aos-delay="100">
                                <div class="inner">
                                    <h2 class="title" style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                        Hatással van</h2>
                                    <div class="lead">az immunrendszer erősítésére</div>
                                </div><span class="price"></span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-block">
                        <div class="inner-box">
                            <div class="image-box" data-aos="fade-up" data-aos-delay="10">
                                <figure class="image overlay-anim mb-0"><img class="rounded-3"
                                        src="{{ asset('assets/img/effects/4.png') }}" alt="Image"></figure>
                            </div>
                            <div class="content-box ms-2" data-aos="fade-up" data-aos-delay="100">
                                <div class="inner">
                                    <h2 class="title" style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                        Hatással van</h2>
                                    <div class="lead">a sérülésekre</div>
                                </div><span class="price"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-column col-lg-4 d-none d-lg-block">


                    <div class="pricing-block-end">
                        <div class="inner-box">

                            <div class="content-box me-2" data-aos="fade-up" data-aos-delay="100">
                                <div class="inner">
                                    <h2 class="title" style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                        Hatással van</h2>
                                    <div class="lead">a mozgásszervi betegségekre</div>
                                </div><span class="price"></span>
                            </div>

                            <div class="image-box" data-aos="fade-up" data-aos-delay="10">
                                <figure class="image overlay-anim mb-0"><img class="rounded-3"
                                        src="{{ asset('assets/img/effects/1.png') }}" alt="Image"></figure>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-block-end">
                        <div class="inner-box">

                            <div class="content-box me-2" data-aos="fade-up" data-aos-delay="100">
                                <div class="inner">
                                    <h2 class="title" style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                        Hatással van</h2>
                                    <div class="lead">a véráramlás serkentésére</div>
                                </div><span class="price"></span>
                            </div>
                            <div class="image-box" data-aos="fade-up" data-aos-delay="10">
                                <figure class="image overlay-anim mb-0"><img class="rounded-3"
                                        src="{{ asset('assets/img/effects/2.png') }}" alt="Image"></figure>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-block-end">
                        <div class="inner-box">

                            <div class="content-box me-2" data-aos="fade-up" data-aos-delay="100">
                                <div class="inner">
                                    <h2 class="title" style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                        Hatással van</h2>
                                    <div class="lead">az immunrendszer erősítésére</div>
                                </div><span class="price"></span>
                            </div>
                            <div class="image-box" data-aos="fade-up" data-aos-delay="10">
                                <figure class="image overlay-anim mb-0"><img class="rounded-3"
                                        src="{{ asset('assets/img/effects/3.png') }}" alt="Image"></figure>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-block-end">
                        <div class="inner-box">

                            <div class="content-box me-2" data-aos="fade-up" data-aos-delay="100">
                                <div class="inner">
                                    <h2 class="title" style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                        Hatással van</h2>
                                    <div class="lead">a sérülésekre</div>
                                </div><span class="price"></span>
                            </div>
                            <div class="image-box " data-aos="fade-up" data-aos-delay="10">
                                <figure class="image overlay-anim mb-0"><img class="rounded-3"
                                        src="{{ asset('assets/img/effects/4.png') }}" alt="Image"></figure>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="image-column col-lg-4 d-flex justify-content-center align-items-center d-none d-lg-block"
                    data-aos="fade-up" data-aos-delay="10">
                    <div class="inner-box" style="justify-content: center !important;">
                        <figure class="image overlay-anim mb-0"><img height="500px"
                                src="{{ asset('assets/img/effects/main.png') }}" alt="Image"></figure>
                    </div>
                </div>
                <div class="content-column col-lg-4">
                    <div class="pricing-block">
                        <div class="inner-box">
                            <div class="image-box" data-aos="fade-up" data-aos-delay="10">
                                <figure class="image overlay-anim mb-0"><img class="rounded-3"
                                        src="{{ asset('assets/img/effects/5.png') }}" alt="Image"></figure>
                            </div>
                            <div class="content-box ms-2" data-aos="fade-up" data-aos-delay="100">
                                <div class="inner">
                                    <h2 class="title" style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                        Hatással van</h2>
                                    <div class="lead">a szorongásra és a stresszre</div>
                                </div><span class="price"></span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-block">
                        <div class="inner-box">
                            <div class="image-box" data-aos="fade-up" data-aos-delay="10">
                                <figure class="image overlay-anim mb-0"><img class="rounded-3"
                                        src="{{ asset('assets/img/effects/6.png') }}" alt="Image"></figure>
                            </div>
                            <div class="content-box ms-2" data-aos="fade-up" data-aos-delay="100">
                                <div class="inner">
                                    <h2 class="title" style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                        Hatással van</h2>
                                    <div class="lead">az öregedésgátlásra</div>
                                </div><span class="price"></span>
                            </div>
                        </div>
                    </div>
                    <div class="pricing-block">
                        <div class="inner-box">
                            <div class="image-box" data-aos="fade-up" data-aos-delay="10">
                                <figure class="image overlay-anim mb-0"><img class="rounded-3"
                                        src="{{ asset('assets/img/effects/7.png') }}" alt="Image"></figure>
                            </div>
                            <div class="content-box ms-2" data-aos="fade-up" data-aos-delay="100">
                                <div class="inner">
                                    <h2 class="title" style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                        Hatással van</h2>
                                    <div class="lead">a kiegyensúlyozott alvásra</div>
                                </div><span class="price"></span>
                            </div>
                        </div>
                    </div>

                    <div class="pricing-block">
                        <div class="inner-box">
                            <div class="image-box" data-aos="fade-up" data-aos-delay="10">
                                <figure class="image overlay-anim mb-0"><img class="rounded-3"
                                        src="{{ asset('assets/img/effects/8.png') }}" alt="Image"></figure>
                            </div>
                            <div class="content-box ms-2" data-aos="fade-up" data-aos-delay="100">
                                <div class="inner">
                                    <h2 class="title" style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                        Hatással van</h2>
                                    <div class="lead">a sejtregenerációra</div>
                                </div><span class="price"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div> --}}
        </div>
    </div>


    <div class="container">
        <div class="row gy-5" id="accordionExample2">
            <!-- Первая колонка -->
            <div class="col-12 col-lg-4 text-end">

                <div class="d-none d-lg-block" id="accordionExample2">
                    <!-- Блок 1 -->
                    <div class="accordion-item mt-4">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="collapsed" style="border: 0px; background-color: transparent;" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                aria-controls="collapseOne">
                                <div class="pricing-block-end">
                                    <div class="inner-box">
                                        <div class="content-box me-2" data-aos-delay="100">
                                            <div class="inner">
                                                <h2 class="title"
                                                    style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                                    Hatással van
                                                </h2>
                                                <div class="lead">a mozgásszervi betegségekre</div>
                                            </div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="image-box" data-aos-delay="10">
                                            <figure class="image overlay-anim mb-0">
                                                <img class="rounded-3" src="{{ asset('assets/img/effects/1.png') }}"
                                                    alt="Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body mb-2 me-2">
                                A Humán Regenerátor a keringés javításával regenerálhatja az ízületi gyulladt
                                felszíneket és a szinoviális folyadékokat. A keringés javításával erőteljes
                                gyulladáscsökkentő hatásával kezelheti és gyógyíthatja a mozgásszervi eredetű
                                betegségeket és az azzal járó fájdalmakat (izületi kopásos betegségek – arthorosis –
                                csontritkulás – osteoporosis ) Hatása gyors, pár kezelés is érezhető változást
                                eredményezhet.
                            </div>
                        </div>
                    </div>

                    <!-- Блок 2 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="collapsed" style="border: 0px; background-color: transparent;" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                <div class="pricing-block-end">
                                    <div class="inner-box">
                                        <div class="content-box me-2" data-aos-delay="100">
                                            <div class="inner">
                                                <h2 class="title"
                                                    style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                                    Hatással van
                                                </h2>
                                                <div class="lead">a véráramlás serkentésére</div>
                                            </div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="image-box" data-aos-delay="10">
                                            <figure class="image overlay-anim mb-0">
                                                <img class="rounded-3" src="{{ asset('assets/img/effects/2.png') }}"
                                                    alt="Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body mb-2 me-2">
                                A Humán Regenerátor növelheti a vér viszkozitását és a keringést a koncentráció és a
                                teljesítmény javítása érdekében. A Humán Regenerátor másodpercek töredéke alatt
                                milliónyi impulzust ad ki, hogy javítsa a test keringését azáltal, hogy kinyitja a kis
                                ereket. Ez az erős mikrocirkulációs javítás logikus és komoly alapot nyújthat a
                                teljesítmény növeléséhez. A Humán Regenerátor a kezelés során rengeteg kapilláris és
                                vaszkuláris ereket nyithat meg, amelyek mozgással vagy más erőkkel ilyen mértékben nem
                                nyithatók meg. A nyirok áramlása is jelentősen megnőhet, ami párhuzamosan a vénás
                                keringés javulásával járhat. Ez a hatás gyors oxigéncserét biztosít, amely minden élő
                                szervezet alapja. A Humán Regenerátor a véralvadás ellen működik, miközben
                                optimalizálhatja a vér viszkozitását. A vérlemezkék tapadása jelentősen csökkenhet. A
                                Humán Regenerátor növelheti a sejtek membránjainak áteresztőképességét, így az
                                információ gyorsabban továbbadódik az oxigénben gazdag közegben.
                            </div>
                        </div>
                    </div>

                    <!-- Блок 3 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="collapsed" style="border: 0px; background-color: transparent;"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                <div class="pricing-block-end">
                                    <div class="inner-box">
                                        <div class="content-box me-2" data-aos-delay="100">
                                            <div class="inner">
                                                <h2 class="title"
                                                    style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                                    Hatással van
                                                </h2>
                                                <div class="lead">az immunrendszer erősítésére</div>
                                            </div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="image-box" data-aos-delay="10">
                                            <figure class="image overlay-anim mb-0">
                                                <img class="rounded-3" src="{{ asset('assets/img/effects/3.png') }}"
                                                    alt="Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body mb-2 me-2">
                                A Humán Regenerátor erős hatással van az egész testre, mivel sejtszinten stimulálja az
                                immunrendszert, ami egészséges, erőteljes élethez vezethet. Fontos hangsúlyozni azokat
                                az eszközöket, amelyek optimalizálhatják a vércukorszintre gyakorolt hatást, ami nagyon
                                összetett folyamat.
                            </div>
                        </div>
                    </div>

                    <!-- Блок 4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="collapsed" style="border: 0px; background-color: transparent;"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                aria-expanded="false" aria-controls="collapseFour">
                                <div class="pricing-block-end">
                                    <div class="inner-box">
                                        <div class="content-box me-2" data-aos-delay="100">
                                            <div class="inner">
                                                <h2 class="title"
                                                    style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                                    Hatással van
                                                </h2>
                                                <div class="lead">a sérülésekre</div>
                                            </div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="image-box" data-aos-delay="10">
                                            <figure class="image overlay-anim mb-0">
                                                <img class="rounded-3" src="{{ asset('assets/img/effects/4.png') }}"
                                                    alt="Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body mb-2 me-2">
                                A Humán Regenerátor serkentheti a kötőszövetek és izmok, a lábak és a csontok
                                regenerálódását, ezáltal lehetőséget nyújthat a sportolóknak a legkorábbi visszatérésre.
                                A regenerációs idő lerövidítése napjaink egyik legnagyobb elvárása. Komoly hatással
                                lehet az életminőség javítására.
                            </div>
                        </div>
                    </div>

                    <!-- Блок 5 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="collapsed" style="border: 0px; background-color: transparent;"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                aria-expanded="false" aria-controls="collapseFive">
                                <div class="pricing-block-end">
                                    <div class="inner-box">
                                        <div class="content-box me-2" data-aos-delay="100">
                                            <div class="inner">
                                                <h2 class="title"
                                                    style="color: #008288; font-size: 28px; margin-bottom: 0px;">
                                                    Hatással van
                                                </h2>
                                                <div class="lead">a szorongásra és a stresszre</div>
                                            </div>
                                            <span class="price"></span>
                                        </div>
                                        <div class="image-box" data-aos-delay="10">
                                            <figure class="image overlay-anim mb-0">
                                                <img class="rounded-3" src="{{ asset('assets/img/effects/5.png') }}"
                                                    alt="Image">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body mb-2 me-2">
                                A Humán Regenerátor csökkentheti a stresszt, szorongást, pánikot és depressziót.
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Вторая колонка -->
            <div class="col-12 col-lg-4">
                <div class="d-flex justify-content-center align-items-center" data-aos-delay="10">
                    <div class="inner-box">
                        <figure class="image overlay-anim mb-0"><img height="500px"
                                src="{{ asset('assets/img/effects/main.png') }}" alt="Image"></figure>
                    </div>
                </div>
            </div>

            <!-- Третья колонка -->
            <div class="col-12 col-lg-4">
                <!-- Дополнительные блоки -->
                <div class="" id="accordionExample2">
                    <!-- Блок 6 -->
                    <div class="accordion-item mt-4">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="collapsed"
                                style="border: 0px; background-color: transparent; text-align: left;" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                                aria-controls="collapseSix">
                                <div class="pricing-block-end">
                                    <div class="inner-box">

                                        <div class="image-box" data-aos-delay="10">
                                            <figure class="image overlay-anim mb-0">
                                                <img class="rounded-3" src="{{ asset('assets/img/effects/6.png') }}"
                                                    alt="Image">
                                            </figure>
                                        </div>

                                        <div class="content-box ms-2" data-aos-delay="100">
                                            <div class="inner">
                                                <h2 class="title"
                                                    style="color: #008288; font-size: 28px; margin-bottom: 0px; text-align: start;">
                                                    Hatással van
                                                </h2>
                                                <div class="lead">az öregedésgátlásra</div>
                                            </div>
                                            <span class="price"></span>
                                        </div>

                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body mb-2 ms-2">
                                A Humán Regenerátor növeli a szövetek kollagén termelését, amely az egész életen át
                                csökken, és erősíti a bőr kötőszöveteinek szerkezetét. A Humán Regenerátor rendszeres
                                használata megakadályozhatja a bőr természetes és fiziológiai vízvesztését, amely az
                                öregedés természetes és logikus következménye. Ne feledje, hogy minden nap sok
                                folyadékot kell fogyasztania, ha méregteleníteni akar. Kérjük, a Humán Regenerátor
                                kezelés után is igyon sok folyadékot a kívánt hatás elérése érdekében.
                            </div>
                        </div>
                    </div>

                    <!-- Блок 7 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="collapsed"
                                style="border: 0px; background-color: transparent; text-align: left;" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                                aria-controls="collapseSeven">
                                <div class="pricing-block-end">
                                    <div class="inner-box">
                                        <div class="image-box" data-aos-delay="10">
                                            <figure class="image overlay-anim mb-0">
                                                <img class="rounded-3" src="{{ asset('assets/img/effects/7.png') }}"
                                                    alt="Image">
                                            </figure>
                                        </div>
                                        <div class="content-box ms-2" data-aos-delay="100">
                                            <div class="inner">
                                                <h2 class="title"
                                                    style="color: #008288; font-size: 28px; margin-bottom: 0px;  text-align: start;">
                                                    Hatással van
                                                </h2>
                                                <div class="lead">a kiegyensúlyozott alvásra</div>
                                            </div>
                                            <span class="price"></span>
                                        </div>

                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body mb-2 ms-2">
                                A Humán Regenerátor kezelés hatása alvás közben észlelhető, amely egyszerűbbé és
                                mélyebbé teheti a légzést. Mindezek eredményeként pihentető, energiatudatos ébredés
                                lehet. Mély alvás és friss ébredés után a nap aktívan indulhat. Ez azonban nem meglepő,
                                mivel a jó vérellátás jó alapot nyújt erre. A Humán Regenerátor támogathatja a légzést
                                azáltal, hogy feloldja a váladékot a maxilláris sinusban. Komoly segítséget nyújthat az
                                allergiában is.
                            </div>
                        </div>
                    </div>

                    <!-- Блок 8 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="collapsed"
                                style="border: 0px; background-color: transparent; text-align: left;" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                                aria-controls="collapseEight">
                                <div class="pricing-block-end">
                                    <div class="inner-box">
                                        <div class="image-box" data-aos-delay="10">
                                            <figure class="image overlay-anim mb-0">
                                                <img class="rounded-3" src="{{ asset('assets/img/effects/8.png') }}"
                                                    alt="Image">
                                            </figure>
                                        </div>
                                        <div class="content-box ms-2" data-aos-delay="100">
                                            <div class="inner">
                                                <h2 class="title"
                                                    style="color: #008288; font-size: 28px; margin-bottom: 0px;  text-align: start;">
                                                    Hatással van
                                                </h2>
                                                <div class="lead">a sejtregenerációra</div>
                                            </div>
                                            <span class="price"></span>
                                        </div>

                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body mb-2 ms-2">
                                A Humán Regenerátor csökkentheti a műtét utáni regeneráció idejét. Segítheti a sérült
                                idegsejtek regenerálódását. Az idegek gyógyulása általában lassú folyamat. Általában
                                naponta 1 mm regenerálható. A sérült ideg 10 cm-es regenerálása körülbelül 100 napot
                                vesz igénybe. A nagyobb idegek regenerálódásához általában több év szükséges. Sérülések
                                vagy műtét után a Humán Regenerátor jelentősen lerövidítheti a gyógyulás idejét.
                            </div>
                        </div>
                    </div>

                    <!-- Блок 9 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNine">
                            <button class="collapsed"
                                style="border: 0px; background-color: transparent; text-align: left;" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false"
                                aria-controls="collapseNine">
                                <div class="pricing-block-end">
                                    <div class="inner-box">
                                        <div class="image-box" data-aos-delay="10">
                                            <figure class="image overlay-anim mb-0">
                                                <img class="rounded-3" src="{{ asset('assets/img/effects/12.png') }}"
                                                    alt="Image">
                                            </figure>
                                        </div>
                                        <div class="content-box ms-2" data-aos-delay="100">
                                            <div class="inner">
                                                <h2 class="title"
                                                    style="color: #008288; font-size: 28px; margin-bottom: 0px;  text-align: start;">
                                                    Hatással van
                                                </h2>
                                                <div class="lead">Bioenergetikára (anyagcserére)</div>
                                            </div>
                                            <span class="price"></span>
                                        </div>

                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body mb-2 ms-2">
                                A Humán Regenerátor optimalizálhatja a szervezet anyagcseréjét, pozitív, stimuláló
                                hatása lehet a sejtosztódásra. Ez nagyon fontos, mert ha a folyamat lassú, a régi elemek
                                bomlása meghosszabbodik, azonban a gyors folyamat nem ad elegendő időt a sejtek
                                progressziójához. A hosszú és sikeres kutatások által kifejlesztett Humán Regenerátor
                                technológia biztosíthatja az optimalizált hatás elősegítését az anyagcsere
                                kiválasztásában.
                            </div>
                        </div>
                    </div>

                    <!-- Блок 10 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTen">
                            <button class="collapsed"
                                style="border: 0px; background-color: transparent; text-align: left;" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false"
                                aria-controls="collapseTen">
                                <div class="pricing-block-end">
                                    <div class="inner-box">
                                        <div class="image-box" data-aos-delay="10">
                                            <figure class="image overlay-anim mb-0">
                                                <img class="rounded-3" src="{{ asset('assets/img/effects/11.png') }}"
                                                    alt="Image">
                                            </figure>
                                        </div>
                                        <div class="content-box ms-2" data-aos-delay="100">
                                            <div class="inner">
                                                <h2 class="title"
                                                    style="color: #008288; font-size: 28px; margin-bottom: 0px; text-align: start;">
                                                    Hatással van
                                                </h2>
                                                <div class="lead">Teljesítmény fokozásra</div>
                                            </div>
                                            <span class="price"></span>
                                        </div>

                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body mb-2 ms-2">
                                A Humán Regenerátor javíthatja a mentális, kognitív és fizikai teljesítményt. A Humán
                                Regenerátor növelheti a vér viszkozitását és a keringést a koncentráció és a
                                teljesítmény javítása érdekében. A Humán Regenerátor másodpercek töredéke alatt
                                milliónyi impulzust ad ki, hogy javítsa a test keringését azáltal, hogy kinyitja a kis
                                ereket. Ez az erős mikrocirkulációs javítás logikus és komoly alapot nyújthat a
                                teljesítmény növeléséhez. A Humán Regenerátor kezelés során rengeteg kapilláris és
                                vaszkuláris ereket nyithat meg, amelyek mozgással vagy más erőkkel ilyen mértékben nem
                                nyithatók meg. A nyirok áramlása is jelentősen megnőhet, ami párhuzamosan a vénás
                                keringés javulásával jár. Ez a hatás gyors oxigéncserét biztosít, amely minden élő
                                szervezet alapja. A Humán Regenerátor a véralvadás ellen működik, miközben
                                optimalizálhatja a vér viszkozitását. A vérlemezkék tapadása jelentősen csökkenhet. A
                                Humán Regenerátor növelheti a sejtek membránjainak áteresztőképességét, így az
                                információ gyorsabban továbbadódik az oxigénben gazdag közegben.
                            </div>
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </div>



    {{-- <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Töltsd fel a tested és ébredj új életre
        </h2>
        <h1 class="display-4 fw-bold text-body-emphasis">Humán Regenerátor Sports</h1>
        <div class="col-lg-10 col-xl-10 col-xxl-8 mx-auto">
            <p class="lead mb-4">
                A Humán Regenerátor Sports kezelés <strong>orvosi alapja egy 18 éves kutatássorozat
                eredményeként </strong>megszületett és folyamatosan fejlesztett&nbsp;világszerte egyedülálló
                high-tech eszköz, amely <strong>sejtszinten aktiválja a szervezet öngyógyító folyamatait, ellensúlyozza
                a sejtekben lévő oxidatív stresszt és akkumulátorként tölti fel a sejteket</strong>. A<strong> Humán
                Regenerátor Sports a piacon elérhető legerősebb generátorral büszkélkedhet</strong>. Kimagasló
                generátor teljesítményével túlszárnyalja a Humán Regenerátor Power Jet és Professionel modelleket,
                kifejezetten erős hatást gyakorolva már a vázizmokra is.
            </p>
        </div>
        <div class="overflow-hidden" style="max-height: 40vh;">
            <div class="container px-5">
                <img src="{{ asset('assets/img/humanregensport.png') }}"
                    class="img-fluid border rounded-3 shadow-lg mb-4" width="900" height="500" loading="lazy">
            </div>
        </div>
    </div> --}}

    {{-- <div class="container section-title pt-5" data-aos="fade-up">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
                <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Jótékony hatások</h2>
                <p class=" mb-md-5 pb-md-0 lead">
                    Ismerd meg a Humán Regenerátor Jótékony hatásait
                </p>
            </div>
        </div>
    </div> --}}

    {{-- <section class="bsb-faq-2 py-3 py-md-5 py-xl-8" data-aos="fade-up">
        <div class="container">
            <div class="row gy-5 gy-lg-0" id="accordionExample">
                <div class="col-12 col-lg-4">
                    <div class="row justify-content-xl-end">
                        <div class="col-12 col-xl-12">
                            <div class="accordion accordion-flush">
                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingTwoRow1">
                                        <button class="accordion-button collapsed bg-transparent fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwoRow1" aria-expanded="false"
                                            aria-controls="collapseTwoRow1">
                                            Hatással van a mozgásszervi betegségekre
                                        </button>
                                    </h2>
                                    <div id="collapseTwoRow1" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoRow1" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A Humán Regenerátor a keringés javításával regenerálhatja az ízületi
                                            gyulladt felszíneket és a szinoviális folyadékokat. A keringés javításával
                                            erőteljes gyulladáscsökkentő hatásával kezelheti és gyógyíthatja a
                                            mozgásszervi eredetű betegségeket és az azzal járó fájdalmakat (izületi
                                            kopásos betegségek – arthorosis – csontritkulás – osteoporosis ) Hatása
                                            gyors, pár kezelés is érezhető változást eredményezhet. </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingThreeRow1">
                                        <button class="accordion-button collapsed bg-transparent fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThreeRow1" aria-expanded="false"
                                            aria-controls="collapseThreeRow1">
                                            Sérülésekre gyakorolt hatás
                                        </button>
                                    </h2>
                                    <div id="collapseThreeRow1" class="accordion-collapse collapse"
                                        aria-labelledby="headingThreeRow1" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A Humán Regenerátor serkentheti a kötőszövetek és izmok, a lábak és a
                                            csontok regenerálódását, ezáltal lehetőséget nyújthat a sportolóknak a
                                            legkorábbi visszatérésre. A regenerációs idő lerövidítése napjaink egyik
                                            legnagyobb elvárása. Komoly hatással lehet az életminőség javítására. </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingFourRow1">
                                        <button class="accordion-button collapsed bg-transparent fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFourRow1" aria-expanded="false"
                                            aria-controls="collapseFourRow1">
                                            Kiegyensúlyozott alvás (insomnia)
                                        </button>
                                    </h2>
                                    <div id="collapseFourRow1" class="accordion-collapse collapse"
                                        aria-labelledby="headingFourRow1" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A Humán Regenerátor kezelés hatása alvás közben észlelhető, amely
                                            egyszerűbbé és mélyebbé teheti a légzést. Mindezek eredményeként pihentető,
                                            energiatudatos ébredés lehet. Mély alvás és friss ébredés után a nap aktívan
                                            indulhat. Ez azonban nem meglepő, mivel a jó vérellátás jó alapot nyújt
                                            erre. A Humán Regenerátor támogathatja a légzést azáltal, hogy feloldja a
                                            váladékot a maxilláris sinusban. Komoly segítséget nyújthat az allergiában
                                            is. </div>
                                    </div>
                                </div>

                                <div class="accordion-item shadow-sm">
                                    <h2 class="accordion-header" id="headingFiveRow1">
                                        <button class="accordion-button collapsed bg-transparent fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFiveRow1" aria-expanded="false"
                                            aria-controls="collapseFiveRow1">
                                            Teljesítmény fokozás
                                        </button>
                                    </h2>
                                    <div id="collapseFiveRow1" class="accordion-collapse collapse"
                                        aria-labelledby="headingFiveRow1" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                A Humán Regenerátor javíthatja a mentális, kognitív és fizikai
                                                teljesítményt. A Humán Regenerátor növelheti a vér viszkozitását és a
                                                keringést a koncentráció és a teljesítmény javítása érdekében. A Humán
                                                Regenerátor másodpercek töredéke alatt milliónyi impulzust ad ki, hogy
                                                javítsa a test keringését azáltal, hogy kinyitja a kis ereket. Ez az
                                                erős mikrocirkulációs javítás logikus és komoly alapot nyújthat a
                                                teljesítmény növeléséhez. A Humán Regenerátor kezelés során rengeteg
                                                kapilláris és vaszkuláris ereket nyithat meg, amelyek mozgással vagy más
                                                erőkkel ilyen mértékben nem nyithatók meg. A nyirok áramlása is
                                                jelentősen megnőhet, ami párhuzamosan a vénás keringés javulásával jár.
                                                Ez a hatás gyors oxigéncserét biztosít, amely minden élő szervezet
                                                alapja. A Humán Regenerátor a véralvadás ellen működik, miközben
                                                optimalizálhatja a vér viszkozitását. A vérlemezkék tapadása jelentősen
                                                csökkenhet. A Humán Regenerátor növelheti a sejtek membránjainak
                                                áteresztőképességét, így az információ gyorsabban továbbadódik az
                                                oxigénben gazdag közegben.
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
                            <div class="accordion accordion-flush">
                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingTwoRow2">
                                        <button class="accordion-button collapsed bg-transparent fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwoRow2" aria-expanded="false"
                                            aria-controls="collapseTwoRow2">
                                            Véráramlás serkentése
                                        </button>
                                    </h2>
                                    <div id="collapseTwoRow2" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoRow2" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A Humán Regenerátor növelheti a vér viszkozitását és a keringést a
                                            koncentráció és a teljesítmény javítása érdekében. A Humán Regenerátor
                                            másodpercek töredéke alatt milliónyi impulzust ad ki, hogy javítsa a test
                                            keringését azáltal, hogy kinyitja a kis ereket. Ez az erős mikrocirkulációs
                                            javítás logikus és komoly alapot nyújthat a teljesítmény növeléséhez. A
                                            Humán Regenerátor a kezelés során rengeteg kapilláris és vaszkuláris ereket
                                            nyithat meg, amelyek mozgással vagy más erőkkel ilyen mértékben nem
                                            nyithatók meg. A nyirok áramlása is jelentősen megnőhet, ami párhuzamosan a
                                            vénás keringés javulásával járhat. Ez a hatás gyors oxigéncserét biztosít,
                                            amely minden élő szervezet alapja. A Humán Regenerátor a véralvadás ellen
                                            működik, miközben optimalizálhatja a vér viszkozitását. A vérlemezkék
                                            tapadása jelentősen csökkenhet. A Humán Regenerátor növelheti a sejtek
                                            membránjainak áteresztőképességét, így az információ gyorsabban továbbadódik
                                            az oxigénben gazdag közegben. </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingThreeRow2">
                                        <button class="accordion-button collapsed bg-transparent fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThreeRow2" aria-expanded="false"
                                            aria-controls="collapseThreeRow2">
                                            Hatása van a szorongásra, stresszre, kiégésre
                                        </button>
                                    </h2>
                                    <div id="collapseThreeRow2" class="accordion-collapse collapse"
                                        aria-labelledby="headingThreeRow2" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A Humán Regenerátor csökkentheti a stresszt, szorongást, pánikot és
                                            depressziót.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingFourRow2">
                                        <button class="accordion-button collapsed bg-transparent fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFourRow2" aria-expanded="false"
                                            aria-controls="collapseFourRow2">
                                            Sejtregeneráció (sérülés, műtét)
                                        </button>
                                    </h2>
                                    <div id="collapseFourRow2" class="accordion-collapse collapse"
                                        aria-labelledby="headingFourRow2" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A Humán Regenerátor csökkentheti a műtét utáni regeneráció idejét. Segítheti
                                            a sérült idegsejtek regenerálódását. Az idegek gyógyulása általában lassú
                                            folyamat. Általában naponta 1 mm regenerálható. A sérült ideg 10 cm-es
                                            regenerálása körülbelül 100 napot vesz igénybe. A nagyobb idegek
                                            regenerálódásához általában több év szükséges. Sérülések vagy műtét után a
                                            Humán Regenerátor jelentősen lerövidítheti a gyógyulás idejét.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item shadow-sm">
                                    <h2 class="accordion-header" id="headingFiveRow2">
                                        <button class="accordion-button collapsed bg-transparent fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFiveRow2" aria-expanded="false"
                                            aria-controls="collapseFiveRow2">
                                            Állóképesség és koncentráció növelés
                                        </button>
                                    </h2>
                                    <div id="collapseFiveRow2" class="accordion-collapse collapse"
                                        aria-labelledby="headingFiveRow2" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>
                                                A Humán Regenerátor növelheti a vér viszkozitását és a keringést a
                                                koncentráció és a teljesítmény javítása érdekében. A Humán Regenerátor
                                                másodpercek töredéke alatt milliónyi impulzust ad ki, hogy javítsa a
                                                test keringését azáltal, hogy kinyitja a kis ereket. Ez az erős
                                                mikrocirkulációs javítás logikus és komoly alapot nyújthat a
                                                teljesítmény növeléséhez. A Humán Regenerátor kezelés során rengeteg
                                                kapilláris és vaszkuláris ereket nyit meg, amelyek mozgással vagy más
                                                erőkkel ilyen mértékben nem nyithatók meg. A nyirok áramlása is
                                                jelentősen megnőhet, ami párhuzamosan a vénás keringés javulásával jár.
                                                Ez a hatás gyors oxigéncserét biztosít, amely minden élő szervezet
                                                alapja. Az Humán Regenerátor a véralvadás ellen működik, miközben
                                                optimalizálhatja a vér viszkozitását. A vérlemezkék tapadása jelentősen
                                                csökkenhet. A Humán Regenerátor növelheti a sejtek membránjainak
                                                áteresztőképességét, így az információ gyorsabban továbbadódik az
                                                oxigénben gazdag közegben.
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
                            <div class="accordion accordion-flush">
                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingTwoRow3">
                                        <button class="accordion-button collapsed bg-transparent fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwoRow3" aria-expanded="false"
                                            aria-controls="collapseTwoRow3">
                                            Immunrendszer erősítés
                                        </button>
                                    </h2>
                                    <div id="collapseTwoRow3" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoRow3" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A Humán Regenerátor erős hatással van az egész testre, mivel sejtszinten
                                            stimulálja az immunrendszert, ami egészséges, erőteljes élethez vezethet.
                                            Fontos hangsúlyozni azokat az eszközöket, amelyek optimalizálhatják a
                                            vércukorszintre gyakorolt hatást, ami nagyon összetett folyamat.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingThreeRow3">
                                        <button class="accordion-button collapsed bg-transparent fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThreeRow3" aria-expanded="false"
                                            aria-controls="collapseThreeRow3">
                                            Öregedésgátló hatás (Anti-aging)
                                        </button>
                                    </h2>
                                    <div id="collapseThreeRow3" class="accordion-collapse collapse"
                                        aria-labelledby="headingThreeRow3" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A Humán Regenerátor növeli a szövetek kollagén termelését, amely az egész
                                            életen át csökken, és erősíti a bőr kötőszöveteinek szerkezetét. A Humán
                                            Regenerátor rendszeres használata megakadályozhatja a bőr természetes és
                                            fiziológiai vízvesztését, amely az öregedés természetes és logikus
                                            következménye. Ne feledje, hogy minden nap sok folyadékot kell fogyasztania,
                                            ha méregteleníteni akar. Kérjük, a Humán Regenerátor kezelés után is igyon
                                            sok folyadékot a kívánt hatás elérése érdekében.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingFourRow3">
                                        <button class="accordion-button collapsed bg-transparent fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFourRow3" aria-expanded="false"
                                            aria-controls="collapseFourRow3">
                                            Bioenergetika (anyagcsere)
                                        </button>
                                    </h2>
                                    <div id="collapseFourRow3" class="accordion-collapse collapse"
                                        aria-labelledby="headingFourRow3" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            A Humán Regenerátor optimalizálhatja a szervezet anyagcseréjét, pozitív,
                                            stimuláló hatása lehet a sejtosztódásra. Ez nagyon fontos, mert ha a
                                            folyamat lassú, a régi elemek bomlása meghosszabbodik, azonban a gyors
                                            folyamat nem ad elegendő időt a sejtek progressziójához. A hosszú és sikeres
                                            kutatások által kifejlesztett Humán Regenerátor technológia biztosíthatja az
                                            optimalizált hatás elősegítését az anyagcsere kiválasztásában.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <div class="container section-title pt-5" data-aos="fade-up">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
                <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Gyakori kérdések</h2>
                <p class=" mb-md-5 pb-md-0 lead">
                    Ismerd meg a Humán Regenerátor Jótékony hatásait
                </p>
            </div>
        </div>
    </div>

    <section class="bsb-faq-2 py-3 py-md-5 py-xl-8" data-aos="fade-up">
        <div class="container">
            <div class="row gy-5 gy-lg-0" id="accordionHelp">
                <div class="col-12 col-lg-12">
                    <div class="row justify-content-xl-end">
                        <div class="col-12 col-xl-12">
                            <div class="accordion accordion-flush">
                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingTwoHelp">
                                        <button class="accordion-button collapsed bg-transparent fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwoHelp" aria-expanded="false"
                                            aria-controls="collapseTwoHelp">
                                            <i class="fas fa-question-circle"
                                                style="color: #006469; margin-right: 14px;"></i>
                                            Hogyan működik pontosan?
                                        </button>
                                    </h2>
                                    <div id="collapseTwoHelp" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoHelp">
                                        <div class="accordion-body">
                                            Az oxidatív stressz felelős az öregedésért és a vitalitás elvesztéséért.
                                            Számos ismert betegség okozója is.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingThreeHelp">
                                        <button class="accordion-button collapsed bg-transparent fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThreeHelp" aria-expanded="false"
                                            aria-controls="collapseThreeHelp">
                                            <i class="fas fa-question-circle"
                                                style="color: #006469; margin-right: 14px;"></i>
                                            Van a kezelésnek mellékhatása?
                                        </button>
                                    </h2>
                                    <div id="collapseThreeHelp" class="accordion-collapse collapse"
                                        aria-labelledby="headingThreeHelp">
                                        <div class="accordion-body">
                                            4 év tesztelés és sok ezer alkalmazás alatt semmilyen mellékhatás nem
                                            jelentkezett.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingFourHelp">
                                        <button class="accordion-button collapsed bg-transparent fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFourHelp" aria-expanded="false"
                                            aria-controls="collapseFourHelp">
                                            <i class="fas fa-question-circle"
                                                style="color: #006469; margin-right: 14px;"></i>
                                            Mi a különbség a zöld és a piros gép között?
                                        </button>
                                    </h2>
                                    <div id="collapseFourHelp" class="accordion-collapse collapse"
                                        aria-labelledby="headingFourHelp">
                                        <div class="accordion-body">
                                            Mindkét gép ugyanazon a technológián alapszik, azonban a piros SPORTS gépben
                                            erősebb a generátor, ezáltal a mélyizmokra is kifejtheti a hatását.
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-4 shadow-sm">
                                    <h2 class="accordion-header" id="headingFiveHelp">
                                        <button class="accordion-button collapsed bg-transparent fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFiveHelp" aria-expanded="false"
                                            aria-controls="collapseFiveHelp">
                                            <i class="fas fa-question-circle"
                                                style="color: #006469; margin-right: 14px;"></i>
                                            Humán Regenerátor egy orvosi eszköz?
                                        </button>
                                    </h2>
                                    <div id="collapseFiveHelp" class="accordion-collapse collapse"
                                        aria-labelledby="headingFiveHelp">
                                        <div class="accordion-body">
                                            <div>Nem, a Humán Regenerátor egy wellness eszköz.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item shadow-sm">
                                    <h2 class="accordion-header" id="headingSixHelp">
                                        <button class="accordion-button collapsed bg-transparent fw-bold"
                                            type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSixHelp" aria-expanded="false"
                                            aria-controls="collapseSixHelp">
                                            <i class="fas fa-question-circle"
                                                style="color: #006469; margin-right: 14px;"></i>
                                            Milyen esetekben nem használható a Humán Regenerátor?
                                        </button>
                                    </h2>
                                    <div id="collapseSixHelp" class="accordion-collapse collapse"
                                        aria-labelledby="headingSixHelp">
                                        <div class="accordion-body">
                                            <div>Várandós kismamák, szoptató anyukák, 10 év alatti gyermekek, testhez
                                                csatlakoztatott elektromос készülékkel rendelkező személyek nem
                                                használhatják!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.modal')

    @include('layouts.footer')

</body>

</html>
