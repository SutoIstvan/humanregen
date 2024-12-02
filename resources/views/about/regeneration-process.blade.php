<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('Regeneráció Folyamata - humanregen.hu'))</title>
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
                    <h1><span>Regeneráció Folyamata</span></h1>
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
        <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Regeneráció Folyamata</h2>
        <div class="col-lg-10 mx-auto">
            {{-- <p class="lead mb-4">Vállalkozásunk hitvallása:</p> --}}
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="col-12 col-lg-9">
            <p class="lead mb-4" style="text-indent: 15px;">
                <strong>A szabad gyökök rendkívül reaktív molekulák a testünkben</strong>, amelyeknek páratlan
                elektronjaik vannak. Ezek <strong>a páratlan elektronok instabilokká teszik a szabad gyököket, és arra
                    késztetik őket, hogy a közelben lévő molekuláktól elektronokat lopjanak, létrehozva ezzel az
                    oxidatív stressz nevű károsító láncreakciót.</strong> Habár néhány <strong>szabad gyök</strong> esszenciális szerepet
                játszik a sejtek jelzéseiben és az immunválaszban, azonban <strong>túlzott jelenléte káros hatásokat
                    okozhat az emberi szervezetben</strong>. A szabad gyökök mind belső, mind külső forrásokból
                származhatnak. Belső természetes folyamatok, mint az anyagcsere és az immunválasz során
                termelődnek. Külső tényezők, mint a szennyezés, a dohányzás, az egészségtelen táplálkozás és a
                sugárzásnak való kitettség is hozzájárulhat a szabad gyökök kialakulásához a testünkben.
            </p>
            <p class="lead" style="text-indent: 15px;">
                <strong>A szabad gyökök által okozott oxidatív stressz károsíthatja a sejtek alkotóelemeit, mint
                    például az DNS-t</strong>, a fehérjéket és a lipideket, <strong>ami számos egészségügyi problémát
                        eredményezhet</strong>. Ezek a károsodásokat összefüggésbe hozhatóak az öregedéssel, a gyulladással és
                különböző krónikus betegségek, beleértve a rákot, a szív- és érrendszeri betegségeket és a neuro-
                degeneratív rendellenességek kialakulását.
            </p>
            <p class="lead" style="text-indent: 15px;">
                <strong>A szabad gyökök negatív hatásainak leküzdésére a szervezet antioxidánsokra
                    támaszkodik</strong>. Az antioxidánsok olyan molekulák, amelyek elektronokat tudnak adományozni
                anélkül, hogy maguk instabillá válnának. <strong>Az antioxidánsok semlegesítik a szabad gyököket
                    azáltal, hogy elektront adományoznak, ezzel megszakítva a láncreakciót és megakadályozva
                    további károsodást</strong>. A Humán Regenerátor hideg atmoszférikus plazma technológiát alkalmaz, ami
                az ionokat, elektronokat és neutrális részecskéket tartalmaz.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A <strong>Humán Regenerátor készülék hideg atmoszférikus plazmát juttat a testbe, lehetővé
                    téve számára, hogy végtelen mennyiségű elektront kapjon</strong>. Amikor a páciens hideg atmoszférikus
                plazmának van kitéve, a test felveszi ezeket az elektronokat, és szükség szerint felhasználja őket
                a szabad gyökök semlegesítésére, hatékonyan ellensúlyozva az oxidatív stresszt. A <strong>Humán
                    Regenerátor</strong> készülék folyamatos elektronforrást biztosítva támogatja a szervezet természetes
                védekező mechanizmusait, és elősegíti az általános egészséget és jóllétet. A készülék által
                előállított hideg atmoszférikus plazma mélyen behatol a test szöveteibe, így intenzíven támogatja a
                szervezeten zajló regenerációs folyamatokat. A hideg atmoszférikus plazma nagyon fontos szerepet
                játszik a modern technológiában és tudományban, mivel hatékonyan képes elpusztítani a
                baktériumokat és más kórokozókat. A kezelések orvosi alapja egy 18 éves kutatássorozat
                eredményeként megszületett és folyamatosan fejlesztett technológia és egy prémium készülék, ami
                speciális pulzáló hatást fejt ki az őssejtekre azok optimális rezgésszintjén.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Egyik speciális hatása a kezelés közben is kellemesen érezhető ionizátoros hatás, mivel
                a <strong>sejtek mitokondriális energiaellátottságát optimalizálja, energiahiányát feltölti</strong>. A sejtek
                energiahiánya a medicinában ismert jelenség, amely betegség, kimerültség esetén is jelentkezik.
                Egyszerű és evidens megoldás lehet az energiahiány pótlása, amely biztonságosan, egyszerűen,
                mindenféle beavatkozás és fájdalom nélkül valósulhat meg.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Továbbá, a már fent említett oxidatív stressz felelős az öregedésért és a vitalitás elvesztéséért.
                Ez számos ismert betegség oka is. Az oxidatív stresszt természetes sejtosztódás vagy külső hatások
                okozzák, például káros környezeti tényezők, káros élelmiszerek, gyulladások, stressz, fertőzések
                vagy betegségek. A <strong>Humán Regenerátor gyengéden továbbítja az aktív elektronokat a
                használónak olyan mikroáramok formájában, amelyek hatékony módon ellensúlyozzák az
                oxidatív stresszt.</strong>
            </p>
            <p class="lead" style="text-indent: 15px;">

            </p>
        </div>
    </div>




    @include('layouts.modal')
    
    @include('layouts.footer')

</body>

</html>
