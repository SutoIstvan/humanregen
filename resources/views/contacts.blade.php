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
          {{ __('contacts.contact_us')}}          
        </h6>
        <p >
          {{ __('contacts.contact_us_desc')}}
        </p>
      </div>


    </div>

    <div class="container px-4">
  
      <div class="row row-cols-1 row-cols-lg-3  g-4 py-5">
        <div class="col">
          <div class=" p-5 text-center bg-body-tertiary rounded-3" data-aos="fade-up" data-aos-delay="50">
            <img src="../assets/img/email.png" height="50px" alt="">
            <h3 class="text-body-emphasis mt-2 mb-2">{{ __('contacts.email')}}</h3>
            <p class="col-lg-10 mx-auto text-muted"><br>
              info@pikft.hu
            </p>
          </div>
        </div>
  
        <div class="col">
          <div class=" p-5 text-center bg-body-tertiary rounded-3" data-aos="fade-up" data-aos-delay="100">
            <img src="../assets/img/mobile.png" height="50px" alt="">
            <h3 class="text-body-emphasis mt-2 mb-2">{{ __('contacts.phone')}}</h3>
            <p class="col-lg-10 mx-auto text-muted"><br>
              +36 70 702 1252 
            </p>
          </div>
        </div>

        <div class="col">
          <div class=" p-5 text-center bg-body-tertiary rounded-3" data-aos="fade-up" data-aos-delay="150">
            <img src="../assets/img/address.png" height="50px" alt="">
            <h3 class="text-body-emphasis mt-2 mb-2">{{ __('contacts.address')}}</h3>
            <p class="col-lg-10 mx-auto text-muted">
              Paks, Vácika köz 1, 7030 Magyarország
            </p>
          </div>
        </div>

      </div>
    </div>


    <div class="conteiner my-5">
      <div class="mb-5 mt-1 text-center">
        <h6 class="display-6 text-body-emphasis lh-2 mb-3 mt-5" data-aos="fade-up">
          {{ __('contacts.map')}}          
        </h6>
      </div>
    
    <div class="container my-5 pt-1" data-aos="fade-up">
      <div class="text-center bg-body-tertiary rounded-3">

        <iframe class="rounded-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19151.850923572147!2d18.82580443619575!3d46.61593960707588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47425c4ebf44334b%3A0xc0ca0760f0d4fcc8!2zUGFrcywgVsOhY2lrYSBrw7Z6IDEsIDcwMzAgTWFneWFyb3JzesOhZw!5e0!3m2!1shu!2sua!4v1727186630055!5m2!1shu!2sua" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
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
