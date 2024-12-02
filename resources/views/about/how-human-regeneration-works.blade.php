<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('Hogyan Működik A Humán Regeneráció? - humanregen.hu'))</title>
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
                    <h1><span>Hogyan Működik A Humán Regeneráció?</span></h1>
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
        <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Hogyan működik a humán regeneráció?</h2>
        <div class="col-lg-10 mx-auto">
            {{-- <p class="lead mb-4">Vállalkozásunk hitvallása:</p> --}}
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="col-12 col-lg-9">
            <p class="lead " style="text-indent: 15px;">
                Az emberi test rendkívül kivételes gépezet, amely képes bizonyos mértékben gyógyítani
                önmagát és regenerálódni. Míg néhány szerv, mint például a máj és a bőr, képesek regenerálódni, a
                teljes szerv vagy végtag regenerációja még mindig megoldatlan kérdés. Azonban az olyan állatok
                tanulmányozása, amelyek rendkívüli regenerációs képességekkel rendelkeznek, segíthet a humán
                regeneráció titkainak feltárásában és a regeneratív terápiák fejlesztésének előmozdításában.
            </p>

            {{-- <img src="{{ asset('assets/img/regen.jpg') }}" class="img-fluid rounded-3" alt=""> --}}

            <p class="lead " style="text-indent: 15px;">
                Salamandrák, planáriák és más fajok képesek sérült vagy hiányzó testrészeket regenerálni. Ezt
                nevezzük regenerációnak. Néhány emberi szerv, például a máj és a bőr, szintén regenerálódik, ha
                megsérülnek.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Vállalkozásunk lehetőséget ad nem csak az egészségügyi problémák orvoslását keresők számára,
                A regeneráció különböző módon történhet, pluripotens vagy szövet-specifikus őssejtek
                bevonásával. Néha a regeneráció még az őssejtek részvételét sem igényli, mint ahogy azt például a
                zebradárnák szívének regenerációja mutatja. Az ilyen regeneráló állatok tanulmányozása segíthet a
                regeneráció alapvető mechanizmusainak megértésében, amelyeket aztán alkalmazhatunk az emberi
                regeneratív gyógyászat fejlesztésére.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Jelenleg számos kutatási terület foglalkozik a regenerációval kapcsolatban, a regeneratív
                folyamatok beindításáért felelős jelek azonosításától kezdve az emberi őssejtek regenerációs
                képességének eltéréseinek vizsgálatáig. A tudósok különösen érdeklődnek az iránt, hogy mi indítja el
                az őssejteket a blastema kialakulására, amely az őssejtek felhalmozódása a sérült szövet helyén.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Ezenkívül, az állatkísérletek során arra törekszenek, hogy megállapítsák, hogy hogyan ismerik
                fel az őssejtek, melyik testrész regenerálódására van szükség, és pontosan hol találhatók a testben.
                Míg emlősökben az őssejtek nem rendelkeznek ezzel a képességgel, a salamandrákhoz hasonló
                állatoknak megvan a képességük, hogy navigáljanak a test &quot;térképén&quot; és elindítsák a
                regenerációt a
                megfelelő területeken. Az emberi regeneráció titkainak megértése érdekében rendkívül fontos
                ezeknek a folyamatoknak és jeleknek a feltárása.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Azonban, a kutatókat különösen érdeklik azok a jelek, amelyek beindítják az őssejteket a
                regeneráció során, valamint azok a jelek, amelyek meggátolják az aktivitásukat, amikor már nincs
                szükség regenerációra.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A regeneráció azt jelenti, hogy egy sérült vagy hiányzó szervrész regenerálódik a meglévő
                szövetekből. Felnőttként az ember képes néhány szervet regenerálni, például a májat. Ha a máj egy
                része megsérül betegség vagy sérülés következtében, akkor a máj visszanő az eredeti méretére, bár
                nem az eredeti formájában. Emellett a bőrünk folyamatosan megújul és javul. Sajnos sok más emberi
                szövet nem képes teljes mértékben regenerálódni, és a regeneratív orvoslás célja olyan módszerek
                kifejlesztése, amelyek serkentik a szövetregenerációt a szervezetben, vagy csereszövetek előállítását
                teszik lehetővé.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Összefoglalva, bár az embernek vannak bizonyos regenerációs képességei, jelentős korlátokkal
                rendelkeznek más regeneratív fajokhoz képest. Az olyan állatok tanulmányozása, amelyek rendkívüli
                regenerációs képességekkel rendelkeznek, lehetővé teszi a kutatók számára a regenerációt irányító
                bonyolult folyamatok feltárását, és ezt a tudást alkalmazva regeneratív terápiák fejlesztését remélik
                az ember számára. Az emberi regeneráció megértésének kutatása ígéretes terület, amely
                forradalmasíthatja az orvostudományt és lehetőséget teremthet a hatékonyabb kezelések
                kifejlesztésére a jövőben.
            </p>
        </div>
    </div>




    @include('layouts.modal')

    @include('layouts.footer')

</body>

</html>
