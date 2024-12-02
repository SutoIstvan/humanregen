@extends('adminlte::page')

@section('title', 'Fotóalbum és Galéria')

@section('js')
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const grid = document.querySelector('.grid');
        new Masonry(grid, {
            itemSelector: '.grid-item',
            columnWidth: '.grid-item',
            percentPosition: true,
            gutter: 15
        });
    });

    document.getElementById('ifMultiple').addEventListener('change', function (event) {
        const input = event.target;
        const label = input.files.length > 1 
            ? `${input.files.length} fájl kiválasztva` 
            : input.files[0]?.name;

        const placeholderElement = input.parentElement.querySelector('.custom-file-label');
        if (placeholderElement) {
            placeholderElement.textContent = label;
        }
    });


</script>
@stop

@section('css')
<style>
    .grid {
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        padding: 0 10px;
    }

    .grid-item {
        padding: 0px;
        width: calc((100% - 60px) / 3);
        box-sizing: border-box;
    }

    .grid-item img {
        display: block;
        width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 768px) {
        .grid-item {
            width: calc((100% - 45px) / 2);
        }
    }

    @media (max-width: 480px) {
        .grid-item {
            width: 100%;
        }
    }
</style>
@stop

@section('content_header')
    <h1>Fotóalbum és Galéria</h1>
@stop

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('gallery.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <x-adminlte-input-file 
        id="ifMultiple" 
        name="images[]" 
        {{-- label="Fotók feltöltése a galériához" --}}
        placeholder="Fotók feltöltése a galériához Válasszon egy vagy több fájlt..." 
        igroup-size="lg" 
        legend="Választás" 
        multiple>
        <x-slot name="appendSlot">
            <x-adminlte-button theme="primary" label="Feltöltés" type="submit"/>
        </x-slot>
        <x-slot name="prependSlot">
            <div class="input-group-text text-primary">
                <i class="fas fa-file-upload"></i>
            </div>
        </x-slot>
    </x-adminlte-input-file>
</form>


<div class="grid">
    @foreach($galleries as $gallery)
        <div class="grid-item">
            <div class="card position-relative">
                <img src="{{ asset('storage/' . $gallery->image_path) }}" class="card-img-top" alt="img">
                <form action="{{ route('gallery.delete', $gallery->id) }}" method="POST" class="position-absolute top-0 end-0 m-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</div>

@stop
