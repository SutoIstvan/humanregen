<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title_computer_services'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    @include('layouts.nav')
    
    <div class="container col-xxl-12 px-4 py-5 mt-lg-5">
      <div class="row flex-lg-row-reverse align-items-center g-0 py-0">
        <div data-aos="fade-up" data-aos-duration="1000" class="col-12 col-sm-12 col-lg-6">
          <img src="../assets/system-administrator.png" class="img-fluid " loading="lazy" style="opacity: 0.7; height:300px">
        </div>
        <div class="col-lg-6 mt-xs-3">
          <h1 class="display-6 text-body-emphasis lh-2 mb-4 mt-5" data-aos="fade-up">
            <span class="text-primary">{{ __('computer.system_admin') }}</span> {{ __('computer.solutions_for_smooth_operation') }}
          </h1>
          <p class="lead text-body-secondary mt-1 me-4" data-aos="fade-up" data-aos-duration="1000">
            {{ __('computer.company_description') }}
          </p>
        </div>
      </div>
    </div>
    
    <div class="container my-5">
      <div class="col-md-11 mt-2 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-2 text-center">
            {{ __('computer.system_design_and_installation') }}
          </h1>
        </div>        
        <p>
          {{ __('computer.system_design_description') }}
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
              <h5>{{ __('computer.hardware_procurement') }}:</h5>
              <p class="text-body-secondary">
                {{ __('computer.hardware_procurement_description') }}
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
              <h5>{{ __('computer.software_procurement') }}:</h5>
              <p class="text-body-secondary">
                {{ __('computer.software_procurement_description') }}
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
              <h5>{{ __('computer.installation_and_configuration') }}:</h5>
              <p class="text-body-secondary">
                {{ __('computer.installation_and_configuration_description') }}
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
            {{ __('computer.continuous_operation_and_maintenance') }}
          </h1>
        </div>        
        <p>
          {{ __('computer.continuous_operation_description') }}
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
              <h5>{{ __('computer.regular_checks') }}:</h5>
              <p class="text-body-secondary">
                {{ __('computer.regular_checks_description') }}
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
              <h5>{{ __('computer.software_updates') }}:</h5>
              <p class="text-body-secondary">
                {{ __('computer.software_updates_description') }}
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
              <h5>{{ __('computer.troubleshooting_and_support') }}:</h5>
              <p class="text-body-secondary">
                {{ __('computer.troubleshooting_and_support_description') }}
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
            {{ __('computer.remote_monitoring') }}
          </h1>
        </div>        
        <p>
          {{ __('computer.remote_monitoring_description') }}
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
              <h5>{{ __('computer.remote_monitoring_title') }}:</h5>
              <p class="text-body-secondary">
                {{ __('computer.remote_monitoring_details') }}
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
              <h5>{{ __('computer.immediate_troubleshooting') }}:</h5>
              <p class="text-body-secondary">
                {{ __('computer.immediate_troubleshooting_description') }}
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
              <h5>{{ __('computer.risk_minimization') }}:</h5>
              <p class="text-body-secondary">
                {{ __('computer.risk_minimization_description') }}
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
            {{ __('computer.security_solutions') }}
          </h1>
        </div>        
        <p>
          {{ __('computer.security_solutions_description') }}
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
              <h5>{{ __('computer.firewalls_and_antivirus') }}:</h5>
              <p class="text-body-secondary">
                {{ __('computer.firewalls_and_antivirus_description') }}
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
              <h5>{{ __('computer.data_protection_measures') }}:</h5>
              <p class="text-body-secondary">
                {{ __('computer.data_protection_measures_description') }}
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
              <h5>{{ __('computer.security_audits') }}:</h5>
              <p class="text-body-secondary">
                {{ __('computer.security_audits_description') }}
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
            {{ __('computer.data_backup_and_recovery') }}
          </h1>
        </div>        
        <p>
          {{ __('computer.data_backup_and_recovery_description') }}
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
              <h5>
                {{ __('computer.backup_solutions_development') }}
              </h5>
              <p class="text-body-secondary">
                {{ __('computer.backup_solutions_development_description') }}
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
              <h5>
                {{ __('computer.quick_recovery') }}
              </h5>
              <p class="text-body-secondary">
                {{ __('computer.quick_recovery_description') }}
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="container my-5">

      <div class="col-md-9 mt-5 text-center justify-content-center g-lg-5 py-5 mx-auto" data-aos="fade-up">
        <h1 class="display-6 text-body-emphasis lh-2 mb-3">
          {{ __('computer.why_choose_us') }}
        </h1>
        <p >
          {{ __('computer.why_choose_us_description') }}
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
