@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}
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
                            <!-- Колонка для редактирования имени -->
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Név</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                            </div>
                    
                            <!-- Колонка для редактирования адреса электронной почты -->
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email cím</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                            </div>
                    
                            <!-- Колонка для редактирования телефона -->
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Telefonszám</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                            </div>
                    
                            <!-- Колонка для редактирования пароля -->
                            <div class="col-md-6 mb-3">
                                <label for="password" class="form-label">Jelszó</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Jelszó">
                            </div>
                    
                            <!-- Кнопка для отправки формы -->
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary w-100" style="background-color: #006469; border-color:#006469">Adatok módosítása</button>
                            </div>
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
                            <!-- Сообщение и кнопка для отписки -->
                                <div class="col-md-12 mb-3">
                                    <p>Ön fel van iratkozva a hírlevélre és akciokra.</p>
                                    <form action="{{ route('unsubscribe') }}" method="POST">
                                        @csrf
                                        <input type="hidden" class="form-control mb-2" id="subscription_email" name="email" placeholder="Adja meg e-mail címét" value="{{ $user->email }}">

                                        <button type="submit" class="btn btn-danger w-100">Lemondás a hírlevélről</button>
                                    </form>
                                </div>
                            @else
                                <!-- Сообщение и инпут с кнопкой для подписки -->
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
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}
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
                                        {{-- <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST"> --}}
                                            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" onsubmit="return confirm('Biztosan törölni szeretné ezt a foglalást?');">
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
