<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('Cold Atmospheric Plasma - humanregen.hu'))</title>
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
        <img src="{{ asset('assets/img/hero-bg-8.jpg') }}" alt="" class="hero-bg">

        <div class="container">
            <div class="row gy-4 text-center">
                <div class="col-lg-12  d-flex flex-column justify-content-center" data-aos="fade-in">
                    <h1><span>Cold Atmospheric Plasma (CAP)</span></h1>
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


    <div class="px-4 pt-5 my-1 text-center ">
        <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Cold Atmospheric Plasma</h2>
        <div class="col-lg-10 mx-auto">
            <p class="lead mb-4">egy erőteljes eszköz a modern orvoslás számára</p>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="col-12 col-lg-9">
            <p class="lead mb-5" style="text-indent: 15px;">
                A hideg plazmának jelentős potenciálja van a modern klinikai gyakorlatban való széles körű
                alkalmazásra. Az eddig elvégzett elemzések arra utalnak, hogy a hideg plazma alkalmazása előnyös
                volt számos orvosi területen, anélkül, hogy jelentős negatív hatást gyakorolt volna az egészséges
                sejtekre.
            </p>
            <img src="{{ asset('assets/img/plasma.jpg') }}" class="img-fluid rounded-3" alt="">
            <p class="lead mt-5" style="text-indent: 15px;">
                A hideg atmoszférikus plazma alkalmazása klinikai tanulmányokban főként a krónikus sebek
                kezelésére korlátozódik, de most már számos orvosi területre történő alkalmazás a sok elemzés célja.
                Ezért valószínű, hogy alkalmazási spektruma a jövőben bővülni fog. A hideg atmoszférikus plazma
                képes a mikrobás terhelés csökkentésére anélkül, hogy ismert volna jelentős negatív hatás az
                egészséges szövetekre, és ez növelheti annak lehetséges alkalmazhatóságát bármely mikrobiális
                fertőzés helyszínén. Továbbá kimutatták, hogy daganatellenes hatással is rendelkezik. Emellett sejtek
                proliferációját serkenti, ideértve az őssejteket és más tenyésztett sejteket is, és a rendkívül növelt
                nitrogén-monoxid szinteknek nagyon fontos hatása van ebben a szaporodásban.
            </p>
            <p class="lead mb-5" style="text-indent: 15px;">
                A hideg atmoszférikus plazma használata előnyös hatással lehet az immunterápiára a rákbetegek esetében.
                Végül lehetséges, hogy a plazmaberendezések használata nem marad korlátozva a felszíni
                szerkezetekre, mivel a jelenlegi erőfeszítések arra irányulnak, hogy kellően kisméretű mikroplazma
                berendezéseket fejlesszenek ki, ami nagy valószínűséggel vezet az alkalmazásukhoz a bőr alatt és a
                belső szerkezetekben is. Ez a tanulmány összefoglalja a rendelkezésre álló irodalmat a hideg plazma
                hatásmeghatározó mechanizmusairól, és annak jelenlegi in vivo és in vitro alkalmazásairól,
                elsősorban a regeneratív és fogászati orvoslás, valamint az onkológia területén.
            </p>
        </div>
    </div>





    @include('layouts.modal')
    
    @include('layouts.footer')

</body>

</html>
