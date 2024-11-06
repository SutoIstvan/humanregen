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
            <span class="text-primary">{{ __('surveillance.video_surveillance') }}</span> {{ __('surveillance.systems_comprehensive') }}
          </h1>
          <p class="lead text-body-secondary mt-1 me-4" data-aos="fade-up" data-aos-duration="1000">
            {{ __('surveillance.paksi_info') }}
          </p>
        </div>
      </div>
    </div>
    
    <div class="container my-5">
      <div class="col-md-11 mt-2 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-2 text-center">
            {{ __('surveillance.design_title') }}
          </h1>
        </div>        
        <p>
          {{ __('surveillance.design_description') }}
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
              <h5>{{ __('surveillance.site_survey') }}</h5>
              <p class="text-body-secondary">
                {{ __('surveillance.site_survey_description') }}
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
              <h5>{{ __('surveillance.camera_selection') }}</h5>
              <p class="text-body-secondary">
                {{ __('surveillance.camera_selection_description') }}
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
              <h5>{{ __('surveillance.scalability') }}</h5>
              <p class="text-body-secondary">
                {{ __('surveillance.scalability_description') }}
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
            {{ __('surveillance.installation_title') }}
          </h1>
        </div>        
        <p>
          {{ __('surveillance.installation_description') }}
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
              <h5>{{ __('surveillance.camera_installation') }}</h5>
              <p class="text-body-secondary">
                {{ __('surveillance.camera_installation_description') }}
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
              <h5>{{ __('surveillance.network_integration') }}</h5>
              <p class="text-body-secondary">
                {{ __('surveillance.network_integration_description') }}
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
              <h5>{{ __('surveillance.recorder_configuration') }}</h5>
              <p class="text-body-secondary">
                {{ __('surveillance.recorder_configuration_description') }}
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
            {{ __('surveillance.remote_access_title') }}
          </h1>
        </div>        
        <p>
          {{ __('surveillance.remote_access_description') }}
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
              <h5>{{ __('surveillance.real_time_monitoring') }}</h5>
              <p class="text-body-secondary">
                {{ __('surveillance.real_time_monitoring_description') }}
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
              <h5>{{ __('surveillance.footage_review') }}</h5>
              <p class="text-body-secondary">
                {{ __('surveillance.footage_review_description') }}
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
              <h5>{{ __('surveillance.alarm_notifications') }}</h5>
              <p class="text-body-secondary">
                {{ __('surveillance.alarm_notifications_description') }}
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
            {{ __('surveillance.maintenance_title') }}
          </h1>
        </div>        
        <p>
          {{ __('surveillance.maintenance_description') }}
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
              <h5>{{ __('surveillance.regular_checks') }}</h5>
              <p class="text-body-secondary">
                {{ __('surveillance.regular_checks_description') }}
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
              <h5>{{ __('surveillance.software_updates') }}</h5>
              <p class="text-body-secondary">
                {{ __('surveillance.software_updates_description') }}
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
              <h5>{{ __('surveillance.quick_troubleshooting') }}</h5>
              <p class="text-body-secondary">
                {{ __('surveillance.quick_troubleshooting_description') }}
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
            {{ __('surveillance.ip_camera_advantages') }}
          </h1>
        </div>        
        <p>
          {{ __('surveillance.ip_camera_advantages_description') }}
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
              <h5>{{ __('surveillance.high_resolution_images') }}</h5>
              <p class="text-body-secondary">
                {{ __('surveillance.high_resolution_images_description') }}
              </p>
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
              <h5>{{ __('surveillance.remote_monitoring') }}</h5>
              <p class="text-body-secondary">
                {{ __('surveillance.remote_monitoring_description') }}
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
              <h5>{{ __('surveillance.easy_expandability') }}</h5>
              <p class="text-body-secondary">
                {{ __('surveillance.easy_expandability_description') }}
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
              <h5>{{ __('surveillance.integration_with_other_systems') }}</h5>
              <p class="text-body-secondary">
                {{ __('surveillance.integration_with_other_systems_description') }}
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container my-5">
      <div class="col-md-9 mt-5 text-center justify-content-center g-lg-5 py-5 mx-auto" data-aos="fade-up">
        <h1 class="display-6 text-body-emphasis lh-2 mb-3">
          {{ __('surveillance.why_choose_us') }}
        </h1>
        <p>
          {{ __('surveillance.why_choose_us_description', ['company' => 'Paksi Informatika']) }}
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
