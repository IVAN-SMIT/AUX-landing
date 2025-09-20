<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUXILIUM | Моделирование на заказ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/solid.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400&display=swap" type="text/css">
    <style>
        .portfolio-item {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .portfolio-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .portfolio-overlay {
            position: absolute;
            bottom: -100%;
            left: 0;
            right: 0;
            background-color: rgba(255, 255, 255, 0.9);
            overflow: hidden;
            width: 100%;
            height: 100%;
            transition: .5s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
        }
        .portfolio-item:hover .portfolio-overlay {
            bottom: 0;
        }
        .gradient-text {
            background: linear-gradient(90deg, #baa98f, #c4b6a0);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px 25px;
            border-radius: 5px;
            color: white;
            z-index: 1000;
            transition: opacity 0.3s ease;
            opacity: 0;
        }
        .notification.hidden {
            display: none;
        }
        .notification.error {
            background-color: #ef4444; /* red-500 */
        }
        .notification.neutral {
            background-color: #baa98f; 
        }
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }

            /* Анимации для фильтрации */
        .portfolio-grid {
            position: relative;
        }
        
        .portfolio-items-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            transition: all 0.5s ease;
        }
        
        .portfolio-item {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            transform-origin: center;
            will-change: transform, opacity;
            position: relative;
        }
        
        .portfolio-item.hidden {
            position: absolute;
            opacity: 0;
            transform: scale(0.9);
            pointer-events: none;
            height: 0;
            padding: 0;
            margin: 0;
            border: none;
        }
        
        .portfolio-item:not(.hidden) {
            animation: fadeInUp 0.5s ease-out forwards;
        }
        
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Обновленные стили для кнопок фильтра */
        .filter-container {
            background: white;
            border-radius: 9999px;
            padding: 4px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        .filter-btn {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            border: none;
            background: transparent;
            outline: none;
        }
        
        .filter-btn::after {
            content: none; /* Убираем подчеркивание */
        }
        
        .filter-btn:hover {
            transform: translateY(-2px);
        }
        
        .filter-btn.active {
            background-color: #baa98f;
            color: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        
        /* Эффект при клике */
        @keyframes gentleBounce {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(0.95);
            }
        }
        
        .filter-btn:active {
            animation: gentleBounce 0.4s ease;
        }

        /* Стили для уведомления */
        .notification {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #4caf50; /* Зеленый цвет для успеха */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
        }

        /* Стили для уведомления об ошибке */
        .notification .error {
            background-color: #f44336; /* Красный цвет для ошибки */
        }

        /* Стили для нейтрального уведомления */
        .notification .neutral {
            background-color: #baa98f; /* Серый цвет для нейтрального уведомления */
            color: black;
        }


        .notification .hidden {
            opacity: 0;
            pointer-events: none;
        }

    </style>

    <?php include 'yandexM.php'; ?>
</head>
<body class="bg-white font-sans antialiased">
    <!-- Header -->
    <?php include_once 'header.php';?>

        <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-r from-stone-50 to-stone-100">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight mb-6">
                    Профессиональное <span class="gradient-text">3D моделирование</span> на заказ
                </h1>
                <p class="text-lg text-gray-600 mb-8">
                    Создаем точные и детализированные 3D модели в CAD системах для промышленности, машиностроения и просто хобби. 
                    Реализуем любые сложные проекты с гарантией качества.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#contact" class="bg-[#baa98f] hover:bg-[#a8997e] text-black font-bold py-3 px-6 rounded-lg text-center transition duration-300">
                Заказать проект
                    </a>
                    <a href="#portfolio" class="border-2 border-[#baa98f] text-[#baa98f] hover:bg-black hover:text-white font-bold py-3 px-6 rounded-lg text-center transition duration-300">
                        Посмотреть работы
                    </a>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="img\designs\CADs.png" alt="3D моделирование" class="w-3/4 floating">
            </div>
        </div>
    </section>

<!-- Services -->
<section id="services" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Наши <span class="gradient-text">услуги</span></h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Полный спектр услуг по 3D моделированию и проектированию в CAD системах
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100">
                <div class="text-[#baa98f] mb-4">
                    <i class="fas fa-drafting-compass text-4xl"></i> <!-- Более точное отображение 3D-моделирования -->
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Промышленные модели</h3>
                <p class="text-gray-600 mb-4">
                    Детализированные модели деталей, механизмов и комплектующих с точными размерами и техническими характеристиками.
                </p>
                <ul class="text-gray-600 space-y-2">
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Fusion 360, Inventor, SolidWorks</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Технические чертежи</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Рендеры</span>
                    </li>
                </ul>
            </div>

            <!-- Service 2 -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100">
                <div class="text-[#baa98f] mb-4">
                    <i class="fas fa-chart-line text-4xl"></i> <!-- Логично подходит под расчёты -->
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">Расчёты и моделирование</h3>
                <p class="text-gray-600 mb-4">
                    Возможность подтвердить определённые техническим заданием характеристики расчётами.
                </p>
                <ul class="text-gray-600 space-y-2">
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Прочностные расчёты</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Имитационное моделирование</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Расчёты механизмов (редукторы, рычаги, пружины и тд)</span>
                    </li>
                </ul>
            </div>

            <!-- Service 3 -->
            <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100">
                <div class="text-[#baa98f] mb-4">
                    <i class="fas fa-layer-group text-4xl"></i> <!-- Иконка принтера логична для 3D печати -->
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-3">3д печать прототипов</h3>
                <p class="text-gray-600 mb-4">
                    FDM и SLA 3д печать прототипов на наших фермах с большой зоной печати
                </p>
                <ul class="text-gray-600 space-y-2">
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Принтеры Bambulab P1S, QIDI I-Fast, QIDI X-CF, QIDI X-PLUS, Anycubic Photon M3 Max и Tronxy X5SA-500</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Максимальная зона печати 500x500x600 мм</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Мультифиламентная 3д печать инженерными пластиками (PA, TPU и тд)</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

    <!-- Portfolio -->
    <section id="portfolio" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Наше <span class="gradient-text">портфолио</span></h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Более 50 успешно реализованных проектов в различных отраслях
                </p>
            </div>
            
            <!-- Portfolio Filter -->
            <div class="flex justify-center mb-12">
                <div class="inline-flex flex-wrap justify-center bg-white rounded-full p-1 shadow">
                    <button data-filter="all" class="filter-btn px-4 py-2 rounded-full text-black hover:bg-[#baa98f] hover:text-white font-medium mx-1 transition-all duration-300 active">
                        Все работы
                    </button>
                    <button data-filter="Робототехника" class="filter-btn px-4 py-2 rounded-full text-black hover:bg-[#baa98f] hover:text-white font-medium mx-1 transition-all duration-300">
                        Робототехника
                    </button>
                    <button data-filter="Редуктор" class="filter-btn px-4 py-2 rounded-full text-black hover:bg-[#baa98f] hover:text-white font-medium mx-1 transition-all duration-300">
                        Редукторы
                    </button>
                    <button data-filter="Экзоскелет" class="filter-btn px-4 py-2 rounded-full text-black hover:bg-[#baa98f] hover:text-white font-medium mx-1 transition-all duration-300">
                        Экзоскелеты
                    </button>
                    <button data-filter="Разное" class="filter-btn px-4 py-2 rounded-full text-black hover:bg-[#baa98f] hover:text-white font-medium mx-1 transition-all duration-300">
                        Другое
                    </button>
                </div>
            </div>
            
            <!-- Portfolio Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Item 1 -->
                <div class="portfolio-item bg-white rounded-xl overflow-hidden shadow-md h-80">
                    <img src="img\designs\bobrenok.png" alt="Робот 'Бобрёнок'" class="w-full h-full object-cover">
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Робот 'Бобрёнок'</h3>
                        <p class="text-gray-600 mb-3">Небольшая робо-платформа для отработки принципа управления омни колесами. Создано под технологию 3д печати.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Fusion 360</span>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">3д модель</span>
                            <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">Робототехника</span>
                        </div>
                    </div>
                </div>
                
                <!-- Item 2 -->
                <div class="portfolio-item bg-white rounded-xl overflow-hidden shadow-md h-80">
                    <img src="img\designs\gearbox-br.png" alt="Редуктор" class="w-full h-full object-cover">
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Редуктор</h3>
                        <p class="text-gray-600 mb-3">Редуктор для движущей части боевого робота с понижением с 27 000 оборотов до 100.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-red-100 text-red-800 text-xs px-3 py-1 rounded-full">Autodesk Inventor</span>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">3д модель</span>
                            <span class="bg-yellow-100 text-yellow-800 text-xs px-3 py-1 rounded-full">Редуктор</span>
                        </div>
                    </div>
                </div>
                
                <!-- Item 3 -->
                <div class="portfolio-item bg-white rounded-xl overflow-hidden shadow-md h-80">
                    <img src="img\designs\neuro.png" alt="Нейроинтерфейс" class="w-full h-full object-cover">
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Нейроинтерфейс</h3>
                        <p class="text-gray-600 mb-3">Эргономичный дизайн нейроинтерфейса с изменяемым количеством каналов. Создано под технологию 3д печати.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Fusion 360</span>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">3д модель</span>
                            <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">Разное</span>
                        </div>
                    </div>
                </div>
                
                <!-- Item 4 -->
                <div class="portfolio-item bg-white rounded-xl overflow-hidden shadow-md h-80">
                    <img src="img\designs\holder.png" alt="Рукоятка от гранатомёта" class="w-full h-full object-cover">
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Рукоятка от гранатомёта</h3>
                        <p class="text-gray-600 mb-3">Рукоятка от гранатомёта комплекса "тишина" или "канарейка". Создано в Inventor.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-red-100 text-red-800 text-xs px-3 py-1 rounded-full">Autodesk Inventor</span>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">3д модель</span>
                            <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">Разное</span>
                            
                        </div>
                    </div>
                </div>
                
                <!-- Item 5 -->
                <div class="portfolio-item bg-white rounded-xl overflow-hidden shadow-md h-80">
                    <img src="img\designs\bronenosec.png" alt="Экзоскелет 'Броненосец'" class="w-full h-full object-cover">
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Экзоскелет 'Броненосец'</h3>
                        <p class="text-gray-600 mb-3">Прототип мобильного экзоскелета с носимой бронёй и возможностью удержания штурмового щита.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-red-100 text-red-800 text-xs px-3 py-1 rounded-full">Autodesk Inventor</span>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">3д модель</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Экзоскелет</span>
                        </div>
                    </div>
                </div>
                
                <!-- Item 6 -->
                <div class="portfolio-item bg-white rounded-xl overflow-hidden shadow-md h-80">
                    <img src="img\designs\stand.png" class="w-full h-full object-cover">
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Стенд для динамических испытаний</h3>
                        <p class="text-gray-600 mb-3">Устройство для испытания различных типов ударных маховиков на динамические нагрузки.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Fusion 360</span>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">3д модель</span>
                            <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">Разное</span>
                        </div>
                    </div>
                </div>

                <!-- Item 7 -->
                <div class="portfolio-item bg-white rounded-xl overflow-hidden shadow-md h-80">
                    <img src="img\designs\smurf.png" class="w-full h-full object-cover">
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Экзоскелет 'Смурф'</h3>
                        <p class="text-gray-600 mb-3">Прототип мобильного экзоскелета с модульной компоновкой и активной пневматической силовой установкой.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-red-100 text-red-800 text-xs px-3 py-1 rounded-full">Autodesk Inventor</span>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">3д модель</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Экзоскелет</span>
                        </div>
                    </div>
                </div>

                <!-- Item 8 -->
                <div class="portfolio-item bg-white rounded-xl overflow-hidden shadow-md h-80">
                    <img src="img\designs\back.png" class="w-full h-full object-cover">
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Экзо-позвоночник</h3>
                        <p class="text-gray-600 mb-3">Анатомический позвоночник экзоскелета с массивом вынесенных осей вращения позвонков без смещений относительно их центров.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-red-100 text-red-800 text-xs px-3 py-1 rounded-full">Autodesk Inventor</span>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">3д модель</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Экзоскелет</span>
                        </div>
                    </div>
                </div>

                <!-- Item 9 -->
                <div class="portfolio-item bg-white rounded-xl overflow-hidden shadow-md h-80">
                    <img src="img\designs\robot.png" class="w-full h-full object-cover">
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Антропоморфный робот</h3>
                        <p class="text-gray-600 mb-3">Маленький антропоморфный робот-аниматрон для прототипа системы умного дома. Создано под технологию 3д печати. </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-red-100 text-red-800 text-xs px-3 py-1 rounded-full">Autodesk Inventor</span>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">3д модель</span>
                            <span class="bg-purple-100 text-purple-800 text-xs px-3 py-1 rounded-full">Робототехника</span>
                        </div>
                    </div>
                </div>

                <!-- Item 10 -->
                <div class="portfolio-item bg-white rounded-xl overflow-hidden shadow-md h-80">
                    <img src="img\designs\gearbox.png" class="w-full h-full object-cover">
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Редуктор</h3>
                        <p class="text-gray-600 mb-3">3д модель редуктора с муфтой, ограничивающей крутящий момент.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Fusion 360</span>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">3д модель</span>
                            <span class="bg-yellow-100 text-yellow-800 text-xs px-3 py-1 rounded-full">Редуктор</span>
                        </div>
                    </div>
                </div>

                <!-- Item 11 -->
                <div class="portfolio-item bg-white rounded-xl overflow-hidden shadow-md h-80">
                    <img src="img\designs\moto.png" class="w-full h-full object-cover">
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Крышка багажника мотоцикла</h3>
                        <p class="text-gray-600 mb-3">Деталь на 90% состоящая из поверхностей третьего порядка, является калькой с реально существующей детали. Все размеры брались вручную, без 3д сканирования.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-red-100 text-red-800 text-xs px-3 py-1 rounded-full">Autodesk Inventor</span>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">3д модель</span>
                            <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">Разное</span>
                        </div>
                    </div>
                </div>

                <!-- Item 12 -->
                <div class="portfolio-item bg-white rounded-xl overflow-hidden shadow-md h-80">
                    <img src="img\designs\buggy.png" class="w-full h-full object-cover">
                    <div class="portfolio-overlay">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Рама багги</h3>
                        <p class="text-gray-600 mb-3">3д модель профильной рамы одноместного багги.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-blue-100 text-blue-800 text-xs px-3 py-1 rounded-full">Fusion 360</span>
                            <span class="bg-green-100 text-green-800 text-xs px-3 py-1 rounded-full">3д модель</span>
                            <span class="bg-pink-100 text-pink-800 text-xs px-3 py-1 rounded-full">Разное</span>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>

<!-- Process -->
<section id="process" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Как мы <span class="gradient-text">работаем</span></h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Четкий процесс работы обеспечивает качественный результат в срок
            </p>
        </div>
        
        <div class="relative">
            <!-- Timeline -->
            <div class="hidden md:block absolute left-1/2 h-full w-1 bg-gradient-to-b from-[#a8997e] to-[#cbb9a3] transform -translate-x-1/2"></div>
            
            <!-- Steps -->
            <div class="space-y-8 md:space-y-16">
                <!-- Step 1 -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 md:pr-16 mb-6 md:mb-0 md:text-right">
                        <div class="bg-[#f5f1ec] p-4 rounded-xl inline-block">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">1. Обсуждение проекта</h3>
                            <p class="text-gray-600">
                                Мы внимательно изучаем ваши требования, техническое задание и предоставленные материалы.
                            </p>
                        </div>
                    </div>
                    <div class="hidden md:flex items-center justify-center w-12 h-12 rounded-full bg-[#baa98f] text-white absolute left-1/2 transform -translate-x-1/2">
                        <span class="text-xl font-bold">1</span>
                    </div>
                    <div class="md:w-1/2 md:pl-16"></div>
                </div>
                
                <!-- Step 2 -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 md:pr-16"></div>
                    <div class="hidden md:flex items-center justify-center w-12 h-12 rounded-full bg-[#cbb9a3] text-white absolute left-1/2 transform -translate-x-1/2">
                        <span class="text-xl font-bold">2</span>
                    </div>
                    <div class="md:w-1/2 md:pl-16 mb-6 md:mb-0">
                        <div class="bg-[#f5f1ec] p-4 rounded-xl inline-block">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">2. Разработка концепции</h3>
                            <p class="text-gray-600">
                                Создаем предварительные эскизы и прототипы, согласовываем с вами направление работы.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 md:pr-16 mb-6 md:mb-0 md:text-right">
                        <div class="bg-[#f5f1ec] p-4 rounded-xl inline-block">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">3. Детальное моделирование</h3>
                            <p class="text-gray-600">
                                Создаем точную 3D модель с проработкой всех деталей, узлов и технических характеристик.
                            </p>
                        </div>
                    </div>
                    <div class="hidden md:flex items-center justify-center w-12 h-12 rounded-full bg-[#d4c6b2] text-white absolute left-1/2 transform -translate-x-1/2">
                        <span class="text-xl font-bold">3</span>
                    </div>
                    <div class="md:w-1/2 md:pl-16"></div>
                </div>
                
                <!-- Step 4 -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 md:pr-16"></div>
                    <div class="hidden md:flex items-center justify-center w-12 h-12 rounded-full bg-[#baa98f] text-white absolute left-1/2 transform -translate-x-1/2">
                        <span class="text-xl font-bold">4</span>
                    </div>
                    <div class="md:w-1/2 md:pl-16 mb-6 md:mb-0">
                        <div class="bg-[#f5f1ec] p-4 rounded-xl inline-block">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">4. Проверка и доработки</h3>
                            <p class="text-gray-600">
                                Проводим тестирование модели, вносим необходимые корректировки по вашим замечаниям.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Step 5 -->
                <div class="relative flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 md:pr-16 mb-6 md:mb-0 md:text-right">
                        <div class="bg-[#f5f1ec] p-4 rounded-xl inline-block">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">5. Сдача проекта</h3>
                            <p class="text-gray-600">
                                Предоставляем все файлы проекта в нужных форматах, чертежи и документацию.
                            </p>
                        </div>
                    </div>
                    <div class="hidden md:flex items-center justify-center w-12 h-12 rounded-full bg-[#cbb9a3] text-white absolute left-1/2 transform -translate-x-1/2">
                        <span class="text-xl font-bold">5</span>
                    </div>
                    <div class="md:w-1/2 md:pl-16"></div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- CTA -->
    <section class="py-20 bg-gradient-to-r from-[#f2ede6] to-[#e0d0b8] text-black">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Готовы начать свой проект?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto text-black">
                Оставьте заявку и мы свяжемся с вами в течение 1 дня для обсуждения деталей
            </p>
            <a href="#contact" class="bg-black hover:bg-gray-800 text-[#FFFFFF] font-bold py-3 px-8 rounded-lg inline-block transition duration-300">
                Оставить заявку
            </a>
        </div>
    </section>


        <!-- Контейнер для уведомления -->
    <div id="notification" class="notification hidden">
        Заказ сделан успешно!
    </div>
        <!-- Контейнер для уведомления об ошибке -->
    <div id="errorNotification" class="notification error hidden">
        Введён некорректный email!
    </div>
    <!-- Контейнер для нейтрального уведомления -->
    <div id="neutralNotification" class="notification neutral hidden">
        Пожалуйста, заполните все обязательные поля!
    </div>

    <!-- Contact -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Свяжитесь с <span class="gradient-text">нами</span></h2>
                    <p class="text-gray-600 mb-8 text-lg">
                        Готовы ответить на все ваши вопросы и обсудить детали сотрудничества. Файлы можно слать на почту или в телеграм бота!
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="text-[#baa98f] mr-4 mt-1">
                                <i class="fas fa-map-marker-alt text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">Где мы находимся?</h4>
                                <p class="text-gray-600">Наша ферма 3д принтеров расположена в Санкт-Петербурге</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="text-[#baa98f] mr-4 mt-1">
                                <i class="fab fa-telegram text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">Оставьте заявку в личных сообщениях телеграмм канала</h4>
                                <p class="text-gray-600">
                                    <a href="https://t.me/ivansmittt" 
                                    class="hover:text-[#baa98f] transition-colors duration-200">
                                        @ivansmittt
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="text-[#baa98f] mr-4 mt-1">
                                <i class="fas fa-envelope text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">Или напишите на Email</h4>
                                <p class="text-gray-600">auxexo@bk.ru</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="text-[#baa98f] mr-4 mt-1">
                                <i class="fas fa-clock text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 mb-1">Режим работы</h4>
                                <p class="text-gray-600">Пн-Пт: 12:00 - 22:00</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="md:w-1/2 md:pl-12">
                    <form class="comment-form bg-gray-50 p-8 rounded-xl shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Отправить сообщение</h3>
                        <!-- Скрытые поля -->
                        <h6 id="selected-configuration" style="display: none;">Услуги 3D моделирования</h6>
                        <h6 id="priceModal" style="display: none;">Цена по запросу</h6>

                        
                        <div class="mb-6">
                            <label for="fio" class="block text-gray-700 font-medium mb-2">Ваше ФИО</label>
                            <input type="text" id="fio" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#baa98f] focus:border-transparent text-gray-800 placeholder-gray-400" 
                                placeholder="Введите ФИО" required>
                        </div>
                        
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                            <input type="email" id="email" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#baa98f] focus:border-transparent text-gray-800 placeholder-gray-400" 
                                placeholder="Введите email" required>
                        </div>
                        
                        <div class="mb-6">
                            <label for="mobile" class="block text-gray-700 font-medium mb-2">Телефон</label>
                            <input type="tel" id="mobile" 
                                class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#baa98f] focus:border-transparent text-gray-800 placeholder-gray-400" 
                                placeholder="Введите номер телефона" required>
                        </div>
                        
                        <div class="mb-6">
                            <label for="comment" class="block text-gray-700 font-medium mb-2">Сообщение</label>
                            <textarea id="comment" rows="5" 
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#baa98f] focus:border-transparent text-gray-800 placeholder-gray-400" 
                                    placeholder="Опишите ваш проект..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full bg-[#baa98f] hover:bg-[#a8997e] text-black font-bold py-3 px-6 rounded-lg transition duration-300 site-btn">
                            Отправить заявку
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>




    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://www.google.com/jsapi"></script>
    <script src="js/exoCounter.js"></script>

    <script src="js/products/makeOrderForm.js"></script>
    <script src="js/products/sendOrder2php.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');
        const itemsContainer = document.querySelector('.portfolio-items-container');
        
        // Добавляем data-category для каждого элемента портфолио
        portfolioItems.forEach(item => {
            const tags = item.querySelectorAll('.rounded-full');
            let categories = [];
            
            tags.forEach(tag => {
                if (tag.textContent === 'Робототехника' || 
                    tag.textContent === 'Редуктор' || 
                    tag.textContent === 'Экзоскелет' || 
                    tag.textContent === 'Разное') {
                    categories.push(tag.textContent);
                }
            });
            
            item.dataset.category = categories.join(' ');
        });
        
        // Функция для плавной перестройки сетки
        function filterPortfolio(filterValue) {
            // Сначала помечаем элементы, которые нужно скрыть/показать
            portfolioItems.forEach(item => {
                const categories = item.dataset.category.split(' ');
                const shouldShow = filterValue === 'all' || categories.includes(filterValue);
                
                if (shouldShow) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
            
            // Добавляем небольшую задержку для плавности
            setTimeout(() => {
                // Принудительный рефлоу для запуска анимации
                itemsContainer.style.animation = 'none';
                void itemsContainer.offsetWidth;
                itemsContainer.style.animation = null;
            }, 50);
        }
        
        // Обработка кликов по кнопкам фильтра
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Анимация активной кнопки
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                
                // Получаем выбранную категорию
                const filterValue = this.dataset.filter;
                
                // Плавная фильтрация
                filterPortfolio(filterValue);
            });
        });
        
        // Инициализация - показываем все элементы
        filterPortfolio('all');
    });
    </script>
</body>
</html>