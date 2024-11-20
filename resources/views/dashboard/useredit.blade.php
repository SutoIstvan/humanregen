@extends('adminlte::page')

@section('title', 'Felhasználói adatok szerkesztése')

@section('content_header')
    <h1></h1>
@stop

@section('content')

@if(session('success'))
<x-adminlte-alert theme="success" title="Siker" class="w-50">
    {{ session('success') }}
</x-adminlte-alert>
@endif

    <x-adminlte-card title="Felhasználói adatok szerkesztése" theme="lightblue" theme-mode="outline" class="w-50"
        icon="fas fa-user-plus" header-class="text-uppercase rounded-bottom border-info">
        
        <form action="{{ route('users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <x-adminlte-input name="name" label="Név" placeholder="Adja meg a nevét" type="text" igroup-size="sm"
                value="{{ old('name', $user->name) }}" required>
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-user"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            <x-adminlte-input name="phone" label="Telefonszám" placeholder="Adja meg a telefonszámát" type="text" igroup-size="sm"
                value="{{ old('name', $user->phone) }}" required>
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-user"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        
            <x-adminlte-input name="email" label="Email" placeholder="Adja meg az email címet" type="email" igroup-size="sm"
                value="{{ old('name', $user->email) }}" readonly>
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-envelope"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            <x-adminlte-select2 name="role" label="Jogosultság" igroup-size="sm" required>
                <x-slot name="prependSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-users"></i>
                    </div>
                </x-slot>
                <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                
            </x-adminlte-select2>
                
            <x-adminlte-button class="btn-flat w-100 mt-3" type="submit" label="Felhasználói adatok frissítése" theme="success" icon="fas fa-user-plus"/>
        </form>
    </x-adminlte-card>

    <div class="pb-2">
    </div>
@stop
