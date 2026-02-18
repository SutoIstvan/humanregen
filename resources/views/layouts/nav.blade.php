<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">

    <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5 mx-xxl-5">
        <img src="{{ asset('assets/logo2.png') }}" height="75px" alt="">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('welcome') }}"
                class="nav-item nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}">Főoldal</a>


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
                

            </div>
    </div>

    <div class="nav-item dropdown">

        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('humanregen.*') ? 'active' : '' }}"
            data-bs-toggle="dropdown">Humanregen</a>
            <div class="dropdown-menu fade-up m-0">
                <a href="{{ route('humanregen.effects') }}"
                    class="dropdown-item {{ request()->routeIs('humanregen.effects') ? 'active' : '' }}">
                    Jótékony hatások</a>

                <a href="{{ route('humanregen.cap') }}"
                    class="dropdown-item {{ request()->routeIs('humanregen.cap') ? 'active' : '' }}">
                    Cold Atmospheric Plasma (CAP)</a>
                <a href="{{ route('humanregen.introduction') }}"
                    class="dropdown-item {{ request()->routeIs('humanregen.introduction') ? 'active' : '' }}">
                    Bevezetés (Történet)</a>
                <a href="{{ route('humanregen.using-plasma-cancer') }}"
                    class="dropdown-item {{ request()->routeIs('humanregen.using-plasma-cancer') ? 'active' : '' }}">A
                    Hideg Atmoszférikus Plazma Használata Rákos Sejtekre</a>
                <a href="{{ route('humanregen.how-human-regeneration-works') }}"
                    class="dropdown-item {{ request()->routeIs('humanregen.how-human-regeneration-works') ? 'active' : '' }}">
                    Hogyan Működik A Humán Regeneráció?</a>
                <a href="{{ route('humanregen.regeneration-process') }}"
                    class="dropdown-item {{ request()->routeIs('humanregen.regeneration-process') ? 'active' : '' }}">
                    Regeneráció Folyamata</a>
                <a href="{{ route('humanregen.when-not-usable') }}"
                    class="dropdown-item {{ request()->routeIs('humanregen.when-not-usable') ? 'active' : '' }}">
                    Milyen Esetekben Nem Használható A Humán Regenerátor?</a>

            </div>
    </div>

    <div class="nav-item dropdown">

        <a href="#" class="nav-link dropdown-toggle {{ request()->routeIs('inbody.*') ? 'active' : '' }}"
            data-bs-toggle="dropdown">InBody 970s</a>
            <div class="dropdown-menu fade-up m-0">
                <a href="{{ route('inbody.inbody') }}"
                    class="dropdown-item {{ request()->routeIs('inbody.inbody') ? 'active' : '' }}">
                    InBody 970s testösszetétel elemző</a>
                <a href="{{ route('inbody.how-does-it-work') }}"
                    class="dropdown-item {{ request()->routeIs('inbody.how-does-it-work') ? 'active' : '' }}">
                    Hogyan működik</a>
                <a href="{{ route('inbody.why-inbody') }}"
                    class="dropdown-item {{ request()->routeIs('inbody.why-inbody') ? 'active' : '' }}">
                    Miért az INBODY 970S</a>
                <a href="{{ route('inbody.who-is-worth-showing') }}"
                    class="dropdown-item {{ request()->routeIs('inbody.who-is-worth-showing') ? 'active' : '' }}">
                    Kinek érdemes megmutatni az InBody Adatait?</a>

                <a href="{{ route('inbody.preparation-guide') }}"
                    class="dropdown-item {{ request()->routeIs('inbody.preparation-guide') ? 'active' : '' }}">
                    Felkészülési útmutató</a>
            </div>
    </div>


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