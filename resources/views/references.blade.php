<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title_contact'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
  {{-- <body data-bs-theme="dark"> --}}

    @include('layouts.nav')

    <div class="conteiner px-5">
      <div class="mt-5 text-center" data-aos="fade-up">
        <h6 class="display-6 text-body-emphasis lh-2 mb-3">
          Itt tekintheti meg ügyfeleinket          
        </h6>
        <p >
          Büszkék vagyunk az eddig elvégzett munkáinkra, és örömmel mutatjuk be Önnek.
        </p>
      </div>


    </div>

    <div class="container px-4">
  
      <div class="row row-cols-1 row-cols-lg-3  g-4 pt-5">
        <div class="col">
          <div class=" p-5 text-center bg-body-tertiary rounded-3" data-aos="fade-up" data-aos-delay="50">
            <img src="../assets/references/logo-mvm.png" height="150px" alt="">
            {{-- <h3 class="text-body-emphasis mt-2 mb-2">{{ __('contacts.email')}}</h3> --}}
            <p class="col-lg-10 mx-auto text-muted"><br>
              Szerver üzemeltetés, Beléptető rendszerek.
            </p>
          </div>
        </div>
  
        <div class="col">
          <div class=" p-5 text-center bg-body-tertiary rounded-3" data-aos="fade-up" data-aos-delay="150">
            <img src="../assets/references/paks_ll_logo.png" height="150px" alt="">
            {{-- <h3 class="text-body-emphasis mt-2 mb-2">{{ __('contacts.email')}}</h3> --}}
            <p class="col-lg-10 mx-auto text-muted"><br>
              Szerver üzemeltetés, Beléptető rendszerek.
            </p>
          </div>
        </div>

        <div class="col">
          <div class=" p-5 text-center bg-body-tertiary rounded-3" data-aos="fade-up" data-aos-delay="200">
            <img src="../assets/references/rosatom_logo.png" height="150px" alt="">
            {{-- <h3 class="text-body-emphasis mt-2 mb-2">{{ __('contacts.email')}}</h3> --}}
            <p class="col-lg-10 mx-auto text-muted"><br>
              Szerver üzemeltetés, Beléptető rendszerek.
            </p>
          </div>
        </div>

      </div>


      <div class="row row-cols-1 row-cols-lg-3  g-4 py-5">
        <div class="col">
          <div class=" p-5 text-center bg-body-tertiary rounded-3" data-aos="fade-up" data-aos-delay="50">
            <img src="../assets/references/arkance_logo.png" height="150px" alt="">
            {{-- <h3 class="text-body-emphasis mt-2 mb-2">{{ __('contacts.email')}}</h3> --}}
            <p class="col-lg-10 mx-auto text-muted"><br>
              Szerver üzemeltetés, Beléptető rendszerek.
            </p>
          </div>
        </div>
  
        <div class="col">
          <div class=" p-5 text-center bg-body-tertiary rounded-3" data-aos="fade-up" data-aos-delay="150">
            <img src="../assets/references/kopis_logo.png" height="150px" alt="">
            {{-- <h3 class="text-body-emphasis mt-2 mb-2">{{ __('contacts.email')}}</h3> --}}
            <p class="col-lg-10 mx-auto text-muted"><br>
              Szerver üzemeltetés, Beléptető rendszerek.
            </p>
          </div>
        </div>

        <div class="col">
          <div class=" p-5 text-center bg-body-tertiary rounded-3" data-aos="fade-up" data-aos-delay="200">
            <img src="../assets/references/orgenergostroy_logo.png" height="150px" alt="">
            {{-- <h3 class="text-body-emphasis mt-2 mb-2">{{ __('contacts.email')}}</h3> --}}
            <p class="col-lg-10 mx-auto text-muted"><br>
              Szerver üzemeltetés, Beléptető rendszerek.
            </p>
          </div>
        </div>

      </div>



      <div class="row row-cols-1 row-cols-lg-3  g-4 pb-5">
        <div class="col">
          <div class=" p-5 text-center bg-body-tertiary rounded-3" data-aos="fade-up" data-aos-delay="50">
            <img src="../assets/references/logo-mvm.png" height="150px" alt="">
            {{-- <h3 class="text-body-emphasis mt-2 mb-2">{{ __('contacts.email')}}</h3> --}}
            <p class="col-lg-10 mx-auto text-muted"><br>
              Szerver üzemeltetés, Beléptető rendszerek.
            </p>
          </div>
        </div>
  
        <div class="col">
          <div class=" p-5 text-center bg-body-tertiary rounded-3" data-aos="fade-up" data-aos-delay="150">
            <img src="../assets/references/paks_ll_logo.png" height="150px" alt="">
            {{-- <h3 class="text-body-emphasis mt-2 mb-2">{{ __('contacts.email')}}</h3> --}}
            <p class="col-lg-10 mx-auto text-muted"><br>
              Szerver üzemeltetés, Beléptető rendszerek.
            </p>
          </div>
        </div>

        <div class="col">
          <div class=" p-5 text-center bg-body-tertiary rounded-3" data-aos="fade-up" data-aos-delay="200">
            <img src="../assets/references/rosatom_logo.png" height="150px" alt="">
            {{-- <h3 class="text-body-emphasis mt-2 mb-2">{{ __('contacts.email')}}</h3> --}}
            <p class="col-lg-10 mx-auto text-muted"><br>
              Szerver üzemeltetés, Beléptető rendszerek.
            </p>
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
