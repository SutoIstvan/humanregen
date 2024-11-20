<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .img-fluid-img {
            max-width: 100%;
            height: 133px;
            object-fit: cover;
        }
        @media (max-width: 768px) {
            .img-fluid-img {
                height: 100% !important;
            }
        }
        body.modal-open {
            padding-right: 0px !important;
        }
    </style>
</head>

<body>

    @include('layouts.nav')

    <section id="hero" class="hero section dark-background">
        <img src="{{ asset('assets/img/hero-bg-8.jpg') }}" alt="" class="hero-bg">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-lg-last hero-img mb-4" data-aos="zoom-out" data-aos-delay="100">
                    <img src="{{ asset('assets/img/main.png') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6  d-flex flex-column justify-content-center" data-aos="fade-in">
                    <h1>Humán <span>Regenerátor</span> Sport Szalon</h1>
                    <p>Sejtszinten aktiválja a szervezet öngyógyító folyamatait, ellensúlyozza a sejtekben lévő oxidatív
                        stresszt
                        és akkumulátorként tölti fel a sejteket.</p>
                    <div class="d-flex">
                        <a href="{{ route('appointments') }}" class="btn-get-started">Időpontot foglalok</a>
                        <a href="{{ route('effects') }}" class="btn-watch-video d-flex align-items-center">
                            <i class="bi bi-play-circle"></i><span>További információk</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
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
    </svg> --}}

    </section>

    <div style=" background-color: #f9f6f1;">
        <div class="container col-xxl-10 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-lg-6 col-xxl-7">
                    <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px; " data-aos="fade-up"
                        data-aos-delay="1">Miért a Humán Regenerátor Sports?</h2>
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3" data-aos="fade-up" data-aos-delay="50">A
                        Humán Regenerátor Sports -ot</h1>
                    <p class="lead" data-aos="fade-up" data-aos-delay="100">
                        A kiválóság, A transzparencia és az eredmények iránti
                        elkötelezettsége különbözteti meg. <br> Mi meghaladjuk az átlagot, és az egyik legújabb
                        tudományos
                        felfedezést
                        és technológiát alkalmazzuk annak érdekében, hogy olyan regenerációs megoldást nyújtsunk,
                        amelyek
                        valóban változást hozhatnak.
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start" data-aos="fade-up"
                        data-aos-delay="130">
                        <a href="{{ route('effects') }}" class="btn btn-primary btn-lg px-4 me-md-2"
                            style="background-color: #c2a74e; border-color: #c2a74e;">
                            További információ
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-6 col-xxl-5" data-aos="zoom-in" data-aos-delay="10">
                    <img src="{{ asset('assets/img/face.png') }}" class="d-block mx-lg-auto img-fluid"
                        loading="lazy">
                </div>
            </div>
        </div>
    </div>

    <div style=" background-color: #f9f6f1;" class="">
        <div class="container pb-5">

            <div class="container section-title" data-aos="fade-up">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-10 col-xl-8 text-center">
                        <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Jótékony hatások</h2>
                        <p class="mb-4 pb-2 mb-md-5 pb-md-0 lead">
                            Ismerd meg a Humán Regenerátor Jótékony hatásait
                        </p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center ">
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
            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section pb-5" style=" background-color: #f9f6f1;">
        <div class="container section-title" data-aos="fade-up">
            <div class="row d-flex justify-content-center" style="justify-content: center !important;">
                <div class="col-md-10 col-xl-8 text-center">
                    <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Fotóalbum és Galéria</h2>
                    <p class="mb-4 pb-2 mb-md-5 pb-md-0 lead">
                        Szalonunk pillanatai, ahol az egészségével törődünk.
                    </p>
                </div>
            </div>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-1 d-flex justify-content-center">
                <div class="col-lg-2 col-md-4 col-12">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/img/gallery/20241106_132427.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('assets/img/gallery/20241106_132427.jpg') }}" alt=""
                                class="img-fluid-img">
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-none d-md-block" style="height: 133px; width: 77px;">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/img/gallery/20241106_130708.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('assets/img/gallery/20241106_130708.jpg') }}" alt=""
                                class="img-fluid-img">
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/img/gallery/20241106_132309.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('assets/img/gallery/20241106_132309.jpg') }}" alt=""
                                class="img-fluid-img">
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-none d-md-block" style="height: 133px; width: 77px;">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/img/gallery/20241106_132428.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('assets/img/gallery/20241106_132428.jpg') }}" alt=""
                                class="img-fluid-img">
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/img/gallery/20241106_132320.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('assets/img/gallery/20241106_132320.jpg') }}" alt=""
                                class="img-fluid-img">
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4 d-none d-md-block">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/img/gallery/20241106_132352.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('assets/img/gallery/20241106_132352.jpg') }}" alt=""
                                class="img-fluid-img">
                        </a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/img/gallery/20241106_132403.jpg') }}" class="glightbox"
                            data-gallery="images-gallery">
                            <img src="{{ asset('assets/img/gallery/20241106_132403.jpg') }}" alt=""
                                class="img-fluid-img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-5 pb-5">
            <div class="row d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-10 col-xl-8 text-center">
                    <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Visszajelzés ügyfeleinktól
                    </h2>
                    <p class="mb-4 pb-2 mb-md-5 pb-md-0 lead">
                        A kedves ügyfeleink értékelései inspirálnak minket.<br> A ti szavaitok a mi motivációnk!
                    </p>
                </div>
            </div>

            <div class="row text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-md-4 mb-5 mb-md-0">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="{{ asset('assets/img/testimonials/testimonials-4.jpg') }}"
                            class="rounded-circle shadow-1-strong" width="150" height="150" />
                    </div>
                    <h5 class="mb-3">Farkas Balázs</h5>
                    <p class="px-xl-3 lead">
                        <i class="fas fa-quote-left pe-2"></i>
                        A Humán Regenerátor Sports kezelést próbáltam ki a szalonban, és lenyűgözött az eredmény! Már az
                        első alkalom után éreztem a különbséget, különösen az izmaim felfrissültek és a regeneráció
                        sokkal gyorsabb volt. Igazi csúcstechnológia, amit csak itt találtam meg!
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
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                            class="rounded-circle shadow-1-strong" width="150" height="150" />
                    </div>
                    <h5 class="mb-3">Varga Edina</h5>
                    <p class="px-xl-3 lead">
                        <i class="fas fa-quote-left pe-2"></i>
                        Egyszerűen fantasztikus, hogy egy ilyen high-tech készülék elérhető Magyarországon! A kezelés
                        alatt teljesen feltöltődtem, a sejtjeimben mintha újra életre keltek volna az energiák. Azóta
                        frissebb és fittebb vagyok minden sportolás után. Köszönöm, HumanRegen!
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
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                            class="rounded-circle shadow-1-strong" width="150" height="150" />
                    </div>
                    <h5 class="mb-3">Kovács László</h5>
                    <p class="px-xl-3 lead">
                        <i class="fas fa-quote-left pe-2"></i>
                        Már több regenerációs technológiát is kipróbáltam, de a Humán Regenerátor Sports egyedülálló! A
                        szalonban nyugodt környezetben, profi szakemberekkel dolgozhatok együtt, és a gép ereje valóban
                        lenyűgöző. Sportolóként is maximálisan meg vagyok elégedve az eredménnyel.
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


    @if (session('modalsuccess') || $errors->any())
        <!-- Modal -->
        <div class="modal fade show" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel"
            aria-hidden="true" style="display: block;">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="messageModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            @if (session('modalsuccess'))
                                {{ session('modalsuccess') }}
                            @elseif ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            @endif
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bezárás</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @include('layouts.footer')

    <script>
        /**
         * Initiate glightbox
         */
        const glightbox = GLightbox({
            selector: '.glightbox'
        });

        /**
         * Hirlevel feliratkozas
         */
        document.addEventListener('DOMContentLoaded', function() {
            @if (session('success') || $errors->any())
                var myModal = new bootstrap.Modal(document.getElementById('messageModal'), {
                    keyboard: false
                });
                myModal.show();
            @endif
        });
    </script>
</body>

</html>
