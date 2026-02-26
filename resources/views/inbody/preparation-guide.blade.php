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
                    <h1><span>Felkészülési útmutató</span></h1>
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
            Felkészülési útmutató
        </h2>
        <div class="col-lg-10 mx-auto">
            <p class="lead mb-4" style="text-indent: 15px; font-weight: 500;">
                A tökéletes testösszetétel ─ elemző: az INBODY 970S
            </p>
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="col-12 col-lg-9">






            <p class="lead mb-5" style="text-indent: 15px; text-align: justify;">
                <strong style="text-align: justify;">
                    Az <strong>InBody mérésnek</strong> (970S vagy bármely más típus) vannak <strong>kötelező és ajánlott előfeltételei</strong>, hogy az
                    eredmények pontosak és összehasonlíthatóak legyenek. Ezek nem orvosi jellegű vizsgálati feltételek,
                    hanem <strong>standardizált mérési protokollok</strong>. Az alábbi lista a <strong>hivatalos InBody ajánlásokon</strong> alapul.
                </strong>
            </p>

            <p class="lead mb-5 d-flex justify-content-center" style="text-indent: 15px; font-weight: 400;">
                <strong>
                    InBody mérés előfeltételei / előzményei
                </strong>
            </p>

            <p class="lead mb-0" style="text-indent: 15px;">
                <strong>
                    <strong>1. Éhgyomor / étkezés</strong>
                </strong>
            </p>

            <p>
                <ul>
                    <li class="lead mb-5 ms-4">
                        <strong>
                            A mérés előtt 2–3 órával ne egyél és ne igyál nagy mennyiséget.
                            Az étel- és folyadékbevitel megváltoztatja a test vízeloszlását → az eredmény torzulhat.
                        </strong>
                    </li>
                </ul>
            </p>

            <p class="lead mb-0" style="text-indent: 15px;">
                <strong>
                    <strong>2. Vizelet- és székelés</strong>
                </strong>
            </p>

            <p>
                <ul>
                    <li class="lead mb-5 ms-4">
                        <strong>
                            Lehetőleg közvetlenül mérés előtt menj wc-re, hogy a hólyag és a belek tartalma ne befolyásolja a súlyt
                            és a hasi impedanciaértéket.
                        </strong>
                    </li>
                </ul>
            </p>




            <p class="lead mb-0" style="text-indent: 15px;">
                <strong>
                    <strong>3. Fizikai aktivitás</strong>
                </strong>
            </p>

            <p>
                <ul>
                    <li class="lead ms-4">
                        <strong>
                            A mérés előtt 12 órán át ne végezz intenzív fizikai aktivitást (edzés, futás, súlyzós edzés).
                        </strong>
                    </li>
                </ul>
            </p>
            <p>
                <ul>
                    <li class="lead mb-5 ms-4">
                        <strong>
                            Ennek oka: edzés után a test vízeloszlása, izomglikogén és elektrolitállapot nem stabil, így a mérés torz
                            lehet.
                        </strong>
                    </li>
                </ul>
            </p>

            <p class="lead mb-0" style="text-indent: 15px;">
                <strong>
                    <strong>4. Alkohol</strong>
                </strong>
            </p>

            <p>
                <ul>
                    <li class="lead mb-5 ms-4">
                        <strong>
                            24–48 órával mérés előtt ne fogyassz alkoholt.<br>
                            Az alkohol vízháztartást és sejtközti folyadékot jelentősen megváltoztat → a mért testvíz normalizálásához
                            több nap is kellhet.
                        </strong>
                    </li>
                </ul>
            </p>

            <p class="lead mb-0" style="text-indent: 15px;">
                <strong>
                    <strong>5. Koffein és vízhajtók</strong>
                </strong>
            </p>

            <p>
                <ul>
                    <li class="lead ms-4">
                        <strong>
                            A mérés előtt 4–6 órával kerüld (kávé, energiaital, koffein tabletta).
                        </strong>
                    </li>
                </ul>
            </p>

            <p>
                <ul>
                    <li class="lead mb-5 ms-4">
                        <strong>
                            Koffein és vízhajtók csökkentik a test víztartalmát, ami téves zsír%-ot eredményezhet.
                        </strong>
                    </li>
                </ul>
            </p>

            <p class="lead mb-0" style="text-indent: 15px;">
                <strong>
                    <strong>6. Hidratáltság</strong>
                </strong>
            </p>

            <p>
                <ul>
                    <li class="lead mb-5 ms-4">
                        <strong>
                            A mérés napján normál mennyiségű vizet igyál, de közvetlenül előtte ne igyál nagy mennyiséget.
                            A túl kevés víz → zsıŕ magasabbnak tűnik, a túl sok → vıź magas és izmok alacsonynak tűnnek.
                        </strong>
                    </li>
                </ul>
            </p>

            <p class="lead mb-0" style="text-indent: 15px;">
                <strong>
                    <strong>7. Menstruáció</strong>
                </strong>
            </p>

            <p>
                <ul>
                    <li class="lead mb-5 ms-4">
                        <strong>
                            Menstruáció alatt a vízvisszatartás nagy, ezért:
                            <ul>
                                <li class="lead ms-4">
                                    <strong>
                                        ajánlott a ciklus azonos napján végezni a mérést
                                    </strong>
                                </li>
                                <li class="lead mb-5 ms-4">
                                    <strong>
                                        a menstruáció első 3 napja kevésbé alkalmas a következetes eredményekhez
                                    </strong>
                                </li>
                            </ul>
                        </strong>
                    </li>
                </ul>
            </p>

            <p class="lead mb-0" style="text-indent: 15px;">
                <strong>
                    <strong>8. Testhőmérséklet</strong>
                </strong>
            </p>

            <p>
                <ul>
                    <li class="lead ms-4">
                        <strong>
                            Hideg kezek/lábak esetén az impedancia torzulhat.
                        </strong>
                    </li>
                </ul>
            </p>
            <p>
                <ul>
                    <li class="lead mb-5 ms-4">
                        <strong>
                            A mérés előtt legyél normál hőmérsékleten, ne legyél átfagyva vagy túlhevülve.
                        </strong>
                    </li>
                </ul>
            </p>

            <p class="lead mb-0" style="text-indent: 15px;">
                <strong>
                    <strong>9. Ruházat</strong>
                </strong>
            </p>

            <p>
                <ul>
                    <li class="lead ms-4">
                        <strong>
                            Könnyű ruhában mérj, vagy a mérőhely levonást alkalmazzon.
                        </strong>
                    </li>
                </ul>
            </p>
            <p>
                <ul>
                    <li class="lead mb-5 ms-4">
                        <strong>
                            Zsebekből minden tárgyat vedd ki.
                        </strong>
                    </li>
                </ul>
            </p>

            <p class="lead mb-0" style="text-indent: 15px;">
                <strong>
                    <strong>10. Fémek</strong>
                </strong>
            </p>

            <p>
                <ul>
                    <li class="lead ms-4">
                        <strong>
                            A testen lévő nagyobb fémek, ékszerek, piercingek lehetőleg kerülendők.
                        </strong>
                    </li>
                </ul>
            </p>
            <p>
                <ul>
                    <li class="lead mb-5 ms-4">
                        <strong>
                           Az InBody BIA technológia ugyan jobban tolerálja a fémeket, mint a régi gépek, de még így is torzíthat. 
                        </strong>
                    </li>
                </ul>
            </p>

            <p class="lead mb-0" style="text-indent: 15px;">
                <strong>
                    <strong>11. Pacemaker és beültetett elektromos eszköz</strong>
                </strong>
            </p>

            <p>
                <ul>
                    <li class="lead mb-5 ms-4">
                        <strong>
                            ABSZOLÚT ellenjavallat.<br>
                            Aki pacemakerrel vagy implantált defibrillátorral él → nem mérhető bármilyen InBody készülékkel, mert
                            áramimpulzust használ.
                        </strong>
                    </li>
                </ul>
            </p>

            <p class="lead mb-0" style="text-indent: 15px;">
                <strong>
                    <strong>12. Terhesség</strong>
                </strong>
            </p>

            <p>
                <ul>
                    <li class="lead mb-5 ms-4">
                        <strong>
                            Nem veszélyes a baba számára, de:
                            <ul>
                                <li class="lead ms-4">
                                    <strong>
                                        a vízeloszlás más,
                                    </strong>
                                </li>
                                <li class="lead mb-5 ms-4">
                                    <strong>
                                        a hasi impedancia torzul.<br>
                                        → ezért az InBody nem ad megbízható eredményt terhesség alatt.
                                    </strong>
                                </li>
                            </ul>
                        </strong>
                    </li>
                </ul>
            </p>

        </div>
    </div>




    @include('layouts.modal')

    @include('layouts.footer')

</body>

</html>
