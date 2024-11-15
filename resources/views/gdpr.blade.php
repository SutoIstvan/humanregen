<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


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


    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="{{ asset('assets/img/hero-bg-8.jpg') }}" alt="" class="hero-bg">

        <div class="container">
            <div class="row gy-4 text-center">
                <div class="col-lg-12  d-flex flex-column justify-content-center" data-aos="fade-in">
                    <h1><span>Adatkezelési feltételek</span></h1>
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

    </section><!-- /Hero Section -->

    <div class="container">
        <div class="row justify-content-center mt-5">


            <div class=" col-lg-9 col-md-12 col-sm-12">
                <h1>Adatvédelmi szabályzat</h1>

                <h2>1. BEVEZETÉS</h2>
                <p>A Kópis és Társa Kft. (a továbbiakban: Adatkezelő) tevékenysége során fokozottan ügyel a személyes
                    adatok védelmére, a kötelező jogi rendelkezések betartására, a biztonságos és tisztességes
                    adatkezelésre. Az Adatkezelő adatai:</p>
                <ul>
                    <li>Cégnév: Kópis és Társa Kft</li>
                    <li>Cégjegyzékszám: 17-09-003607</li>
                    <li>Székhely: 7030 Paks, Vasút u. 10.</li>
                    <li>Adószám: 11806996-2-17</li>
                </ul>
                <p>Az Adatkezelő a rendelkezésére bocsátott személyes adatokat minden esetben a hatályos magyar és
                    európai jogszabályoknak, valamint etikai elvárásoknak eleget téve kezeli, minden esetben megteszi
                    azokat a technikai és szervezési intézkedéseket, amelyek a megfelelő biztonságos adatkezeléshez
                    szükségesek.</p>
                <p>A jelen szabályzat a következő hatályos jogszabályok alapján került kialakításra:</p>
                <ul>
                    <li>2011. évi CXII törvény az információs önrendelkezési jogról és az információszabadságról
                        (Infotv)</li>
                    <li>2016/679/EU Rendelet a természetes személyeknek a személyes adatok kezelése tekintetében történő
                        védelméről és az ilyen adatok szabad áramlásáról, valamint a 95/46/EK Rendelet hatályon kívül
                        helyezéséről</li>
                </ul>
                <p>Az adatkezelő fenntartja magának a jogot, hogy az adatvédelmi szabályzatát megváltoztassa, ez esetben
                    a módosított szabályzatoát nyilvánosan közzéteszi.</p>

                <h2>2. ÉRTELMEZŐ RENDELKEZÉSEK</h2>
                <p><strong>Adat:</strong> adatnak nevezzük a valamiféle jelentéssel bíró információt. Az adat
                    informatikai megközelítésben számokkal leírható dolog, amely rögzíthető, feldolgozható, törölhető,
                    tehát kezelhető.</p>
                <p><strong>Adatvédelem:</strong> a személyes adatok jogszerű kezelését, az érintett személyek védelmét
                    biztosító alapelvek, szabályok, eljárások, adatkezelési eszközök és módszerek összességét jelenti,
                    amelynek célja az érintett személyek jogainak védelme.</p>
                <p><strong>Személyes adat:</strong> azonosított vagy azonosítható természetes személyre vonatkozó
                    bármely információ személyes adatnak minősül.</p>
                <p><strong>Érintett:</strong> bármely meghatározott, személyes adat alapján azonosított vagy -
                    közvetlenül vagy közvetve - azonosítható természetes személy.</p>
                <p><strong>Hozzájárulás:</strong> az érintett akaratának önkéntes és határozott kinyilvánítása, amely
                    megfelelő tájékoztatáson alapul, és amellyel félreérthetetlen beleegyezését adja a rá vonatkozó
                    személyes adat - teljes körű vagy egyes műveletekre kiterjedő – kezeléséhez.</p>
                <p><strong>Tiltakozás:</strong> az érintett nyilatkozata, amellyel személyes adatának kezelését
                    kifogásolja, és az adatkezelés megszüntetését, illetve a kezelt adat törlését kéri.</p>
                <p><strong>Adatkezelő:</strong> az a természetes vagy jogi személy, illetve jogi személyiséggel nem
                    rendelkező szervezet, aki vagy amely önállóan vagy másokkal együtt az adat kezelésének célját
                    meghatározza, az adatkezelésre (beleértve a felhasznált eszközt) vonatkozó döntéseket meghozza és
                    végrehajtja, vagy az Adatfeldolgozóval végrehajtatja.</p>
                <p><strong>Adatbiztonság:</strong>
                    Az adatbiztonság egy követelmény, a jogosulatlan hozzáférés, megváltoztatás, továbbítás,
                    nyilvánosságra hozatal, törlés vagy megsemmisítés, valamint a véletlen megsemmisülés és sérülés,
                    továbbá az alkalmazott technika megváltozásából fakadó hozzáférhetetlenné válás elleni
                    tevékenységrendszer, technikai és szervezési intézkedések összessége, amelyek az adat- és
                    titok-védelmi
                    szabályok érvényre juttatásához szükségesek.
                </p>
                <p><strong>Adattovábbítás:</strong>
                    az adat bárki számára történő hozzáférhetővé tétele.
                </p>
                <p><strong>Nyilvánosságra hozatal:</strong>
                    az adat meghatározott harmadik személy számára történő hozzáférhetővé tétele.
                </p>
                <p><strong>Adattörlés:</strong>
                    az adat felismerhetetlenné tétele oly módon, hogy a helyreállítása többé nem lehetséges
                </p>
                <p><strong>Adatmegjelölés:</strong>
                    az adat azonosító jelzéssel ellátása annak megkülönböztetése céljából.
                </p>
                <p><strong>Adatzárolás:</strong>
                    az adat azonosító jelzéssel ellátása további kezelésének végleges vagy meghatározott időre
                    történő korlátozása céljából.
                </p>
                <p><strong>Adatmegsemmisítés:</strong>
                    az adatot tartalmazó adathordozó teljes fizikai megsemmisítése.
                </p>
                <p><strong>Adatfeldolgozás:</strong>
                    az adatkezelési műveletekhez kapcsolódó technikai feladatok elvégzése, függetlenül a
                    mű-veletek végrehajtásához alkalmazott módszertől és eszköztől, valamint az alkalmazás helyétől,
                    feltéve
                    hogy a technikai feladatot az adaton végzik.
                </p>
                <p><strong>Adatfeldolgozó:</strong>
                    az a természetes vagy jogi személy, illetve jogi személyiséggel nem rendelkező
                    szervezet, aki vagy amely szerződés alapján - beleértve a jogszabály rendelkezése alapján kötött
                    szerződést is - adatok feldolgozását végzi.
                </p>
                <p><strong>Adatállomány:</strong>
                    az egy nyilvántartásban kezelt adatok összessége.
                </p>
                <p><strong>Harmadik személy:</strong>
                    olyan természetes vagy jogi személy, illetve jogi személyiséggel nem rendelkező
                    szervezet, aki vagy amely nem azonos az érintettel, az adatkezelővel vagy az adatfeldolgozóval.
                </p>
                <p><strong>Adatvédelmi incidens:</strong>
                    személyes adat jogellenes kezelése vagy feldolgozása, így különösen a
                    jogosulatlanhozzáférés, megváltoztatás, továbbítás, nyilvánosságra hozatal, törlés vagy
                    megsemmisítés,
                    valamint a véletlen megsemmisülés és sérülés.
                </p>
                <h2>3. AZ ADATVÉDELEM ALAPELVEI</h2>
                <p>A célhoz kötöttség elve: az alapelv azt jelenti, hogy személyes adatok kezelése kizárólag
                    meghatározott, egyértelmű és törvényes célból történhet, a másik pedig az, hogy az adatok kezelése
                    nem végezhető célokkal össze nem egyeztethető módokon.</p>
                <p>Arányosság, szükségesség, adattakarékosság elve: kizárólag a cél megvalósulásához szükséges adatok
                    kezelhetők, amelyek nem relevánsak, nem szükségesek az adatkezeléshez, azokat nem lehet kezelni.</p>
                <p>Jogszerűség, tisztességes eljárás, átláthatóság elve: az adatok kezelését jogszerűen és
                    tisztességesen, valamint az érintett számára átlátható módon kell végezni. Jogszerű egy adatkezelés,
                    ha megfelel a mindenkor hatályos jogszabályoknak és törvényes célt szolgál. Tisztességes akkor egy
                    adatkezelés, ha az érintett megfelelő, teljeskörű tájékoztatást kapott az adatkezelésről. Az
                    átláthatóság elsősorban a tájékoztatásban játszik fontos szerepet. Arról szól, hogy az érintettek
                    könnyen megérthessék azt, hogy hogyan történik adataik kezelése, így a számukra nyújtott
                    tájékoztatás tömör, könnyen hozzáférhető és könnyen érthető, világos és közérthető nyelvezetű.</p>
                <p>A pontosság, naprakészség elve: a személyes adatoknak pontosnak és szükség esetén naprakésznek kell
                    lenniük; minden ésszerű intézkedést meg kell tenni annak érdekében, hogy az adatkezelés céljai
                    szempontjából pontatlan személyes adatokat haladéktalanul töröljék vagy helyesbítsék.</p>
                <p>A korlátozott tárolhatóság elve: A személyes adatok tárolásának olyan formában kell történnie, amely
                    az érintettek azonosítását csak a személyes adatok kezelése céljainak eléréséhez szükséges ideig
                    teszi lehetővé; a személyes adatok ennél hosszabb ideig történő tárolására csak akkor kerülhet sor,
                    amennyiben a személyes adatok kezelésére a GDPR 89. cikk (1) bekezdésének megfelelően közérdekű
                    archiválás céljából, tudományos és történelmi kutatási célból vagy statisztikai célból kerül majd
                    sor, a GDPR-ban az érintettek jogainak és szabadságainak védelme érdekében előírt megfelelő
                    technikai és szervezési intézkedések végrehajtására is figyelemmel (GDPR 5. cikk 1. e) pontja).</p>
                <p>Az integritás és bizalmasság jelleg elve: a személyes adatok kezelését oly módon kell végezni, hogy
                    megfelelő technikai vagy szervezési intézkedések alkalmazásával biztosítva legyen a személyes adatok
                    megfelelő biztonsága, az adatok jogosulatlan vagy jogellenes kezelésével, véletlen elvesztésével,
                    megsemmisítésével vagy károsodásával szembeni védelmet is ideértve (GDPR 5. cikk 1. f) pontja).
                </p>
                <p>
                    Elszámolhatóság elve: az adatkezelőknek az adatkezelés megtervezésétől kezdve, az adatkezelés
                    megkezdésén át, egészen a kezelt adatok törléséig valamennyi adatkezelési műveletet úgy kell
                    megvalósítaniuk, hogy bármelyik pillanatban bizonyítani tudják, hogyan feleltek meg az adatvédelmi
                    előírásoknak.
                </p>
                <h2>4. AZ ADATKEZELŐK KÖTELEZETTSÉGEI</h2>
                <h2>1. Tájékoztatás kötelezettsége</h2>
                <p>Az adatvédelem egyik alappillére a tájékoztatás kötelezettsége, mely minden adatkezelőre egyformán
                    kötelező.</p>

                <h2>2. Adatkezelések nyilvántartása</h2>
                <p>Minden olyan adatkezelést be kell jelenteni, amely nem esik az Info tv-ben megnevezett kivételek
                    közé.</p>

                <h2>3. Adattovábbításokkal kapcsolatos kötelezettségek</h2>
                <p>Önkéntes hozzájárulás, mint jogalap alkalmazása esetén az érintettet előzetesen tájékoztatni kell és
                    hozzájárulását kell kérni adatainak továbbítását megelőzően.</p>

                <h2>4. Kötelező szervezeti szabályozás</h2>
                <p>A személyes adatok védelmére vonatkozó szabályzat, amelyet az Unió valamely tagállamának területén
                    tevékenységi hellyel rendelkező adatkezelő vagy adatfeldolgozó egy vagy több harmadik országban a
                    személyes adatoknak az ugyanazon vállalkozáscsoporton vagy közös gazdasági tevékenységet folytató
                    vállalkozások ugyanazon csoportján belüli adatkezelő vagy adatfeldolgozó részéről történő
                    továbbítása vagy ilyen továbbítások sorozata tekintetében követ.</p>

                <h2>5. Érintetti jogérvényesítés elősegítése</h2>
                <p>Az adatvédelmi szervezetet nem elegendő leírni, kidolgozni, azt élővé tenni javasolt egyrészt oktatás
                    segítségével, másrészt önellenőrzéssel, a működés begyakorlásával, begyakoroltatásával. A
                    munkavállalóknak meg kell érteniük azt, hogy az érintetti jogok elősegítése az adatkezelő
                    (munkáltató) fontos feladata.</p>

                <h2>5. AZ ÉRINTETTEK JOGAI</h2>
                <h2>1. A tisztességes és átlátható adatkezelés elve</h2>
                <p>A tisztességes és átlátható adatkezelés elve megköveteli, hogy az érintett tájékoztatást kapjon az
                    adatkezelés tényéről és céljairól (GDPR preambulum 60. pont), valamint más tényezőkről. A
                    tájékoztatást az adatgyűjtés időpontjában kell az érintett részére megadni, illetve ha az adatokat
                    nem az érintettől, hanem más forrásból gyűjtötte az adatkezelő, úgy az eset körülményeit figyelembe
                    véve, azt ésszerű határidőn belül kell rendelkezésre bocsátani.</p>

                <p>A tájékoztatás joga alapvetően megilleti az érintetteket, nem kell külön kérniük a tájékoztatást, az
                    adatkezelőknek kérdés, kérés nélkül is informálni kell az érintetteket minimálisan a következőkről:
                </p>
                <ul>
                    <li>adatkezelő személye</li>
                    <li>adatvédelmi tisztviselő</li>
                    <li>adatkezelés célja</li>
                    <li>adatkezelés jogalapja</li>
                    <li>kezelt adatok köre</li>
                    <li>adattovábbítás címzettje</li>
                    <li>érintettek köre</li>
                    <li>az adatkezelés időtartama</li>
                    <li>személyes adatok forrása</li>
                    <li>adatkezelés módja</li>
                    <li>érintettek jogai</li>
                </ul>

                <h2>2. Az érintett jogai</h2>
                <p>Az érintett jogosult arra, hogy kérésére az adatkezelő indokolatlan késedelem nélkül helyesbítse a rá
                    vonatkozó pontatlan személyes adatokat, vagy kérje azok kiegészítését.</p>
                <p>Az érintett jogosult arra, hogy kérésére az adatkezelő indokolatlan késedelem nélkül törölje a rá
                    vonatkozó személyes adatokat, az adatkezelő pedig köteles arra, hogy az érintettre vonatkozó
                    személyes adatokat indokolatlan késedelem nélkül törölje, ha az alábbi indokok valamelyike fennáll:
                </p>
                <ul>
                    <li>a) a személyes adatokra már nincs szükség abból a célból, amelyből azokat gyűjtötték vagy más
                        módon kezelték.</li>
                    <li>b) az érintett visszavonja (a 6. cikk (1) bekezdésének a) pontja vagy a 9. cikk (2) bekezdésének
                        a) pontja értelmében) az adatkezelés alapját képező hozzájárulását, és az adatkezelésnek nincs
                        más jogalapja;</li>
                    <li>c) az érintett a 21. cikk (1) bekezdése alapján (tiltakozás automatizált adatkezelés esetében)
                        tiltakozik az adatkezelése ellen, és nincs elsőbbséget élvező jogszerű ok az adatkezelésre, vagy
                        az érintett a 21. cikk (2) bekezdése alapján (tiltakozás üzletszerzési célú adatkezelés ellen)
                        tiltakozik az adatkezelés ellen;</li>
                    <li>d) a személyes adatokat jogellenesen kezelték;</li>
                    <li>e) a személyes adatokat az adatkezelőre alkalmazandó uniós vagy tagállami jogban előírt jogi
                        kötelezettség teljesítéséhez törölni kell;</li>
                    <li>f) a személyes adatok gyűjtésére a 8. cikk (1) (gyermek adatainak kezelése az információs
                        társadalommal kapcsolatban) bekezdésében említett, információs társadalommal összefüggő
                        szolgáltatások kínálásával kapcsolatosan került sor.</li>
                </ul>

                <p>Az érintett jogosult arra, hogy kérésére az adatkezelő korlátozza az adatkezelést, ha az alábbiak
                    valamelyike teljesül:</p>
                <ul>
                    <li>a) Az érintett vitatja a személyes adatok pontosságát, ez esetben a korlátozás arra az
                        időtartamra vonatkozik, amely lehetővé teszi, hogy az adatkezelő ellenőrizze a személyes adatok
                        pontosságát.</li>
                    <li>b) Az adatkezelés jogellenes, és az érintett ellenzi az adatok törlését, és ehelyett kéri azok
                        felhasználásának korlátozását.</li>
                    <li>c) Az adatkezelőnek már nincs szüksége a személyes adatokra adatkezelés céljából, de az érintett
                        igényli azokat jogi igények előterjesztéséhez, érvényesítéséhez vagy védelméhez.</li>
                    <li>d) Az érintett (a 21. cikk (1) bekezdése szerint) tiltakozott az adatkezelés ellen; ez esetben a
                        korlátozás arra az időtartamra vonatkozik, amíg megállapításra nem kerül, hogy az adatkezelő
                        jogos indokai elsőbbséget élveznek-e az érintett jogos indokaival szemben.</li>
                </ul>

                <h2>3. Tiltakozás és jogorvoslat</h2>
                <p>Az érintett jogosult arra, hogy a saját helyzetével kapcsolatos okokból bármikor tiltakozzon
                    személyes adatainak közérdekű vagy az adatkezelőre ruházott közhatalmi jogosítvány gyakorlásának
                    keretében végzett feladattal kapcsolatos kezelése, vagy az adatkezelő vagy egy harmadik fél jogos
                    érdekeinek érvényesítés kapcsán végzett kezelése ellen, ideértve az említett rendelkezéseken alapuló
                    profilalkotást is.</p>
                <p>Az érintett jogosult arra, hogy a rá vonatkozó, általa egy adatkezelő rendelkezésére bocsátott
                    személyes adatokat tagolt, széles körben használt, géppel olvasható formátumban megkapja, továbbá
                    jogosult arra, hogy ezeket az adatokat egy másik adatkezelőnek továbbítsa.</p>

                <p>Az érintett a jogainak megsértése esetén az adatkezelő ellen bírósághoz vagy az adatvédelmi
                    hatósághoz fordulhat. Jogorvoslati lehetőséggel, panasszal a következő elérhetőségeken lehet élni:
                </p>

                <h3>Kapcsolat:</h3>
                <p><strong>Név:</strong> Nemzeti Adatvédelmi és Információszabadság Hatóság</p>
                <p><strong>Cím:</strong> 1125 Budapest, Szilágyi Erzsébet fasor 22/c.</p>
                <p><strong>Telefon:</strong> 06-1-391-1400</p>
                <p><strong>Fax:</strong> 06-1-391-1410</p>
                <p><strong>E-mail:</strong> ugyfelszolgalat@naih.hu</p>
                <p><strong>Weboldal:</strong> <a href="https://www.naih.hu" target="_blank">naih.hu</a></p>
                <p><strong>Dátum:</strong> 2018. 05. 16.</p>

            </div>

        </div>
    </div>

    @include('layouts.footer')

</body>

</html>
