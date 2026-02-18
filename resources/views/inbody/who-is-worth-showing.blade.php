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
                    <h1><span>Kinek érdemes megmutatni az InBody Adatait?</span></h1>
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
            Kinek érdemes megmutatni az InBody Adatait?
        </h2>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="col-12 col-lg-9">
            <p class="lead mb-5 mt-3 text-center" style="text-indent: 15px;">
                <strong>
                    Az InBody 970S <strong>nagyon részletes, de nem diagnosztikai</strong> mérés, ezért mindig attól függ, <strong>melyik adat
                    érdekel</strong>, illetve <strong>milyen problémára keresel választ.</strong>
                </strong>
            </p>

            <p class="lead mb-5 text-center" style="text-indent: 15px;">
                <strong>
                    Az alábbiakban összeraktam, hogy az InBody riport <strong>melyik részét mely szakember tudja a
                    legjobban értelmezni vagy hasznosítani.</strong>
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px; font-weight: 400;">
                <strong>
                    ⚕️KINEK ÉRDEMES MEGMUTATNI AZ INBODY ADATAIT?
                </strong>
            </p>

            <p class="lead mb-2" style="text-indent: 15px; font-weight: 400;">
                <strong>
                    1. Dietetikus / táplálkozási szakember
                </strong>
            </p>

            <p class="lead" style="text-indent: 15px;">
                <strong>
                    Ha a célod:
                    <ul class="ms-3">
                        <li>testzsír csökkentése</li>
                        <li>tömegnövelés</li>
                        <li>táplálkozási terv</li>
                        <li>izom–zsír arány javítása</li>
                        <li>metabolikus állapot javítása</li>
                    </ul>
                </strong>
            </p>

            <p class="lead" style="text-indent: 15px;">
                <strong>
                    Ők értik legjobban:
                    <ul class="ms-3">
                        <li>testzsír tömeg, PBF</li>
                        <li>zsigeri zsír (VFA)</li>
                        <li>izomtömeg</li>
                        <li>tápláltsági mutatók</li>
                        <li>fázisszög értéke</li>
                        <li>trendek értelmezése</li>
                    </ul>
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Ez az első számú szakember, ha életmód- vagy diétás kérdésről van szó.
                </strong>
            </p>

            <p class="lead mb-2" style="text-indent: 15px; font-weight: 400;">
                <strong>
                    2. Személyi edző / erőnléti edző
                </strong>
            </p>

            <p class="lead" style="text-indent: 15px;">
                <strong>
                    Ha a célod:
                    <ul class="ms-3">
                        <li>izomépítés</li>
                        <li>testformálás</li>
                        <li> sportteljesítmény</li>
                        <li> funkcionális szimmetria</li>
                    </ul>
                </strong>
            </p>

            <p class="lead" style="text-indent: 15px;">
                <strong>
                    Ők értenek hozzá legjobban:
                    <ul class="ms-3">
                        <li>szegmentális izomtömeg</li>
                        <li>izomegyenlőtlenségek (jobb–bal kar/láb)</li>
                        <li>törzsizom-arány</li>
                        <li>izomtömeg hiányosságai</li>
                        <li>testösszetétel változás edzés hatására</li>
                    </ul>
                </strong>
            </p>


            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Sportolók esetén kötelező az InBody alapján személyre szabni az edzést.
                </strong>
            </p>


            <p class="lead mb-2" style="text-indent: 15px; font-weight: 400;">
                <strong>
                    3. Sportorvos / rehabilitációs orvos
                </strong>
            </p>

            <p class="lead" style="text-indent: 15px;">
                <strong>
                    Ha:
                    <ul class="ms-3">
                        <li>sérülésed volt</li>
                        <li>túlterheléses problémád van</li>
                        <li>tartáshiba gyanúja van</li>
                        <li>sporthoz kapcsolódó testi funkciót vizsgálnak</li>
                    </ul>
                </strong>
            </p>

            <p class="lead" style="text-indent: 15px;">
                <strong>
                    Ők értenek mélyebben:
                    <ul class="ms-3">
                        <li>aszimmetriák okai</li>
                        <li>izomhiány vagy túlterhelés a test egyik oldalán</li>
                        <li>rehabilitáció haladása testösszetételben</li>
                        <li>vízháztartási eltérések sportolóknál</li>
                    </ul>
                </strong>
            </p>

            <p class="lead mb-2" style="text-indent: 15px; font-weight: 400;">
                <strong>
                    4. Endokrinológus
                </strong>
            </p>

            <p class="lead" style="text-indent: 15px;">
                <strong>
                    Ha felmerül:
                    <ul class="ms-3">
                        <li>elhízás hormonális oka</li>
                        <li>inzulinrezisztencia</li>
                        <li>pajzsmirigy-problémák</li>
                        <li>metabolikus zavar</li>
                    </ul>
                </strong>
            </p>

            <p class="lead" style="text-indent: 15px;">
                <strong>
                    Az InBody ezekhez kockázati jelzőt ad:
                    <ul class="ms-3">
                        <li>magas zsigeri zsír (VFA)</li>
                        <li>magas testzsír %</li>
                        <li>alacsony fázisszög („sejtszintű energiahiány”)</li>
                        <li>felborult izom–zsír arány</li>
                    </ul>
                </strong>
            </p>

            <p class="lead mb-2" style="text-indent: 15px; font-weight: 400;">
                <strong>
                    5. Kardiológus
                </strong>
            </p>

            <p class="lead" style="text-indent: 15px;">
                <strong>
                    Akkor hasznos, ha:
                    <ul class="ms-3">
                        <li>magas VFA → hasi zsír</li>
                        <li>elhízás → kardiovaszkuláris kockázat</li>
                        <li>magas ECW/TBW → ödéma lehetőség</li>
                    </ul>
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    A kardiológus nem a testösszetételt kezeli, de a zsigeri zsír és vízarány fontos adat a szív-érrendszeri kockázatbecslésben.
                </strong>
            </p>

            <p class="lead mb-2" style="text-indent: 15px; font-weight: 400;">
                <strong>
                    6. Nefrológus (vesespecialista)
                </strong>
            </p>

            <p class="lead" style="text-indent: 15px;">
                <strong>
                    Csak akkor, ha:
                    <ul class="ms-3">
                        <li>ECW/TBW magas</li>
                        <li>ödémára utal a vízarány</li>
                        <li>folyadékháztartási problémák vannak</li>
                    </ul>
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    A vízterek értékei a veseműködéssel kapcsolatos állapotot jelezhetik (NEM diagnosztizálják!).
                </strong>
            </p>

            <p class="lead mb-2" style="text-indent: 15px; font-weight: 400;">
                <strong>
                    7. Onkológus (speciális eset)
                </strong>
            </p>

            <p class="lead" style="text-indent: 15px;">
                <strong>
                    Csak akkor, ha:
                    <ul class="ms-3">
                        <li>fázisszög extrém alacsony</li>
                        <li>gyors izomtömeg-vesztés (cachexia gyanú)</li>
                    </ul>
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Ez klinikai környezetben fontos, de átlagembereknél ritkán releváns.
                </strong>
            </p>


            <p class="lead mb-5" style="text-indent: 15px; font-weight: 400;">
                <strong>
                    Összefoglaló táblázat
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                   <div class="table table-bordered mx-3">
                        <table class="table table-striped align-middle">
                            <thead class="table-light">
                            <tr>
                                <th scope="col">InBody adat</th>
                                <th scope="col">Legjobb szakember</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Testzsír %, VFA</td>
                                <td>Dietetikus, endokrinológus</td>
                            </tr>
                            <tr>
                                <td>Izomtömeg</td>
                                <td>Edző, sportorvos</td>
                            </tr>
                            <tr>
                                <td>Izomegyenlőtlenség</td>
                                <td>Edző, gyógytornász</td>
                            </tr>
                            <tr>
                                <td>Vízterek (ECW/TBW)</td>
                                <td>Nefrológus, kardiológus</td>
                            </tr>
                            <tr>
                                <td>Fázisszög</td>
                                <td>Dietetikus, orvos</td>
                            </tr>
                            <tr>
                                <td>Izom–zsír arány</td>
                                <td>Dietetikus, edző</td>
                            </tr>
                            <tr>
                                <td>Trendek, változások</td>
                                <td>Dietetikus, edző</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </strong>
            </p>

        </div>
    </div>




    @include('layouts.modal')

    @include('layouts.footer')

</body>

</html>
