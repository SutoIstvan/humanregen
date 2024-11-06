<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title_web_development'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    @include('layouts.nav')
    
    <div class="container col-xxl-12 px-4 py-5 mt-lg-5">
      <div class="row flex-lg-row-reverse align-items-center g-0 py-0">
        <div data-aos="fade-up" data-aos-duration="1000" class="col-12 col-sm-12 col-lg-6">
          <img src="../assets/web-services.png" class="img-fluid " loading="lazy" style="opacity: 0.7; height:350px">
        </div>
        <div class="col-lg-6 mt-xs-3">
          <h1 class="display-6 text-body-emphasis lh-2 mb-4 mt-5" data-aos="fade-up">
            <span class="text-primary">Webfejlesztés</span> - Modern megoldások minden platformra
          </h1>
          <p class="lead text-body-secondary mt-1 me-4" data-aos="fade-up" data-aos-duration="1000">
            A Paksi Informatika webfejlesztési szolgáltatásokat kínál. Modern, felhasználóbarát és keresőoptimalizált weboldalakat készítünk, amelyek minden eszközön jól működnek. Fejlesztői csapatunk a legújabb technológiákat alkalmazza, hogy egyedi igényeknek megfelelő, hatékony megoldásokat nyújtson, garantálva ezzel a sikeres online jelenlétet.
          </p>
        </div>
      </div>
    </div>

    <div class="container my-3 mb-4">
      <div class="col-md-11 mt-1 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-3 text-center">
            Webfejlesztés
          </h1>
        </div>        
        <p>
          Cégünk szakértői webfejlesztési szolgáltatásokat nyújtanak, amelyek a vállalkozásod üzleti és felhasználói igényeihez igazodnak. <br> Fő profilunk:
        </p>
      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-code circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Weboldalak fejlesztése és karbantartása:</h5>
              <p class="text-body-secondary">Modern, reszponzív és felhasználóbarát weboldalakat készítünk, amelyek minden eszközön jól működnek.</p>
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
              <h5>Webalkalmazások:</h5>
              <p class="text-body-secondary">Üzleti folyamatokra szabott egyedi webalkalmazásokat fejlesztünk, amelyek javítják a hatékonyságot és a felhasználói élményt.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
    
    <div class="container my-5">
      <div class="col-md-11 mt-2 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-2 text-center">
            Weboldal tervezése
          </h1>
        </div>        
        <p>
          A jól megtervezett weboldal alapvető fontosságú a modern vállalkozások online jelenlétéhez. Minden webfejlesztési projektünk az alábbi szempontokra összpontosít:
        </p>
      </div>
    </div>

    <div class="container">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-network-wired circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Üzleti igények felmérése:</h5>
              <p class="text-body-secondary">
                Minden ügyfél esetében részletesen felmérjük a vállalkozás egyedi igényeit, hogy az online megjelenés hatékonyan támogassa a célokat és az üzleti stratégiát.
              </p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-diagram-project circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Egyedi webfejlesztési megoldások:</h5>
              <p class="text-body-secondary">
                A legújabb technológiák és a reszponzív design alkalmazásával olyan weboldalakat fejlesztünk, amelyek felhasználóbarátak, gyorsak, és minden eszközön jól működnek.
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
              <h5>Skálázhatóság és bővíthetőség:</h5>
              <p class="text-body-secondary">
                A fejlesztett weboldalak könnyen bővíthetők, hogy a későbbi igényeknek és növekedési lehetőségeknek is megfeleljenek.
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
            Használt technológiák:
          </h1>
        </div>        
        <p>
          Webfejlesztési projektjeink során olyan bevált technológiákat alkalmazunk, mint a PHP, MySQL, HTML és CSS, amelyek lehetővé teszik modern, dinamikus és felhasználóbarát weboldalak készítését.
        </p>
      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-brands fa-php mt-1 circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>
                PHP - Dinamikus webfejlesztés alapja
              </h5>
              <p class="text-body-secondary">
                Szerveroldali nyelv, amely lehetővé teszi a dinamikus weboldalak létrehozását és a tartalmak valós idejű kezelését.
              </p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-database circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3" >
              <h5>
                MySQL - Adatbáziskezelés:
              </h5>
              <p class="text-body-secondary">
                Hatékony és biztonságos megoldás a dinamikus tartalom és adatok kezelésére, nagy sebességű adattárolást biztosít.
              </p>
            </div>
          </div>
        </div>
  
        <div class="w-100"></div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-brands mt-1 fa-html5 circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>HTML 5 - Weboldal vázának kialakítása:</h5>
              <p class="text-body-secondary">
                A weboldal szerkezete és tartalma HTML 5 segítségével készül, ez biztosítja a weboldal alapjait.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-brands mt-1 fa-css3 circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>CSS - Stílus és megjelenés:</h5>
              <p class="text-body-secondary">
                A weboldal esztétikai megjelenéséért felelős, és biztosítja, hogy az oldal reszponzív és felhasználóbarát legyen.              </p>
            </div>
          </div>
        </div>

      </div>
    </div>

    {{-- <div class="container my-3 mb-4">
      <div class="col-md-11 mt-1 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-3 text-center">
            Weboldalak karbantartása és felügyelete
          </h1>
        </div>        
        <p>
          A Paksi Informatika által készített weboldalak folyamatos karbantartása és felügyelete elengedhetetlen a megbízható működés és a kiváló felhasználói élmény biztosítása érdekében. Szolgáltatásaink a következőket tartalmazzák:
        </p>
      </div>
    </div> --}}

    {{-- <div class="container" data-aos="fade-up">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-clipboard-check circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Rendszeres Ellenőrzések és Hibamegelőzés:</h5>
              <p class="text-body-secondary">
                Karbantartási eljárásaink segítenek minimalizálni a potenciális hibák kockázatát, biztosítva a weboldal zökkenőmentes működését.
              </p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-bug circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3" >
              <h5>Hibaelhárítás:</h5>
              <p class="text-body-secondary">
                Gyorsan és hatékonyan megoldjuk a weboldalon felmerülő problémákat, garantálva a felhasználói élmény folyamatosságát.
              </p>
            </div>
          </div>
        </div>
  
        <div class="w-100"></div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-laptop-file circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Távfelügyelet:</h5>
              <p class="text-body-secondary">
                Modern távfelügyeleti megoldásaink révén folyamatosan figyelemmel kísérjük a weboldal működést, és azonnal reagálunk a felmerülő problémákra.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div> --}}

    {{-- <div class="container my-3 mb-4">
      <div class="col-md-11 mt-1 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-3 text-center">
            IP Kamerarendszerek és Beléptető rendszerek integrációja
          </h1>
        </div>        
        <p>
          A gyengeáramú hálózatok részeként kiemelt figyelmet fordítunk az IP kamerarendszerek és
          beléptető rendszerek integrálására is:
        </p>
      </div>
    </div> --}}

    {{-- <div class="container" data-aos="fade-up">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-video circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>IP Kamerarendszerek telepítése:</h5>
              <p class="text-body-secondary">
                Komplett IP alapú kamerarendszerek kiépítése és
                integrálása a vállalati hálózattal, távfelügyeleti lehetőségekkel.
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
              <h5>Beléptető rendszerek telepítése:</h5>
              <p class="text-body-secondary">
                Elektronikus beléptető rendszerek (pl. RFID, biometrikus
                rendszerek) tervezése és telepítése, amelyek teljes mértékben integrálódnak a hálózati
                infrastruktúrába.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div> --}}


    <div class="container my-5">

      <div class="col-md-9 mt-5 text-center justify-content-center g-lg-5 py-5 mx-auto" data-aos="fade-up">
        <h1 class="display-6 text-body-emphasis lh-2 mb-3">
          Miért válasszon minket?
        </h1>
        <p >
          A <strong>Paksi Informatika</strong> 
          szakértői csapata professzionális, felhasználóbarát weboldalakat készít. Az egyedi igények figyelembevételével, valamint a legújabb technológiák alkalmazásával biztosítjuk a gyors, reszponzív és megbízható működést. Válasszon minket weboldala fejlesztéséhez, és emelje vállalkozása online jelenlétét a következő szintre!
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
