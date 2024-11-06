<div class="container">
    <nav class="navbar navbar-expand-lg" aria-label="Eleventh navbar example">
      <div class="container-fluid me-auto">
          <a class="navbar-brand" href="{{ route('home') }}" aria-label="Front">
              <img class="navbar-brand-logo" height="50px" src="{{ asset('assets/img/logo.png') }}" alt="Logo">
          </a>
          <h5 class="mt-2 me-auto" style="color: #0d6efd !important">
              <a href="{{ route('home') }}" style="text-decoration: none">
                Paksi informatika
              </a>
          </h5>  
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09"
              aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarsExample09">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          </ul>

          <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
            <li class="nav-item me-4">
              <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">
                {{__('menu.home')}}
              </a>
            </li>
            <li class="nav-item me-4 dropdown">
              <a class="nav-link dropdown-toggle {{ Route::is('services*') ? 'active' : '' }}" href="#" data-bs-toggle="dropdown"
                aria-expanded="false">{{__('menu.services')}}</a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item pt-2 {{ Route::is('services.server_maintenance') ? 'active' : '' }}" style="height: 50px;" 
                      href="{{route('services.server_maintenance')}}">
                    <img src="{{ asset('assets/service/server.png') }}" height="24" alt="" class="me-2">
                    {{__('menu.server_maintenance')}}
                  </a>
                </li>
                <li>
                  <a class="dropdown-item pt-2 {{ Route::is('services.network_infrastructure') ? 'active' : '' }}" style="height: 50px;" 
                    href="{{route('services.network_infrastructure')}}">
                    <img src="{{ asset('assets/service/structure.png') }}" height="24" alt="" class="me-2">
                    {{__('menu.network_infrastructure')}}
                  </a>
                </li>
                <li>
                  <a class="dropdown-item pt-2 {{ Route::is('services.access_control_systems') ? 'active' : '' }}" style="height: 50px;" 
                     href="{{route('services.access_control_systems')}}">
                    <img src="{{ asset('assets/service/security.png') }}" height="24" alt="" class="me-2">
                    {{__('menu.access_control_systems')}}
                  </a>
                </li>
                <li>
                  <a class="dropdown-item pt-2 {{ Route::is('services.surveillance_systems') ? 'active' : '' }}" style="height: 50px;" 
                     href="{{route('services.surveillance_systems')}}">
                    <img src="{{ asset('assets/service/cctv.png') }}" height="24" alt="" class="me-2">
                    {{__('menu.surveillance_systems')}}
                  </a>
                </li>
                <li>
                  <a class="dropdown-item pt-2 {{ Route::is('services.computer_services') ? 'active' : '' }}" style="height: 50px;" 
                    href="{{route('services.computer_services')}}">
                    <img src="{{ asset('assets/service/device.png') }}" height="24" alt="" class="me-2">
                    {{__('menu.computer_services')}}
                  </a>
                </li>
                <li>
                  <a class="dropdown-item pt-2 {{ Route::is('services.web_development') ? 'active' : '' }}" style="height: 50px;" 
                    href="{{route('services.web_development')}}">
                    <img src="{{ asset('assets/service/coding.png') }}" height="24" alt="" class="me-2">
                    {{__('menu.web_development')}}
                  </a>
                </li>
              </ul>
            </li>

            {{-- <li class="nav-item me-4">
              <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{route('about')}}">
                {{__('menu.about')}}
              </a>
            </li> --}}

            <li class="nav-item me-4">
              <a class="nav-link {{ Route::is('references') ? 'active' : '' }}" href="{{route('references')}}">
                {{__('menu.references')}}
              </a>
            </li>

            <li class="nav-item me-4">
              <a class="nav-link {{ Route::is('contacts') ? 'active' : '' }}" href="{{route('contacts')}}">
                {{__('menu.contact')}}
              </a>
            </li>

            <li class="nav-item me-4 dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                aria-expanded="false">
                @if(app()->getLocale() == 'hu')
                  <img src="{{ asset('assets/icons/flag-hu.svg') }}" height="22" alt="Hungarian">
                @elseif(app()->getLocale() == 'ru')
                  <img src="{{ asset('assets/icons/flag-ru.svg') }}" height="22" alt="Russian">
                @endif
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item pt-2" style="    height: 50px;" href="{{ route('changeLanguage', ['locale' => 'hu']) }}">
                    <img src="{{ asset('assets/icons/flag-hu.svg') }}" height="22" alt="">
                  </a>
                </li>
                <li>
                  <a class="dropdown-item pt-2" style="    height: 50px;" href="{{ route('changeLanguage', ['locale' => 'ru']) }}">
                    <img src="{{ asset('assets/icons/flag-ru.svg') }}" height="22" alt="">
                  </a>
                </li>
              </ul>
            </li>

            {{-- <li class="nav-item me-4 dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="assets/icons/sun.svg" height="22" alt="">

              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item pt-2" style="    height: 50px;" href="#">

                  <img src="assets/icons/sun.svg" height="22" alt="">

                  </a></li>
                <li>
                  <a class="dropdown-item pt-2" style="    height: 50px;" href="#">
                  
                    <img src="assets/icons/moon.svg" height="22" alt="">

                  </a></li>

              </ul>
            </li> --}}

          </ul>
        </div>
      </div>
    </nav>


  </div>