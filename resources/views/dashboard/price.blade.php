@extends('adminlte::page')

@section('title', 'Árak szerkesztése')

@section('content_header')
    <h1></h1>
@stop

@section('content')


    <x-adminlte-card title="Árak szerkesztése" theme="lightblue" theme-mode="outline" class="w-50"
        icon="fas fa-md fa-coins" header-class="text-uppercase rounded-bottom border-info">

        <form action="{{ route('prices.updateAll') }}" method="POST">
            @csrf
            @method('PUT')
        
            <x-adminlte-input name="price1" label="30 perces kezelés" placeholder="Enter price" type="number"
                igroup-size="sm" min=1 max=900000 value="{{ $price1->amount }}">
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-hashtag"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        
            <x-adminlte-input name="price2" label="60 perces kezelés" placeholder="Enter price" type="number"
                igroup-size="sm" min=1 max=900000 value="{{ $price2->amount }}">
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-hashtag"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        
            <x-adminlte-input name="price3" label="5 alkalmas bérlet" placeholder="Enter price" type="number"
                igroup-size="sm" min=1 max=900000 value="{{ $price3->amount }}">
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-hashtag"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        
            <x-adminlte-input name="price4" label="10 alkalmas bérlet" placeholder="Enter price" type="number"
                igroup-size="sm" min=1 max=900000 value="{{ $price4->amount }}">
                <x-slot name="appendSlot">
                    <div class="input-group-text bg-dark">
                        <i class="fas fa-hashtag"></i>
                    </div>
                </x-slot>
            </x-adminlte-input>
        
            <x-adminlte-button class="btn-flat w-100 mt-3" type="submit" label="Összes ár frissítése" theme="success" icon="fas fa-lg fa-save"/>

        </form>
    </x-adminlte-card>

    
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
