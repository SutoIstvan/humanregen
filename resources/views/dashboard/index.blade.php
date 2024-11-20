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
    <x-adminlte-modal id="modalMin" title="Foglalás részletei" size="lg" theme="teal" icon="fas fa-bell" v-centered
        backdrop="true" scrollable>
        <div id="eventDetails">
            <p>Az adatok betöltése folyamatban van...</p>
        </div>

        <div id="eventDetailsUser">
            <p>Az adatok betöltése folyamatban van...</p>
        </div>

        <x-slot name="footerSlot">
            <x-adminlte-button theme="danger" label="Foglalás törlése" id="deleteEventButton" class="mr-auto" />
            <x-adminlte-button theme="success" label="Megerősítve" id="changeStatusButton" />
            <x-adminlte-button theme="secondary" label="Bezárás" data-dismiss="modal" />

        </x-slot>
    </x-adminlte-modal>

    <x-adminlte-modal id="createBookingModal" title="Új foglalás" size="lg" theme="primary" icon="fas fa-calendar-plus" v-centered backdrop="true">
        <form action="" method="POST">
            @csrf

            <div class="row">

                <div class="form-group col-lg-4">
                    <label for="bookingDate">Dátum</label>
                    <input type="date" id="bookingDate" name="booking_date" class="form-control" required>
                </div>
                <div class="form-group col-lg-4">
                    <label for="bookingTime">Idő</label>
                    <input type="time" id="bookingTime" name="booking_time" class="form-control" required>
                </div>
                <div class="form-group col-lg-4">
                    <label for="bookingDuration">Időtartam:</label>
                    <select id="bookingDuration" name="duration" class="form-control">
                        <option value="30">30 perc</option>
                        <option value="60">60 perc</option>
                    </select>
                </div>
                
                <div class="form-group col-lg-12">
                    <label for="clientName">Ügyfél neve</label>
                    <input type="text" id="clientName" name="client_name" class="form-control" required>
                </div>
                <div class="form-group col-lg-12">
                    <label for="clientEmail">Ügyfél email címe</label>
                    <input type="email" id="clientEmail" name="client_email" class="form-control" required>
                </div>
                <div class="form-group col-lg-12">
                    <label for="clientPhone">Ügyfél telefonszáma</label>
                    <input type="text" id="clientPhone" name="client_phone" class="form-control" required>
                </div>
                <x-slot name="footerSlot">
                    <x-adminlte-button type="submit" theme="success" label="Mentés" />
                    <x-adminlte-button theme="secondary" label="Bezárás" data-dismiss="modal" />
                </x-slot>
            
            </div>
        </form>
    </x-adminlte-modal>

    
    {{-- Кнопка для открытия модального окна --}}
    <x-adminlte-button label="Открыть окно" data-toggle="modal" data-target="#modalMin" class="bg-teal d-none" />

@stop

@section('css')
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
                height: 'auto',
                themeSystem: 'bootstrap', // Используем тему Bootstrap
                initialView: 'timeGridWeek', // Вид календаря - недельный
                initialDate: new Date(), // Устанавливаем начальную дату как текущую
                events: @json($bookings), // Ваши события из базы данных
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'timeGridWeek,timeGridDay'
                },
                slotDuration: '00:30:00', // Шаг времени 30 минут
                slotLabelInterval: '00:30', // Интервал меток времени
                slotMinTime: '08:00:00', // Время начала отображения
                slotMaxTime: '18:00:00', // Время окончания отображения
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
                    prev: 'Előző', // Предыдущий
                    next: 'Következő', // Следующий
                    today: 'Ma', // Сегодня
                    month: 'Hónap', // Месяц
                    week: 'Hét', // Неделя
                    day: 'Nap', // День
                    list: 'Naptár' // Календарь (для списка)
                },
                dateClick: function(info) {
                    // Логирование полной строки даты и времени
                    // console.log('Clicked date and time:', info.dateStr);

                    // Разделение строки на дату и время
                    const dateTime = info.dateStr.split('T'); // Разделяем дату и время
                    const date = dateTime[0]; // Дата
                    const time = dateTime[1] || ''; // Время (если доступно)

                    // Логирование отдельных значений
                    // console.log('Date:', date);
                    // console.log('Time:', time);

                    // Открываем модальное окно для добавления бронирования
                    $('#createBookingModal').modal('show');

                    // Заполняем поля модального окна
                    document.getElementById('bookingDate').value = date; // Устанавливаем дату
                    document.getElementById('bookingTime').value = time.slice(0, 5); // Устанавливаем время (формат HH:MM)
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
                    var duration = info.event.extendedProps.duration;
                    var formattedDate = info.event.extendedProps.formatted_date;
                    var formattedTimeStart = info.event.extendedProps.formatted_time_start;
                    var formattedTimeEnd = info.event.extendedProps.formatted_time_end;
                    var eventId = info.event.extendedProps.id;



                    // Обновляем содержимое модального окна
                    var detailsHtml = `
                        Foglalás dátuma: <strong>${formattedDate}</strong> <br> 
                        Foglalási időpont: <strong>${formattedTimeStart} - ${formattedTimeEnd}</strong> <br> 
                        Időtartam: <strong>${duration}</strong> perc<br><br>

                        Ügyfél neve: <strong>${clientName}</strong> <br> 
                        Ügyfél email címe: <strong>${clientEmail}</strong> <br>
                        Ügyfél telefonszáma: <strong>${clientPhone}</strong> <br>

                    `;

                    document.getElementById('eventDetails').innerHTML = detailsHtml;
                    document.getElementById('eventDetails').dataset.eventId =
                        eventId; // Добавление ID в data-атрибут

                    // Получение данных о бронированиях с сервера по email клиента
                    fetch(`/get-client-bookings/${clientEmail}`)
                        .then(response => response.json())
                        .then(data => {
                            const otherBookings = data; // Данные с сервера

                            // Генерация таблицы с другими бронированиями
                            let otherBookingsTable =
                                '<br><strong>Más foglalások:</strong><br><table border="1" style="width:100%; margin-top: 10px;">';
                            otherBookingsTable +=
                                '<tr><th>Foglalás dátuma</th><th>Időpont</th><th>Időtartam</th></tr>';

                            // Перебор полученных данных и добавление их в таблицу
                            otherBookings.forEach(booking => {
                                otherBookingsTable += `
                                    <tr>
                                        <td>${booking.bookingDate}</td> <!-- Дата -->
                                        <td>${booking.startTime} - ${booking.endTime}</td> <!-- Время -->
                                        <td>${booking.duration} perc</td> <!-- Длительность -->
                                    </tr>
                                `;
                            });

                            otherBookingsTable += '</table>';

                            // Генерация остальной информации о бронировании
                            const detailsHtml = `

                                
                                ${otherBookingsTable} <!-- Вставка таблицы с другими бронированиями -->
                            `;

                            // Вставка в DOM
                            document.getElementById('eventDetailsUser').innerHTML = detailsHtml;
                        })
                        .catch(error => {
                            console.error('Error fetching client bookings:', error);
                        });


                    // Удаление события при нажатии на кнопку "Удалить"
                    document.getElementById('deleteEventButton').onclick = function() {
                        // Подтверждение удаления
                        if (confirm('Biztosan törölni szeretné ezt a foglalást?')) {
                            // Отправляем запрос на удаление события через AJAX
                            fetch(`/bookings/${eventId}`, {
                                    method: 'DELETE',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': document.querySelector(
                                            'meta[name="csrf-token"]').getAttribute(
                                            'content')
                                    }
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        // Удаляем событие из календаря
                                        info.event.remove();
                                        $('#modalMin').modal('hide');
                                        // alert('Событие удалено.');
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



                    // Изминение статуса события при нажатии на кнопку "Подтвержден"
                    document.getElementById('changeStatusButton').addEventListener('click', function() {
                        const eventId = document.getElementById('eventDetails').dataset.eventId;

                        fetch(`/bookings/update-status/${eventId}`, {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector(
                                        'meta[name="csrf-token"]').getAttribute(
                                        'content'),
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                    status: 'confirmed'
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    // alert('Статус успешно изменен!');
                                    $('#modalMin').modal('hide');
                                    window.location
                                        .reload(); // Перезагрузка страницы или обновление календаря
                                } else {
                                    alert('Ошибка при изменении статуса.');
                                }
                            })
                            .catch(error => {
                                // console.error('Ошибка:', error);
                                alert('Произошла ошибка при изменении статуса.');
                            });
                    });


                },

            });

            calendar.render();
        });
    </script>

@stop
