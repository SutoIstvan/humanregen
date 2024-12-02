<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('Küldetésünk - humanregen.hu'))</title>
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
                    <h1><span>Küldetésünk</span></h1>
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
        <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Küldetésünk</h2>
        <div class="col-lg-10 mx-auto">
            {{-- <p class="lead mb-4">Vállalkozásunk hitvallása:</p> --}}
        </div>
    </div>
    
    <div class="container d-flex justify-content-center">
        <div class="col-12 col-lg-9">
            <p class="lead" style="text-indent: 15px;">
                A 1992-ben alapított <strong>Kópis és Társa Kft</strong> útja 2024-ben egy új vízióval kezdődött - az embereket
                szeretnénk olyan életre inspirálni, ami által egészségesebb hosszabb életet élhetnek.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A ReGEN szolgáltatásunk célja az emberi sejtregeneráció jótékony hatásait alkalmazni az
                életminőség javítására - és ebben elkötelezettek vagyunk. Ez egy olyan innovatív megoldás, amely
                elősegíti a test természetes regenerációs képességeinek fejlesztését az emberi vitalitás és hosszú
                élettartam javítása érdekében - ez képezi szolgáltassunk lényegét.
            </p>
        </div>
    </div>

    <div class="px-4 pt-5 my-1 text-center ">
        <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Miért a Humán Regenerátor Sports?</h2>
        <div class="col-lg-10 mx-auto">
            {{-- <p class="lead mb-4">Vállalkozásunk hitvallása:</p> --}}
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="col-12 col-lg-9">
            <p class="lead" style="text-indent: 15px;">
                A <strong>Humán Regenerátor Sports</strong> -ot a kiválóság, a transzparencia és az eredmények iránti
                elkötelezettsége különbözteti meg más lehetőségektől. Ezzel olyan szolgáltatást adunk vendégeinknek,
                ami átlag feletti, és az egyik legújabb tudományos felfedezés és technológia alkalmazásával valódi
                regenerációs megoldást nyújt, és amely valóban változást hozhat életükben.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Tudjuk, hogy mindenki vitalitás és hosszú élettartam felé vezető útja egyedi, éppen ezért a
                megoldást is személyre szabjuk az egyéni igényekhez és célokhoz mérten. Az elkötelezettségünk nem
                csak termék és szolgáltatás nyújtására irányul, hanem arra is, hogy bizalmas partner legyünk az
                egészségesebb, élettelibb és hosszabb élet felé vezető úton.
            </p>
        </div>
    </div>

    <div class="px-4 pt-5 my-1 text-center ">
        <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Csatlakozz hozzánk az úton!</h2>

    </div>

    <div class="container d-flex justify-content-center">
        <div class="col-12 col-lg-9">
            <p class="lead mb-5" style="text-indent: 15px;">
                Vállalkozásunknál Te is lehetőséget kapsz, hogy csatlakozz hozzánk, és megismerd az új
                szolgáltatásunkat! Engedd meg, hogy társaid lehessünk az egészségesebb, és hosszabb élet felé vezető
                utadon! A cél a vitalitás és egy egészségben telt hosszabb élet!
            </p>
        </div>
    </div>

    @include('layouts.modal')
    
    @include('layouts.footer')

</body>

</html>
