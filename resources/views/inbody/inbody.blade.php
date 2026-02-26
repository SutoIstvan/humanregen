<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('InBody 970s testösszetétel elemző - humanregen.hu'))</title>
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
                    <h1><span>InBody 970S</span></h1>
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
        <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">
            Megmutatjuk a Láthatatlant
        </h2>
        <div class="col-lg-10 mx-auto">
            <p class="lead mb-4" style="text-indent: 15px; font-weight: 500;">
                A tökéletes testösszetétel ─ elemző: az INBODY 970S
            </p>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="col-12 col-lg-9">




            <p class="lead mb-5 d-flex justify-content-center" style="text-indent: 15px; font-weight: 400;">
                <strong>
                    Bevezetés
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px; text-align: justify;" >
                <strong>
                    A Kópis és Társa Kft. üzembe helyezettegy orvosi minőségű testösszetétel
                    elemző eszközt. Ebben a feljegyzésben bemutatjuk, hogy miért jó ez a Kópis és
                    Társa Kft ügyfeleinek.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px; text-align: justify;">
                <strong>
                    Az INBODY 970S nem csupán egy újabb eszköz, hanem egy nagyon modern,
                    klinikákon is használt fejlett kutatási eszköz. Pontos, átfogó és hasznos
                    adatokat biztosít számunkra időtakarékos módon. Ez nem csak egy mérleg,
                    hanem segít nyomon követni a számos nagyon fontos mutatatót, az egészségügy
                    és a regenerálódást területén.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px; text-align: justify;">
                <strong>
                    A Kópis és Társa Kft.- nél mindig keressük a módját, hogy a lehető
                    legmagasabb szintű szolgáltatást nyújtsunk. Az INBODY 970S-sel személyre
                    szabottabb, egészség javító, prevenciós lehetőségeket, jobb fejlődéskövetési
                    adatokat tudunk biztosítani minden egyes személy számára, aki igénybe veszi
                    szolgáltatásunkat.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px; font-weight: 400;">
                <strong>
                    JOGI NYILATKOZAT
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px; text-align: justify;">
                <strong>
                    Ez a cikk kizárólag tájékoztató célokat szolgál, és nem helyettesíti az orvosi
                    tanácsot, diagnózist vagy kezelést. Mindig konzultáljon szakképzett
                    egészségügyi szolgáltatóval vagy okleveles fitnesz szakemberrel, mielőtt
                    bármilyen új programot elkezdene, különösen, ha bármilyen meglévő
                    egészségügyi problémája vagy sérülése van. Az egyéni eredmények eltérőek
                    lehetnek, és az edzés mennyiségét, a gyakorlatok kiválasztását és az intenzitását
                    a személyes regenerálódási képessége, a tapasztalati szintje és a céljai alapján
                    kell módosítani.
                </strong>
            </p>

        </div>
    </div>




    @include('layouts.modal')

    @include('layouts.footer')

</body>

</html>
