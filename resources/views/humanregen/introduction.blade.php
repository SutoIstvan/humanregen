<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('Bevezetés (Történet) - humanregen.hu'))</title>
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
                    <h1><span>Bevezetés (Történet)</span></h1>
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
        <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Bevezetés (Történet)</h2>
        <div class="col-lg-10 mx-auto">
            {{-- <p class="lead mb-4">Vállalkozásunk hitvallása:</p> --}}
        </div>
    </div>

    <div class="container d-flex justify-content-center">
        <div class="col-12 col-lg-9">
            <p class="lead" style="text-indent: 15px;">
                William Crookes 1879-ben alapozta meg a plazma tudomány alapjait azáltal, hogy kísérletek
                során ionizált gázt hozott létre egy elektromos kisülés csőben, magasfeszültség alkalmazásával egy
                tekercsen keresztül. Az ionizált gázt ragyogó anyagnak nevezték. A jelenlegi &quot;plazma&quot; kifejezést
                majdnem ötven évvel később, 1927-ben Irvin Langmuir vezette be. Azóta a plazmát számos területen
                alkalmazzák az elmúlt évtizedek során, köztük az orvoslásban. A plazmát gyakran ionizált gázként
                határozzák meg, amely a poliatómás gázok molekuláinak bomlásával vagy az elektronok
                eltávolításával az egymolekuláskori gázok héjából keletkezik.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Azonban nem minden ionizált gázt lehet plazmaként tekinteni a következő szigorú
                meghatározás miatt:
            </p>
            <p class="lead" style="text-indent: 15px;">
                <ol>
                    <li>
                        A plazmának makromolekuláris semlegességet (kvázi-semlegességet) kell mutatnia. A
                        plazma külső zavarok hiányában a nettó eredményezett elektromos töltés nulla. Ezért a
                        plazma tartalmazza (majdnem) ugyanazok sűrűségű pozitívan és negatívan töltött
                        részecskéket;
                    </li>
                    <li>
                        A plazmának rendelkeznie kell Debye árnyékolással, ahol a plazma töltött részecskéi
                        hatékonyan elrendeződnek, hogy áramszűrő mezőket hozzanak létre a Debye hossz
                        távolságon belül. Ez a Debye hossztávolságként van meghatározva, és azt mutatja, milyen
                        távolságra hat az egyes töltött részecske elektromos mezőjének befolyása a plazma belső
                        töltött részecskéire;
                    </li>
                    <li>
                        Plazma frekvencia. Ha a plazma elveszti egyensúlyi feltételeit, akkor a belső térterek olyan
                        kollektív részecskemozgást ösztönöznek, amely visszaállítja az eredeti töltéssemlegességet.
                    </li>
                </ol>
            </p>

            <p class="lead" style="text-indent: 15px;">
                Ezt a mozgást a plazmafrekvenciaként hivatkozó természetes rezgési frekvenciával
                jellemezhetjük. A plazmát ezért &quot;egy kvázi-semleges gázként definiálhatjuk, amely sok
                kölcsönhatásba lépő szabad elektront és ionizált atomokat és molekulákat tartalmaz, amelyeket a
                hosszútávú Coulomb erők okozta kollektív viselkedés jellemez&quot;. Ezenkívül a plazmában a töltött
                részecskemozgás elektromos mezőket és áramokat hoz létre, valamint mágneses mezőket generál.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A plazmát magas hőmérsékletre, hőmérsékletre és hőmérsékleten kívül csoportokra is lehet
                osztani. A magas hőmérsékletű plazmában minden részecske (elektronok és nehéz részecskék)
                azonos hőmérsékletű, és ezért hőegyensúlyban vannak. A hőmérsékleti (kvázi-egyensúlyi plazma)
                csak a plazmán belül lévő hőmérsékleti egyensúly területei. Végül a nem-hőmérsékleti (nem-
                egyensúlyi) plazmában olyan részecskék találhatók, amelyek nincsenek hőegyensúlyban. Ezt a
                plazmát &quot;hideg plazmának&quot; nevezik.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A magas hőmérsékletű vagy hőmérsékleti plazmák magasabb elektronsűrűséggel és
                ionizációval rendelkeznek, mint a hideg plazma, amelynek ionizációja csak akár 1% -ig terjed. A
                gyengén ionizált plazmákban a töltéssemleges kölcsönhatások dominálnak a többszörös Coulomb-
                kölcsönhatások terén. Emellett bár az elektron-elektron ütközések hőegyensúlyt érnek el a hideg
                plazmában, és a hőmérsékletük akkor sokkal magasabb, mint az ionok és neutronok hőmérséklete,
                nem tudják átadni kinetikus energiájukat nagyobb részecskéknek.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A magas hőmérsékletű plazma elérheti a 108 K-t, mint a napmagban talált. A hőmérsékleti
                plazma hőmérséklete körülbelül 2 × 104 K lehet, és ezt az értéket viharvillámokban figyelhetjük
                meg. Végül a nem hőmérsékleti plazma hőmérséklete 300 és 1000 K között lehet mesterségesen
                létrehozott körülmények között, például fénycsövekben. A hideg plazma kibocsátása elérhető
                alacsony nyomáson és légköri nyomáson is.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Az alacsony nyomású hideg plazmát először az 1960-as évek végén alkalmazták felületek
                fertőtlenítésére, és bizonyos szempontból hatékonyabbnak bizonyult, mint a hagyományos
                sterilizálás. Ezzel szemben a hideg atmoszférikus plazma (CAP) előnyei a mikrobás terhelés
                csökkentésében csak a 1990-es évek második felében kerültek felfedezésre. Azonban a CAP jobb
                alternatívát nyújt a modern orvoslás számára, mint a hideg plazma alacsony nyomáson generált
                változata. A CAP alkalmazása könnyebb folyamat is, mint az alacsony nyomású plazma, mivel
                hordozható eszközből generálható, ami lehetővé teszi a fertőzött sejtek és szövetek könnyebb
                elérését, mint amit az alacsony nyomású hideg plazma igényelő nagy vákum generáló rendszer
                biztosít. Emellett a legtöbb alacsony nyomású plazmát generáló rendszer nagyon költséges. Emellett
                gyakorlatilag lehetetlen bármely testrészét a rendszerbe helyezni és kitéve lenni a
                plazmakibocsátásnak. Ráadásul az állati és emberi szövetekben víz található, és jelenléte nem
                kívánatos alacsony nyomású körülmények között.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Végül bár az alacsony nyomású plazmakibocsátást lehet szabályozni, jellege nagyon eltérő és
                erősebb, mint az atmoszférikus nyomáson létrehozott plazma kibocsátása, és általában nem alkalmas
                emberi vagy állati sejtek vagy szövetek alkalmazására. Az alacsony nyomáson generált hideg plazma
                azonban hasznos lehet az orvoslásban. Példák erre a &quot;flash-sterilizáció&quot;, implantátumok és
                szövetmérnöki termékek felületmódosításainak felhasználása.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Bár a CAP nem éri el az alacsony nyomású plazma sterilizációs és fertőtlenítési lehetőségeit,
                továbbra is hatékony a mikrobás terhelés csökkentésében. Legfontosabbként a CAP kevésbé intenzív
                hatásai lehetővé teszik a közvetlen alkalmazását a sejtekre és szövetekre , és a mikrobás terhelés
                csökkentési képessége lehetővé teszi, hogy jó alternatívát jelentsen az antibiotikumok helyett, és
                szembeszálljon a növekvő antibiotikum rezisztenciával rendelkező baktériumtörzsekkel.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A plazma kibocsátás elsősorban az UV sugárzás kialakulásával, a reaktív oxigén (ROS) és
                nitrogén (RNS) vegyületek kialakításával, valamint az elektromos áram kialakításával csökkenti a
                baktériumok életképességét. A plazma kibocsátás által létrehozott oxigén alapú vegyületek közé
                tartozik a hidroxil (OH), hidrogén-peroxid (H2O2), szuperoxid (O2−•), hidroxil radikális (•OH),
                singulett oxigén (1O2) és ózon (O3). A nitrogén alapú vegyületek közé tartozik a nitrogén-monoxid
                (•NO), a nitrogén-dioxid (•NO2), a dinitrogén tetroxid (N2O4), a nitrogén-trioxid (NO3), a nekrózis-
                oxid (N2O) és a peroxinitrit (ONOO-). A reaktív vegyületek létrehozhatók a plazma-lég
                kölcsönhatás vagy a plazma-folyadék kölcsönhatás révén. Míg a hidroxil radikálisok és a nitrogén-
                oxidok általában a plazma-lég kölcsönhatás eredményeként képződnek, a nitritek, nitrátok és H2O2,
                amelyek hosszabb élettartamúak, a plazma-folyadék kölcsönhatás eredményeként képződnek.
                Például ez utóbbi kölcsönhatás akkor fordul elő, amikor a tenyésztőközegben található sejteket
                plazmának teszik ki. Emellett a CAP pozitív töltésű ionokat, például N2+-ot is generál, és
                elektronokat is.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Azonban a prokarióták, baktériumsejtek különböznek az eukarióták emberi és állati sejtektől,
                és a daganatsejtek különböznek az egészséges sejtektől. Ezenkívül az összes sejt eltérően viselkedhet
                in vitro körülmények között, és eltérően reagálhat a sejtekre az élő szervezet szövetekben. Ez azt
                hangsúlyozza, hogy a CAP eszközök különböző válaszok lehetőségét kínálják ezekben a
                sejttípusokban, valamint az in vitro és in vivo körülmények között. Azonban általában úgy vélik,
                hogy a kis dózisú plazmakezelés serkenti a sejtek életképességét, és fokozza a proliferációt,
                differenciálódást és migrációt, míg a nagy dózisok sejtapoptózist kellene kiváltaniuk.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A klinikai gyakorlatban használt plazmaeszközök kialakításra kerültek annak érdekében, hogy
                ne veszélyeztessék az egészséges sejteket. Többlépcsős teszteken mennek keresztül, és jelenleg
                nincsenek jelentős mellékhatásokkal összefüggésben. Azonban a megfelelő CAP adagolást a klinikai
                gyakorlatban szorosan szabályozni kell, és ez a kezelés típusától függ. Például a plazmaforrás és a
                kezelendő objektum közötti távolságot gondosan be kell állítani. Itt Nastuda és munkatársai
                kimutatták, hogy a plazmajet alkalmazásának hatása jelentősen változhat, akár egy centiméteres
                különbség is lehet a csőfej és az emberi bőr között.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A szerzők számottevő különbségeket találtak a plazma terjedésében és az áram áramlásában az
                emberi szöveteken keresztül, amikor a bőr-csőfej rés közét 15 mm-ről 5 mm-re csökkentették.
                Emellett nem zárható ki, hogy a CAP alkalmazásnak nincs néhány minimális negatív hatása a
                molekuláris szinten. Ezek az eredmények és lehetőségek mind folyamatos elemzés tárgyai, de a
                jelenlegi eredmények azt sugallják, hogy a be nem bizonyított káros hatások a CAP sok előnyével
                szemben állnak.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Végül valószínű, hogy a CAP klinikai gyakorlatban történő alkalmazására vonatkozóan
                további lehetőségek és nagyobb előnyök mutatkoznak majd a jövőben, mivel a CAP tanulmányok
                többsége az utóbbi 15 év során zajlott. Míg a CAP alkalmazható esztétikai eljárásokban, itt
                összefoglaljuk a CAP alkalmazást komolyabb orvosi állapotok esetében. Ezek különösen magukban
                foglalják az akut és krónikus sebeket, valamint a szájüregi bakteriális fertőzéseket és daganatterápiát.
                Ezzel párhuzamosan felfedezzük a plazma potenciálját a regeneratív orvoslásban és a biológiai
                mérnöki alkalmazásokban.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A klinikailag alkalmazott és kísérletileg tesztelt CAP eszközöket három fő kategóriába
                sorolják:
            </p>
            <p class="lead" style="text-indent: 15px;">
                <ol>
                    <li>
                        azok, amelyek közvetlen kibocsátáson alapulnak
                    </li>
                    <li>
                        azok, amelyek közvetett kibocsátáson alapulnak
                    </li>
                    <li>
                        hibrid típusok.
                    </li>
                </ol>
            </p>
            <p class="lead" style="text-indent: 15px;">
                A közvetlen dielektromos gáthozadék-kibocsátás (DBD) magasfeszültség-elektród és egy
                földelt elektród között történik. Az elektrodok mindkettő vagy egyenként dielektromos réteggel
                lehetnek borítva, vagy a dielektromos anyag a két elektród közötti térben helyezkedhet el. A DBD
                eszközöket csak váltakozó vagy pulzáló magasfeszültséggel szabad feltölteni a kapacitív kapcsolódás
                biztosítása érdekében. Az elektromos mező hatása alatt a dielektromos gát &quot;megállítja&quot; az
                elektronokat és ionokat az elsődleges gázfelbontás után. Az ionok és elektronok elektromos mezője
                eltakarja a külső forrás elektromos mezőjét. Ha ez az állapot fennmarad, az kibocsátásveszteséghez
                vezet, és az kibocsátás megőrzése érdekében módosítani kell a külső feszültséget. A felbomlás akkor
                következik be, amikor növekvő váltakozó áramfeszültséget alkalmaznak, és a kibocsátási
                tevékenység megszűnik, amikor a maximális feszültséget eléri. Továbbá a pulzussal működő DBD-k
                alkalmazásakor két felbomlás következik be ugyanabban a periódusban. Az elsődleges felbomlást a
                magasfeszültségű impulzus okozza, és a töltéshordozó által létrehozott elektromos mező elegendő az
                újabb felbomlás kiváltásához a feszültség csökkenése közben. Ez egy &quot;visszafelé történő kibocsátás&quot;
                formájában jelentkezik. A DBD eszközöknek számos variációja és kialakítása van, és az egyik
                legpraktikusabb és a legalkalmasabb a gyógyászati alkalmazásra a lebegő elektródos DBD (FE-
                DBD). Műszakilag a FE-DBD eszközök nem tartalmaznak földelt elektrodát, és ezt érintett sejtek
                vagy szövetek váltják fel. A DBD eszközök nagyobb intenzitást és rugalmasabb és kontrolláltabb
                kibocsátást biztosítanak. Emellett képesek plazmát generálni csak levegőben, és nincs szükség
                hordozógázokra. Azonban a kibocsátási terület viszonylag korlátozott, mivel annak két elektród
                között kell elhelyezkednie, és a konstans távolságot fenn kell tartani; ez sima, lapos felületet igényel.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A közvetett kibocsátás olyan eszközökkel történik, amelyeket általában Plazma sugár, Plazma
                toll vagy Plazma láng néven emlegetnek. Ezek az eszközök hasonlók a közvetett kibocsátású
                eszközökhöz abban, hogy két egymással szemben lévő elektromosan töltött elektromos kibocsátást
                generálnak közöttük, de itt a hordozógáz irányítja a plazma kibocsátást. Ennek eredményeként a
                kibocsátás nem érinti az objektumot az elektrodok között, hanem a gázáram irányába halad. Ennek
                következtében a céleszközt kívül helyezhetik el az eszközön, és az érintett terület állítható. Kevesebb
                ROS és RNS vegyületet termel, és a kibocsátás nehezebben ellenőrizhető, mint a DBD eszközökkel.
                Végül a közvetett eszközök által generált plazma erősebb minden UV tartományban, de ellentétben a
                DBD eszközökkel, nem állít elő elektromos áramot.
            </p>
            <p class="lead" style="text-indent: 15px;">
                A hibrid plazmaeszközök ezeket az elveket kombinálják, de jelenleg csak kísérleti szinten
                alkalmazzák őket. Ezek az eszközök egy földelt hálózatelektrodán mikrofelbomlásokat hoznak létre.
                Egységes kibocsátás van, nincs hatás az elektrodok közötti objektumra, és az eszközt viszonylag
                könnyű ellenőrizni. Azonban ezek az eszközök enyhén hajlamosabbak az alkatrész kopására és a
                későbbi romlásra. Ez különösen észrevehető nedves környezetben és közvetlen érintkezés után a
                kezelt sejtekkel és szövetekkel.
            </p>
            <p class="lead" style="text-indent: 15px;">
                Az orvosi gyakorlatban használt plazma eszközök között három specifikus típus található,
                amelyek az orvosi gyakorlatban lettek tanúsítva. Az első hitelesített eszköz a kINPen® MED plazma
                toll (INP Greifswald/neoplas tools GmbH, Greifswald, Németország) volt. A második a
                PlasmaDerm® VU-2010 DBD eszköz volt, amely dielektromos plazma kibocsátási technológián
                alapul (CINOGY Technologies GmbH, Duderstadt, Németország), és a legújabb hitelesített eszköz a
                SteriPlas plazma láng eszköz (Adtec Ltd., London, Egyesült Királyság). Azonban több módosítással
                rendelkező eszközt is teszteltek laboratóriumi és kísérleti körülmények között, és várnak az esetleges
                klinikai alkalmazásra történő hitelesítésre.
            </p>
            <p class="lead mb-5" style="text-indent: 15px;">
                Végül maga a plazma alkalmazása közvetlen és közvetett is lehet. A közvetlen plazma
                alkalmazás során a sejtvonalaknak in vitro kitéve vannak a plazma kibocsátásnak, az állatmodellek
                és az emberi szövetek a kibocsátásnak vannak kitéve in vivo. Ezzel szemben a plazma által érintett
                vagy aktivált közeg vagy oldat közvetett alkalmazásra kerül. Ezután a sejtnövekedéshez használják
                vagy közvetlenül beadható a vizsgált személyekbe, például egér xenograftokba. Emellett a hosszú
                távú vegyületek, ideértve a nitrátokat, nitriteket és H2O2-t, általában megőrzésre kerülnek a plazma-
                aktivált közegben (PAM).
            </p>
        </div>
    </div>    





    @include('layouts.modal')
    
    @include('layouts.footer')

</body>

</html>
