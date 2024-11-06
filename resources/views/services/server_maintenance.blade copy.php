<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title_server_maintenance'))</title>
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
          <h1 class="display-6 text-body-emphasis lh-2 mb-4 mt-5" data-aos="fade-up">
            Teljeskörű Megoldások a <span class="text-primary">Vállalkozásod</span> Számára
          </h1>
          <p class="lead text-body-secondary mt-1 me-4" data-aos="fade-up" data-aos-duration="1000">
            Célunk, hogy ügyfeleink számára megbízható, hatékony IT infrastruktúrát biztosítsunk, amely támogatja mindennapi működésüket. Szolgáltatásaink között szerepel a szerverek és IT rendszerek tervezése, üzemeltetése, karbantartása, valamint nyílt forráskódú megoldások, automatizálás és webfejlesztés.          </p>
        </div>
      </div>
    </div>
    
    <div class="container my-5">
      <div class="col-md-11 mt-2 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-2 text-center">
            Szerverek és munkaállomások tervezése, beszerzése és beüzemelése
          </h1>
        </div>        
        <p>
          Egy jól megtervezett és megbízható IT infrastruktúra alapvető a stabil üzleti működéshez. Innovatív megoldásainkkal biztosítjuk, hogy rendszereid mindig hatékonyan és biztonságosan működjenek. Az alábbi szolgáltatásokat kínáljuk:
        </p>
      </div>
    </div>

    <div class="container">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-gears circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Infrastruktúra tervezése:</h5>
              <p class="text-body-secondary">Megtervezzük a vállalkozásod igényeinek legjobban megfelelő szerverarchitektúrát és klienshálózatot, legyen szó fizikai vagy virtuális környezetekről.</p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-microchip circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Hardver beszerzés és telepítés:</h5>
              <p class="text-body-secondary">Gondoskodunk a megfelelő szerverek, munkaállomások, tárolók, hálózati eszközök és egyéb IT komponensek beszerzéséről és beüzemeléséről.</p>
            </div>
          </div>
        </div>
  
        <div class="w-100"></div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-code circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Szoftverek telepítése és konfigurálása:</h5>
              <p class="text-body-secondary">A szerverek és munkaállomások szoftveres konfigurációja biztosítja az optimális teljesítményt és a biztonságos működést.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container my-3 mb-4">
      <div class="col-md-11 mt-1 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-3 text-center">
            Üzemeltetés, karbantartás és távfelügyelet
          </h1>
        </div>        
        <p>
          A rendszeres üzemeltetés és karbantartás elengedhetetlen az IT rendszerek zavartalan működéséhez, legyen szó szerverekről vagy kliensekről. Szolgáltatásaink közé tartozik:
        </p>
      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-clock-rotate-left circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Rendszeres felügyelet:</h5>
              <p class="text-body-secondary">Folyamatosan monitorozzuk a szerverek és munkaállomások állapotát, azonnal reagálva az esetleges hibákra és problémákra.</p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-pen-to-square circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3" >
              <h5>Szoftverfrissítések és javítások:</h5>
              <p class="text-body-secondary">Biztosítjuk a legfrissebb szoftverfrissítéseket és biztonsági javításokat a rendszerek védelme érdekében.</p>
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
              <h5>Hibajavítás és támogatás:</h5>
              <p class="text-body-secondary">Ha bármi probléma merül fel, gyors és hatékony megoldásokat kínálunk.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="200">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-house-laptop circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Távfelügyelet:</h5>
              <p class="text-body-secondary">Munkaállomások és szerverek távoli monitorozása és felügyelete biztosítja a gyors hibajavítást és minimalizálja a leállásokat.</p>
            </div>
          </div>
        </div>

      </div>
    </div>


    {{-- <div class="container my-3 mb-4">
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
    </div> --}}

    <div class="container my-3 mb-4">
      <div class="col-md-11 mt-1 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-3 text-center">
            Open Source megoldások
          </h1>
        </div>        
        <p>
          Az open source rendszerek egyre nagyobb teret hódítanak a vállalati IT környezetben, mivel költséghatékonyak és nagy rugalmasságot biztosítanak. Cégünk számos nyílt forráskódú platformot és szoftvert integrál, mint például:
        </p>
      </div>
    </div>

    <div class="container" data-aos="fade-up">
      <div class="row mt-4">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-brands fa-ubuntu mt-1 circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Linux szerverek:</h5>
              <p class="text-body-secondary">Biztonságos és költséghatékony megoldások mind fizikai, mind virtuális környezetekben.</p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-cloud-arrow-down circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3" >
              <h5>Nyílt forráskódú alkalmazások:</h5>
              <p class="text-body-secondary">Olyan szoftverek telepítése és üzemeltetése, mint pl. a Nextcloud, az OpenVPN vagy a pfSense tűzfal, amelyek segítenek költséghatékonyan fenntartani az IT rendszereket.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container my-3 mb-4">
      <div class="col-md-11 mt-1 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-3 text-center">
            Automatizálás és hatékonyság növelés
          </h1>
        </div>        
        <p>
          Az IT rendszerek automatizálása jelentős mértékben hozzájárulhat az erőforrások hatékonyabb felhasználásához és a költségek csökkentéséhez. Az alábbiakat kínáljuk:
        </p>
      </div>

    <div class="container" data-aos="fade-up">
      <div class="row mt-4">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid fa-wrench mt-1 circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Automatizált frissítések és karbantartási feladatok:</h5>
              <p class="text-body-secondary">
                Rendszerek automatikus frissítése és rendszeres karbantartási feladatok végrehajtása minimális leállással.              </p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-superscript circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3" >
              <h5>Skriptalapú automatizálás:</h5>
              <p class="text-body-secondary">
                Egyedi szkriptek fejlesztése és telepítése a napi rutinfolyamatok, mint például adatmentések és jelentéskészítés automatizálására.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container my-5">
      <div class="col-md-11 mt-2 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-2 text-center">
            Adatmentés és helyreállítás
          </h1>
        </div>        
        <p>
          Az adatok védelme és a rendszeres adatmentés elengedhetetlen része a biztonságos üzemeltetésnek. Az alábbi megoldásokat kínáljuk:
        </p>
      </div>
    </div>

    <div class="container">
      <div class="row ">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-shield-halved circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Biztonságos adatmentési stratégiák kialakítása:</h5>
              <p class="text-body-secondary">A legjobb gyakorlatokon alapuló adatmentési megoldások kidolgozása, amelyek védenek a hardverhibák és emberi hibák ellen is.</p>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-cloud circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Helyi és felhőalapú mentési megoldások:</h5>
              <p class="text-body-secondary">Az ügyfél igényeinek megfelelően helyi és/vagy felhőalapú adatmentési megoldásokat biztosítunk.</p>
            </div>
          </div>
        </div>
  
        <div class="w-100"></div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="150">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-database circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Adat-helyreállítási megoldások:</h5>
              <p class="text-body-secondary">Hiba esetén gyors és megbízható helyreállítási szolgáltatásokat kínálunk.</p>
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
          Az <strong>Paksi Informatika</strong> elkötelezett a professzionális, megbízható és költséghatékony IT
          üzemeltetési megoldások iránt. Csapatunk szaktudása és tapasztalata biztosítja, hogy a
          vállalkozásod IT infrastruktúrája – legyen szó szerverekről, munkaállomásokról, vagy
          webalkalmazásokról – mindig optimálisan működjön, így te az üzletre koncentrálhatsz.
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
