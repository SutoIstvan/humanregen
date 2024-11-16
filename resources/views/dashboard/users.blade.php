@extends('adminlte::page')

@section('title', 'Árak szerkesztése')

@section('content_header')
    <h1></h1>
@stop

@section('content')


<x-adminlte-card title="Regisztrált felhasználók listája" theme="lightblue" theme-mode="outline" class="" icon="fas fa-md fa-users"
    header-class="text-uppercase rounded-bottom border-info">

    @php
        $heads = [
            'ID',
            'Name',
            'Email',
            'Phone',
        ];

    @endphp

    {{-- Minimal example / fill data using the component slot --}}
    <x-adminlte-datatable id="table1" :heads="$heads">
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>

            </tr>
        @endforeach
    </x-adminlte-datatable>
    {{-- Пагинация --}}
    <hr>
    <div class="d-flex justify-content-center">
        {{ $users->links('pagination::bootstrap-4') }}  <!-- Используем встроенную пагинацию Bootstrap 4 -->
    </div>
</x-adminlte-card>


<div class="pb-2">
</div>


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
