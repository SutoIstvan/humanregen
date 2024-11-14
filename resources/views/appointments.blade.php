<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!-- Подключаем CSS для timepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <!-- Подключаем jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Подключаем jQuery timepicker -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/vanilla-calendar-pro/build/vanilla-calendar.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vanilla-calendar-pro/build/vanilla-calendar.min.js" defer></script>

    <style>
        .hero {
            width: 100%;
            min-height: 20vh !important;
            position: relative;
            padding: 80px 0 80px 0;
            display: flex;
            align-items: center;
        }

        .time-list-container {
            display: flex;
            flex-wrap: wrap;
            max-width: 452px;
            /* Ширина для двух колонок */
            max-height: 416px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            /* border: 1px solid #ccc; */
            border-radius: 11px;
        }

        .time-list-container div {
            flex: 1 1 35%;
            /* Каждый элемент занимает 50% контейнера (две колонки) */
            box-sizing: border-box;
            padding: 4px;
            margin: 5px;
            text-align: center;
            font-size: 16px;
            background-color: #e9e9e9;
            cursor: pointer;
            border-radius: 3px;
            transition: background-color 0.3s;
        }

        .time-list-container div:hover {
            background-color: #d1d1d1;
        }

        /* Стиль для активного времени */
        .active-time {
            background-color: #49b8aa !important;
            /* Зеленый цвет для выбранного времени */
            color: #fff;
        }

        .selected-time {
            color: #333;
            font-size: 18px;
            margin-top: 15px;
            text-align: center;
        }

        .disabled-time {
            background-color: #f8f8f8 !important;
            color: #ff5050;
            cursor: not-allowed !important;
            text-decoration: line-through;
            /* Зачеркивание текста */

        }

        .vanilla-calendar-day {
            height: 60px;
            width: 60px;
        }

        .vanilla-calendar-day__btn {
            font-size: 16px;

        }

        [data-calendar-theme=light] .vanilla-calendar-day__btn_selected,
        [data-calendar-theme=light] .vanilla-calendar-day__btn_selected:hover {
            --tw-bg-opacity: 1;
            background-color: rgb(73, 184, 170) !important;
            /* Новый цвет фона */

            color: #fff;
            /* Цвет текста, белый */
        }



    </style>
</head>

<body>

    @include('layouts.nav')


    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
        <img src="assets/img/hero-bg-8.jpg" alt="" class="hero-bg">

        <div class="container">
            <div class="row gy-4 text-center">


                <div class="col-lg-12  d-flex flex-column justify-content-center" data-aos="fade-in">
                    <h1><span>Időpontfoglalás</span></h1>


                </div>

            </div>
        </div>

        <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28 " preserveAspectRatio="none">
            <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
                </path>
            </defs>
            <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3"></use>
            </g>
            <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0"></use>
            </g>
            <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9"></use>
            </g>
        </svg>

    </section><!-- /Hero Section -->

    <!-- Section Title -->
    <div class="container section-title pt-5" data-aos="fade-up">

        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
                <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Kezelés időtartam</h2>

                <p class=" mb-md-5 pb-md-0 lead">
                    Kérem válasszon kezelési időtartamot 30 és 60 perc között.
                </p>
            </div>
        </div>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <div class="text-center" style="color: red;">Hiba történt: {{ $error }}</div>
                    {{-- <li style="color: red;">{{ $error }}</li> --}}
                @endforeach
            </ul>
        @endif



        <div class="">
            <div class="plans mb-5">
                <label class="plan basic-plan me-xxl-5 me-lg-3" for="basic">
                    <input checked type="radio" id="basic" name="duration" value="35" />
                    <div class="plan-content ">
                        <img loading="lazy" src="{{ asset('assets/ico.png') }}" alt="" />
                        <div class="plan-details">
                            <span>30 perc</span>
                            <p>Humán Regenerátor Sports - Egész testes sejtregeneráció kezelés</p>
                        </div>
                    </div>
                </label>

                <label class="plan complete-plan ms-xxl-5 ms-lg-2" for="complete">
                    <input type="radio" id="complete" name="duration" value="70" />
                    <div class="plan-content">
                        <img loading="lazy" src="{{ asset('assets/ico.png') }}" alt="" />
                        <div class="plan-details">
                            <span>60 perc</span>
                            <p>Humán Regenerátor Sports - Egész testes sejtregeneráció kezelés</p>
                        </div>
                    </div>
                </label>
            </div>
        </div>


        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
                <h2 class="alex-brush-regular" style="color: #008288; font-size: 38px;">Dátum és időpont foglalás</h2>

                <p class=" mb-md-5 pb-md-0 lead">
                    Kérem válasszon napot és időpontot, majd nyomja meg a Tovább gombot.
                </p>
            </div>
        </div>

    </div>

    <div class="container mt-1 ">
        <div class="row d-flex justify-content-center">
            <div class=" col-lg-6 col-xl-5 d-flex justify-content-center">
                <div id="calendar"></div>
            </div>

            <div class=" col-lg-6 col-xl-5">
                <div class="time-list-container" id="time-list"></div>
            </div>

        </div>
    </div>

    <form action="/saveappointments" method="GET" class="selected-time">

        <input type="hidden" id="durationinput" name="durationinput" value="35">

        <input type="hidden" id="selected-date-input" name="selected_date">
        <input type="hidden" id="selected-time-input" name="selected_time">
        <button type="submit" style="background-color: #c2a74e; border-color: #c2a74e; width: 250px;"
            class="btn btn-primary btn-lg px-4 me-md-2 mt-4">Tovább</button>
    </form>

    <div class="selected-time" id="selected-time" style="display: none">Выберите время</div>
    <div class="selected-time" id="date-display" style="display: none">Выбранная дата:</div>


    @include('layouts.footer')


    <script>


// Инициализация календаря
document.addEventListener('DOMContentLoaded', () => {
    // Получаем сегодняшнюю дату
    const today = new Date();
    const formattedDate = today.toISOString().split('T')[0];

    // Конфигурация календаря
    const options = {
        settings: {
            lang: 'hu',
            range: {
                min: 'today',
                disableWeekday: [0], // Отключаем воскресенье
            },
            visibility: {
                theme: 'light',
            },
        },
        popups: {
            weekdays: ['H', 'K', 'Sz', 'Cs', 'P', 'Sz', 'V'],
            months: [
                'Január', 'Február', 'Március', 'Április', 'Május', 'Június',
                'Július', 'Augusztus', 'Szeptember', 'Október', 'November', 'December'
            ],
        },
        actions: {
            clickDay(event, self) {
                const lastDateString = self.selectedDates[self.selectedDates.length - 1];
                const selectedDate = new Date(lastDateString);

                if (!isNaN(selectedDate)) {
                    const formattedSelectedDate = selectedDate.toISOString().split('T')[0];

                    document.getElementById('date-display').textContent = 
                        selectedDate.toLocaleDateString('hu-HU');
                    document.getElementById('selected-date-input').value = formattedSelectedDate;

                    const duration = document.querySelector('input[name="duration"]:checked').value;
                    document.getElementById('durationinput').value = duration;

                    fetchAndUpdateTimeSlots(formattedSelectedDate);
                } else {
                    console.error("Неверная дата:", lastDateString);
                }
            },
        },
    };

    // Инициализируем календарь
    const calendar = new VanillaCalendar('#calendar', options);
    calendar.init();

    // Загружаем доступное время для текущей даты
    document.getElementById('selected-date-input').value = formattedDate;
    fetchAndUpdateTimeSlots(formattedDate);
});

// Форматирование времени
const formatTimeSlot = (hours, minutes) => {
    const hourStr = hours < 10 ? `0${hours}` : hours;
    const minuteStr = minutes < 10 ? `0${minutes}` : minutes;
    return `${hourStr}:${minuteStr}`;
};

// Генерация временных слотов
const generateTimeSlots = (startTime, endTime, interval) => {
    const slots = [];
    let currentHour = startTime;
    let currentMinute = 0;
    
    // Устанавливаем максимальное время как 17:20
    const maxHour = 17;
    const maxMinute = 20;
    
    while (
        currentHour < maxHour || 
        (currentHour === maxHour && currentMinute <= maxMinute)
    ) {
        slots.push(formatTimeSlot(currentHour, currentMinute));
        
        currentMinute += interval;
        if (currentMinute >= 60) {
            currentMinute -= 60;
            currentHour += 1;
        }
    }
    
    return slots;
};

// Создание списка времени
const isSaturday = (date) => {
    return new Date(date).getDay() === 6;
};
const isSunday = (date) => {
    return new Date(date).getDay() === 0;
};

// Модифицированная функция создания списка времени
const createTimeList = (containerId, duration, startTime, endTime, disabledTimes = [], selectedDate) => {
    const container = document.getElementById(containerId);
    if (!container) {
        console.error(`Container with id "${containerId}" not found`);
        return;
    }
    
    container.innerHTML = '';
    let activeTimeDiv = null;
    
    // Если суббота, устанавливаем конечное время на 12:00
    if (isSaturday(selectedDate)) {
        endTime = 12;
    }

    if (isSunday(selectedDate)) {
        const noteDiv = document.createElement('div');
        noteDiv.className = 'sunday-note';
        noteDiv.textContent = 'Vasárnap zárva vagyunk';
        noteDiv.style.textAlign = 'center';
        noteDiv.style.color = '#c2a74e';
        noteDiv.style.padding = '20px';
        container.appendChild(noteDiv);
        return;
    }
    
    const timeSlots = generateTimeSlots(startTime, endTime, 35);
    
    timeSlots.forEach(time => {
        const timeDiv = document.createElement('div');
        timeDiv.textContent = time;
        timeDiv.dataset.time = time;
        
        // Проверяем, не выходит ли время за пределы 12:00 для субботы
        const [hours] = time.split(':').map(Number);
        if (isSaturday(selectedDate) && hours >= 12) {
            timeDiv.classList.add('disabled-time');
        } else if (disabledTimes.includes(time)) {
            timeDiv.classList.add('disabled-time');
        } else {
            timeDiv.addEventListener('click', () => {
                if (activeTimeDiv) {
                    activeTimeDiv.classList.remove('active-time');
                }
                timeDiv.classList.add('active-time');
                activeTimeDiv = timeDiv;
                
                document.getElementById('selected-time-input').value = time;
                // document.getElementById('selected-time').textContent = `Выбрано время: ${time}`;
                document.getElementById('selected-time').style.display = 'hidden';
            });
        }
        
        container.appendChild(timeDiv);
    });
    
    // Добавляем сообщение для субботы
    if (isSaturday(selectedDate)) {
        // const noteDiv = document.createElement('div');
        // noteDiv.className = 'saturday-note';
        // noteDiv.textContent = 'По субботам доступно время только до 12:00';
        // noteDiv.style.gridColumn = '1 / -1';
        // noteDiv.style.textAlign = 'center';
        // noteDiv.style.color = '#c2a74e';
        // noteDiv.style.marginTop = '10px';
        // container.appendChild(noteDiv);
    }
};

// Получение заблокированных временных слотов
const fetchAndUpdateTimeSlots = async (date) => {
    const container = document.getElementById('time-list');
    try {
        container.innerHTML = '<div class="loading">Betöltés...</div>';
        
        const response = await fetch(`/bookings/disabled-times?date=${date}`);
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        const disabledTimes = await response.json();
        const duration = getDuration();
        createTimeList('time-list', duration, 8, 18, disabledTimes, date); // Передаем выбранную дату
    } catch (error) {
        console.error('Ошибка при получении заблокированных времён:', error);
        container.innerHTML = '<div class="error">Ошибка при загрузке доступного времени</div>';
    }
};

// Получение выбранной длительности
const getDuration = () => {
    const selectedDuration = document.querySelector('input[name="duration"]:checked');
    return selectedDuration ? parseInt(selectedDuration.value, 10) : 35;
};

// Обработчики для радио-кнопок длительности
document.querySelectorAll('input[name="duration"]').forEach(radio => {
    radio.addEventListener('change', () => {
        const duration = parseInt(radio.value, 10);
        document.getElementById('durationinput').value = duration;
        
        const selectedDate = document.getElementById('selected-date-input').value;
        if (selectedDate) {
            fetchAndUpdateTimeSlots(selectedDate);
        }
    });
});

        // // Обработчик для изменения длительности
        // document.querySelectorAll('input[name="duration"]').forEach(function(radio) {
        //     radio.addEventListener('change', function() {
        //         document.getElementById('durationinput').value = this.value;

        //         // Обновляем список времени после изменения длительности
        //         const duration = parseInt(this.value, 10);
        //         const selectedDate = document.getElementById('selected-date-input').value;

        //         fetch(`/bookings/disabled-times?date=${selectedDate}`)
        //             .then(response => response.json())
        //             .then(disabledTimes => {
        //                 createTimeList('time-list', duration, 8, 18, disabledTimes);
        //             })
        //             .catch(error => console.error('Ошибка при загрузке заблокированных времен:', error));
        //     });
        // });



        // $(window).scroll(function() {
        //     if ($(this).scrollTop() > 250) {
        //         $('.sticky-top').addClass('sticky-nav').css('top', '0px');
        //     } else {
        //         $('.sticky-top').removeClass('sticky-nav').css('top', '-100px');
        //     }
        // });

        // // Функция для установки сегодняшней даты в формате YYYY-MM-DD
        // window.onload = function() {
        //     const today = new Date();
        //     const formattedDate = today.toISOString().split('T')[0]; // Получаем дату в формате YYYY-MM-DD
        //     document.getElementById('selected-date-input').value = formattedDate;
        // };


        // document.addEventListener('DOMContentLoaded', () => {
        //     // Получаем сегодняшнюю дату в формате YYYY-MM-DD
        //     const today = new Date();
        //     const formattedDate = today.toISOString().split('T')[0]; // Форматируем как 'YYYY-MM-DD'

        //     const options = {
        //         settings: {
        //             lang: 'hu',
        //             range: {
        //                 min: 'today',
        //                 disableWeekday: [0], // Отключаем воскресенье (0)
        //             }
        //         },
        //         popups: {
        //             weekdays: ['H', 'K', 'Sz', 'Cs', 'P', 'Sz', 'V'],
        //             months: [
        //                 'Január', 'Február', 'Március', 'Április', 'Május', 'Június',
        //                 'Július', 'Augusztus', 'Szeptember', 'Október', 'November', 'December'
        //             ],
        //         },
        //         actions: {
        //             clickDay(event, self) {
        //                 const lastDateString = self.selectedDates[self.selectedDates.length -
        //                     1]; // Получаем последнюю выбранную дату как строку
        //                 const selectedDate = new Date(lastDateString); // Преобразуем строку в объект Date

        //                 if (!isNaN(selectedDate)) {
        //                     const formattedSelectedDate = selectedDate.toISOString().split('T')[
        //                         0]; // Форматируем выбранную дату как 'YYYY-MM-DD'

        //                     // Показываем выбранную дату на странице
        //                     document.getElementById('date-display').textContent = selectedDate
        //                         .toLocaleDateString('hu-HU');

        //                     // Вставляем значение в скрытое поле формы
        //                     document.getElementById('selected-date-input').value = formattedSelectedDate;

        //                     // Перезаписываем длительность в скрытое поле "durationinput" значением текущего выбранного времени из select
        //                     // Получаем значение выбранной радиокнопки
        //                     const duration = document.querySelector('input[name="duration"]:checked')
        //                         .value; // Получаем выбранное значение длительности
        //                     document.getElementById('durationinput').value =
        //                         duration; // Обновляем значение в скрытом поле

        //                     // Запрос на получение заблокированных времен для выбранной даты
        //                     fetch(`/bookings/disabled-times?date=${formattedSelectedDate}`)
        //                         .then(response => response.json())
        //                         .then(disabledTimes => {
        //                             // Обновляем timepicker с полученными заблокированными слотами
        //                             createTimeList('time-list', parseInt(duration), 8, 18, disabledTimes);
        //                         })
        //                         .catch(error => console.error('Ошибка при загрузке заблокированных времен:',
        //                             error));
        //                 } else {
        //                     console.error("Неверная дата:", lastDateString);
        //                 }
        //             },
        //         },
        //     };

        //     const calendar = new VanillaCalendar('#calendar', options);
        //     calendar.init();

        //     // После инициализации календаря сразу вызываем запрос для сегодняшней даты
        //     fetch(`/bookings/disabled-times?date=${formattedDate}`)
        //         .then(response => response.json())
        //         .then(disabledTimes => {
        //             // Обновляем timepicker с полученными заблокированными слотами
        //             createTimeList('time-list', 35, 8, 18, disabledTimes); // Передаем заблокированные времена
        //         })
        //         .catch(error => console.error('Ошибка при загрузке заблокированных времен:', error));
        // });



        // function createTimeList(containerId, duration, startTime, endTime, disabledTimes = []) {
        //     const container = document.getElementById(containerId);
        //     container.innerHTML = ''; // Очищаем контейнер перед добавлением элементов
        //     let activeTimeDiv = null; // Переменная для хранения активного элемента времени

        //     let currentHour = startTime;
        //     let currentMinute = 0;

        //     // Заполняем список времени с шагом 35 минут и проверкой на заблокированные слоты
        //     while (currentHour < endTime || (currentHour === endTime && currentMinute === 0)) {
        //         const hourStr = currentHour < 10 ? '0' + currentHour : currentHour;
        //         const minuteStr = currentMinute < 10 ? '0' + currentMinute : currentMinute;
        //         const time = `${hourStr}:${minuteStr}`;

        //         // Проверяем, если время заблокировано
        //         const timeDiv = document.createElement('div');
        //         timeDiv.textContent = time;
        //         timeDiv.dataset.time = time;

        //         if (disabledTimes.includes(time)) {
        //             timeDiv.classList.add('disabled-time'); // Добавляем класс для заблокированных времён
        //         } else {
        //             // Добавляем обработчик клика для выбора времени, если оно не заблокировано
        //             timeDiv.addEventListener('click', function() {
        //                 // Убираем активный класс с предыдущего выбранного времени
        //                 if (activeTimeDiv) {
        //                     activeTimeDiv.classList.remove('active-time');
        //                 }

        //                 // Добавляем активный класс к текущему времени
        //                 this.classList.add('active-time');
        //                 activeTimeDiv = this;

        //                 // Обновляем выбранное время
        //                 document.getElementById('selected-time').textContent = 'Выбрано время: ' + this.dataset
        //                     .time;

        //                 const selectedTime = this.dataset.time; // Получаем выбранное время из атрибута data-time

        //                 document.getElementById('selected-time-input').value = selectedTime;
        //             });
        //         }

        //         // Добавляем div в контейнер
        //         container.appendChild(timeDiv);

        //         // Увеличиваем текущее время на 35 минут
        //         currentMinute += 35;
        //         if (currentMinute >= 60) {
        //             currentMinute -= 60; // Обнуляем минуты, если они превышают 60
        //             currentHour += 1; // Увеличиваем час
        //         }
        //     }
        // }



        // // Функция для блокировки времени с учетом длительности
        // function getDisabledTimes(bookings) {
        //     let disabledTimes = [];

        //     bookings.forEach(booking => {
        //         const startTime = new Date(`${booking.date}T${booking.time_slot}`);
        //         const endTime = new Date(startTime.getTime() + (booking.duration *
        //             60000)); // Используем длительность из данных

        //         let currentTime = new Date(startTime);
        //         while (currentTime < endTime) {
        //             const hour = currentTime.getHours().toString().padStart(2, '0');
        //             const minute = currentTime.getMinutes().toString().padStart(2, '0');
        //             disabledTimes.push(`${hour}:${minute}`);
        //             currentTime.setMinutes(currentTime.getMinutes() + 35); // Интервал блокировки
        //         }
        //     });

        //     return disabledTimes;
        // }
    </script>

</body>

</html>
