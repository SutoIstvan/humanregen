<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title_computer_services'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    @include('layouts.nav')
    
    <div class="container col-xxl-12 px-4 py-5 mt-lg-5">
      <div class="row flex-lg-row-reverse align-items-center g-0 py-0">
        <div data-aos="fade-up" data-aos-duration="1000" class="col-12 col-sm-12 col-lg-6">
          <img src="../assets/system-administrator.png" class="img-fluid " loading="lazy" style="opacity: 0.7; height:300px">
        </div>
        <div class="col-lg-6 mt-xs-3">
          <h1 class="display-6 text-body-emphasis lh-2 mb-4 mt-5" data-aos="fade-up">
            <span class="text-primary">Rendszergazdai</span> megoldások a zökkenőmentes működésért.
          </h1>
          <p class="lead text-body-secondary mt-1 me-4" data-aos="fade-up" data-aos-duration="1000">
            Cégünk, a Paksi Informatika, teljes körű rendszergazdai szolgáltatásokat kínál, amelyek segítik a vállalkozásodat a zavartalan működés fenntartásában. Szakképzett csapatunk biztosítja a rendszered hatékony üzemeltetését, karbantartását és biztonságát, lehetővé téve a folyamatos fejlődést.
          </p>
        </div>
      </div>
    </div>
    
    <div class="container my-5">
      <div class="col-md-11 mt-2 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-2 text-center">
            Rendszertervezés és telepítés
          </h1>
        </div>        
        <p>
          Ez a folyamat magában foglalja a rendszer kialakításának minden aspektusát, figyelembe véve az üzleti igényeket és követelményeket. A rendszertervezés során részletesen megvizsgáljuk az üzleti folyamatokat, hogy a legoptimálisabb hardver- és szoftvermegoldásokat kínáljuk.
        </p>
      </div>
    </div>

    <div class="container">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-shield circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Hardverbeszerzés:</h5>
              <p class="text-body-secondary">
                A szükséges hardverek kiválasztása az ügyfél specifikációi alapján, beleértve a szerverkonfigurációkat és tárolási megoldásokat.
              </p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-gears circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Szoftverbeszerzés:</h5>
              <p class="text-body-secondary">
                Az üzleti igényekhez és a kiválasztott hardverekhez illeszkedő szoftverek megvásárlása.
              </p>
            </div>
          </div>
        </div>
  
        <div class="w-100"></div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-maximize circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Telepítés és konfigurálás:</h5>
              <p class="text-body-secondary">
                A rendszerek fizikai telepítése és konfigurálása a zökkenőmentes működés érdekében.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container my-3 mb-4">
      <div class="col-md-11 mt-1 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-3 text-center">
            Folyamatos üzemeltetés és karbantartás
          </h1>
        </div>        
        <p>
          A rendszerek folyamatos működésének fenntartása kiemelkedő fontosságú. A rendszeres ellenőrzésekkel biztosítjuk, hogy az IT-rendszerek zavartalanul működjenek.
        </p>
      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-address-card circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Rendszeres ellenőrzések:</h5>
              <p class="text-body-secondary">
                Folyamatosan ellenőrizzük az infrastruktúrát automatikus és manuális felügyeleti folyamatokkal, lehetővé téve a hardverhibák és szoftverproblémák gyors észlelését.
              </p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-fingerprint circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3" >
              <h5>Szoftverfrissítések:</h5>
              <p class="text-body-secondary">
                Rendszeresen frissítjük az operációs rendszereket, alkalmazásokat és biztonsági megoldásokat, hogy a rendszer naprakész maradjon a legújabb hibajavításokkal.
              </p>
            </div>
          </div>
        </div>
  
        <div class="w-100"></div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-table-cells-column-lock circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Hibajavítás és technikai támogatás:</h5>
              <p class="text-body-secondary">
                Probléma esetén gyors hibajavítást és technikai támogatást nyújtunk, biztosítva a rendszer gyors helyreállítását.
              </p>
            </div>
          </div>
        </div>

        {{-- <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="200">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-unlock circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Távfelügyelet:</h5>
              <p class="text-body-secondary">
                Az informatikai rendszerek állapotának folyamatos figyelemmel kísérése távolról. Így az esetleges hibák vagy problémák azonnal felismerhetők és megoldhatók.
              </p>
            </div>
          </div>
        </div> --}}

      </div>
    </div>

    
    <div class="container my-3 mb-4">
      <div class="col-md-11 mt-1 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-3 text-center">
            Távfelügyelet
          </h1>
        </div>        
        <p>
          A távfelügyelet lehetővé teszi a rendszerek folyamatos monitorozását anélkül, hogy személyesen jelen kellene lenni a helyszínen.
        </p>
      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-microchip circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Távoli monitorozás:</h5>
              <p class="text-body-secondary">
                Az informatikai rendszerek folyamatos figyelése távolról, amely lehetővé teszi a hibák azonnali észlelését és megoldását.
              </p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-window-restore circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3" >
              <h5>Azonnali hibakezelés:</h5>
              <p class="text-body-secondary">
                Probléma esetén a távfelügyeleti eszközök azonnal értesítik a rendszergazdát, aki távolról beavatkozik.
              </p>
            </div>
          </div>
        </div>

        <div class="w-100"></div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-clipboard-check circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Kockázatminimalizálás:</h5>
              <p class="text-body-secondary">
                A távfelügyelet révén a kockázatok és leállások minimalizálhatók, mivel az azonnali reakcióidő segít megelőzni a jelentős kieséseket.
              </p>
            </div>
          </div>
        </div>

    <div class="container my-3 mb-4">
      <div class="col-md-11 mt-1 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-3 text-center">
            Biztonsági megoldások
          </h1>
        </div>        
        <p>
          A biztonság minden informatikai rendszer alapköve. A különféle veszélyek és támadások ellen hatékony védelmi mechanizmusokat kell alkalmazni.
        </p>
      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-microchip circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Tűzfalak és vírusvédelem:</h5>
              <p class="text-body-secondary">
                A tűzfalak megakadályozzák az illetéktelen hozzáférést, míg a vírusvédelem folyamatosan blokkolja a kártékony szoftvereket.
              </p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-window-restore circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3" >
              <h5>Adatvédelmi intézkedések:</h5>
              <p class="text-body-secondary">
                Titkosítás és egyéb technikák biztosítják az érzékeny felhasználói és ügyféladatok védelmét.
              </p>
            </div>
          </div>
        </div>

        <div class="w-100"></div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-clipboard-check circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Biztonsági auditok:</h5>
              <p class="text-body-secondary">
                Rendszeres ellenőrzések a rendszer sebezhetőségeinek feltárására és javítására, a biztonság fenntartása érdekében.
              </p>
            </div>
          </div>
        </div>

        {{-- <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-clipboard-check circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Adatmentés és helyreállítás:</h5>
              <p class="text-body-secondary">
                A rendszeres adatmentés elengedhetetlen a hardverhibák, kiberincidensek vagy emberi hibák elleni védelemhez. A gyors adat-helyreállítás biztosítja, hogy adatvesztés esetén az információk gyorsan visszaállíthatók legyenek.
              </p>
            </div>
          </div>
        </div> --}}

      </div>
    </div>

    <div class="container my-3 mb-4">
      <div class="col-md-11 mt-1 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-3 text-center">
            Adatmentés és helyreállítás
          </h1>
        </div>        
        <p>
          Az adatvesztés komoly problémát okozhat, ezért létfontosságú, hogy hatékony adatmentési és helyreállítási megoldásokkal rendelkezzünk.
        </p>
      </div>

    <div class="container" data-aos="fade-up">
      <div class="row mt-4">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid fa-house-laptop mt-1 circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Adatmentési megoldások kidolgozása:</h5>
              <p class="text-body-secondary">
                A rendszeres mentések lehetővé teszik az adatok gyors visszaállítását hardverhiba vagy adatvesztés esetén.              </p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-gears circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3" >
              <h5>Gyors helyreállítás:</h5>
              <p class="text-body-secondary">
                Az adatvesztés utáni helyreállítás révén az adatok rövid időn belül visszaállíthatók, biztosítva a zavartalan üzletmenetet.              </p>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="container my-5">

      <div class="col-md-9 mt-5 text-center justify-content-center g-lg-5 py-5 mx-auto" data-aos="fade-up">
        <h1 class="display-6 text-body-emphasis lh-2 mb-3">
          Miért válasszon minket?
        </h1>
        <p >
          A <strong>Paksi Informatika</strong> garantálja, hogy informatikai rendszerei mindig hatékonyan és biztonságosan működjenek, kihasználva a legújabb technológiák és bevált módszerek előnyeit. Folyamatos támogatásunkkal és felügyeletünkkel ügyfeleink mindig számíthatnak ránk, gyors reagálásunk pedig minimalizálja a rendszerek leállásának idejét. Szolgáltatásainkat teljes mértékben az Ön vállalkozásának igényeihez igazítjuk, legyen szó kis- vagy nagyvállalatról. Ha megbízható és szakértő partnerre van szüksége, válassza a Paksi Informatikát!
        </p>

      </div>
    </div>

    <!-- FOOTER -->

    @include('layouts.footer')
  
    <!-- TOP BUTTON  -->

    <button type="button" class="btn btn-outline-primary btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>
  
  </body>
</html>
