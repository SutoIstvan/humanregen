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
                    <h1><span>Hogyan működik az INBODY 970S?</span></h1>
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
    </div>

    <div class="container d-flex justify-content-center">
        <div class="col-12 col-lg-9">




            <p class="lead mb-5 d-flex justify-content-center" style="text-indent: 15px; font-weight: 400;">
                <strong>
                    Hogyan is működik az INBODY 970S?
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px; text-align: justify;">
                <strong>
                    Az INBODY 970S egy Bioelektromos Impedancia Analízis (BIA) néven ismert technológiát
használ, amely egy kis, ártalmatlan elektromos áram testen keresztüli átvezetésével méri
és analizálja a testösszetételt. Ahogy halad az áram a különböző szöveteken - zsíron,
izmon, vízen - keresztül, az INBODY rendkívül pontos adatokat szolgáltat a test
összetételről. A BIA módszer lehetővé teszi számunkra, hogy a szemmel láthatatlan
dolgokat is lássuk, mint például az izomtömeg százalékos aránya, a zsírtömeg a hidratáció
és sok egyéb fontos paraméter. Ráadásul ez csak néhány másodpercet vesz igénybe.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px; text-align: justify;">
                <strong>
                    Az INBODY 970S-t a többi BIA modelltől a többfrekvenciás technológia használata
különbözteti meg. A legtöbb BIA eszköz egyetlen frekvenciát használ az impedancia
mérésére, de az INBODY 970S 6 különböző frekvenciát, 8 elektródát (a normál 4-gyel
szemben) használ a testösszetétel mélyebb megértéséhez. Ez lehetővé teszi a test
különböző szöveteinek és szegmenseinek a pontosabb mérését, beleértve az izomtömeg, a
zsírtömeg és a víztartalom nyomon követesét a karokon, lábakon és külön a törzsön, a
legnagyobb pontossággal.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px; text-align: justify;">
                <strong>
                    Az izom- és zsíreloszlás részletes adatain túl az INBODY 970S a csontásványianyag-tartalom
értékekre, a zsigeri zsírra és az alap anyagcserére (BMR) is képes adatokat szolgáltatni.
Ezek a mérések kulcsfontosságúak az általános egészségi állapot megértéséhez és az
egészséges fittség és táplálkozási terv kidolgozásához.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px; text-align: justify;">
                <strong>
                    A készülék szegmentális elemzése betekintést nyújt az esetlegesen hiányzó vagy
kiegyensúlyozatlan területekbe, lehetővé téve számunkra az olyan konkrét problémák
kezelését, mint az izomegyensúly-hiány, zsíreloszlás, valamint a gyulladás vagy ödéma
lehetséges előfordulása.
                </strong>
            </p>
        </div>
    </div>




    @include('layouts.modal')

    @include('layouts.footer')

</body>

</html>
