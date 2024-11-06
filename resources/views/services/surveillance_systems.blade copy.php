<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title_surveillance_systems'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    @include('layouts.nav')
    
    <div class="container col-xxl-12 px-4 py-5 mt-lg-5">
      <div class="row flex-lg-row-reverse align-items-center g-0 py-0">
        <div data-aos="fade-up" data-aos-duration="1000" class="col-12 col-sm-12 col-lg-6">
          <img src="../assets/it.png" class="img-fluid " loading="lazy" style="opacity: 0.7; height:300px">
        </div>
        <div class="col-lg-6 mt-xs-3">
          <h1 class="display-6 text-body-emphasis lh-2 mb-4 mt-2" data-aos="fade-up" style="font-size:39px !important">
            <span class="text-primary">Videómegfigyelő</span> rendszerek – Teljeskörű biztonsági megoldások
          </h1>
          <p class="lead text-body-secondary mt-1 me-4" data-aos="fade-up" data-aos-duration="1000">
            A PAksi Informatika megbízható és korszerű videómegfigyelő rendszereket kínál, amelyek
            biztosítják vállalkozása és ingatlanja teljes körű védelmét. A modern IP alapú
            kamerarendszerek lehetővé teszik a távfelügyeletet, a biztonságos adatmentést, valamint a
            valós idejű megfigyelést. Szolgáltatásaink lefedik a rendszer tervezésétől kezdve a telepítésen
            át a karbantartásig minden szükséges lépést.      
          </p>
        </div>
      </div>
    </div>
    
    <div class="container my-5">
      <div class="col-md-11 mt-2 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-2 text-center">
            Videómegfigyelő rendszerek tervezése
          </h1>
        </div>        
        <p>
          A hatékony videómegfigyelés alapja a precízen megtervezett rendszer. Minden projektünket
          az ügyfél igényeihez szabjuk, figyelembe véve a következőket:
        </p>
      </div>
    </div>

    <div class="container">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-ruler-combined circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Helyszíni felmérés és igények meghatározása:</h5>
              <p class="text-body-secondary">
                Részletes felmérést végzünk a területről, hogy
                az optimális kamerapozíciókat és megfigyelési területeket meghatározhassuk.
              </p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-video circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Kamera típusok kiválasztása:</h5>
              <p class="text-body-secondary">
                Az ügyfél specifikus igényei alapján segítünk kiválasztani a
                legmegfelelőbb kameratípusokat (pl. dome, bullet, PTZ kamerák).
              </p>
            </div>
          </div>
        </div>
  
        <div class="w-100"></div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-square-poll-vertical circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Skálázhatóság:</h5>
              <p class="text-body-secondary">
                A rendszereink tervezésénél figyelembe vesszük a későbbi bővítés
                lehetőségét, így hosszú távon is jól szolgálják a növekvő igényeket.
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
            Telepítés és üzembe helyezés
          </h1>
        </div>        
        <p>
          A videómegfigyelő rendszerek telepítését magasan képzett szakembereink végzik, akik
          garantálják a rendszer megfelelő működését:
        </p>
      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-video circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Kamera telepítés:</h5>
              <p class="text-body-secondary">
                Professzionálisan telepítjük az IP kamerákat, figyelembe véve a legjobb
                látószöget és pozíciót a maximális lefedettség érdekében.
              </p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-tower-cell circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3" >
              <h5>Hálózati integráció:</h5>
              <p class="text-body-secondary">
                A kamerarendszert teljes mértékben integráljuk a meglévő IT
                infrastruktúrába, biztosítva a gyors és stabil adatátvitelt.
              </p>
            </div>
          </div>
        </div>
  
        <div class="w-100"></div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-gears circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Rögzítőeszközök konfigurálása:</h5>
              <p class="text-body-secondary">
                Az adatmentést és a folyamatos felvételt biztosító NVR/DVR
                rögzítők beállítása, hogy az adatok biztonságban legyenek, és könnyen visszakereshetőek
                legyenek.
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
            Távfelügyelet és mobil hozzáférés
          </h1>
        </div>        
        <p>
          A modern videómegfigyelő rendszerek lehetővé teszik a távfelügyeletet, amely bármikor és
          bárhonnan hozzáférést biztosít a kameraképekhez:
        </p>
      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-eye circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Valós idejű megfigyelés:</h5>
              <p class="text-body-secondary">
                Lehetőség van a kamerák valós idejű képeinek megtekintésére akár
                okostelefonon, táblagépen vagy számítógépen keresztül, így mindig szemmel tarthatja a
                létesítményét.
              </p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-play circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3" >
              <h5>Felvétel visszanézés:</h5>
              <p class="text-body-secondary">
                Az IP alapú rendszerek lehetővé teszik, hogy a felvett anyagokat
                könnyen visszakereshessük, rugalmas szűrési lehetőségekkel, mint például időpont vagy
                események alapján.
              </p>
            </div>
          </div>
        </div>

        <div class="w-100"></div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-bell circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Riasztási értesítések:</h5>
              <p class="text-body-secondary">
                A rendszer automatikusan értesítést küld, ha rendellenes mozgást
                érzékel, így azonnal beavatkozhat szükség esetén.
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
            Rendszerkarbantartás és üzemeltetés
          </h1>
        </div>        
        <p>
          A videómegfigyelő rendszerek hatékony és hosszú távú működéséhez rendszeres karbantartás
          szükséges:
        </p>
      </div>

    <div class="container" data-aos="fade-up">
      <div class="row mt-4">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid fa-clipboard-check mt-1 circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Rendszeres ellenőrzések:</h5>
              <p class="text-body-secondary">
                Proaktívan ellenőrizzük a rendszer állapotát, hogy megelőzzük az
                esetleges meghibásodásokat.
              </p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-cloud-arrow-up circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3" >
              <h5>Szoftverfrissítések:</h5>
              <p class="text-body-secondary">
                Gondoskodunk a kamerarendszer szoftvereinek és rögzítő eszközeinek
                naprakészen tartásáról, ezzel biztosítva a rendszer biztonságát és stabil működését.
              </p>
            </div>
          </div>
        </div>

        <div class="w-100"></div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-headset circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Gyors hibaelhárítás:</h5>
              <p class="text-body-secondary">
                Amennyiben probléma merül fel, gyorsan és hatékonyan elhárítjuk a
                hibákat, hogy minimális leállással biztosítsuk a rendszer működését.
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
            IP Kamerarendszerek előnyei
          </h1>
        </div>        
        <p>
          Az IP alapú videómegfigyelő rendszerek számos előnnyel rendelkeznek, amelyek javítják a
          biztonságot és a hatékonyságot:
        </p>
      </div>

    <div class="container" data-aos="fade-up">
      <div class="row mt-4">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid fa-up-right-and-down-left-from-center mt-1 circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Magas felbontású képek:</h5>
              <p class="text-body-secondary">
                A HD és akár 4K felbontású kamerák éles, részletgazdag képeket
                biztosítanak, így könnyen azonosíthatók a részletek.
              </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-mobile circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3" >
              <h5>Távfelügyelet és rugalmas hozzáférés:</h5>
              <p class="text-body-secondary">
                Bárhonnan hozzáférhet a kamerarendszerhez, így az
                üzleti folyamatok folyamatosan ellenőrizhetők.
              </p>
            </div>
          </div>
        </div>

        <div class="w-100"></div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-square-plus circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Könnyű bővíthetőség:</h5>
              <p class="text-body-secondary">
                Az IP kamerarendszerek könnyen bővíthetők további kamerákkal vagy
                rögzítési kapacitással, így mindig igazodnak a vállalkozásod igényeihez.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-puzzle-piece circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Integráció más biztonsági rendszerekkel:</h5>
              <p class="text-body-secondary">
                A videómegfigyelő rendszerek könnyedén
                összekapcsolhatók más biztonsági megoldásokkal, mint például beléptető vagy
                riasztórendszerekkel.
              </p>
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
          A <strong>Paksi Informatika</strong> teljes körű megoldásokat kínál a videómegfigyelő rendszerek terén.
          Tapasztalt szakembereink a tervezéstől a telepítésig biztosítják, hogy vállalkozásod a lehető
          legnagyobb biztonságban legyen. Rendszereink skálázhatók, megbízhatóak, és az igények
          szerint testreszabhatók.
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
