<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title_network_infrastructure'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    @include('layouts.nav')
    
    <div class="container col-xxl-12 px-4 py-5 mt-lg-5">
      <div class="row flex-lg-row-reverse align-items-center g-0 py-0">
        <div data-aos="fade-up" data-aos-duration="1000" class="col-12 col-sm-12 col-lg-6">
          <img src="../assets/computer-services.png" class="img-fluid " loading="lazy" style="opacity: 0.7; height:300px">
        </div>
        <div class="col-lg-6 mt-xs-3">
          <h1 class="display-6 text-body-emphasis lh-2 mb-4 mt-3" data-aos="fade-up">
            Gyengeáramú <span class="text-primary">hálózatok</span> - Precíz tervezés és kivitelezés.
          </h1>
          <p class="lead text-body-secondary mt-1 me-4" data-aos="fade-up" data-aos-duration="1000">
            Széleskörű tapasztalatunkkal és szakértelmünkkel biztosítjuk, hogy a vállalkozások számára
            kiépített rendszerek stabilak, biztonságosak és könnyen bővíthetők legyenek. Legyen szó
            irodai hálózatról, biztonsági rendszerről vagy beléptető rendszerekről, mi garantáljuk, hogy a
            megoldásaink hosszú távon fenntarthatóak és megbízhatóak.
          </p>
        </div>
      </div>
    </div>
    
    <div class="container my-5">
      <div class="col-md-11 mt-2 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-2 text-center">
            Gyengeáramú hálózatok tervezése
          </h1>
        </div>        
        <p>
          A jól megtervezett gyengeáramú hálózat kritikus fontosságú a modern vállalati
          infrastruktúrában. Minden projektünk az alábbiakra összpontosít:
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
              <h5>Hálózati igények felmérése:</h5>
              <p class="text-body-secondary">
                Minden egyes ügyfél esetében pontosan meghatározzuk a
                vállalkozás specifikus hálózati igényeit, figyelembe véve a biztonsági és adatátviteli
                követelményeket.
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
              <h5>Egyedi hálózati tervek készítése:</h5>
              <p class="text-body-secondary">
                Az ügyfél környezetéhez igazítva, egyedi megoldásokat
                dolgozunk ki, amelyek biztosítják a gyors és stabil kapcsolatot, legyen szó LAN, WLAN vagy
                egyéb hálózati megoldásokról.
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
                A tervezett hálózatok bővíthetőek, hogy hosszú távon is megfeleljenek a
                növekedés követelményeinek.
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
            Hálózatépítés és kivitelezés
          </h1>
        </div>        
        <p>
          A tervezés után következik a kivitelezés, ahol tapasztalt szakembereink gondoskodnak a
          hálózati eszközök szakszerű telepítéséről és beüzemeléséről:
        </p>
      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-ethernet circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Kábelezés és telepítés:</h5>
              <p class="text-body-secondary">
                Magas minőségű kábeleket és hálózati eszközöket használunk, hogy
                biztosítsuk a tartós és megbízható kapcsolatot.
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
            <div class="flex-grow-1 ms-3" >
              <h5>Eszközök konfigurálása:</h5>
              <p class="text-body-secondary">
                A hálózati eszközök, például switchek, routerek és tűzfalak
                telepítése és konfigurálása során maximális figyelmet fordítunk a biztonságra és az
                optimalizált teljesítményre.
              </p>
            </div>
          </div>
        </div>
  
        <div class="w-100"></div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-file-signature circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Tesztelés és átadás:</h5>
              <p class="text-body-secondary">
                A hálózat kiépítése után teljes körű tesztelést végzünk, hogy
                megbizonyosodjunk a hibátlan működésről.
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
            Hálózatok karbantartása és felügyelete
          </h1>
        </div>        
        <p>
          A telepített hálózatok folyamatos karbantartása és felügyelete elengedhetetlen a megbízható
          működés érdekében. Szolgáltatásaink közé tartozik:
        </p>
      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-clipboard-check circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Rendszeres ellenőrzések és hibamegelőzés:</h5>
              <p class="text-body-secondary">
                Proaktív karbantartás, amely minimalizálja az
                esetleges meghibásodások esélyét.
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
                Gyorsan és hatékonyan orvosoljuk a hálózati hibákat, biztosítva a
                zökkenőmentes működést.
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
                Modern távfelügyeleti megoldásainkkal folyamatosan monitorozzuk a hálózat
                teljesítményét és azonnal reagálunk, ha problémát észlelünk.
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
            IP Kamerarendszerek és Beléptető rendszerek integrációja
          </h1>
        </div>        
        <p>
          A gyengeáramú hálózatok részeként kiemelt figyelmet fordítunk az IP kamerarendszerek és
          beléptető rendszerek integrálására is:
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
    </div>

    <!-- FOOTER -->

    @include('layouts.footer')
  
    <!-- TOP BUTTON  -->

    <button type="button" class="btn btn-outline-primary btn-lg" id="btn-back-to-top">
      <i class="fas fa-arrow-up"></i>
    </button>
  
  </body>
</html>
