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
            'Role',
            ['label' => 'Actions', 'no-export' => true, 'width' => 15],

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
                <td>{{ $user->role }}</td>
                <td>

                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                        <i class="fa fa-lg fa-fw fa-pen"></i>
                    </a>
                    
                    <!-- Кнопка для удаления с подтверждением -->
                    <form action="{{ route('users.delete', $user->id) }}" method="POST" id="delete-form-{{ $user->id }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete" onclick="confirmDelete('{{ $user->name }}', {{ $user->id }})">
                            <i class="fa fa-lg fa-fw fa-trash"></i>
                        </button>
                    </form>
                    
                </td>

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
    function confirmDelete(userName, userId) {
        if (confirm('Biztosan törli ' + userName + ' nevű felhasználót?')) {
            document.getElementById('delete-form-' + userId).submit();
        }
    }
</script>
@stop
