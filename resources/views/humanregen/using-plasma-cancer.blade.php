<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('A Hideg Atmoszférikus Plazma Használata Rákos Sejtekre - humanregen.hu'))</title>
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
                    <h1><span>A Hideg Atmoszférikus Plazma <br> Használata Rákos Sejtekre</span></h1>
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
        <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">A Hideg Atmoszférikus Plazma <br>
            Használata Rákos Sejtekre</h2>
        <div class="col-lg-10 mx-auto">
            {{-- <p class="lead mb-4">Vállalkozásunk hitvallása:</p> --}}
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="col-12 col-lg-9">
            <p class="lead" style="text-indent: 15px;">
                CAP ígéretes lehetőség a hatékonyabb tumorkezelésre. Azonban annak végső hatása a
                ráksejtekre igen érdekes. A ráksejtek nagyobb mennyiségű ROS és RNS előállításával rendelkeznek,
                és bár ez fokozza a proliferatív aktivitásukat, még magasabb szintek az apoptózist okozhatják. A
                CAP ezután ezt a szintet olyan magasra növeli, amely halálos a ráksejtek számára. Ennek a hatásnak
                oka a ráksejtek antioxidáns rendszerében bekövetkező változások és a kettős szálú szakadásokban
                keresendő, de az egészséges sejteknek el kell viselniük ezt az emelést. A tumor sejteknek több
                aquaporinja is van, ami megkönnyíti a ROS és RNS behatolását a sejtbe. Az ROS és RNS
                diffúziójának mértékét a membrán lipidszerkezete is befolyásolhatja. A ráksejtek általában
                alacsonyabb koleszterinszinttel rendelkeznek, ami növeli a sejtek érzékenységét a peroxidációval
                szemben. A membrán lipidek peroxidációja ezt követően a sejthártya több pórus kialakulásához
                vezet, hogy az ROS és RNS nagyobb mértékben tudjon diffundálni. Az eljárás alkalmazásának
                mechanizmusainak összefoglalása azt mutatja, hogy különböző sejtválaszokat indítanak be a CAP
                alkalmazásával a tumor sejtekben. Ennek a reaktív szerek növekedése az a fő indíték, amely elindítja
                a daganatsejtek halálát. A konkrét válaszok itt az apoptózis, a növekedés gátlása, a sejtciklus
                leállítása, a DNS- és mitokondriális károsodás, valamint az immunogén sejthalál. Az aktuális
                eredmény azonban dózisfüggő.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Keidar és munkatársai egy pilotkísérletet végeztek a CAP alkalmazásának tesztelésére a tumor
                kezelésében. Kezdetben azt tapasztalták, hogy a bőrmelanoma sejtvonalak leváltak a kultúraedényből
                a CAP alkalmazása után, és ez a számuk csökkenéséhez vezetett, míg az egészséges sejtvonalak
                ragaszkodtak. A szerzők tanulmányukban azt mutatták be, hogy a kis daganatok CAP alkalmazása
                után elpusztultak, és az előrehaladottabb tumorok mérete csökkent az egér alhasi vese tumorainak
                vizsgálata során. Kaushik és munkatársai bemutatták a ROS hatását a tumor sejtek elhalására a
                plazma kibocsátás hatásának értékelése során a T98G, A549, HEK293 és MRC5 sejtvonalakon. A
                szerzők kimutatták, hogy a HEK293 és MRC5 nem rosszindulatú sejtek életképességét minimálisan
                érintette a plazma kibocsátás, szemben a rák sejtvonalakkal. A plazma kibocsátás által létrehozott
                ROS és H2O2 megváltoztatta a mitokondriális membrán potenciálját. Ez elindította a belső apoptózis
                útvonalat, és eredményezte az összes pro-apoptotikus génexpresszió növekedését és az anti-
                apoptotikus génexpresszió csökkenését. Az ERK1/2/MAPK sejtsignalizációs aktivitásban is változás
                történt a fehérje szintjén. A létrejövő hatást ROS-elnyelőkkel lehet visszafordítani.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A ráksejtek a metabolikus szinten is különböznek az egészséges sejtektől. Itt a daganatsejtek
                metabolikus átprogramozása egyszerű szénhidrátokat alakít át makromolekulákba, különösen
                lipidbe, fehérjékbe és nukleinsav-makromolekulákba. Ez olyan köztes metabolitokat eredményez,
                amelyeket a tumoros sejtek a növekedéshez és a proliferációhoz használhatnak. Xu és munkatársai
                tanulmányozta a CAP hatásait a megváltozott daganatsejtek metabolikus aktivitására. KEGG és GC-
                TOFMS analíziseik rámutattak arra, hogy a leukémia sejtek más alanin, aszparaginsav és
                glutaminsav metabolizmussal rendelkeznek. A szerzők rögzítették a glutamináz tevékenység
                csökkenését is a CAP alkalmazása után a ráksejtekben. Ez csökkenti a glutamin átalakítását
                glutaminsavvá. A glutaminsav hiánya, egyidejűleg a glutamin felhalmozódásával a leukémia
                sejtekben a proliferáció gátlásához és akár a sejthalálhoz is vezethet.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A sejtvonalakon és állati modelleken végzett tanulmányok ismételten bizonyították a CAP
                eszközök előnyeit és az anti-tumor aktivitásukat. Egy tanulmány szerint a glioblasztóma sejtvonalak
                elvesztették életképességüket a plazmával történő kezelés után. Ezen tanulmány azt is kimutatta,
                hogy a korábban a temozolomid alkiláló szertől rezisztens sejtvonalak érzékennyé váltak rá.
                Ezenkívül több szerző is beszámolt arról, hogy a CAP expozíció elvesztést okozott az
                életképességben és indukált apoptózist más típusú agydaganat sejtvonalakban is.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A plazma kibocsátás után indukált apoptózist dokumentáltak a tüdőrák TC-1 sejtvonalakban.
                Ezt a fibroblaszt vonalakban is rögzítették, de sokkal kisebb mértékben. Az utolsó tanulmány
                legfontosabb előnye az volt, hogy a plazmaeszközök méretét minimalizálva lehetővé vált a CAP
                könnyebb alkalmazása mélyebb elváltozásokban és szerkezetekben. Az apoptosis indukcióját itt a
                125-440 μm átmérőjű eszközökből származó plazma kibocsátás váltotta ki. A µCAP eszközöket
                közvetlenül egér agydaganatain és in vitro glioblasztoma sejtvonalakon is használták. Utóbbi esetben
                a 70 μm-es eszköz által kibocsátott plazma kibocsátás növelte a ROS és RNS szinteket, és ennek
                eredményeként jelentősen csökkent az U87MG glioblasztóma sejtek életképessége.
                Legfontosabbként az eszköz képes volt a plazma kibocsátásra egy intrakraniális endoszkópos cső
                segítségével az egerek agyában, aminek eredményeként a daganat növekedését gátló hatást értek el.
                A szerzők optimalizálták az eszközparamétereket a leginkább megfelelő agyi és emlődaganatok
                kezelésére.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Az in vivo plazma hatása már bebizonyosodott állati modellekben, amelyeket a 4T
                emlősejtvonalak szubkután injektáltak. Ezek a sejtvonalak általános tumoros növekedését 250 μm
                átmérőjű CAP eszköz plazma kibocsátásának tették ki. Fontos megjegyezni, hogy a 3 perces plazma
                kezelés során elérték a tumor növekedésének csökkenését, amely hasonló volt a kemoterápiához. Az
                elemi és anti-apoptotikus génaktivitás arányában is szignifikáns változás történt a molekuláris
                szinten.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Mashayekh és munkatársai tanulmányozta a CAP in vivo hatását egérmodelleken és az in vitro
                hatást a melanoma B16/F10 sejtvonalakon. Munkájuk során az állati modelleken tapasztalták a
                sejtvonalak többségének elvesztett életképességét és az állati modellek tumorának jelentős
                zsugorodását. A sejtvonal eredményeket a 3 perces CAP kezelés után 48 óra alatt érték el, és az in
                vivo tumor zsugorodása összehasonlítható volt a kemoterápia által elérttel. Összefoglalva, azon
                elemzések, amelyek a CAP hatásait vizsgálták a bőrdaganatok kezelésére, az elsők voltak, mert a
                plazmát legkönnyebben közvetlenül alkalmazzák a bőr szerkezeteire. Például a G361 melanoma
                sejtek elvesztették az életképességüket és leváltak a felszínről a CAP alkalmazása után. Ezeknek a
                sejteknek alacsonyabb integrin és FAK kifejeződése volt és megváltozott aktin filament struktúrájuk.
                Ez az eredmény alátámasztja azt a hipotézist, hogy a plazma által elősegített sejthalál összefüggésben
                lehet az integrin-ECM kölcsönhatásokkal. Lehetőség nyílt a CAP antiproliferatív hatásának szelektív
                növelésére is melanoma sejtvonalakon arany-nanorészecskékkel kombinált plazmával, amelyhez az
                anti-FAK antitestek voltak kötve.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Az MCF-7 emlőrák sejtvonalakon is elvégeztek analíziseket. Az első eredmények azt mutatták,
                hogy a CAP kezelés után csökkent a sejtek életképessége az apoptózis növekedése miatt. Ninomiya
                és munkatársai. később kimutatták, hogy a CAP sérülést okozott a rákos emlősejtvonalak 50%-ánál,
                függetlenül attól, hogy invazív MB-231 vagy nem invazív MCF-7 sejtvonalak voltak. Végül a CAP
                antiproliferatív hatásait az emberi emlősejtek metasztázisából származó sejtvonalakban is észlelték.
            </p>
            <p class="lead" style="text-indent: 15px;">
                További kutatásokat végeztek a HCT-116, SW480 és LoVo vastagbélrák sejtvonalakon. Ezek a
                sejtek elvesztették életképességüket a CAP alkalmazás után, és ezt a hatást alacsonyabb sejtmobilitás
                és magasabb B-katenin foszforiláció kísérte. Ezenkívül, bár a CAP eszközt úgy tekintették, hogy az
                apoptózist akár 70%-os arányban is elősegíti a B16 és COLO320 vastagbél sejtvonalakban, nem volt
                hatása a makrofág sejtvonalak kontrollokra. Ishaq és munkatársai azt is kimutatták, hogy a CAP
                kezelés növelte az apoptózist a különböző vastagbél sejtvonalakban a Nox2-AKT1 útvonal
                aktiválásán keresztül. A szerzők azt is kimutatták, hogy bár a HT29 sejtvonalak túlnyomórészt
                ellenállnak a ROS közvetítette rákhalálnak, ezt az ellenállást csökkenteni lehet a Nrf2/Srx jelátvitel
                gátlásával. Végül a CAP expozíció antiproliferatív hatással bír többsejtes tumor spheroidokra,
                amelyek a tumorkörnyezetet utánozzák, és dózisfüggő módon. A CAP expozíciót követően
                megfigyelték a spheroid Ki67 vesztését és a felhalmozódott DNS-károsodást.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Az in vitro kísérleti eredmények azt is sugallják, hogy a CAP alkalmazás előnyös lehet nyak-
                és fejrákok esetében. Habár ezek a területeken lévő daganatok viszonylag könnyen eltávolíthatók, ez
                a beavatkozás gyakran invazív, és a CAP ezt a hatást csökkentheti. Guerrero-Preston és munkatársai
                azt találták, hogy a CAP szintén antiproliferatív módon hatott ezekre a sejtekre. Bár ezek a szerzők
                úgy gondolták, hogy ez nem-apoptotikus folyamatok eredménye, ellentmondó tanulmányok arra
                utaltak, hogy az antiproliferatív hatás az apoptotikus kaskád aktiválásából származik.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Több tanulmány is vizsgálta a CAP alkalmazását a méhnyakrákok esetében, főleg a HeLa
                sejteken. Ezekben a sejtekben apoptotikus folyamatokat észleltek a CAP kezelést követően
                növekedett ROS és a JNK és p38 utakban bekövetkező változások miatt . Ennek az hatásnak egy
                másik megfigyelt mechanizmusa az volt, hogy a membrán lipidek oxidációja a sejtösszeomlást
                okozta. Ezenkívül, Tan és munkatársai egy mikroeszközt használtak, mintegy 1 μm átmérőjű
                elektródával, és ez szelektív apoptózist váltott ki különböző HeLa sejtekben, anélkül, hogy a
                szomszédos sejteket érintette volna.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Az eszköz alkalmazásának lehetőségeit vizsgálták a leukémia sejtvonalakon is. Azonban a
                CAP klinikai körülmények között történő hipotetikus alkalmazása továbbra is tisztázatlan, és annak
                legjobb módszerének meghatározása további vizsgálatot igényel. Itt a CAP-aktivált folyadékok
                használata is szóba jöhet. Azonban a CAP alkalmazás in vitro sejthalált idézett elő a THP-1 leukémia
                sejtvonalakban dózisfüggő módon. A CAP alkalmazás azonban irányíthatatlan nekrózist okozott. A
                szerzők aztán azt mutatták ki, hogy a CAP expozíció után 45 másodperccel indukálódott a sejtes
                apoptózis, és a kezelés után több mint 50 másodpercig nekrózis figyelhető meg. Végül két független
                tanulmány is kimutatta az antiproliferatív hatásokat a hasnyálmirigysejteken.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A CAP kezelést közvetlenül alkalmazták emberi daganatokon is klinikai beállításokban. Ebben
                a tanulmányban hat haladó nyak- és fejrákos páciens vett részt. Közülük két páciensnek csökkent a
                daganatmérete a CAP alkalmazását követően. Habár az egyik páciens legalább részleges remissziót
                és javulást ért el, a másik visszaesett és meghalt. Két páciens nem jelentett mellékhatást a CAP
                kezelés során, de a megmaradt négy száraz szájat tapasztalt. Legfontosabb, hogy négy páciens
                jelentős fájdalomcsillapítást tapasztalt. Ezek a páciensek azonban terminális stádiumban voltak, és az
                adatok értékelése végén öten elhunytak. Habár a hideg plasma alkalmazása nem fordította meg a
                betegség lefolyását, összességében pozitív hatással volt anélkül, hogy jelentős kárt vagy mellékhatást
                okozott volna.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A plazma kisütése közvetlenül és közvetve is befolyásolja a sejttenyészet közegét, és ez
                ösztönzi a CAP-aktivált plazma vagy más folyadék alkalmazásának megfontolását a daganatsejtek
                életképességének csökkentése érdekében. A plazma-aktivált közeg (PAM), a plazma-aktivált Ringer-
                laktát oldat (PAL) és más plazma-aktivált oldatok legnagyobb előnye az, hogy viszonylag hosszú
                ideig tárolhatók. Hipotetikusan azt is el lehet képzelni, hogy az aktivált folyadékokat viszonylag
                könnyen lehet alkalmazni belső szerkezetekre. A CAP-aktivált médiumok általában az ROS, RNS és
                H2O2 tartalmuk miatt indukálnak apoptózist. Az eredmény azonban sejtspecifikus lehet, és attól
                függhet, hogy az adott sejtvonalban mennyi vízszállító található.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Az apoptotikus morfológiai változások különösen észlelhetők voltak glioblasztóma
                sejtvonalakban a CAP által kiváltott média alkalmazását követően. Emelkedett effektor kaspáz 3/7
                aktivitást és csökkent AKT kináz expressziót is megfigyeltek molekuláris szinten. Hasonló
                eredményeket kaptak gyomorrák sejtvonalak esetében is, amikor PAM hatott rájuk. Ezek a sejtek
                apoptózissal kapcsolatos morfológiai változásokat kezdtek mutatni. A kaspáz 3/7 aktivitása nőtt, és
                az érintett csoportban az annexin V pozitív sejtek aránya két óra PAM expozíció után szignifikánsan
                magasabb volt, mint a kontroll csoportban. Az eksperimentális csoportban magasabb ROS szint is
                volt, de ezt ROS gyűjtőkkel lehetett megszüntetni. Ezenkívül azok a sejtek, amelyeket 1 × 104
                számú sejtet tartalmazó jólbeültetéses lemezen ültettek be, ellenállást mutattak a PAM-mal szemben,
                de ez az ellenállás több mint két percig tartó expozíció után alábbhagyott. Ezen ellenálló sejtekben
                magasabb volt a CD44 variáns 9 kifejeződése. Ez a variáns fontos szerepet játszik a redukált
                glutation szintézisében, amely nélkülözhetetlen a szabad gyökök semlegesítéséhez és a megfelelő
                válaszokhoz a stresszjelekre.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Az ovariumrák sejtvonalak életképessége, amelyek ellenálltak a paclitaxel és ciszplatinnek,
                majdnem 30%-kal csökkent CAP kezelés után. A szerzők elemzést is végeztek a CAP hatásairól egér
                xenograftokon. Számos kemorezisztens sejtvonalat kezdetben egerekbe oltottak be szérummentes
                közegbe és matrigelbe, majd 200 µL plazma-aktivált közeg és kezeletlen kontroll RPMI-1640 közeg
                lett beoltva. Sejtvonalaktól függően a daganatok 66%-kal és 52%-kal csökkentek 29 napon belül az
                első CAP injekciót követően a kontroll szintekhez képest. Ezenkívül a PAM alkalmazása növelte az
                ROS szinteket négyféle hasnyálmirigydaganat sejtvonal esetében is. Ez a sejtek apoptózisához
                vezetett, amit ROS gyűjtőkkel lehetett visszafordítani. A tanulmány a PAM hatékonyságát is
                vizsgálta egér xenograftokon, és jelentős daganat tömegcsökkenést figyeltek meg 28 napon belül.
                Emellett a szerzők, Nakamura és munkatársai azt találták, hogy in vivo PAM közeg expozíció egy
                másik egér xenograft modell esetében gátolta az ES2 ráksejtek peritoneális terjedését.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A PAM mellett a PAL is alkalmazható daganatellenes kezelésre. A PAL az in vitro
                körülmények között indukálja az apoptózist hasnyálmirigy sejtvonalakban a ROS szint növelésével
                és a sejtheadás csökkentésével. A PAL-nak daganatellenes hatása is volt az in vivo egér xenograft
                modellekben található hasi csomópontokra. Emellett a PAL alkalmazása erős antiproliferatív hatást
                gyakorolt az A549 tüdőrák sejtvonalakra is. Ebben a munkában a CAP alkalmazása mitokondriális
                diszfunkcióval járt, amely a NF-κB-Bcl2 molekuláris útvonal lefelé történő szabályozásával volt
                összefüggésben. A szerzők úgy gondolták, hogy a PAL végső antiproliferatív hatása a
                daganatsejtvonalakon erősebb lesz, mint a PAM-é. Azonban ez a megfontolás vitára ad okot és
                további elemzést igényel. Függetlenül ettől az eredménytől a PAL legnagyobb előnye, hogy
                valószínűleg könnyebb alkalmazni jövőbeli klinikai vizsgálatok során, mivel jelenleg tenyésztett
                közeg nem használható orvosi kezelésre. Habár ez megfelelő alternatívát kínál a jelenlegi
                módszerekhez képest, további tanulmányozást igényel. Végül, a PAM hatásairól szóló elemzéseket is
                folytatni kell a daganatsejtek esetében, annak ellenére, hogy lehetséges komplikációk merülhetnek
                fel alkalmazásával a klinikai vizsgálatok során. Ezek az elemzések további jelenségeket és elveket
                fedhetnek fel, amelyek előnyösek lehetnek a klinikai eljárások szempontjából.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A plazma alkalmazásának egyik legfejlettebb módja a daganatimmunterápia alkalmazása. Ez
                lehetséges, mert a rák kezdetét és lefolyását jelentősen befolyásolhatja az emberi immunrendszer. Az
                immunrendszer szabályozó képessége különösen képes felülkerekedni a ráksejtek képességén az
                immunválaszok elnyomására. Ezek a szabályozások magukba foglalják különböző citokinok,
                sejtalapú terápiák és immunellenőrzési gátlók használatát is. Továbbá, néhány sugár- és kemoterápiás
                eljárás immunogén sejthalált (ICD) vált ki. A sugár- vagy kemoterápiával károsodott vagy
                megváltozott sejtek &quot;károsodás-asszociált molekuláris minta jelek&quot; (DMP) kibocsátását
                eredményezik. A DMP molekulák vezetik az immunrendszert ezeknek a sejteknek a
                megsemmisítésére. Ami még fontosabb, néhány tanulmány azt sugallja, hogy a CAP is kiválthatja az
                ICD-t, és ez a következő makrofágstimulációhoz vezet.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Miller és munkatársai és Almeida részletezte a plazma használatának elveit és lehetőségeit az
                immunterápiában. Különösen Lin és mtsai. munkájában bemutatták, hogy a CAP az in vitro A549
                tüdőrák és sugárzással szemben ellenálló nasopharyngealis karcinóma sejtvonalakban kiválthatja az
                ICD-t. Ebben az esetben az extracelluláris ATP kibocsátást az ICD makrofág stimuláció követte.
                Emellett a CAP növelte az extracelluláris ROS szinteket, ami a calreticulin termelés növekedéséhez
                vezetett. A CAP-alapú immunterápia ígéretes lehetőség a glioblasztóma multiforme kezelésére is. Ez
                egy nagyon agresszív ráktípus, amelyben az immunrendszer lefelé szabályozódik. Végül Cheng és
                munkatársai kiemelték a következőket:
            </p>
            <p class="lead" style="text-indent: 15px;">
                <ol>
                    <li class="lead">
                        30 másodpercnyi CAP stimuláció a makrofágokban megnövelt IL-6 és IL12 termelést
                        eredményezett, és csökkent az anti-gyulladásos citokin IL-10 termelése, valamint
                    </li><br>
                    <li class="lead">
                        az IL-2 és az IFN-g termelése megnőtt az egér lépőből származó izolált T-sejtvonalakban a
                        CAP expozíció után. A szerzők megpróbálták a valós körülményeket szimulálni, amikor
                        eltávolították az egérmodell nyirokcsomóit és kitették azokat a CAP-nak. Ezután izolálták a
                        CD4+ T-sejteket mind a kontroll, mind az érintett nyirokcsomókból. Az érintett
                        nyirokcsomókból származó sejtek növelt funkcióval rendelkeztek, amely a növelt IL-2 és IFN-
                        g termelésben nyilvánult meg. A szerzők munkája azzal zárult, hogy megmutatták a hatékony
                        daganatellenes hatást azokban az egerekben, akiknek az CAP-ral érintett T-sejteket ültették át a
                        nyirokcsomóikba. Hatásai a CAP alkalmazásának különböző daganatsejtvonalakon.
                    </li>
                </ol>
            </p>
            <p class="lead" style="text-indent: 15px;">

            </p>
            <p class="lead" style="text-indent: 15px;">

            </p>



        </div>
    </div>

    <div class="px-4 pt-5 my-1 text-center ">
        <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Összefoglalás</h2>
        <div class="col-lg-10 mx-auto">
            {{-- <p class="lead mb-4">Vállalkozásunk hitvallása:</p> --}}
        </div>
    </div>
    
    <div class="container d-flex justify-content-center">
        <div class="col-12 col-lg-9">
            <p class="lead" style="text-indent: 15px;">
                A hideg plazmának jelentős potenciálja van a modern klinikai gyakorlatban való széles körű
                alkalmazásra. Az eddig elvégzett elemzések arra utalnak, hogy a hideg plazma alkalmazása előnyös
                volt számos orvosi területen, anélkül, hogy jelentős negatív hatást gyakorolt volna az egészséges
                sejtekre. Azonban a hideg plazma alkalmazása potenciálisan káros elemeket hozhat létre, és ezért
                szakértői irányítás mellett és megfelelő adagolással kell alkalmazni. Ezenkívül a hideg plazma
                alkalmazását nem csak a felszíni struktúrákra szabad korlátozni, mert a technológiai fejlesztések
                valószínűleg lehetővé teszik egyre kisebb eszközök kifejlesztését, amelyek alkalmasak a plazma
                kisütés alkalmazására belső struktúrákban.
            </p>
            <p class="lead mb-5" style="text-indent: 15px;">
                Ezek a hideg plazma eljárások valószínűleg előnyösek lesznek azon belső szövetek
                kezelésében is, amellett, hogy a daganatkezelés területén is alkalmazhatók. Azonban a hideg plazma
                hatásairól szóló jelenlegi elemzések továbbra is csak sejtvonalakra és állatkísérletekre
                összpontosítanak. Bár ezek a kísérletek hozzáférhetőbbek és könnyebben kivitelezhetők, az emberi
                betegekben a hideg plazma hatásainak szélesebb körű vizsgálata fontos és előnyös lehet a
                rákkutatásban és a regeneratív medicina tanulmányokban. A hideg plazma rutin klinikai gyakorlatba
                való bevezetésének potenciálisan jelentős költségeket és költségeket csökkentő hatása lehet ezekre a
                kezelésekre. Legfontosabb, hogy a hideg plazma kezelési rendszere kevésbé invazív és
                stresszmentesebb lesz a páciensek számára.
            </p>
        </div>
    </div>


    @include('layouts.modal')

    @include('layouts.footer')

</body>

</html>
