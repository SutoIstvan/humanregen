@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
                <div class="alert alert-warning">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        {{ __('Profilom') }}
                    </div>
                    
                    <div>
                        {{ Auth::user()->name }}
                    </div>
                    
                    <div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link" style="padding: 0; border: none; background: none; text-decoration: none; color:crimson;">
                                Kijelentkezés
                            </button>
                        </form>
                    </div>
                </div>
                

                <div class="card-body">

                    <div class="container">

                        <div class="row">
                            <form action="{{ route('profile.update') }}" method="POST">
                                @csrf
        
                            <div class="col-md-12 mb-3">
                                <label for="name" class="form-label">Név</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                            </div>
                    
                            <div class="col-md-12 mb-3">
                                <label for="phone" class="form-label">Telefonszám</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" required>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="email" class="form-label">Email cím</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" readonly>
                            </div>
                    
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary w-100" style="background-color: #006469; border-color:#006469">Adatok módosítása</button>
                            </div>
                            </form>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Hírlevelünk') }}
                </div>

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            @if ($subscribe)
                                <div class="col-md-12 mb-3">
                                    <p>Ön fel van iratkozva a hírlevélre és akciokra.</p>
                                    <form action="{{ route('unsubscribe') }}" method="POST">
                                        @csrf
                                        <input type="hidden" class="form-control mb-2" id="subscription_email" name="email" placeholder="Adja meg e-mail címét" value="{{ $user->email }}">

                                        <button type="submit" class="btn btn-danger w-100">Lemondás a hírlevélről</button>
                                    </form>
                                </div>
                            @else
                                <div class="col-md-12 mb-3">
                                    <p>Iratkozzon fel hírlevelünkre, és értesüljön legfrissebb híreinkről szolgáltatásainkkal kapcsolatban!</p>
                                    <form action="{{ route('subscribe') }}" method="POST">
                                        @csrf
                                        <input type="hidden" class="form-control mb-2" id="subscription_email" name="email" placeholder="Adja meg e-mail címét" value="{{ $user->email }}">
                                        <button type="submit" class="btn btn-success w-100" style="background-color: #006469; border-color: #006469;">Feliratkozás</button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Foglalási előzmények') }}
                </div>

                <div class="card-body">
                    <div>
                        @if($bookings->isEmpty())
                        <p class="text-center mt-2">Nincs foglalási előzmény.</p>
                        @else
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Dátum</th>
                                    <th>Időpont</th>
                                    <th>Időtartam</th>
                                    <th style=" justify-content: end; display: flex;">Művelet</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookings as $index => $booking)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $booking->date }}</td>
                                    <td>{{ \Carbon\Carbon::parse($booking->time_slot)->format('H:i') }}</td>
                                    <td>{{ $booking->duration ?? 'Nincs megadva' }} perc</td>
                                    <td style=" justify-content: end; display: flex;">
                                            <form action="{{ route('bookings.destroyprofile', $booking->id) }}" method="POST" onsubmit="return confirm('Biztosan törölni szeretné ezt a foglalást?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Foglalás Törlése</button>
                                            </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>                       
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
