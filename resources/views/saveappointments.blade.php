<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    
    <style>
          .hero {
            width: 100%;
            min-height: 40vh !important;
            position: relative;
            padding: 80px 0 80px 0;
            display: flex;
            align-items: center;
          }
    </style>
</head>

<body>

    @include('layouts.nav')
    

      <!-- Hero Section -->
  <section id="hero" class="hero section dark-background">
    <img src="assets/img/hero-bg-8.jpg" alt="" class="hero-bg">

    <div class="container">
      <div class="row gy-4 text-center">


        <div class="col-lg-12  d-flex flex-column justify-content-center" data-aos="fade-in" >
          <h1><span>Foglalás véglegesítése</span></h1>
        </div>

      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3"></use>
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0"></use>
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9"></use>
      </g>
    </svg>

  </section><!-- /Hero Section -->

  {{-- @dump($selectedDate)
  @dump($selectedTime) --}}


  <!-- <div class="px-4 pt-5  text-center">
    <h1 class="display-4 fw-bold text-body-emphasis">HATÁSOK</h1>

  </div> -->

        <!-- Section Title -->
        <div class="container section-title pt-5" data-aos="fade-up">

          <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
              <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Foglalás véglegesítése</h2>
    
              @if (!Auth::check())
                <p class="lead">
                  Már van Humanregen fiókom: 
                  <a href="{{ route('login', ['redirect' => url()->full()]) }}" class="text-decoration-none">Bejelentkezem</a>

                  {{-- <a href="{{ route('login') }}" class="text-decoration-none">Bejelentkezem</a> --}}
                  <br>
                  Még nincs fiókod? 
                  <a href="{{ route('register') }}" class="text-decoration-none">Regisztrálj most!</a>
                </p>
              
                <h2>Foglalás Humanregen fiók nélkül</h2>
              @endif
            


            </div>
          </div>
    
        </div><!-- End Section Title -->

        <div class="container col-8">
          <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
              <h4 class="d-flex justify-content-between align-items-center mb-4 mt-4">
                {{-- <span class="text-primary">Your cart</span> --}}
                {{-- <span class="badge bg-primary rounded-pill">3</span> --}}
              </h4>
              <ul class="list-group mb-4">
                <li class="list-group-item d-flex justify-content-between lh-sm">
                  <div>
                    <h6 class="my-0">Dátum</h6>
                    {{-- <small class="text-body-secondary">{{ $selectedDate }}</small> --}}
                  </div>
                  <span class="text-body-secondary">{{ $selectedDate }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-sm">
                  <div>
                    <h6 class="my-0">Időpont</h6>
                    {{-- <small class="text-body-secondary">{{ $selectedTime }}</small> --}}
                  </div>
                  <span class="text-body-secondary">{{ $selectedTime }}</span>
                </li>
                {{-- <li class="list-group-item d-flex justify-content-between lh-sm">
                  <div>
                    <h6 class="my-0">Third item</h6>
                    <small class="text-body-secondary">Brief description</small>
                  </div>
                  <span class="text-body-secondary">$5</span>
                </li> --}}
                <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                  <div class="text-success">
                    <h6 class="my-0">Időtartam</h6>
                    {{-- <small>Időtartam</small> --}}
                  </div>
                  <span class="text-success">{{ $duration }} perc</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                  <span>Ár (Ft)</span>

                  @if ($duration == 35)
                      <strong>{{ $price->amount }}</strong>
                  @elseif ($duration == 70)
                      <strong>{{ $price2->amount }}</strong>
                  @endif

                </li>
              </ul>
      
              {{-- <form class="card p-2">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Promo code">
                  <button type="submit" class="btn btn-secondary">Redeem</button>
                </div>
              </form> --}}
              <div class="input-group mt-5 w-100">
                <form action="{{ route('appointments') }}" method="get" class="w-100">
                    <button type="submit" class="btn btn-secondary btn-lg w-100 ">Vissza</button>
                </form>
              </div>

            </div>
            <div class="col-md-7 col-lg-7">
              {{-- <h4 class="mb-3">Billing address</h4> --}}
              <form action="{{ route('bookstore')}}" method="POST" class="needs-validation mt-5">
                @csrf

                <input type="hidden" name="date" value="{{ $selectedDate }}">
                <input type="hidden" name="time_slot" value="{{ $selectedTime }}">
                <input type="hidden" name="duration" value="{{ $duration }}">

                <div class="row g-3">
                  <div class="col-sm-12">
                    {{-- <label for="name" class="form-label">Név</label> --}}
                    <input name="client_name" type="text" class="form-control" id="name" placeholder="Név" value="{{ old('name', $user->name ?? '') }}" required="">
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                  </div>

                  <div class="col-12">
                    {{-- <label for="email" class="form-label">Email cím <span class="text-body-secondary">(Optional)</span></label> --}}
                    <input name="client_email" type="email" class="form-control" id="email" placeholder="Email cím" value="{{ old('email', $user->email ?? '') }}" required="">
                    <div class="invalid-feedback">
                      Please enter a valid email address for shipping updates.
                    </div>
                  </div>
      
                  <div class="col-12 mb-1">
                    {{-- <label for="phone" class="form-label">Telefonszám</label> --}}
                    <input name="client_phone" type="text" class="form-control" id="phone" placeholder="Telefonszám" value="{{ old('phone', $user->phone ?? '') }}" required="">
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>
      
                  
                </div>
      
                {{-- <hr class="my-4"> --}}
      
                {{-- <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="same-address">
                  <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
                </div> --}}
      
                <div class="form-check mb-3 mt-3 ms-1">
                  <input type="checkbox" class="form-check-input" id="save-info" required>
                  <label class="form-check-label" for="save-info">Elfogadom az 
                    <a href="{{ route('gdpr') }}" target="_blank">
                      adatkezelési feltételeket.
                    </a>
                  </label>
                </div>
    
                
                <button type="submit" style="background-color: #c2a74e; border-color: #c2a74e;" class="btn btn-primary btn-lg px-4 me-md-2 w-100" required>Foglalás elküldése</button>

                {{-- <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button> --}}
              </form>
            </div>
          </div>
        </div>


  
    @include('layouts.modal')

    @include('layouts.footer')
  
</body>
</html>
