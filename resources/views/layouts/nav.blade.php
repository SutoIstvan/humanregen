<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    {{-- <div class="container"> --}}

    {{-- <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5"> --}}
    <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5 mx-xxl-5">
        <!-- <h2 class="m-0 text-primary">LOGO</h2> -->
        <img src="{{ asset('assets/logo2.png') }}" height="75px" alt="">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('welcome') }}"
                class="nav-item nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}">Főoldal</a>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Rolunk</i></a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="#" class="dropdown-item">KÜLDETÉSÜNK</a>
                    <a href="#" class="dropdown-item">HITVALLÁSUNK</a>
                    <a href="{{ route('about.cap') }}" class="dropdown-item active">COLD ATMOSPHERIC PLASMA (CAP)</a>
                    <a href="#" class="dropdown-item">BEVEZETÉS (TÖRTÉNET)</a>
                    <a href="#" class="dropdown-item">A HIDEG ATMOSZFÉRIKUS PLAZMA HASZNÁLATA RÁKOS SEJTEKRE</a>
                    <a href="#" class="dropdown-item">HOGYAN MŰKÖDIK A HUMÁN REGENERÁCIÓ?</a>
                    <a href="#" class="dropdown-item">REGENERÁCIÓ FOLYAMATA</a>
                    <a href="#" class="dropdown-item">MILYEN ESETEKBEN NEM HASZNÁLHATÓ A HUMÁN REGENERÁTOR?</a>

                </div>
            </div> --}}

            <div class="nav-item dropdown">

                <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('about.*') ? 'active' : '' }}"
                    data-bs-toggle="dropdown">Rólunk</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{ route('about.mission') }}"
                        class="dropdown-item {{ request()->routeIs('about.mission') ? 'active' : '' }}">
                        Küldetésünk</a>
                    <a href="{{ route('about.credo') }}"
                        class="dropdown-item {{ request()->routeIs('about.credo') ? 'active' : '' }}">
                        Hitvallásunk</a>
                    <a href="{{ route('about.cap') }}"
                        class="dropdown-item {{ request()->routeIs('about.cap') ? 'active' : '' }}">
                        Cold Atmospheric Plasma (CAP)</a>
                    <a href="{{ route('about.introduction') }}"
                        class="dropdown-item {{ request()->routeIs('about.introduction') ? 'active' : '' }}">
                        Bevezetés (Történet)</a>
                    <a href="{{ route('about.using-plasma-cancer') }}"
                        class="dropdown-item {{ request()->routeIs('about.using-plasma-cancer') ? 'active' : '' }}">A
                        Hideg Atmoszférikus Plazma Használata Rákos Sejtekre</a>
                    <a href="{{ route('about.how-human-regeneration-works') }}"
                        class="dropdown-item {{ request()->routeIs('about.how-human-regeneration-works') ? 'active' : '' }}">
                        Hogyan Működik A Humán Regeneráció?</a>
                    <a href="{{ route('about.regeneration-process') }}"
                        class="dropdown-item {{ request()->routeIs('about.regeneration-process') ? 'active' : '' }}">
                        Regeneráció Folyamata</a>
                    <a href="{{ route('about.when-not-usable') }}"
                        class="dropdown-item {{ request()->routeIs('about.when-not-usable') ? 'active' : '' }}">
                        Milyen Esetekben Nem Használható A Humán Regenerátor?</a>
                </div>
            </div>

            <a href="{{ route('effects') }}"
                class="nav-item nav-link {{ request()->routeIs('effects') ? 'active' : '' }}">Jótékony hatások</a>
            <a href="{{ route('price') }}"
                class="nav-item nav-link {{ request()->routeIs('price') ? 'active' : '' }}">Árak</a>
            <a href="{{ route('gallery') }}"
                class="nav-item nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">Galéria</a>
            <a href="{{ route('contacts') }}"
                class="nav-item nav-link {{ request()->routeIs('contacts') ? 'active' : '' }}">Kapcsolat</a>
            <a href="{{ route('dashboard') }}"
                class="nav-item nav-link {{ request()->routeIs('login') ? 'active' : '' }}">
                {{ Auth::check() ? 'Fiók' : 'Belépés' }}
            </a>

            <a href="{{ route('appointments') }}"
                class="nav-item nav-link {{ request()->routeIs('appointments') ? 'active' : '' }} d-block d-lg-none">IDŐPONTFOGLALÁS</a>

        </div>
        <a href="{{ route('appointments') }}" class="btn btn-green py-4 px-lg-4 d-none d-lg-block"
            style="border-radius: 8px 0px 0px 8px !important;">IDŐPONTFOGLALÁS<i class="fa fa-arrow-right ms-3"></i></a>

        {{-- <a href="{{ route('appointments') }}" class="btn btn-green py-4 px-lg-4 d-none d-lg-block">IDŐPONTFOGLALÁS<i
        class="fa fa-arrow-right ms-3"></i></a> --}}
    </div>
    {{-- </div> --}}
</nav>
