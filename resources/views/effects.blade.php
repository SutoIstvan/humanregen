<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <style>
          .hero {
            width: 100%;
            min-height: 40vh !important;
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
    <img src="assets/img/hero-bg-8.jpg" alt="" class="hero-bg">

    <div class="container">
      <div class="row gy-4 text-center">


        <div class="col-lg-12  d-flex flex-column justify-content-center" data-aos="fade-in" >
          <h1><span>Jótékony hatások</span></h1>


        </div>

      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
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



  <div class="px-4 pt-5 my-5 text-center border-bottom">
    <h2 class="alex-brush-regular" style="color: #c2a74e; size: 44px;">Töltsd fel a tested és ébredj új életre</h2>

    <h1 class="display-4 fw-bold text-body-emphasis">Humán Regenerátor Sports</h1>
    <div class="col-lg-10 mx-auto">

      <p class="lead mb-4">A Humán Regenerátor Sports kezelés <strong>orvosi alapja egy 18 éves kutatássorozat eredményeként </strong>megszületett és folyamatosan fejlesztett&nbsp;világszerte egyedülálló high-tech eszköz, amely <strong>sejtszinten aktiválja a szervezet öngyógyító folyamatait, ellensúlyozza a sejtekben lévő oxidatív stresszt és akkumulátorként tölti fel a sejteket</strong>. A<strong> Humán Regenerátor Sports a piacon elérhető legerősebb generátorral büszkélkedhet</strong>. Kimagasló generátor teljesítményével túlszárnyalja a Humán Regenerátor Power Jet és Professionel modelleket, kifejezetten erős hatást gyakorolva már a vázizmokra is.</p>
      <!-- <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p> -->

    </div>
    <div class="overflow-hidden" style="max-height: 40vh;">
      <div class="container px-5">
        <img src="{{ asset('assets/img/humanregensport.png') }}" class="img-fluid border rounded-3 shadow-lg mb-4" width="900" height="500" loading="lazy">
      </div>
    </div>
  </div>

  <!-- <div class="px-4 pt-5  text-center">
    <h1 class="display-4 fw-bold text-body-emphasis">HATÁSOK</h1>

  </div> -->

        <!-- Section Title -->
        <div class="container section-title pt-5" data-aos="fade-up">

          <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
              <h2 class="alex-brush-regular" style="color: #c2a74e; size: 44px;">Jótékony hatások</h2>
    
              <p class=" mb-md-5 pb-md-0 lead">
                Ismerd meg a Humán Regenerátor Jótékony hatásait
              </p>
            </div>
          </div>
    
        </div><!-- End Section Title -->


  <!-- FAQ 2 - Bootstrap Brain Component -->
<section class="bsb-faq-2 py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row gy-5 gy-lg-0" id="accordionExample">

      <div class="col-12 col-lg-4">
        <div class="row justify-content-xl-end">
          <div class="col-12 col-xl-12">
            <div class="accordion accordion-flush" >
      
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingTwoRow1">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoRow1" aria-expanded="false" aria-controls="collapseTwoRow1">
                    Hatással van a mozgásszervi betegségekre
                  </button>
                </h2>
                <div id="collapseTwoRow1" class="accordion-collapse collapse" aria-labelledby="headingTwoRow1" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    A Humán Regenerátor a keringés javításával regenerálhatja az ízületi gyulladt felszíneket és a szinoviális folyadékokat. A keringés javításával erőteljes gyulladáscsökkentő hatásával kezelheti és gyógyíthatja a mozgásszervi eredetű betegségeket és az azzal járó fájdalmakat (izületi kopásos betegségek – arthorosis – csontritkulás – osteoporosis ) Hatása gyors, pár kezelés is érezhető változást eredményezhet.                  </div>
                </div>
              </div>
      
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingThreeRow1">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeRow1" aria-expanded="false" aria-controls="collapseThreeRow1">
                    Sérülésekre gyakorolt hatás
                  </button>
                </h2>
                <div id="collapseThreeRow1" class="accordion-collapse collapse" aria-labelledby="headingThreeRow1" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    A Humán Regenerátor serkentheti a kötőszövetek és izmok, a lábak és a csontok regenerálódását, ezáltal lehetőséget nyújthat a sportolóknak a legkorábbi visszatérésre. A regenerációs idő lerövidítése napjaink egyik legnagyobb elvárása. Komoly hatással lehet az életminőség javítására.                  </div>
                </div>
              </div>
      
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingFourRow1">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourRow1" aria-expanded="false" aria-controls="collapseFourRow1">
                    Kiegyensúlyozott alvás (insomnia)
                  </button>
                </h2>
                <div id="collapseFourRow1" class="accordion-collapse collapse" aria-labelledby="headingFourRow1" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    A Humán Regenerátor kezelés hatása alvás közben észlelhető, amely egyszerűbbé és mélyebbé teheti a légzést. Mindezek eredményeként pihentető, energiatudatos ébredés lehet. Mély alvás és friss ébredés után a nap aktívan indulhat. Ez azonban nem meglepő, mivel a jó vérellátás jó alapot nyújt erre. A Humán Regenerátor támogathatja a légzést azáltal, hogy feloldja a váladékot a maxilláris sinusban. Komoly segítséget nyújthat az allergiában is.                  </div>
                </div>
              </div>
      
              <div class="accordion-item shadow-sm">
                <h2 class="accordion-header" id="headingFiveRow1">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveRow1" aria-expanded="false" aria-controls="collapseFiveRow1">
                    Teljesítmény fokozás
                  </button>
                </h2>
                <div id="collapseFiveRow1" class="accordion-collapse collapse" aria-labelledby="headingFiveRow1" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      A Humán Regenerátor javíthatja a mentális, kognitív és fizikai teljesítményt. A Humán Regenerátor növelheti a vér viszkozitását és a keringést a koncentráció és a teljesítmény javítása érdekében. A Humán Regenerátor másodpercek töredéke alatt milliónyi impulzust ad ki, hogy javítsa a test keringését azáltal, hogy kinyitja a kis ereket. Ez az erős mikrocirkulációs javítás logikus és komoly alapot nyújthat a teljesítmény növeléséhez. A Humán Regenerátor kezelés során rengeteg kapilláris és vaszkuláris ereket nyithat meg, amelyek mozgással vagy más erőkkel ilyen mértékben nem nyithatók meg. A nyirok áramlása is jelentősen megnőhet, ami párhuzamosan a vénás keringés javulásával jár. Ez a hatás gyors oxigéncserét biztosít, amely minden élő szervezet alapja. A Humán Regenerátor a véralvadás ellen működik, miközben optimalizálhatja a vér viszkozitását. A vérlemezkék tapadása jelentősen csökkenhet. A Humán Regenerátor növelheti a sejtek membránjainak áteresztőképességét, így az információ gyorsabban továbbadódik az oxigénben gazdag közegben.
                    </p>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-12 col-lg-4">
        <div class="row justify-content-xl-end">
          <div class="col-12 col-xl-11">
            <div class="accordion accordion-flush" >
      
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingTwoRow2">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoRow2" aria-expanded="false" aria-controls="collapseTwoRow2">
                    Véráramlás serkentése
                  </button>
                </h2>
                <div id="collapseTwoRow2" class="accordion-collapse collapse" aria-labelledby="headingTwoRow2" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    A Humán Regenerátor növelheti a vér viszkozitását és a keringést a koncentráció és a teljesítmény javítása érdekében. A Humán Regenerátor másodpercek töredéke alatt milliónyi impulzust ad ki, hogy javítsa a test keringését azáltal, hogy kinyitja a kis ereket. Ez az erős mikrocirkulációs javítás logikus és komoly alapot nyújthat a teljesítmény növeléséhez. A Humán Regenerátor a kezelés során rengeteg kapilláris és vaszkuláris ereket nyithat meg, amelyek mozgással vagy más erőkkel ilyen mértékben nem nyithatók meg. A nyirok áramlása is jelentősen megnőhet, ami párhuzamosan a vénás keringés javulásával járhat. Ez a hatás gyors oxigéncserét biztosít, amely minden élő szervezet alapja. A Humán Regenerátor a véralvadás ellen működik, miközben optimalizálhatja a vér viszkozitását. A vérlemezkék tapadása jelentősen csökkenhet. A Humán Regenerátor növelheti a sejtek membránjainak áteresztőképességét, így az információ gyorsabban továbbadódik az oxigénben gazdag közegben.                  </div>
                </div>
              </div>
      
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingThreeRow2">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeRow2" aria-expanded="false" aria-controls="collapseThreeRow2">
                    Hatása van a szorongásra, stresszre, kiégésre
                  </button>
                </h2>
                <div id="collapseThreeRow2" class="accordion-collapse collapse" aria-labelledby="headingThreeRow2" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    A Humán Regenerátor csökkentheti a stresszt, szorongást, pánikot és depressziót.
                  </div>
                </div>
              </div>
      
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingFourRow2">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourRow2" aria-expanded="false" aria-controls="collapseFourRow2">
                    Sejtregeneráció (sérülés, műtét)
                  </button>
                </h2>
                <div id="collapseFourRow2" class="accordion-collapse collapse" aria-labelledby="headingFourRow2" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    A Humán Regenerátor csökkentheti a műtét utáni regeneráció idejét. Segítheti a sérült idegsejtek regenerálódását. Az idegek gyógyulása általában lassú folyamat. Általában naponta 1 mm regenerálható. A sérült ideg 10 cm-es regenerálása körülbelül 100 napot vesz igénybe. A nagyobb idegek regenerálódásához általában több év szükséges. Sérülések vagy műtét után a Humán Regenerátor jelentősen lerövidítheti a gyógyulás idejét.
                  </div>
                </div>
              </div>
      
              <div class="accordion-item shadow-sm">
                <h2 class="accordion-header" id="headingFiveRow2">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveRow2" aria-expanded="false" aria-controls="collapseFiveRow2">
                    Állóképesség és koncentráció növelés 
                  </button>
                </h2>
                <div id="collapseFiveRow2" class="accordion-collapse collapse" aria-labelledby="headingFiveRow2" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      A Humán Regenerátor növelheti a vér viszkozitását és a keringést a koncentráció és a teljesítmény javítása érdekében. A Humán Regenerátor másodpercek töredéke alatt milliónyi impulzust ad ki, hogy javítsa a test keringését azáltal, hogy kinyitja a kis ereket. Ez az erős mikrocirkulációs javítás logikus és komoly alapot nyújthat a teljesítmény növeléséhez. A Humán Regenerátor kezelés során rengeteg kapilláris és vaszkuláris ereket nyit meg, amelyek mozgással vagy más erőkkel ilyen mértékben nem nyithatók meg. A nyirok áramlása is jelentősen megnőhet, ami párhuzamosan a vénás keringés javulásával jár. Ez a hatás gyors oxigéncserét biztosít, amely minden élő szervezet alapja. Az Humán Regenerátor a véralvadás ellen működik, miközben optimalizálhatja a vér viszkozitását. A vérlemezkék tapadása jelentősen csökkenhet. A Humán Regenerátor növelheti a sejtek membránjainak áteresztőképességét, így az információ gyorsabban továbbadódik az oxigénben gazdag közegben.
                    </p>

                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
      </div>


      <div class="col-12 col-lg-4">
        <div class="row justify-content-xl-end">
          <div class="col-12 col-xl-11">
            <div class="accordion accordion-flush" >
      
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingTwoRow3">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoRow3" aria-expanded="false" aria-controls="collapseTwoRow3">
                    Immunrendszer erősítés
                  </button>
                </h2>
                <div id="collapseTwoRow3" class="accordion-collapse collapse" aria-labelledby="headingTwoRow3" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    A Humán Regenerátor erős hatással van az egész testre, mivel sejtszinten stimulálja az immunrendszert, ami egészséges, erőteljes élethez vezethet. Fontos hangsúlyozni azokat az eszközöket, amelyek optimalizálhatják a vércukorszintre gyakorolt hatást, ami nagyon összetett folyamat.
                  </div>
                </div>
              </div>
      
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingThreeRow3">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeRow3" aria-expanded="false" aria-controls="collapseThreeRow3">
                    Öregedésgátló hatás (Anti-aging)
                  </button>
                </h2>
                <div id="collapseThreeRow3" class="accordion-collapse collapse" aria-labelledby="headingThreeRow3" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    A Humán Regenerátor növeli a szövetek kollagén termelését, amely az egész életen át csökken, és erősíti a bőr kötőszöveteinek szerkezetét. A Humán Regenerátor rendszeres használata megakadályozhatja a bőr természetes és fiziológiai vízvesztését, amely az öregedés természetes és logikus következménye. Ne feledje, hogy minden nap sok folyadékot kell fogyasztania, ha méregteleníteni akar. Kérjük, a Humán Regenerátor kezelés után is igyon sok folyadékot a kívánt hatás elérése érdekében.
                  </div>
                </div>
              </div>
      
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingFourRow3">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourRow3" aria-expanded="false" aria-controls="collapseFourRow3">
                    Bioenergetika (anyagcsere)
                  </button>
                </h2>
                <div id="collapseFourRow3" class="accordion-collapse collapse" aria-labelledby="headingFourRow3" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    A Humán Regenerátor optimalizálhatja a szervezet anyagcseréjét, pozitív, stimuláló hatása lehet a sejtosztódásra. Ez nagyon fontos, mert ha a folyamat lassú, a régi elemek bomlása meghosszabbodik, azonban a gyors folyamat nem ad elegendő időt a sejtek progressziójához. A hosszú és sikeres kutatások által kifejlesztett Humán Regenerátor technológia biztosíthatja az optimalizált hatás elősegítését az anyagcsere kiválasztásában.
                  </div>
                </div>
              </div>
      
              <!-- <div class="accordion-item shadow-sm">
                <h2 class="accordion-header" id="headingFiveRow3">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveRow3" aria-expanded="false" aria-controls="collapseFiveRow3">
                    How Do I Cancel My Account?
                  </button>
                </h2>
                <div id="collapseFiveRow3" class="accordion-collapse collapse" aria-labelledby="headingFiveRow3" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>To cancel your account, please follow these steps:</p>
                    <ul>
                      <li>Go to our website and sign in to your account...</li>
                    </ul>
                  </div>
                </div>
              </div> -->
      
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>
  



        <!-- Section Title -->
        <div class="container section-title pt-5" data-aos="fade-up">

          <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
              <h2 class="alex-brush-regular" style="color: #c2a74e; size: 44px;">Gyakori kérdések</h2>
    
              <p class=" mb-md-5 pb-md-0 lead">
                Ismerd meg a Humán Regenerátor Jótékony hatásait
              </p>
            </div>
          </div>
    
        </div><!-- End Section Title -->

{{--   
<section class="bsb-faq-2 py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row gy-5 gy-lg-0" id="accordionHelp">

      <div class="col-12 col-lg-12">
        <div class="row justify-content-xl-end">
          <div class="col-12 col-xl-12">
            <div class="accordion accordion-flush" >
      
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingTwoHelp">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoHelp" aria-expanded="false" aria-controls="collapseTwoHelp">
                    <i class="fas fa-question-circle" style="color: #006469; margin-right: 14px;"></i>

                    Hogyan működik pontosan?
                  </button>
                </h2>
                <div id="collapseTwoHelp" class="accordion-collapse collapse" aria-labelledby="headingTwoHelp" >
                  <div class="accordion-body">
                    Az oxidatív stressz felelős az öregedésért és a vitalitás elvesztéséért. Számos ismert betegség okozója is. Fizikai értelemben az oxidatív stressz szabad gyököket termel, amelyek károsítják a sejteket és a DNS-t. Fizikailag a szabad gyökök nem teljesek, párosítatlan elektronokat képeznek, és hiányzik egy elektron. Az exkluzív Humán Regenerátor finoman továbbítja az aktív elektronokat a felhasználónak, amelyek forradalmian és hatékonyan ellensúlyozzák az oxidatív stresszt. Az új fejlett módszerben a speciális Cold Atmospheric Plasma kialakítás anionokat, statikus energiát és elektronokat állít elő, amelyeket az elektronikus indukció finoman és kellemesen szállít.
                  </div>
              </div>
      
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingThreeHelp">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeHelp" aria-expanded="false" aria-controls="collapseThreeHelp">
                    <i class="fas fa-question-circle" style="color: #006469; margin-right: 14px;"></i>

                    Van a kezelésnek mellékhatása?
                  </button>
                </h2>
                <div id="collapseThreeHelp" class="accordion-collapse collapse" aria-labelledby="headingThreeHelp" >
                  <div class="accordion-body">
                    4 év tesztelés és sok ezer alkalmazás alatt semmilyen mellékhatás nem jelentkezett.
                  </div>
              </div>
      
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingFourHelp">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourHelp" aria-expanded="false" aria-controls="collapseFourHelp">
                    <i class="fas fa-question-circle" style="color: #006469; margin-right: 14px;"></i>

                    Mi a különbség a zöld és a piros gép között?
                  </button>
                </h2>
                <div id="collapseFourHelp" class="accordion-collapse collapse" aria-labelledby="headingFourHelp" >
                  <div class="accordion-body">
                    Mindkét gép ugyanazon a technológián alapszik, azonban a piros SPORTS gépben erősebb a generátor, ezáltal a mélyizmokra is kifejtheti a hatását.
                  </div>
              </div>
      
              <div class="accordion-item shadow-sm">
                <h2 class="accordion-header" id="headingFiveHelp">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveHelp" aria-expanded="false" aria-controls="collapseFiveHelp">
                    <i class="fas fa-question-circle" style="color: #006469; margin-right: 14px;"></i>
                    Humán Regenerátor egy orvosi eszköz?
                  </button>
                </h2>
                <div id="collapseFiveHelp" class="accordion-collapse collapse" aria-labelledby="headingFiveHelp" >
                  <div class="accordion-body">
                    <p>
                      Nem, a Humán Regenerátor egy wellness eszköz.
                    </p>
                  </div>
                </div>
              </div>

              <div class="accordion-item shadow-sm">
                <h2 class="accordion-header" id="headingSixHelp">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixHelp" aria-expanded="false" aria-controls="collapseSixHelp">
                    <i class="fas fa-question-circle" style="color: #006469; margin-right: 14px;"></i>
                    Milyen esetekben nem használható a Humán Regenerátor?
                  </button>
                </h2>
                <div id="collapseSixHelp" class="accordion-collapse collapse" aria-labelledby="headingSixHelp" >
                  <div class="accordion-body">
                    <p>
                      Várandós kismamák, szoptató anyukák, 10 év alatti gyermekek, testhez csatlakoztatott (bármilyen) elektromos készülékkel rendelkező személyek (szívritmusszabályozó, elektromos hallókészülék, inzulin pumpa, fájdalom szivattyú stb.) a Humán Regenerátor készüléket nem használhatják!
                    </p>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section> --}}


<section class="bsb-faq-2 py-3 py-md-5 py-xl-8">
  <div class="container">
    <div class="row gy-5 gy-lg-0" id="accordionHelp">

      <div class="col-12 col-lg-12">
        <div class="row justify-content-xl-end">
          <div class="col-12 col-xl-12">
            <div class="accordion accordion-flush">
      
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingTwoHelp">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoHelp" aria-expanded="false" aria-controls="collapseTwoHelp">
                    <i class="fas fa-question-circle" style="color: #006469; margin-right: 14px;"></i>
                    Hogyan működik pontosan?
                  </button>
                </h2>
                <div id="collapseTwoHelp" class="accordion-collapse collapse" aria-labelledby="headingTwoHelp">
                  <div class="accordion-body">
                    Az oxidatív stressz felelős az öregedésért és a vitalitás elvesztéséért. Számos ismert betegség okozója is. 
                    <!-- Content truncated for brevity -->
                  </div>
                </div>
              </div>
      
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingThreeHelp">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreeHelp" aria-expanded="false" aria-controls="collapseThreeHelp">
                    <i class="fas fa-question-circle" style="color: #006469; margin-right: 14px;"></i>
                    Van a kezelésnek mellékhatása?
                  </button>
                </h2>
                <div id="collapseThreeHelp" class="accordion-collapse collapse" aria-labelledby="headingThreeHelp">
                  <div class="accordion-body">
                    4 év tesztelés és sok ezer alkalmazás alatt semmilyen mellékhatás nem jelentkezett.
                  </div>
                </div>
              </div>
      
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingFourHelp">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourHelp" aria-expanded="false" aria-controls="collapseFourHelp">
                    <i class="fas fa-question-circle" style="color: #006469; margin-right: 14px;"></i>
                    Mi a különbség a zöld és a piros gép között?
                  </button>
                </h2>
                <div id="collapseFourHelp" class="accordion-collapse collapse" aria-labelledby="headingFourHelp">
                  <div class="accordion-body">
                    Mindkét gép ugyanazon a technológián alapszik, azonban a piros SPORTS gépben erősebb a generátor, ezáltal a mélyizmokra is kifejtheti a hatását.
                  </div>
                </div>
              </div>
      
              <div class="accordion-item mb-4 shadow-sm">
                <h2 class="accordion-header" id="headingFiveHelp">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveHelp" aria-expanded="false" aria-controls="collapseFiveHelp">
                    <i class="fas fa-question-circle" style="color: #006469; margin-right: 14px;"></i>
                    Humán Regenerátor egy orvosi eszköz?
                  </button>
                </h2>
                <div id="collapseFiveHelp" class="accordion-collapse collapse" aria-labelledby="headingFiveHelp">
                  <div class="accordion-body">
                    <div>Nem, a Humán Regenerátor egy wellness eszköz.</div>
                  </div>
                </div>
              </div>

              <div class="accordion-item shadow-sm">
                <h2 class="accordion-header" id="headingSixHelp">
                  <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixHelp" aria-expanded="false" aria-controls="collapseSixHelp">
                    <i class="fas fa-question-circle" style="color: #006469; margin-right: 14px;"></i>
                    Milyen esetekben nem használható a Humán Regenerátor?
                  </button>
                </h2>
                <div id="collapseSixHelp" class="accordion-collapse collapse" aria-labelledby="headingSixHelp">
                  <div class="accordion-body">
                    <div>Várandós kismamák, szoptató anyukák, 10 év alatti gyermekek, testhez csatlakoztatott elektromос készülékkel rendelkező személyek nem használhatják!</div>
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>


    @include('layouts.footer')
  
</body>
</html>
