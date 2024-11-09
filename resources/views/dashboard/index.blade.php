@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>Dashboard</h1> --}}
@stop

@section('content')
    {{-- <p><br>Időpont foglaló lista</p> --}}

    <div id="calendar" style="height: 410px;"></div>


{{-- Модальное окно --}}

{{-- Модальное окно для отображения данных события --}}
<x-adminlte-modal id="modalMin" title="Детали события" size="lg" theme="teal" icon="fas fa-bell" v-centered static-backdrop scrollable>
    <div id="eventDetails">
        <p>Загружаются данные...</p>
    </div>

    <x-slot name="footerSlot">
        <x-adminlte-button class="mr-auto" theme="success" label="Закрыть" data-dismiss="modal"/>
        <x-adminlte-button theme="danger" label="Удалить" id="deleteEventButton" />
    </x-slot>
</x-adminlte-modal>

{{-- Кнопка для открытия модального окна --}}
<x-adminlte-button label="Открыть окно" data-toggle="modal" data-target="#modalMin" class="bg-teal d-none"/>


{{-- @php
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
@endphp --}}

{{-- Minimal example / fill data using the component slot --}}
{{-- <x-adminlte-datatable id="table1" :heads="$heads">
    @foreach($config['data'] as $row)
        <tr>
            @foreach($row as $cell)
                <td>{!! $cell !!}</td>
            @endforeach
        </tr>
    @endforeach
</x-adminlte-datatable> --}}

{{-- {{ dd($bookings) }} --}}

@stop

@section('css')
{{-- <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/main.min.css" rel="stylesheet"> --}}
<style>
.fc-event-time {
    font-size: 13px !important;
}
.fc-event {
    cursor: pointer;
}
</style>

@stop

@section('js')

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');


    var calendar = new FullCalendar.Calendar(calendarEl, {
        height: 550,
        initialView: 'timeGridWeek', // Вид календаря - недельный
        initialDate: new Date(), // Устанавливаем начальную дату как текущую
        events: @json($bookings), // Ваши события из базы данных
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'timeGridWeek,timeGridDay'
        },
        slotDuration: '00:35:00', // Шаг времени 30 минут
        slotLabelInterval: '00:35', // Интервал меток времени
        slotMinTime: '08:00:00', // Время начала отображения
        slotMaxTime: '17:50:00', // Время окончания отображения
        allDaySlot: false, // Отключение слота для событий на весь день
        slotLabelFormat: {
            hour: '2-digit',
            minute: '2-digit',
            hour12: false // Отключение 12-часового формата, переключаем на 24-часовой
        },
        eventTimeFormat: {
            hour: '2-digit',
            minute: '2-digit',
            hour12: false // Отображение времени событий в 24-часовом формате
        },
        hiddenDays: [0], // Отключение воскресенья (0 соответствует воскресенью)
        locale: 'hu', // Установка венгерского языка
        buttonText: {
            prev: 'Előző',  // Предыдущий
            next: 'Következő',  // Следующий
            today: 'Ma',  // Сегодня
            month: 'Hónap',  // Месяц
            week: 'Hét',  // Неделя
            day: 'Nap',  // День
            list: 'Naptár'  // Календарь (для списка)
        },
        eventClick: function(info) {
            // Открываем модальное окно
            $('#modalMin').modal('show');

            // Извлекаем данные из события
            var eventTitle = info.event.title;
            var eventStart = info.event.start.toLocaleString();
            var eventEnd = info.event.end ? info.event.end.toLocaleString() : 'Не указано';
            var clientName = info.event.extendedProps.client_name;
            var clientEmail = info.event.extendedProps.client_email;
            var clientPhone = info.event.extendedProps.client_phone;
            var eventId = info.event.extendedProps.id;

            // Обновляем содержимое модального окна
            var detailsHtml = `
                <strong>Название:</strong> ${eventTitle} <br>
                <strong>Начало:</strong> ${eventStart} <br>
                <strong>Конец:</strong> ${eventEnd} <br>
                <strong>Клиент:</strong> ${clientName} <br>
                <strong>Email клиента:</strong> ${clientEmail} <br>
                <strong>Телефон клиента:</strong> ${clientPhone} <br>
                <strong>ID бронирования:</strong> ${eventId} <br>
            `;
            document.getElementById('eventDetails').innerHTML = detailsHtml;

            // Удаление события при нажатии на кнопку "Удалить"
            document.getElementById('deleteEventButton').onclick = function() {
                // Подтверждение удаления
                if (confirm('Вы уверены, что хотите удалить это событие?')) {
                    // Отправляем запрос на удаление события через AJAX
                    fetch(`/bookings/${eventId}`, {
                        method: 'DELETE',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Удаляем событие из календаря
                            info.event.remove();
                            $('#modalMin').modal('hide');
                            alert('Событие удалено.');
                        } else {
                            alert('Ошибка при удалении события.');
                        }
                    })
                    .catch(error => {
                        console.error('Ошибка при удалении:', error);
                        alert('Произошла ошибка.');
                    });
                }
            };
        },

    });

    calendar.render();
});


</script>

@stop
