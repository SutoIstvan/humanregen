<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title_access_control_systems'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    @include('layouts.nav')
    
    <div class="container col-xxl-12 px-4 py-5 mt-lg-5">
      <div class="row flex-lg-row-reverse align-items-center g-0 py-0">
        <div data-aos="fade-up" data-aos-duration="1000" class="col-12 col-sm-12 col-lg-6">
          <img src="../assets/access-systems.png" class="img-fluid " loading="lazy" style="opacity: 0.7; height:300px">
        </div>
        <div class="col-lg-6 mt-xs-3">
          <h1 class="display-6 text-body-emphasis lh-2 mb-4 mt-5" data-aos="fade-up">
            <span class="text-primary">Biztonságos</span> hozzáférés és intelligens megoldások.
          </h1>
          <p class="lead text-body-secondary mt-1 me-4" data-aos="fade-up" data-aos-duration="1000">
            A Paksi Informatika a legmodernebb beléptető rendszerek telepítésében és karbantartásában
            nyújt teljes körű megoldásokat. Beléptető
            rendszereink nemcsak növelik a biztonságot, hanem segítenek az adatok gyűjtésében és a
            hatékonyabb üzleti folyamatok kialakításában is.          
          </p>
        </div>
      </div>
    </div>
    
    <div class="container my-5">
      <div class="col-md-11 mt-2 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-2 text-center">
            Beléptető rendszerek tervezése
          </h1>
        </div>        
        <p>
          Cégünk átfogó beléptető rendszer tervezési szolgáltatásokat kínál, amelyek az ügyfél
          specifikus igényeire szabott megoldásokat nyújtanak. Minden rendszerünket az alábbi
          alapelvek szerint tervezzük:
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
              <h5>Biztonsági követelmények felmérése:</h5>
              <p class="text-body-secondary">
                Az ügyfél igényeinek pontos megértése, amely alapján
                kidolgozzuk a megfelelő beléptetési megoldásokat.
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
              <h5>Integráció meglévő rendszerekkel:</h5>
              <p class="text-body-secondary">
                Beléptető rendszereink zökkenőmentesen integrálhatók
                a már meglévő IT infrastruktúrával, hálózatokkal és biztonsági rendszerekkel, például
                kamerarendszerekkel.
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
              <h5>Rugalmasság és skálázhatóság:</h5>
              <p class="text-body-secondary">
                Olyan megoldásokat kínálunk, amelyek a vállalkozás
                növekedésével bővíthetők és átalakíthatók.
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
            Technológiai megoldásaink
          </h1>
        </div>        
        <p>
          Széles körű technológiai megoldásokat kínálunk, amelyek megfelelnek a legkülönbözőbb
          biztonsági kihívásoknak:
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
              <h5>RFID kártyás rendszerek:</h5>
              <p class="text-body-secondary">
                Érintésmentes, gyors és kényelmes beléptetési megoldások,
                amelyek könnyen kezelhetők és felügyelhetők.
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
              <h5>Biometrikus rendszerek:</h5>
              <p class="text-body-secondary">
                Ujjlenyomat, arcfelismerés vagy retinaalapú beléptetés, amely
                maximális biztonságot nyújt, és kizárja a kártyák elvesztéséből vagy másolásából adódó
                kockázatokat.
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
              <h5>PIN kódos rendszerek:</h5>
              <p class="text-body-secondary">
                Egyszerű és hatékony megoldások olyan helyszíneken, ahol többféle
                beléptetési módszer integrálása szükséges.
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="200">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-unlock circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>Többfaktoros hitelesítés:</h5>
              <p class="text-body-secondary">
                Magas biztonságot igénylő helyszíneken kombinált beléptetési
                megoldásokat is biztosítunk (például biometrikus azonosítás + PIN kód).
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
            Rendszerek telepítése és üzembe helyezése
          </h1>
        </div>        
        <p>
          A beléptető rendszerek telepítése során maximális figyelmet fordítunk a gyors és
          zökkenőmentes kivitelezésre:
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
              <h5>Hardver telepítés:</h5>
              <p class="text-body-secondary">
                Kártyaolvasók, biometrikus érzékelők, ajtózárak, és egyéb beléptető
                eszközök professzionális telepítése és konfigurálása.
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
              <h5>Szoftver integráció:</h5>
              <p class="text-body-secondary">
                A beléptető rendszerek felügyeleti szoftvereinek telepítése és beállítása,
                amelyek lehetővé teszik a belépési naplók és hozzáférési jogosultságok könnyű kezelését.
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
              <h5>Rendszeres tesztelés:</h5>
              <p class="text-body-secondary">
                A telepítés után alapos tesztelést végzünk, hogy biztosítsuk a rendszer
                hibátlan működését, és megfeleljen az összes biztonsági követelménynek.
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
            Távfelügyelet és karbantartás
          </h1>
        </div>        
        <p>
          A rendszer folyamatos felügyelete és karbantartása kulcsfontosságú a beléptető rendszer
          hosszú távú megbízhatósága érdekében:
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
              <h5>Távoli hozzáférés és felügyelet:</h5>
              <p class="text-body-secondary">
                Olyan rendszereket telepítünk, amelyek lehetővé teszik a
                beléptető rendszer távfelügyeletét és menedzselését, biztosítva a rugalmas felhasználást és a
                gyors beavatkozást.
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
              <h5>Rendszeres karbantartás:</h5>
              <p class="text-body-secondary">
                Preventív karbantartási szolgáltatásainkkal biztosítjuk, hogy a
                beléptető rendszer mindig kifogástalanul működjön.
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
                Ha bármi probléma merül fel, csapatunk azonnali hibaelhárítást biztosít,
                minimális leállási idővel.
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
            Integrált megoldások a biztonság növelése érdekében
          </h1>
        </div>        
        <p>
          Beléptető rendszereinket könnyedén integráljuk más biztonsági megoldásokkal, mint például:
        </p>
      </div>

    <div class="container" data-aos="fade-up">
      <div class="row mt-4">
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7">
          <div class="d-flex ">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid fa-video mt-1 circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3">
              <h5>IP kamerarendszerek:</h5>
              <p class="text-body-secondary">
                A belépési pontokat megfigyelő kamerarendszerek telepítése és
                összekapcsolása a beléptető rendszerrel, amely további biztonságot nyújt.
              </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-6 mb-3 mb-md-5 mb-lg-7" data-aos="fade-up" data-aos-delay="100">
          <div class="d-flex">
            <div class="flex-shrink-0">
              <div class="svg-icon text-primary">
                <i class="fa-solid mt-1 fa-bell circle-icon fa-lg"></i>
              </div>
            </div>
            <div class="flex-grow-1 ms-3" >
              <h5>Riasztórendszerek:</h5>
              <p class="text-body-secondary">
                A beléptető rendszer és a riasztórendszer együttes működtetése, amely
                értesítést küld minden jogosulatlan hozzáférési kísérletről.
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
          A <strong>Paksi Informatika</strong> professzionális beléptető rendszerei minden biztonsági igényre
          megoldást kínálnak, legyen szó kis irodákról, gyárakról vagy nagyvállalatokról. Innovatív
          technológiai megoldásaink és rugalmasan testre szabható rendszereink garantálják a
          vállalkozásod biztonságát és hatékonyságát.
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
