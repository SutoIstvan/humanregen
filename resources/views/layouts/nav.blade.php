<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
  <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <!-- <h2 class="m-0 text-primary">LOGO</h2> -->
    <img src="{{asset('assets/logo.png')}}" height="75px" alt="">
  </a>
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="{{ route('welcome') }}" class="nav-item nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}">Főoldal</a>
      <a href="{{ route('effects') }}" class="nav-item nav-link {{ request()->routeIs('effects') ? 'active' : '' }}">Jótékony hatások</a>
      <a href="{{ route('price') }}" class="nav-item nav-link {{ request()->routeIs('price') ? 'active' : '' }}">Árak</a>
      {{-- <a href="#" class="nav-item nav-link">Galéria</a> --}}
      <!-- <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
              <div class="dropdown-menu fade-up m-0">
                  <a href="#" class="dropdown-item">Products</a>
                  <a href="#" class="dropdown-item">Our Team</a>
                  <a href="#" class="dropdown-item">Testimonial</a>
                  <a href="#" class="dropdown-item">Our Works</a>
              </div>
          </div> -->
      <a href="{{ route('contacts') }}" class="nav-item nav-link {{ request()->routeIs('contacts') ? 'active' : '' }}">Kapcsolat</a>
      <a href="{{ route('dashboard') }}" class="nav-item nav-link {{ request()->routeIs('login') ? 'active' : '' }}">
        {{ Auth::check() ? 'Fiok' : 'Belépés' }}
      </a>

      

    </div>
    <a href="{{ route('appointments') }}" class="btn btn-green py-4 px-lg-4 d-none d-lg-block">IDŐPONTFOGLALÁS<i
        class="fa fa-arrow-right ms-3"></i></a>
  </div>
</nav>