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
            <span class="text-primary">{{ __('server.comprehensive_solutions') }}</span> - {{ __('server.for_your_business') }}.
          </h1>
          <p class="lead text-body-secondary mt-1 me-4" data-aos="fade-up" data-aos-duration="1000">
            {{ __('server.our_goal') }}
          </p>
        </div>
      </div>
    </div>
    
    <div class="container my-5">
      <div class="col-md-11 mt-2 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-2 text-center">
            {{ __('server.server_workstation_design') }}
          </h1>
        </div>        
        <p>
          {{ __('server.infrastructure_importance') }}
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
              <h5>{{ __('server.infrastructure_design') }}</h5>
              <p class="text-body-secondary">{{ __('server.infrastructure_design_description') }}</p>
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
              <h5>{{ __('server.hardware_procurement') }}</h5>
              <p class="text-body-secondary">{{ __('server.hardware_procurement_description') }}</p>
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
              <h5>{{ __('server.software_installation') }}</h5>
              <p class="text-body-secondary">{{ __('server.software_installation_description') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container my-3 mb-4">
      <div class="col-md-11 mt-1 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-3 text-center">
            {{ __('server.operation_maintenance_remote') }}
          </h1>
        </div>        
        <p>
          {{ __('server.regular_maintenance_importance') }}
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
              <h5>{{ __('server.regular_monitoring') }}</h5>
              <p class="text-body-secondary">{{ __('server.regular_monitoring_description') }}</p>
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
              <h5>{{ __('server.software_updates') }}</h5>
              <p class="text-body-secondary">{{ __('server.software_updates_description') }}</p>
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
              <h5>{{ __('server.troubleshooting_support') }}</h5>
              <p class="text-body-secondary">{{ __('server.troubleshooting_support_description') }}</p>
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
              <h5>{{ __('server.remote_monitoring') }}</h5>
              <p class="text-body-secondary">{{ __('server.remote_monitoring_description') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container my-3 mb-4">
      <div class="col-md-11 mt-1 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-3 text-center">
            {{ __('server.open_source_solutions') }}
          </h1>
        </div>        
        <p>
          {{ __('server.open_source_description') }}
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
              <h5>{{ __('server.linux_servers') }}</h5>
              <p class="text-body-secondary">{{ __('server.linux_servers_description') }}</p>
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
              <h5>{{ __('server.open_source_applications') }}</h5>
              <p class="text-body-secondary">{{ __('server.open_source_applications_description') }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container my-3 mb-4">
      <div class="col-md-11 mt-1 text-center justify-content-center g-lg-5 py-1 mx-auto" data-aos="fade-up">
        <div class="d-flex flex-column align-items-center">
          <h1 class="display-6 text-body-emphasis lh-2 mb-3 text-center">
            {{ __('server.automation_efficiency') }}
          </h1>
        </div>        
        <p>
          {{ __('server.automation_description') }}
        </p>
      </div>
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
              <h5>{{ __('server.automated_updates') }}</h5>
              <p class="text-body-secondary">
                {{ __('server.automated_updates_description') }}
              </p>
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
              <h5>{{ __('server.script_based_automation') }}</h5>
              <p class="text-body-secondary">
                {{ __('server.script_based_automation_description') }}
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
            {{ __('server.data_backup_recovery') }}
          </h1>
        </div>        
        <p>
          {{ __('server.data_protection_importance') }}
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
              <h5>{{ __('server.secure_backup_strategies') }}</h5>
              <p class="text-body-secondary">{{ __('server.secure_backup_strategies_description') }}</p>
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
              <h5>{{ __('server.local_cloud_backup') }}</h5>
              <p class="text-body-secondary">{{ __('server.local_cloud_backup_description') }}</p>
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
                    <h5>{{ __('server.data_recovery_solutions') }}</h5>
                    <p class="text-body-secondary">{{ __('server.data_recovery_solutions_description') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="col-md-9 mt-5 text-center justify-content-center g-lg-5 py-5 mx-auto" data-aos="fade-up">
        <h1 class="display-6 text-body-emphasis lh-2 mb-3">
            {{ __('server.why_choose_us') }}
        </h1>
        <p>
            {{ __('server.company_description', ['company' => 'Paksi Informatika']) }}
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
