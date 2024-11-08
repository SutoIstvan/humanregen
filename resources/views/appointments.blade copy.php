<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', __('menu.title'))</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


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
            min-height: 40vh !important;
            position: relative;
            padding: 80px 0 80px 0;
            display: flex;
            align-items: center;
          }
          .time-list-container {
            display: flex;
            flex-wrap: wrap;
            max-width: 452px; /* Ширина для двух колонок */
            max-height: 416px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            /* border: 1px solid #ccc; */
            border-radius: 11px;
        }
        .time-list-container div {
            flex: 1 1 35%; /* Каждый элемент занимает 50% контейнера (две колонки) */
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
            background-color: #49b8aa !important; /* Зеленый цвет для выбранного времени */
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
            text-decoration: line-through; /* Зачеркивание текста */

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
            background-color: rgb(73, 184, 170)!important; /* Новый цвет фона */

            color: #fff; /* Цвет текста, белый */
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


          <div class="col-lg-12  d-flex flex-column justify-content-center" data-aos="fade-in" >
            <h1><span>Időpontfoglalás</span></h1>


          </div>

        </div>
      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
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
          <h2 class="alex-brush-regular" style="color: #c2a74e; size: 44px;">Dátum és időpont foglalás</h2>

          <p class=" mb-md-5 pb-md-0 lead">
            Kérem válasszon napot és időpontot, majd nyomja meg a Tovább gombot.
          </p>
        </div>
      </div>

    </div><!-- End Section Title -->


        <div class="container mt-1">
          <div class="row">
            <div class="col-12 col-lg-6 d-flex justify-content-center">
              <div id="calendar"></div>
            </div>
      
            <div class="col-12 col-lg-6">
              <div class="time-list-container" id="time-list"></div>
            </div>
      
          </div>
        </div>


        <form action="/saveappointments" method="GET" class="selected-time">
          <input type="hidden" id="selected-date-input" name="selected_date">
          <input type="hidden" id="selected-time-input" name="selected_time">
          <button type="submit" style="background-color: #c2a74e; border-color: #c2a74e;" class="btn btn-primary btn-lg px-4 me-md-2 ">Tovább</button>
          {{-- <button type="submit">Tovább</button> --}}
        </form>
      
      
      
        <div class="selected-time" id="selected-time" style="display: none">Выберите время</div>
        <div class="selected-time" id="date-display" style="display: none">Выбранная дата:</div>
        

        

        {{-- <div class="px-4 pt-5 my-5 text-center border-bottom">
          <h2 class="alex-brush-regular" style="color: #c2a74e; size: 44px;">Töltsd fel a tested és ébredj új életre</h2>
      
          <h1 class="display-4 fw-bold text-body-emphasis">Humán Regenerátor Sports</h1>
          <div class="col-lg-10 mx-auto">
      
            <p class="lead mb-4">A Humán Regenerátor Sports kezelés <strong>orvosi alapja egy 18 éves kutatássorozat eredményeként </strong>megszületett és folyamatosan fejlesztett&nbsp;világszerte egyedülálló high-tech eszköz, amely <strong>sejtszinten aktiválja a szervezet öngyógyító folyamatait, ellensúlyozza a sejtekben lévő oxidatív stresszt és akkumulátorként tölti fel a sejteket</strong>. A<strong> Humán Regenerátor Sports a piacon elérhető legerősebb generátorral büszkélkedhet</strong>. Kimagasló generátor teljesítményével túlszárnyalja a Humán Regenerátor Power Jet és Professionel modelleket, kifejezetten erős hatást gyakorolva már a vázizmokra is.</p>
            <!-- <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p> -->
      
          </div>
          <div class="overflow-hidden" style="max-height: 40vh;">
            <div class="container px-5">
              <img src="{{ asset('assets/img/humanregensport.png') }}" class="img-fluid border rounded-3 shadow-lg mb-4" width="900" height="500" loading="lazy">
            </div>
          </div>
        </div> --}}


    @include('layouts.footer')
  

    <script>

    $(window).scroll(function () {
      if ($(this).scrollTop() > 250) {
        $('.sticky-top').addClass('sticky-nav').css('top', '0px');
      } else {
        $('.sticky-top').removeClass('sticky-nav').css('top', '-100px');
      }
    });

    // Функция для установки сегодняшней даты в формате YYYY-MM-DD
    window.onload = function() {
        const today = new Date();
        const formattedDate = today.toISOString().split('T')[0]; // Получаем дату в формате YYYY-MM-DD
        document.getElementById('selected-date-input').value = formattedDate;
    };





    document.addEventListener('DOMContentLoaded', () => {
    // Получаем сегодняшнюю дату в формате YYYY-MM-DD
    const today = new Date();
    const formattedDate = today.toISOString().split('T')[0]; // Форматируем как 'YYYY-MM-DD'

    const options = {
        settings: {
            lang: 'hu',
            range: {
                min: 'today',
                disableWeekday: [0], // Отключаем воскресенье (0)
            }
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
                const lastDateString = self.selectedDates[self.selectedDates.length - 1]; // Получаем последнюю выбранную дату как строку
                const selectedDate = new Date(lastDateString); // Преобразуем строку в объект Date

                if (!isNaN(selectedDate)) {
                    const formattedSelectedDate = selectedDate.toISOString().split('T')[0]; // Форматируем выбранную дату как 'YYYY-MM-DD'

                    // Показываем выбранную дату на странице
                    document.getElementById('date-display').textContent = selectedDate.toLocaleDateString('hu-HU');

                    // Вставляем значение в скрытое поле формы
                    document.getElementById('selected-date-input').value = formattedSelectedDate;

                    // Запрос на получение заблокированных времен для выбранной даты
                    fetch(`/bookings/disabled-times?date=${formattedSelectedDate}`)
                        .then(response => response.json())
                        .then(disabledTimes => {
                            // Обновляем timepicker с полученными заблокированными слотами
                            createTimeList('time-list', 35, 8, 18, disabledTimes);
                        })
                        .catch(error => console.error('Ошибка при загрузке заблокированных времен:', error));
                } else {
                    console.error("Неверная дата:", lastDateString);
                }
            },
        },
    };

    const calendar = new VanillaCalendar('#calendar', options);
    calendar.init();

    // После инициализации календаря сразу вызываем запрос для сегодняшней даты
    fetch(`/bookings/disabled-times?date=${formattedDate}`)
        .then(response => response.json())
        .then(disabledTimes => {
            // Обновляем timepicker с полученными заблокированными слотами
            createTimeList('time-list', 35, 8, 18, disabledTimes); // Передаем заблокированные времена
        })
        .catch(error => console.error('Ошибка при загрузке заблокированных времен:', error));
});




    
      
    

    
    
// // Функция для создания списка времени с интервалом 35 минут и заблокированными слотами
// function createTimeList(containerId, interval, startTime, endTime, disabledTimes = []) {
//     const container = document.getElementById(containerId);
//     container.innerHTML = ''; // Очищаем контейнер перед добавлением элементов
//     let activeTimeDiv = null; // Переменная для хранения активного элемента времени

//     let currentHour = startTime;
//     let currentMinute = 0;

//     // Заполняем список времени
//     while (currentHour < endTime || (currentHour === endTime && currentMinute === 0)) {
//         const hourStr = currentHour < 10 ? '0' + currentHour : currentHour;
//         const minuteStr = currentMinute < 10 ? '0' + currentMinute : currentMinute;
//         const time = `${hourStr}:${minuteStr}`;

//         // Создаем div для каждого времени
//         const timeDiv = document.createElement('div');
//         timeDiv.textContent = time;
//         timeDiv.dataset.time = time;

//         // Проверяем, если время заблокировано
//         if (disabledTimes.includes(time)) {
//             timeDiv.classList.add('disabled-time');
//         } else {
//             // Добавляем обработчик клика для выбора времени, если оно не заблокировано
//             timeDiv.addEventListener('click', function () {
//                 // Убираем активный класс с предыдущего выбранного времени
//                 if (activeTimeDiv) {
//                     activeTimeDiv.classList.remove('active-time');
//                 }

//                 // Добавляем активный класс к текущему времени
//                 this.classList.add('active-time');
//                 activeTimeDiv = this;

//                 // Обновляем выбранное время
//                 document.getElementById('selected-time').textContent = 'Выбрано время: ' + this.dataset.time;
//             });
//         }

//         // Добавляем div в контейнер
//         container.appendChild(timeDiv);

//         // Увеличиваем текущее время на 35 минут
//         currentMinute += interval;
//         if (currentMinute >= 60) {
//             currentHour += 1;
//             currentMinute %= 60; // Обнуляем минуты, если они превышают 60
//         }
//     }
// }

// // Функция для блокировки времени с учетом длительности
// function getDisabledTimes(bookings) {
//     let disabledTimes = [];

//     bookings.forEach(booking => {
//         const startTime = new Date(`${booking.date}T${booking.time_slot}`);
//         const endTime = new Date(startTime.getTime() + (booking.duration * 60000)); // добавляем продолжительность

//         // Перебираем все время, которое блокируется для записи
//         let currentTime = new Date(startTime);
//         while (currentTime < endTime) {
//             const hour = currentTime.getHours().toString().padStart(2, '0');
//             const minute = currentTime.getMinutes().toString().padStart(2, '0');
//             disabledTimes.push(`${hour}:${minute}`);
//             currentTime.setMinutes(currentTime.getMinutes() + 35); // Увеличиваем на 35 минут
//         }
//     });

//     return disabledTimes;
// }

// // Пример использования
// document.addEventListener('DOMContentLoaded', function() {
//     const formattedDate = "2024-11-06"; // Получаем дату из календаря

//     // Пример запроса для получения занятых времен
//     fetch(`/bookings/disabled-times?date=${formattedDate}`)
//         .then(response => response.json())
//         .then(bookings => {
//             // Получаем все занятые времена с учетом длительности
//             const disabledTimes = getDisabledTimes(bookings);

//             // Обновляем timepicker с полученными заблокированными слотами
//             createTimeList('time-list', 35, 8, 18, disabledTimes); // Интервал 35 минут, с 8:00 до 18:00
//         })
//         .catch(error => console.error('Ошибка при загрузке заблокированных времен:', error));
// });





// // Функция для создания списка времени с интервалом 35 минут и заблокированными слотами
// function createTimeList(containerId, interval, startTime, endTime, disabledTimes = []) {
//     const container = document.getElementById(containerId);
//     container.innerHTML = ''; // Очищаем контейнер перед добавлением элементов
//     let activeTimeDiv = null; // Переменная для хранения активного элемента времени

//     let currentHour = startTime;
//     let currentMinute = 0;

//     // Заполняем список времени
//     while (currentHour < endTime || (currentHour === endTime && currentMinute === 0)) {
//         const hourStr = currentHour < 10 ? '0' + currentHour : currentHour;
//         const minuteStr = currentMinute < 10 ? '0' + currentMinute : currentMinute;
//         const time = `${hourStr}:${minuteStr}`;

//         // Создаем div для каждого времени
//         const timeDiv = document.createElement('div');
//         timeDiv.textContent = time;
//         timeDiv.dataset.time = time;

//         // Проверяем, если время заблокировано
//         if (disabledTimes.includes(time)) {
//             timeDiv.classList.add('disabled-time');
//         } else {
//             // Добавляем обработчик клика для выбора времени, если оно не заблокировано
//             timeDiv.addEventListener('click', function () {
//                 // Убираем активный класс с предыдущего выбранного времени
//                 if (activeTimeDiv) {
//                     activeTimeDiv.classList.remove('active-time');
//                 }

//                 // Добавляем активный класс к текущему времени
//                 this.classList.add('active-time');
//                 activeTimeDiv = this;

//                 // Обновляем выбранное время
//                 document.getElementById('selected-time').textContent = 'Выбрано время: ' + this.dataset.time;
//             });
//         }

//         // Добавляем div в контейнер
//         container.appendChild(timeDiv);

//         // Увеличиваем текущее время на 35 минут
//         currentMinute += interval;
//         if (currentMinute >= 60) {
//             currentHour += 1;
//             currentMinute %= 60; // Обнуляем минуты, если они превышают 60
//         }
//     }
// }

// // Функция для блокировки времени с учетом длительности
// function getDisabledTimes(bookings) {
//     let disabledTimes = [];

//     bookings.forEach(booking => {
//         const startTime = new Date(`${booking.date}T${booking.time_slot}`);
//         const endTime = new Date(startTime.getTime() + (booking.duration * 60000)); // добавляем продолжительность

//         // Перебираем все время, которое блокируется для записи
//         let currentTime = new Date(startTime);
//         while (currentTime < endTime) {
//             const hour = currentTime.getHours().toString().padStart(2, '0');
//             const minute = currentTime.getMinutes().toString().padStart(2, '0');
//             disabledTimes.push(`${hour}:${minute}`);
//             currentTime.setMinutes(currentTime.getMinutes() + 35); // Увеличиваем на 35 минут
//         }
//     });

//     return disabledTimes;
// }

// // Пример использования
// document.addEventListener('DOMContentLoaded', function() {
//     // const formattedDate = "2024-11-06"; // Получаем дату из календаря

//     // Пример запроса для получения занятых времен
//     fetch(`/bookings/disabled-times?date=${formattedDate}`)
//         .then(response => response.json())
//         .then(bookings => {
//             // Получаем все занятые времена с учетом длительности
//             const disabledTimes = getDisabledTimes(bookings);

//             // Обновляем timepicker с полученными заблокированными слотами
//             createTimeList('time-list', 35, 8, 18, disabledTimes); // Интервал 35 минут, с 8:00 до 18:00
//         })
//         .catch(error => console.error('Ошибка при загрузке заблокированных времен:', error));

//     // После загрузки страницы, принудительно сбрасываем выбранную дату в календаре
//     const calendarElement = document.querySelector('.vanillajs-calendar__calendar');
//     if (calendarElement) {
//         // Принудительно очищаем выбранную дату (если есть)
//         calendarElement.querySelectorAll('.vanillajs-calendar__day--selected').forEach(day => {
//             day.classList.remove('vanillajs-calendar__day--selected');
//         });
//     }

//     // Инициализация VanillaCalendar
//     const options = {
//         settings: {
//             lang: 'hu',
//             range: {
//                 min: 'today',
//                 disableWeekday: [0, 7], // Отключаем воскресенье (0) и субботу (7)
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
//                 const lastDateString = self.selectedDates[self.selectedDates.length - 1]; // Получаем последнюю выбранную дату как строку
//                 const selectedDate = new Date(lastDateString); // Преобразуем строку в объект Date

//                 if (!isNaN(selectedDate)) {
//                     const formattedDate = selectedDate.toISOString().split('T')[0]; // Форматируем как 'YYYY-MM-DD'
//                     document.getElementById('date-display').textContent = selectedDate.toLocaleDateString('hu-HU'); // Показываем выбранную дату

//                     // Запрос на получение заблокированных времен для выбранной даты
//                     fetch(`/bookings/disabled-times?date=${formattedDate}`)
//                         .then(response => response.json())
//                         .then(disabledTimes => {
//                             // Обновляем timepicker с полученными заблокированными слотами
//                             createTimeList('time-list', 35, 8, 18, disabledTimes);
//                         })
//                         .catch(error => console.error('Ошибка при загрузке заблокированных времен:', error));
//                 } else {
//                     console.error("Неверная дата:", lastDateString);
//                 }
//             },
//         },
//     };

//     const calendar = new VanillaCalendar('#calendar', options);
//     calendar.init();
// });





// Функция для создания списка времени с интервалом 35 минут и заблокированными слотами
function createTimeList(containerId, interval, startTime, endTime, disabledTimes = [], dayOfWeek) {
    const container = document.getElementById(containerId);
    container.innerHTML = ''; // Очищаем контейнер перед добавлением элементов
    let activeTimeDiv = null; // Переменная для хранения активного элемента времени

    let currentHour = startTime;
    let currentMinute = 0;

    // Заполняем список времени с проверкой на субботу
    while (currentHour < endTime || (currentHour === endTime && currentMinute === 0)) {
        // Если это суббота, проверяем, что время не выходит за 12:00
        if (dayOfWeek === 6 && currentHour >= 12) {
            break; // Выход из цикла, если время больше 12:00 в субботу
        }

        const hourStr = currentHour < 10 ? '0' + currentHour : currentHour;
        const minuteStr = currentMinute < 10 ? '0' + currentMinute : currentMinute;
        const time = `${hourStr}:${minuteStr}`;

        // Проверяем, если время заблокировано
        const timeDiv = document.createElement('div');
        timeDiv.textContent = time;
        timeDiv.dataset.time = time;

        if (disabledTimes.includes(time)) {
            timeDiv.classList.add('disabled-time'); // Добавляем класс для заблокированных времён
        } else {
            // Добавляем обработчик клика для выбора времени, если оно не заблокировано
            timeDiv.addEventListener('click', function () {
                // Убираем активный класс с предыдущего выбранного времени
                if (activeTimeDiv) {
                    activeTimeDiv.classList.remove('active-time');
                }

                // Добавляем активный класс к текущему времени
                this.classList.add('active-time');
                activeTimeDiv = this;

                // Обновляем выбранное время
                document.getElementById('selected-time').textContent = 'Выбрано время: ' + this.dataset.time;

                const selectedTime = this.dataset.time; // Получаем выбранное время из атрибута data-time

                document.getElementById('selected-time-input').value = selectedTime;

            });
        }

        // Добавляем div в контейнер
        container.appendChild(timeDiv);

        // Увеличиваем текущее время на интервал (35 минут)
        currentMinute += interval;
        if (currentMinute >= 60) {
            currentHour += 1;
            currentMinute %= 60; // Обнуляем минуты, если они превышают 60
        }
    }
}

// Функция для блокировки времени с учетом длительности
function getDisabledTimes(bookings) {
    let disabledTimes = [];

    bookings.forEach(booking => {
        const startTime = new Date(`${booking.date}T${booking.time_slot}`);
        const endTime = new Date(startTime.getTime() + (booking.duration * 60000)); // добавляем продолжительность

        // Перебираем все время, которое блокируется для записи
        let currentTime = new Date(startTime);
        while (currentTime < endTime) {
            const hour = currentTime.getHours().toString().padStart(2, '0');
            const minute = currentTime.getMinutes().toString().padStart(2, '0');
            disabledTimes.push(`${hour}:${minute}`);
            currentTime.setMinutes(currentTime.getMinutes() + 35); // Увеличиваем на 35 минут
        }
    });

    return disabledTimes;
}

// Пример использования
document.addEventListener('DOMContentLoaded', function() {
    // const formattedDate = "2024-11-06"; // Получаем дату из календаря

    // Проверим день недели
    const dayOfWeek = new Date(formattedDate).getDay();
    console.log("Day of Week:", dayOfWeek);  // Должно вывести 6 для субботы

    // Пример запроса для получения занятых времен
    fetch(`/bookings/disabled-times?date=${formattedDate}`)
        .then(response => response.json())
        .then(bookings => {
            // Получаем все занятые времена с учетом длительности
            const disabledTimes = getDisabledTimes(bookings);

            // Устанавливаем время окончания для субботы
            const startTime = 8; // Начало времени с 8:00
            const endTime = (dayOfWeek === 6) ? 12 : 18; // Для субботы время до 12:00, для остальных дней до 18:00

            console.log(`End time for selected date: ${endTime}:00`);  // Проверим, какое время окончания установлено

            createTimeList('time-list', 35, startTime, endTime, disabledTimes, dayOfWeek); 
        })
        .catch(error => console.error('Ошибка при загрузке заблокированных времен:', error));
});


    
</script>

</body>
</html>
