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
            max-width: 400px; /* Ширина для двух колонок */
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            /* border: 1px solid #ccc; */
            border-radius: 11px;
        }
        .time-list-container div {
            flex: 1 1 35%; /* Каждый элемент занимает 50% контейнера (две колонки) */
            box-sizing: border-box;
            padding: 10px;
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
            background-color: #4caf50 !important; /* Зеленый цвет для выбранного времени */
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





  <!-- <div class="px-4 pt-5  text-center">
    <h1 class="display-4 fw-bold text-body-emphasis">HATÁSOK</h1>

  </div> -->

        <!-- Section Title -->
        <div class="container section-title pt-5" data-aos="fade-up">

          <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
              <h2 class="alex-brush-regular" style="color: #c2a74e; size: 44px;">Jótékony hatások</h2>
    
              <p class=" mb-md-5 pb-md-0 lead">
                Ismerd meg a Humán Regenerátor Jótékony hatásait
              </p>
            </div>
          </div>
    
        </div><!-- End Section Title -->


        <div class="container mt-5">
          <div class="row">
            <div class="col-12 col-lg-6 d-flex justify-content-center">
              <div id="calendar"></div>
            </div>
      
            <div class="col-12 col-lg-6">
              <div class="time-list-container" id="time-list"></div>
            </div>
      
          </div>
        </div>
      
      
      
        <div class="selected-time" id="selected-time">Выберите время</div>
        <div class="selected-time" id="selected-date">Выбранная дата: <span id="date-display">не выбрана</span></div>
  


        <div class="px-4 pt-5 my-5 text-center border-bottom">
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
        </div>


    @include('layouts.footer')
  

    <script>



      document.addEventListener('DOMContentLoaded', () => {
        const options = {
          settings: {
            lang: 'hu',
            range: {
              min: 'today',
              disableWeekday: [0, 7],
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
                            console.log(self.selectedDates); // Вывод всех выбранных дат в консоль
                            const lastDateString = self.selectedDates[self.selectedDates.length - 1]; // Получаем последнюю выбранную дату как строку
                            const selectedDate = new Date(lastDateString); // Преобразуем строку в объект Date
                            
                            // Проверяем, является ли selectedDate корректным объектом Date
                            if (!isNaN(selectedDate)) {
                                const formattedDate = selectedDate.toLocaleDateString('hu-HU'); // Форматируем дату
                                document.getElementById('date-display').textContent = formattedDate; // Устанавливаем дату в элемент
                            } else {
                                console.error("Неверная дата:", lastDateString);
                            }
                            
                            // document.getElementById('calendar').style.display = 'none'; // Скрываем календарь после выбора
                        },
                    },
        };
    
        const calendar = new VanillaCalendar('#calendar', options);
        calendar.init();
      });
    
      
    
        $(window).scroll(function () {
          if ($(this).scrollTop() > 250) {
            $('.sticky-top').addClass('sticky-nav').css('top', '0px');
          } else {
            $('.sticky-top').removeClass('sticky-nav').css('top', '-100px');
          }
        });
    
    
            // Функция для создания списка времени с интервалом 35 минут и заблокированными слотами
            function createTimeList(containerId, interval, startTime, endTime, disabledTimes = []) {
                const container = document.getElementById(containerId);
                container.innerHTML = ''; // Очищаем контейнер перед добавлением элементов
                let activeTimeDiv = null; // Переменная для хранения активного элемента времени
    
                let currentHour = startTime;
                let currentMinute = 0;
    
                // Заполняем список времени
                while (currentHour < endTime || (currentHour === endTime && currentMinute === 0)) {
                    const hourStr = currentHour < 10 ? '0' + currentHour : currentHour;
                    const minuteStr = currentMinute < 10 ? '0' + currentMinute : currentMinute;
                    const time = `${hourStr}:${minuteStr}`;
    
                    // Создаем div для каждого времени
                    const timeDiv = document.createElement('div');
                    timeDiv.textContent = time;
                    timeDiv.dataset.time = time;
    
                    // Проверяем, если время заблокировано
                    if (disabledTimes.includes(time)) {
                        timeDiv.classList.add('disabled-time');
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
                        });
                    }
    
                    // Добавляем div в контейнер
                    container.appendChild(timeDiv);
    
                    // Увеличиваем текущее время на 35 минут
                    currentMinute += interval;
                    if (currentMinute >= 60) {
                        currentHour += 1;
                        currentMinute %= 60; // Обнуляем минуты, если они превышают 60
                    }
                }
            }
    
            // Инициализация списка времени с заблокированными слотами
            document.addEventListener('DOMContentLoaded', function() {
                const disabledTimes = ['08:35', '10:20', '13:15']; // Пример заблокированных времен
                createTimeList('time-list', 35, 8, 16, disabledTimes); // Интервал 35 минут, с 8:00 до 16:00
            });
    
    
      </script>

</body>
</html>
