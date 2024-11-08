@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>Dashboard</h1> --}}
@stop

@section('content')
    <p><br>Időpont foglaló lista</p>

@php
$heads = [
    'ID',
    'Name',
    ['label' => 'Phone', 'width' => 20],
    'Date',
    'Time Slot',
    'Duration',
    ['label' => 'Actions', 'no-export' => true, 'width' => 5],
];

$btnEdit = '<button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                <i class="fa fa-lg fa-fw fa-pen"></i>
            </button>';
$btnDelete = '<button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                  <i class="fa fa-lg fa-fw fa-trash"></i>
              </button>';
$btnDetails = '<button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                   <i class="fa fa-lg fa-fw fa-eye"></i>
               </button>';

$config = [
    'data' => $bookings->map(function ($booking) use ($btnEdit, $btnDelete, $btnDetails) {
        return [
            $booking->id,
            $booking->client_name,
            $booking->client_phone,
            $booking->date,  // Дата бронирования
            \Carbon\Carbon::parse($booking->time_slot)->format('H:i'),  // Время бронирования
            $booking->duration,  // Продолжительность
            '<nobr>' . $btnEdit . $btnDelete . $btnDetails . '</nobr>',
        ];
    }),
    'order' => [[1, 'asc']],
    'columns' => [null, null, null, null, null, null, ['orderable' => false]],
];
@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="table1" :heads="$heads">
    @foreach($config['data'] as $row)
        <tr>
            @foreach($row as $cell)
                <td>{!! $cell !!}</td>
            @endforeach
        </tr>
    @endforeach
</x-adminlte-datatable>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
@stop

@section('js')
    <script> console.log(""); </script>
@stop
