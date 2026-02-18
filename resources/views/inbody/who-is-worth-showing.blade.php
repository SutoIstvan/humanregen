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
            Kinek érdemes megmutatni az InBody Adatait?
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

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    A Kópis és Társa Kft. üzembe helyezettegy orvosi minőségű testösszetétel
                    elemző eszközt. Bemutatjuk ebben a feljegyzésben , hogy miért jó ez a Kópis és
                    Társa Kft ügyfeleinek.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Az INBODY 97S nem csupán egy újabb eszköz, hanem egy nagyon modern
                    klinikákon is használt fejlett kutatási eszköz, amely pontos, átfogó és hasznos
                    adatokat biztosít számunkra időtakarékos módon. Ez nem csak egy mérleg,
                    hanem segít nyomon követni a számos nagyon fontos mutatatót, az egészségügy
                    és a regenerálódást területén.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    A Kópis és Társa Kft.- nél mindig keressük a módját, hogy a lehető
                    legmagasabb szintű szolgáltatást nyújtsunk. Az INBODY 970S-sel személyre
                    szabottabb egészség javító ,megelőző lehetőségeket jobb fejlődéskövetési
                    adatokat tudunk biztosítani minden egyes személy számára, aki igénybe veszi
                    szolgáltatásunkat.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px; font-weight: 400;">
                <strong>
                    Hogyan is működik az INBODY 970S?
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Az INBODY 970S egy Bioelektromos Impedancia Analízis (BIA) néven ismert
                    technológiát használ, amely egy kis, ártalmatlan elektromos áram testen
                    keresztüli átvezetésével méri és analizálja a testösszetételt. Ahogy halad az áram
                    a különböző szöveteken ─ zsíron, izmon, vízen ─ keresztül, az INBODY
                    rendkívül pontos adatokat szolgáltat a test összetételről. A BIA lehetővé teszi
                    számunkra, hogy a szemmel láthatatlan dolgokat is lássuk., mint például az
                    izomtömeg százalékos aránya, a zsírtömeg és a hidratáció és sok egyéb
                    paraméter. Ráadásul ez csak néhány másodpercet vesz igénybe.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Az INBODY 970S-t a többi BIA modelltől a többfrekvenciás technológia
                    használata különbözteti meg. A legtöbb BIA eszköz egyetlen frekvenciát
                    használ az impedancia mérésére, de az INBODY 970S 6 különböző frekvenciát,
                    8 elektródát (a normál 4-gyel szemben) használ a testösszetétel mélyebb
                    megértéséhez. Ez lehetővé teszi a test különböző szöveteinek és szegmenseinek
                    a pontosabb mérését, beleértve az izomtömeg, a zsírtömeg és a víztartalom
                    nyomon követesét egészen a karokon, lábakon és külön a törzsön, a legnagyobb
                    nagyobb pontossággal.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Az izom ─ és zsíreloszlás részletes adatain túl az INBODY 970S a csont ásvány
                    értékekre, a zsigeri zsírra és az alap anyagcserére (BMR) is képes adatokat
                    szolgáltatni. Ezek a mérések kulcs fontosságúak az általános egészségi állapot
                    megértéséhez és egy egészséges fittség és táplálkozási terv kidolgozásához.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    A készülék szegmentális elemzése betekintést nyújt az esetlegesen hiányzó vagy
                    kiegyensúlyozatlan területekbe, lehetővé téve számunkra az olyan konkrét
                    problémák kezelését, mint az izomegyensúlyhiány, zsíreloszlás, valamint a
                    gyulladás vagy ödéma lehetséges előfordulása.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px; font-weight: 400;">
                <strong>
                    Miért döntöttünk az INBODY 970S mellett?
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Egyrészt az INBODY 970S nagy pontosságot kínál, különösen más testzsírmérő
                    eszközökhöz, mint pl. bőrredő-tompítók, a DEXA szkennelések, vagy a
                    BodPodok-hoz képest. Bár a bőrredő-tompítók hatékonyak lehetnek,
                    nagymértékben függenek a tesztet végző személy ügyességétől, kevésbé
                    pontosak lehetnek a testösszetétel időbeli nyomonkövetésében, és nem
                    nyújtanak betekintést más testösszetétel-mutatókba.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    A DEXA-szkennelések és a BodPodok nagyon pontosak de drágák,
                    időigényesek, nagy hely igényűek és speciális felszerelést igényelnek. Az
                    INBODY 970S ezzel szemben orvosi minőségű eredményeket ad mindössze egy
                    egyszerű 70 másodperces szkenneléssel. Továbbá a DEXA-val ellentétben
                    nincsen sugárzás, nincsen speciális beállítás és nincsen hosszú várakozási idő.
                    Gyakran használható, ami segít jobban nyomon követni a haladást, így praktikus
                    és hatékony eszköz a folyamatos értékeléshez.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Az újabb kutatások kimutatták, hogy az INBODY 970S áthidalta a
                    hagyományos BIA és az arany-standard módszerek, pl.: a DEXA közötti
                    pontossági szakadékot. A BIA-t és a DEXA-t összehasonlító kutatások
                    kimutatták, hogy az INBODY 970S olyan eredményeket szolgáltat, melyek
                    szorosan korrelálnak a DEXA mérésekkel, különösen a zsírmentes tömeg és
                    zsírtömeg nyomon követésében. Ez teszi az INBODY 970S-t ideális megoldássá
                    azok számára, akik pontos, gyakori testösszetétel-elemzést keresnek a DEXA -
                    val járó magas költségek és logisztikai kihívások nélkül.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Az is fontos szempont volt számunkra, hogy a készülék nem csak a testzsír
                    képen nyomon követni. AZ INBODY 970S betekintést nyújt a víz, a csont
                    ásványi anyag, a zsigeri zsírok és az alapanyagcsere (BAM) adataiba, amelyek
                    mind az egészség és a fittség kulcsfontosságú mutatói. A csont ásványianyag
                    mérésével biztosíthatjuk, hogy ügyfelelink figyelemmel kísérjék a változásokat,
                    ami különösen fontos az öregedő vagy erejük javításán dolgozók számára.
                    Ezenkívül az INBODY 970S zsigeri zsír nyomon követésére való képessége
                    kulcsfontosságú a krónikus betegségekkel kapcsolatos kockázati tényezők
                    felméréséhez. Az INBODY 970S a test fázisszögeit is méri, ami jelezheti a
                    sejtek egészségét és a szervezet tápanyag-felszívó és regenerálódó képességét.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Mindezen funkciókat szem előtt tartva tudtuk, hogy az INBODY 970S nem csak
                    nagyszerű eszköz az általános testösszetétel nyomon követésére, hanem lehetővé
                    teszi számunkra, hogy az ügyfél egyedi adatai alapján személyre szabott
                    ajánlásokat kínáljunk. Akár egy teljesítmény optimalizálásra törekvő
                    sportolónál, akár csak néhány kilót szeretne leadni, az INBODY 970S adatai
                    segítenek a szakembereknek megalapozott döntéseket hozni és ennek
                    megfelelően, ha szükséges módosítani az edzési táplálkozási stb. stratégiákat.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Az INBODY 970S-ből származó adatok értékes eszközt jelentenek a személyre
                    szabott tervek összeállításához és az időbeli haladás nyomon követéséhez.
                    Amikor egy ügyfél használja a INBODY 970S-t, azonnal részletes
                    információkat láthat az izomtömegről, a zsíreloszlásról, a hidratáltsági szintjéről
                    és egyebekről. Ezek az adatok nagyon hasznosak egy olyan szakember által
                    készített program megtervezésekor., amely jobban illeszkedik az ügyfél
                    igényeihez.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Pl.: a szegmentális elemzés lehetővé teszi szakemberek számára, hogy kiszűrje
                    az izomegyensúly hiányát a felső és alsó test, vagy akár a test bal és jobb oldala
                    között. Ha azt észleljük, hogy egy kliensnek gyengébbek az izmai az egyik
                    lábában vagy karjában, akkor ezeket a területeket gyakorlatokkal tudja
                    megcélozni az egyensúlyhiány kezelése érdekében. Hasonlóképpen, a zsigeri
                    zsír nyomon követése segít abban, hogy szemmel tartsuk az egészségügyi
                    kockázatokat, és a szakember módosítsa a kliens étrendjét vagy edzéstervét a
                    belső szervek körüli zsír csökkentése érdekében.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Az INBODY 970S BMR-mérést arra is használjuk, hogy személyre szabhassuk
                    az ügyfél táplálkozási irányelveit. Azzal, hogy tudjuk, mennyi kalóriát éget el
                    egy ügyfél teste nyugalmim állapotban, jobban meg tudjuk becsülni a kalória
                    szükségletét a zsírégetéshez vagy az izomtömeg növeléshez. Azzal, hogy ezeket
                    a számokat idővel nyomon tudjuk követni, biztosítjuk, hogy ügyfeleink a céljaik
                    felé haladjanak, és folyamatosan fejlődjenek.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Az INBODY 970S egy másik értékes aspektusa a fázisszög mérésének
                    képessége. Ez a mérőszám a sejtmembránok egészségét és az általános
                    sejtműködést jelzi, és korai figyelmeztető jeleket adhat a gyulladásról vagy
                    egészségügyi problémákról. Ha idővel csökken a fázisszög, a szakemberek
                    döntéseket hozhatnak az ügyfél edzésével vagy táplálkozásával kapcsolatban.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Az INBODY 970S beépítése a munkafolyamatokba azt jelenti, hogy az ügyfél
                    és vagy a szember nem csak sokkal részletesebben tudja nyomon követni a
                    haladást, hanem a lehetséges egészségügyi problémákat is megelőzheti. Ez
                    lehetővé teszi számukra, hogy finom hangolják az irányelveket minden egyes
                    ügyfél számára, biztosítva, hogy ne csak az izom – és zsírtömegük javuljon,
                    hanem az általános egészségi állapotuk is optimalizálódjon.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Az INBODY 970S kiváló értéket képvisel a Kópis és Társa Kft. részére, és
                    kiegészíti szolgáltatásunkat. Gyors, pontos és hatékony, olyan elemzéseket
                    nyújtunk, amelyekkel más testzsír-mérő eszközök egyszerűen nem tudnak
                    versenyezni. Az izomtömeg, a zsíreloszlás, a csont ásványianyag, a zsigeri zsír,
                    a BMR és a fázisszög mérésére való képességgel az INBODY 970S nagyszerű
                    eszköz a személyre szabott, hatékony tervek létrehozásához.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
                <strong>
                    Az INBODY 970S-t nem csak a sebessége és a könnyű használhatósága teszi
                    különlegessé, hanem a pontossága is. Segít abban, hogy lássuk mennyire
                    teljesítünk jól és felismerjük a potenciális problémákat – pl.: az egyensúly
                    hiányt, a gyulladást vagy a túlzott zsigeri zsírt –, mielőtt azok nagyobb
                    problémává válnának. Várjuk, hogy segítsünk ügyfeleinknek elérni céljaikat, és
                    hosszú távon megőrizni egészségüket.
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px; font-weight: 400;">
                <strong>
                    JOGI NYILATKOZAT
                </strong>
            </p>

            <p class="lead mb-5" style="text-indent: 15px;">
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
