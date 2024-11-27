@extends('adminlte::page')

@section('content_header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>Dashboard</h1> --}}
@stop

@section('content')

    <div id="calendar" style="height: 410px;"></div>

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

    <x-adminlte-modal id="createBookingModal" title="Új foglalás" size="lg" theme="primary" icon="fas fa-calendar-plus"
        v-centered backdrop="true">
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

                    <x-adminlte-button theme="danger" label="Időpont letiltása" id="blockTime" class="mr-auto" />

                    <x-adminlte-button type="button" theme="success" id="saveBookingButton" label="Mentés" />
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
                themeSystem: 'bootstrap',
                initialView: '{{ $calendarView ?? 'timeGridWeek' }}', // Если $calendarView не определен, использовать 'timeGridWeek'
                initialDate: new Date(), // Устанавливаем начальную дату как текущую
                events: @json($bookings), // Ваши события из базы данных
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'timeGridWeek,timeGridDay,listWeek'
                },
                slotDuration: '00:30:00', // Шаг времени 30 минут
                slotLabelInterval: '00:30', // Интервал меток времени
                slotMinTime: '08:00:00', // Время начала отображения
                slotMaxTime: '18:00:00', // Время окончания отображения
                allDaySlot: false, // Отключение слота для событий на весь день
                selectable: true,
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


                // Кастомизация заголовков дней ///////////////////////////////////////////////////
                dayHeaderContent: function(arg) {
                    // Создаем контейнер для даты и кнопки
                    var container = document.createElement('div');
                    container.classList.add('day-header-container');

                    // Создаем элемент с текстом дня
                    var dateText = document.createElement('span');
                    dateText.innerText = arg.text;

                    // Создаем кнопку
                    var button = document.createElement('button');
                    button.innerHTML = '<i class="fas fa-lock"></i>';
                    button.classList.add('btn', 'btn-danger', 'btn-xs', 'ml-2');
                    button.style.padding = '0 5px';
                    button.title = 'Nap letiltása';

                    // Обработчик клика на кнопку
                    button.addEventListener('click', function(e) {
                        e.stopPropagation(); // Предотвращаем распространение события

                        // Выводим подтверждающее сообщение
                        // Подтверждение блокировки дня

                            // Устанавливаем дату для блокировки
                            var localDate = new Date(arg.date);

                            var formattedDate = localDate.getFullYear() + '-' +
                                ('0' + (localDate.getMonth() + 1)).slice(-2) + '-' +
                                ('0' + localDate.getDate()).slice(-2);
                            // Отправляем запрос на сервер для блокировки дня
                            fetch('/block-day', {
                                method: 'DELETE',  // Используем DELETE для удаления
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                },
                                    body: JSON.stringify({
                                        booking_date: formattedDate, // Передаём дату
                                        client_name: 'Admin' // Указываем имя администратора
                                    }),
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.success) {
                                        // alert('A nap sikeresen le van tiltva.');
                                        // Логика обновления интерфейса (например, обновить календарь)
                                        window.location
                                            .reload(); // Перезагрузка страницы или обновление календаря
                                    } else {
                                        alert(`Hiba: ${data.message}`);
                                    }
                                })
                                .catch(error => {
                                    console.error('Hiba:', error);
                                    alert('Hiba történt a nap letiltása közben.');
                                });
                        
                    });


                    // Добавляем текст и кнопку в контейнер
                    container.appendChild(dateText);
                    container.appendChild(button);

                    return {
                        domNodes: [container]
                    };
                },

                // Кастомизация заголовков дней ///////////////////////////////////////////////////


                // Сохраняем текущий вид календаря в сессию
                datesSet: function(info) {
                    fetch('/save-calendar-view', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    .getAttribute('content'),
                            },
                            body: JSON.stringify({
                                view: info.view.type
                            }),
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(data => {
                            console.log('View saved successfully:', data);
                        })
                        .catch(error => {
                            console.error('Error saving view:', error);
                        });
                },


                // Добавляем новое бронирование с админ панели
                dateClick: function(info) {
                    const dateTime = info.dateStr.split('T'); // Разделяем дату и время
                    const date = dateTime[0]; // Дата
                    const time = dateTime[1] || ''; // Время (если доступно)

                    // Открываем модальное окно для добавления бронирования
                    $('#createBookingModal').modal('show');

                    // Заполняем поля модального окна
                    document.getElementById('bookingDate').value = date; // Устанавливаем дату
                    document.getElementById('bookingTime').value = time.slice(0,
                        5); // Устанавливаем время (формат HH:MM)
                },



                eventClick: function(info) {
                    // Открываем модальное окно
                    $('#modalMin').modal('show');

                    // Извлекаем данные из события
                    var eventTitle = info.event.title;
                    var eventStart = info.event.start.toLocaleString();
                    var eventEnd = info.event.end ? info.event.end.toLocaleString() : 'Nincs megadva';
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





        // Добавление нового бронирования с админ панели через модальное окно
        document.getElementById('saveBookingButton').addEventListener('click', function() {
            const date = document.getElementById('bookingDate').value;
            const time = document.getElementById('bookingTime').value;
            const duration = document.getElementById('bookingDuration').value;
            const clientName = document.getElementById('clientName').value;
            const clientEmail = document.getElementById('clientEmail').value;
            const clientPhone = document.getElementById('clientPhone').value;

            fetch('/dashboard/bookings', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    },
                    body: JSON.stringify({
                        booking_date: date,
                        booking_time: time,
                        duration: duration,
                        client_name: clientName,
                        client_email: clientEmail,
                        client_phone: clientPhone
                    })
                })
                .then(response => {
                    // Проверяем статус ответа
                    console.log('Response status:', response.status);

                    // Пытаемся получить текст ответа
                    return response.text().then(text => {
                        try {
                            // Пробуем распарсить как JSON
                            return JSON.parse(text);
                        } catch (error) {
                            // Если не JSON, выводим текст ответа
                            console.error('Non-JSON response:', text);
                            throw new Error('Received non-JSON response: ' + text);
                        }
                    });
                })
                .then(data => {
                    if (data.success) {
                        // alert('A foglalás sikeresen megtörtént!');
                        $('#createBookingModal').modal('hide');
                        location.reload();
                    } else {
                        alert(data.message || 'Hiba történt a foglalás létrehozása során.');
                    }
                })
                .catch(error => {
                    console.error('Teljes hiba:', error);
                    alert('Hiba történt: ' + error.message);
                });
        });

        // блокировку времени
        document.getElementById('blockTime').addEventListener('click', function() {
            const date = document.getElementById('bookingDate').value;
            const time = document.getElementById('bookingTime').value;
            const duration = document.getElementById('bookingDuration').value;

            if (confirm(`Biztosan le akarod tiltani az időpontot: ${time} ${date}?`)) {
                // Отправляем запрос на блокировку времени
                fetch('/dashboard/block-time', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: JSON.stringify({
                            booking_date: date,
                            booking_time: time,
                            duration: duration,
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // alert('Az időpont sikeresen le van tiltva!');
                            $('#createBookingModal').modal('hide');
                            location.reload();
                        } else {
                            alert(data.message || 'Hiba történt az időpont letiltása közben.');
                        }
                    })
                    .catch(error => {
                        console.error('Teljes hiba:', error);
                        alert('Hiba történt: ' + error.message);
                    });
            }
        });
    </script>

@stop
