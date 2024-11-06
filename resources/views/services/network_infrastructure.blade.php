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
            {{ __('network.low_voltage_networks') }} - {{ __('network.precise_design_and_implementation') }}
          </h1>
          <p class="lead text-body-secondary mt-1 me-4" data-aos="fade-up" data-aos-duration="1000">
            {{ __('network.experience_description') }}
          </p>
        </div>
      </div>
    </div>
    
    <div class="container my-5">
      <div class="col-md-11 mt-2 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-2 text-center">
            {{ __('network.low_voltage_network_design') }}
          </h1>
        </div>        
        <p>
          {{ __('network.network_design_importance') }}
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
              <h5>{{ __('network.network_needs_assessment') }}:</h5>
              <p class="text-body-secondary">
                {{ __('network.needs_assessment_description') }}
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
              <h5>{{ __('network.custom_network_plans') }}:</h5>
              <p class="text-body-secondary">
                {{ __('network.custom_plans_description') }}
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
              <h5>{{ __('network.scalability') }}:</h5>
              <p class="text-body-secondary">
                {{ __('network.scalability_description') }}
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
            {{ __('network.network_building_and_implementation') }}
          </h1>
        </div>        
        <p>
          {{ __('network.implementation_description') }}
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
              <h5>{{ __('network.cabling_and_installation') }}:</h5>
              <p class="text-body-secondary">
                {{ __('network.cabling_description') }}
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
              <h5>{{ __('network.device_configuration') }}:</h5>
              <p class="text-body-secondary">
                {{ __('network.configuration_description') }}
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
              <h5>{{ __('network.testing_and_handover') }}:</h5>
              <p class="text-body-secondary">
                {{ __('network.testing_description') }}
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
            {{ __('network.network_maintenance_and_monitoring') }}
          </h1>
        </div>        
        <p>
          {{ __('network.maintenance_description') }}
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
              <h5>{{ __('network.regular_checks') }}:</h5>
              <p class="text-body-secondary">
                {{ __('network.checks_description') }}
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
              <h5>{{ __('network.troubleshooting') }}:</h5>
              <p class="text-body-secondary">
                {{ __('network.troubleshooting_description') }}
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
              <h5>{{ __('network.remote_monitoring') }}:</h5>
              <p class="text-body-secondary">
                {{ __('network.remote_monitoring_description') }}
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
            {{ __('network.ip_camera_and_access_control') }}
          </h1>
        </div>        
        <p>
          {{ __('network.integration_description') }}
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
              <h5>{{ __('network.ip_camera_installation') }}:</h5>
              <p class="text-body-secondary">
                {{ __('network.ip_camera_description') }}
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
              <h5>{{ __('network.access_control_installation') }}:</h5>
              <p class="text-body-secondary">
                {{ __('network.access_control_description') }}
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
