<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('Hitvallásunk - humanregen.hu'))</title>
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
                    <h1><span>Hitvallásunk</span></h1>
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
        <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Hitvallásunk</h2>
        <div class="col-lg-10 mx-auto">
            <p class="lead mb-4">Vállalkozásunk hitvallása:</p>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="col-12 col-lg-9">
            <p class="lead" style="text-indent: 15px;">
                 Vállalkozásunk új szolgáltatásával azt valljuk, hogy a sejtregeneráció az egészségügyi
                problémákkal küzdő emberek számára kiemelkedő fontosságú, legyenek azok kisebb vagy súlyosabb
                gondok. A test regeneratív képességeinek kiaknázása az általános jólét és a hosszú élettartam
                elérésének sarokköve.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A sejtregeneráció nem csak az egészségügyi problémákkal küzdő emberek számára
                kiemelkedően fontos, hanem kulcsfontosságú szerepet játszik a sportolók életében is egyaránt,
                különösen a rehabilitáció és a gyógyulás során. A sportolók számára, akik a csúcsteljesítmény elérésére
                törekszenek vagy a sérüléseikből gyorsabban szeretnének felgyógyulni, a sejtek önmaguktól történő
                regenerálódási képességének kihasználása alapvető fontosságú. Az emberi test ezen regeneratív
                potenciáljának kinyitásával és optimalizálásával a sportolók nemcsak gyorsabban gyógyulhatnak,
                hanem növelhetik fizikai képességeiket is, lehetővé téve számukra, hogy felfedezzék határaikat és a
                legjobbak legyenek.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Vállalkozásunk lehetőséget ad nem csak az egészségügyi problémák orvoslását keresők számára,
                hanem a vitalitást, a tartósságot és a hosszú életet keresők számára is.
            </p>
            <p class="lead mb-5" style="text-indent: 15px;">
                Célunk egy modern technológia bemutatása, ahol szolgáltatás keretében kínálunk lehetőséget az
                általános egészség, rehabilitáció, regeneráció, a hosszú élet és a vitalitás előmozdítására. Ez
                összefoglalja az elkötelezettségünket az egészség legújabb vívmányának felfedezéséhez, amely
                elvezet bennünket azon az úton, hogy kitágítsuk a lehetőségek határait az egészség és a hosszú élet
                terén.
            </p>
        </div>
    </div>
    





    @include('layouts.modal')
    
    @include('layouts.footer')

</body>

</html>
