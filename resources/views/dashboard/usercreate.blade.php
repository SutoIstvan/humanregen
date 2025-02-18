@extends('adminlte::page')

@section('title', 'Adminisztrátor hozzáadása')

@section('content_header')
    <h1></h1>
@stop

@section('content')

@if(session('success'))
<x-adminlte-alert theme="success" title="Siker" class="w-50">
    {{ session('success') }}
</x-adminlte-alert>
@endif

    <x-adminlte-card title="Adminisztrátor hozzáadása" theme="lightblue" theme-mode="outline" class="w-50"
        icon="fas fa-user-plus" header-class="text-uppercase rounded-bottom border-info">
        
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
        
            <x-adminlte-input name="name" label="Név" placeholder="Adja meg a nevét" type="text" igroup-size="sm"
                value="" required>
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-user"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>

            <x-adminlte-input name="phone" label="Telefonszám" placeholder="Adja meg a telefonszámát" type="text" igroup-size="sm"
                value="" required>
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-user"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        
            <x-adminlte-input name="email" label="Email" placeholder="Adja meg az email címet" type="email" igroup-size="sm"
                value="" required>
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-envelope"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        
            <x-adminlte-input name="password" label="Jelszó" placeholder="Adja meg a jelszót" type="password" igroup-size="sm"
                required>
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-lock"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        
            <x-adminlte-input name="password_confirmation" label="Jelszó megerősítése" placeholder="Erősítse meg a jelszót"
                type="password" igroup-size="sm" required>
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-lock"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
                
            <x-adminlte-button class="btn-flat w-100 mt-3" type="submit" label="Adminisztrátor hozzáadása" theme="success" icon="fas fa-user-plus"/>
        </form>
    </x-adminlte-card>

    <div class="pb-2">
    </div>
@stop
