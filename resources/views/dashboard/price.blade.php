@extends('adminlte::page')

@section('title', 'Árak szerkesztése')

@section('content_header')
    <h1></h1>
@stop

@section('content')

    <form action="{{ route('prices.updateAll') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-12 col-md-6">
                <x-adminlte-card title="HumanRegen Árak szerkesztése" theme="lightblue" theme-mode="outline"
                    icon="fas fa-md fa-coins" header-class="text-uppercase rounded-bottom border-info">

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
                </x-adminlte-card>
            </div>

            <div class="col-12 col-md-6">
                <x-adminlte-card title="InBody Árak szerkesztése" theme="lightblue" theme-mode="outline"
                    icon="fas fa-md fa-coins" header-class="text-uppercase rounded-bottom border-info">

                    <x-adminlte-input name="price5" label="1. alkalom + konzultáció" placeholder="Enter price" type="number"
                        igroup-size="sm" min=1 max=900000 value="{{ $price5->amount }}">
                        <x-slot name="appendSlot">
                            <div class="input-group-text bg-dark">
                                <i class="fas fa-hashtag"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                
                    <x-adminlte-input name="price6" label="Mérés (konzultáció nélkül)" placeholder="Enter price" type="number"
                        igroup-size="sm" min=1 max=900000 value="{{ $price6->amount }}">
                        <x-slot name="appendSlot">
                            <div class="input-group-text bg-dark">
                                <i class="fas fa-hashtag"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                
                    <x-adminlte-input name="price7" label="5.-dik alkalom (konzultáció nélkül)" placeholder="Enter price" type="number"
                        igroup-size="sm" min=1 max=900000 value="{{ $price7->amount }}">
                        <x-slot name="appendSlot">
                            <div class="input-group-text bg-dark">
                                <i class="fas fa-hashtag"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                
                    <x-adminlte-input name="price8" label="Konzultáció (mérés nélkül, korábbi adatokkal)" placeholder="Enter price" type="number"
                        igroup-size="sm" min=1 max=900000 value="{{ $price8->amount }}">
                        <x-slot name="appendSlot">
                            <div class="input-group-text bg-dark">
                                <i class="fas fa-hashtag"></i>
                            </div>
                        </x-slot>
                    </x-adminlte-input>
                </x-adminlte-card>
            </div>

        <x-adminlte-button class="btn-flat w-100 mt-3" type="submit" label="Összes ár frissítése" theme="success" icon="fas fa-lg fa-save"/>

    </form>


@stop
