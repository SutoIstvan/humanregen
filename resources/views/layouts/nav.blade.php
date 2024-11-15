<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    {{-- <div class="container"> --}}

      {{-- <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5"> --}}
        <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5 mx-xxl-5">
          <!-- <h2 class="m-0 text-primary">LOGO</h2> -->
    <img src="{{asset('assets/logo2.png')}}" height="75px" alt="">
  </a>
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="{{ route('welcome') }}" class="nav-item nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}">Főoldal</a>
      <a href="{{ route('effects') }}" class="nav-item nav-link {{ request()->routeIs('effects') ? 'active' : '' }}">Jótékony hatások</a>
      <a href="{{ route('price') }}" class="nav-item nav-link {{ request()->routeIs('price') ? 'active' : '' }}">Árak</a>
      <a href="{{ route('contacts') }}" class="nav-item nav-link {{ request()->routeIs('contacts') ? 'active' : '' }}">Kapcsolat</a>
      <a href="{{ route('dashboard') }}" class="nav-item nav-link {{ request()->routeIs('login') ? 'active' : '' }}">
        {{ Auth::check() ? 'Fiók' : 'Belépés' }}
      </a>

      <a href="{{ route('appointments') }}" class="nav-item nav-link {{ request()->routeIs('appointments') ? 'active' : '' }} d-block d-lg-none">IDŐPONTFOGLALÁS</a>

    </div>
    <a href="{{ route('appointments') }}" class="btn btn-green py-4 px-lg-4 d-none d-lg-block" style="border-radius: 8px 0px 0px 8px !important;">IDŐPONTFOGLALÁS<i
      class="fa fa-arrow-right ms-3"></i></a>

    {{-- <a href="{{ route('appointments') }}" class="btn btn-green py-4 px-lg-4 d-none d-lg-block">IDŐPONTFOGLALÁS<i
        class="fa fa-arrow-right ms-3"></i></a> --}}
      </div>
    {{-- </div> --}}
  </nav>