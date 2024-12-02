<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('Galéria - humanregen.hu'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>


    <style>
        .hero {
            width: 100%;
            min-height: 20vh !important;
            position: relative;
            padding: 80px 0 80px 0;
            display: flex;
            align-items: center;
        }

        .box a {
            display: block;
            width: 100px;
            height: 100px;
            /* height: auto; */
            position: relative;
            overflow: hidden;
        }

        .box .inner {
            position: relative;
            padding: 10px;
        }

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

        /* .grid-item { width: 200px; }
        .grid-item--width2 { width: 400px; } */

/* Сетка */
.grid {
    margin: 0 auto; /* Центрирование сетки */
    display: flex; /* Для корректного отображения до инициализации Masonry */
    flex-wrap: wrap; /* Перенос элементов на следующую строку */
    gap: 15px; /* Расстояние между элементами */
    padding: 0 15px; /* Добавляем отступы слева и справа */
}

.grid-item {
    padding: 10px;
    width: calc((100% - 60px) / 3); /* Три элемента в строке с учетом gap и padding */
    /* margin-bottom: 15px; Отступ между строками */
    box-sizing: border-box; /* Учет отступов и границ в размере элемента */
}

.grid-item img {
    display: block;
    width: 100%; /* Подгонка под размер элемента */
    height: auto; /* Сохранение пропорций изображения */
    border-radius: 8px; /* Закругленные углы */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Легкая тень */
}
@media (max-width: 768px) {
    .grid-item {
        width: calc((100% - 45px) / 2); /* Два элемента в ряд */
    }
}

@media (max-width: 480px) {
    .grid-item {
        width: 100%; /* Один элемент в ряд */
    }
}

    </style>
</head>

<body>

    @include('layouts.nav')

    <section id="hero" class="hero section dark-background">
        <img src="{{ asset('assets/img/hero-bg-8.jpg') }}" alt="" class="hero-bg">

        <div class="container">
            <div class="row gy-4 text-center">
                <div class="col-lg-12  d-flex flex-column justify-content-center" data-aos="fade-in">
                    <h1><span>Galéria</span></h1>
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

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section pb-5" style=" background-color: #f9f6f1;">
        <div class="container section-title" data-aos="fade-up">
            <div class="row d-flex justify-content-center" style="justify-content: center !important;">
                <div class="col-md-10 col-xl-8 text-center mt-5">
                    <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Fotóalbum és Galéria</h2>
                    <p class="mb-4 pb-2 mb-md-5 pb-md-0 lead">
                        Szalonunk pillanatai, ahol az egészségével törődünk.
                    </p>
                </div>
            </div>
        </div>


        {{-- <ul class="box-container three-cols">
            <li class="box show" style="transition-delay: 0s;">
                <div class="inner">
                    <a href="{{ asset('assets/img/gallery/20241106_132427.jpg') }}" class="glightbox">
                        <img src="{{ asset('assets/img/gallery/20241106_132427.jpg') }}" alt="image">
                    </a>
                </div>
            </li>
            <li class="box show" style="transition-delay: 0.15s;">
                <div class="inner">
                    <a href="{{ asset('assets/img/gallery/20241106_132427.jpg') }}" class="glightbox">
                        <img src="{{ asset('assets/img/gallery/20241106_132427.jpg') }}" alt="image">
                    </a>
                </div>
            </li>
            <li class="box show" style="transition-delay: 0.3s;">
                <div class="inner">
                    <a href="{{ asset('assets/img/gallery/20241106_132427.jpg') }}" class="glightbox">
                        <img src="{{ asset('assets/img/gallery/20241106_132427.jpg') }}" alt="image">
                    </a>
                </div>
            </li>
            <li class="box show" style="transition-delay: 0.45s;">
                <div class="inner">
                    <a href="{{ asset('assets/img/gallery/20241106_132427.jpg') }}" class="glightbox">
                        <img src="{{ asset('assets/img/gallery/20241106_132427.jpg') }}" alt="image">
                    </a>
                </div>
            </li>
            <li class="box show" style="transition-delay: 0.6s;">
                <div class="inner">
                    <a href="{{ asset('assets/img/gallery/20241106_132427.jpg') }}" class="glightbox">
                        <img src="{{ asset('assets/img/gallery/20241106_132427.jpg') }}" alt="image">
                    </a>
                </div>
            </li>
            <li class="box show" style="transition-delay: 0.75s;">
                <div class="inner">
                    <a href="{{ asset('assets/img/gallery/20241106_132427.jpg') }}" class="glightbox">
                        <img src="{{ asset('assets/img/gallery/20241106_132427.jpg') }}" alt="image">
                    </a>
                </div>
            </li>
        </ul> --}}


        {{-- <div class="container" data-aos="fade-up" data-aos-delay="100">
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
        </div> --}}


        <!-- Gallery -->
        <div class="container section-title" data-aos="fade-up">
            <div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-item" }'>
                @foreach($images as $image)
                    <div class="grid-item">
                        <a href="{{ $image['src'] }}" class="glightbox" data-gallery="gallery">
                            <img 
                                src="{{ $image['src'] }}" 
                                alt="{{ $image['alt'] ?? 'Image' }}" 
                                class="w-100 shadow-1-strong rounded"
                            />
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    
        <!-- Gallery -->
    </section>




    @include('layouts.modal')

    @include('layouts.footer')


    <script>
        /**
         * Initiate glightbox
         */
        const glightbox = GLightbox({
            selector: '.glightbox'
        });


        $('.grid').masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: 200
        });

        /**
         * Hirlevel feliratkozas
         */
        // document.addEventListener('DOMContentLoaded', function() {
        //     @if (session('success') || $errors->any())
        //         var myModal = new bootstrap.Modal(document.getElementById('messageModal'), {
        //             keyboard: false
        //         });
        //         myModal.show();
        //     @endif
        // });
    </script>

</body>

</html>
