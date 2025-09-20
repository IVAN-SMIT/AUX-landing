<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Промышленные экзоскелеты | POWEREXO</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&display=swap');
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #222222;
            color: #f5f5f5;
        }
        
        .gold-text {
            color: #baa98f;
        }
        
        .gold-border {
            border-color: #baa98f;
        }
        
        .gold-bg {
            background-color: #baa98f;
        }
        
        .gold-bg:hover {
            background-color: #a8977e;
        }
        
        .dark-bg {
            background-color: #191919;
        }
        
        .product-card {
            transition: all 0.3s ease;
            border: 1px solid #333;
        }
        
        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(186, 169, 143, 0.1), 0 10px 10px -5px rgba(186, 169, 143, 0.04);
            border-color: #baa98f;
        }
        
        .tech-icon {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: #222222;
            border: 1px solid #baa98f;
            color: #baa98f;
            font-size: 20px;
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #baa98f;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover:after {
            width: 100%;
        }
        
        .stats-item {
            border-left: 3px solid #baa98f;
        }
    </style>
</head>
<body class="antialiased">
    <!-- Header -->
    <header class="sticky top-0 z-50 dark-bg shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <i class="fas fa-robot text-3xl gold-text mr-3"></i>
                    <span class="text-2xl font-bold">POWER<span class="gold-text">EXO</span></span>
                </div>
                <nav class="hidden md:flex space-x-8">
                    <a href="#products" class="nav-link text-gray-300 hover:text-white font-medium">Модели</a>
                    <a href="#advantages" class="nav-link text-gray-300 hover:text-white font-medium">Преимущества</a>
                    <a href="#technology" class="nav-link text-gray-300 hover:text-white font-medium">Технологии</a>
                    <a href="#cases" class="nav-link text-gray-300 hover:text-white font-medium">Кейсы</a>
                    <a href="#contact" class="nav-link text-gray-300 hover:text-white font-medium">Контакты</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <a href="tel:+78001234567" class="hidden md:flex items-center gold-text hover:text-white">
                        <i class="fas fa-phone-alt mr-2"></i>
                        <span>8 (800) 123-45-67</span>
                    </a>
                    <a href="#contact" class="gold-bg text-black font-bold py-2 px-6 rounded-lg transition duration-300">
                        Заказать
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-b from-black to-gray-900">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                    Промышленные <span class="gold-text">экзоскелеты</span> нового поколения
                </h1>
                <p class="text-xl text-gray-300 mb-8">
                    Увеличьте производительность труда и снизите нагрузку на работников с помощью наших экзоскелетов. 
                    Доказанная эффективность в тяжелой промышленности, строительстве и логистике.
                </p>
                <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="#products" class="gold-bg hover:bg-yellow-700 text-black font-bold py-3 px-6 rounded-lg text-center transition duration-300">
                        Выбрать модель
                    </a>
                    <a href="#contact" class="border-2 gold-border text-gold-500 hover:bg-gray-800 font-bold py-3 px-6 rounded-lg text-center transition duration-300">
                        Получить консультацию
                    </a>
                </div>
                <div class="mt-10 flex flex-wrap gap-4">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle gold-text mr-2"></i>
                        <span class="text-gray-300">Снижение нагрузки до 80%</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check-circle gold-text mr-2"></i>
                        <span class="text-gray-300">Сертифицировано в РФ и ЕС</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-check-circle gold-text mr-2"></i>
                        <span class="text-gray-300">Гарантия 3 года</span>
                    </div>
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="https://images.unsplash.com/photo-1635070041078-e363dbe005cb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Промышленный экзоскелет" class="w-full max-w-md floating rounded-lg">
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="py-12 dark-bg">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="stats-item pl-4 py-2">
                    <div class="text-4xl font-bold gold-text mb-2">300+</div>
                    <div class="text-gray-300">Компаний используют наши экзоскелеты</div>
                </div>
                <div class="stats-item pl-4 py-2">
                    <div class="text-4xl font-bold gold-text mb-2">24/7</div>
                    <div class="text-gray-300">Техническая поддержка</div>
                </div>
                <div class="stats-item pl-4 py-2">
                    <div class="text-4xl font-bold gold-text mb-2">5 лет</div>
                    <div class="text-gray-300">Средний срок эксплуатации</div>
                </div>
                <div class="stats-item pl-4 py-2">
                    <div class="text-4xl font-bold gold-text mb-2">40%</div>
                    <div class="text-gray-300">Рост производительности</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section id="products" class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Наши <span class="gold-text">модели</span></h2>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Три варианта экзоскелетов для разных задач и условий работы
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="product-card dark-bg p-6 rounded-xl">
                    <div class="text-center mb-6">
                        <img src="https://images.unsplash.com/photo-1631745719344-f7683244863e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="EXO-LIGHT" class="w-full h-48 object-cover rounded-lg mb-4">
                        <h3 class="text-2xl font-bold gold-text mb-2">EXO-LIGHT</h3>
                        <div class="text-xl font-semibold mb-4">от 450 000 ₽</div>
                    </div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check gold-text mt-1 mr-2"></i>
                            <span>Для работ с нагрузкой до 15 кг</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check gold-text mt-1 mr-2"></i>
                            <span>Вес конструкции: 4,2 кг</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check gold-text mt-1 mr-2"></i>
                            <span>Автономность: 12 часов</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check gold-text mt-1 mr-2"></i>
                            <span>Для сборочных производств</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <button class="w-full gold-bg text-black font-bold py-3 px-6 rounded-lg transition duration-300 mb-3">
                            Заказать
                        </button>
                        <a href="#" class="gold-text hover:underline">Подробнее о модели →</a>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="product-card dark-bg p-6 rounded-xl border-2 gold-border transform scale-105">
                    <div class="text-center mb-6">
                        <div class="absolute top-0 right-0 bg-yellow-800 text-white text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-lg">ПОПУЛЯРНЫЙ</div>
                        <img src="https://images.unsplash.com/photo-1635070041009-2d5d0f62e307?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="EXO-PRO" class="w-full h-48 object-cover rounded-lg mb-4">
                        <h3 class="text-2xl font-bold gold-text mb-2">EXO-PRO</h3>
                        <div class="text-xl font-semibold mb-4">от 680 000 ₽</div>
                    </div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check gold-text mt-1 mr-2"></i>
                            <span>Для работ с нагрузкой до 30 кг</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check gold-text mt-1 mr-2"></i>
                            <span>Вес конструкции: 6,8 кг</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check gold-text mt-1 mr-2"></i>
                            <span>Автономность: 10 часов</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check gold-text mt-1 mr-2"></i>
                            <span>Для строительства и логистики</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check gold-text mt-1 mr-2"></i>
                            <span>Система активного охлаждения</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <button class="w-full gold-bg text-black font-bold py-3 px-6 rounded-lg transition duration-300 mb-3">
                            Заказать
                        </button>
                        <a href="#" class="gold-text hover:underline">Подробнее о модели →</a>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="product-card dark-bg p-6 rounded-xl">
                    <div class="text-center mb-6">
                        <img src="https://images.unsplash.com/photo-1631745719344-f7683244863e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="EXO-HEAVY" class="w-full h-48 object-cover rounded-lg mb-4">
                        <h3 class="text-2xl font-bold gold-text mb-2">EXO-HEAVY</h3>
                        <div class="text-xl font-semibold mb-4">от 950 000 ₽</div>
                    </div>
                    <ul class="space-y-3 mb-6">
                        <li class="flex items-start">
                            <i class="fas fa-check gold-text mt-1 mr-2"></i>
                            <span>Для работ с нагрузкой до 50 кг</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check gold-text mt-1 mr-2"></i>
                            <span>Вес конструкции: 8,5 кг</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check gold-text mt-1 mr-2"></i>
                            <span>Автономность: 8 часов</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check gold-text mt-1 mr-2"></i>
                            <span>Для металлургии и горной промышленности</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check gold-text mt-1 mr-2"></i>
                            <span>Защита от пыли и влаги IP67</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check gold-text mt-1 mr-2"></i>
                            <span>Дополнительные точки крепления</span>
                        </li>
                    </ul>
                    <div class="text-center">
                        <button class="w-full gold-bg text-black font-bold py-3 px-6 rounded-lg transition duration-300 mb-3">
                            Заказать
                        </button>
                        <a href="#" class="gold-text hover:underline">Подробнее о модели →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages -->
    <section id="advantages" class="py-20 dark-bg">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Наши <span class="gold-text">преимущества</span></h2>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Почему компании выбирают наши экзоскелеты
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-gray-800 p-6 rounded-xl text-center">
                    <div class="tech-icon mx-auto mb-4">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Качество</h3>
                    <p class="text-gray-300">
                        Используем только сертифицированные материалы и комплектующие от мировых производителей
                    </p>
                </div>
                
                <div class="bg-gray-800 p-6 rounded-xl text-center">
                    <div class="tech-icon mx-auto mb-4">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Надежность</h3>
                    <p class="text-gray-300">
                        Средний срок эксплуатации 5 лет при интенсивном использовании
                    </p>
                </div>
                
                <div class="bg-gray-800 p-6 rounded-xl text-center">
                    <div class="tech-icon mx-auto mb-4">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Сервис</h3>
                    <p class="text-gray-300">
                        Собственная сервисная сеть в 15 городах России и СНГ
                    </p>
                </div>
                
                <div class="bg-gray-800 p-6 rounded-xl text-center">
                    <div class="tech-icon mx-auto mb-4">
                        <i class="fas fa-ruble-sign"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Экономия</h3>
                    <p class="text-gray-300">
                        Окупаемость от 6 месяцев за счет снижения травматизма и больничных
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology -->
    <section id="technology" class="py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Инновационные <span class="gold-text">технологии</span></h2>
                    <p class="text-xl text-gray-300 mb-8">
                        Наши экзоскелеты используют передовые разработки в области биомеханики и материаловедения
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="gold-text mr-4 mt-1">
                                <i class="fas fa-microchip text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-2">Умные датчики</h4>
                                <p class="text-gray-300">
                                    Система из 32 датчиков анализирует движения оператора в реальном времени
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="gold-text mr-4 mt-1">
                                <i class="fas fa-battery-three-quarters text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-2">Автономность</h4>
                                <p class="text-gray-300">
                                    Литий-полимерные батареи с быстрой зарядкой и сроком службы 5+ лет
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="gold-text mr-4 mt-1">
                                <i class="fas fa-robot text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-xl mb-2">Адаптация</h4>
                                <p class="text-gray-300">
                                    ИИ-алгоритмы подстраивают работу экзоскелета под антропометрию оператора
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="md:w-1/2 flex justify-center">
                    <img src="https://images.unsplash.com/photo-1631745719344-f7683244863e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" alt="Технологии экзоскелета" class="w-full max-w-md rounded-lg shadow-xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Cases -->
    <section id="cases" class="py-20 dark-bg">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Наши <span class="gold-text">кейсы</span></h2>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Реальные примеры внедрения наших экзоскелетов
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gray-800 p-8 rounded-xl">
                    <div class="flex items-center mb-6">
                        <img src="https://logo.clearbit.com/gazprom.com" alt="Газпром" class="w-16 h-16 object-contain mr-4">
                        <div>
                            <h3 class="text-xl font-bold">ПАО "Газпром"</h3>
                            <div class="text-gray-400">Нефтегазовая промышленность</div>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6">
                        "После внедрения 35 экзоскелетов EXO-HEAVY на наших нефтяных месторождениях, количество травм спины сократилось на 78%, а производительность выросла на 32%."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Директор" class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <div class="font-medium">Иванов П.С.</div>
                            <div class="text-sm text-gray-400">Технический директор</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-800 p-8 rounded-xl">
                    <div class="flex items-center mb-6">
                        <img src="https://logo.clearbit.com/magnit.ru" alt="Магнит" class="w-16 h-16 object-contain mr-4">
                        <div>
                            <h3 class="text-xl font-bold">"Магнит"</h3>
                            <div class="text-gray-400">Розничная сеть</div>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6">
                        "В наших распределительных центрах 120 сотрудников используют EXO-PRO для погрузочно-разгрузочных работ. Текучесть кадров снизилась в 2,5 раза, а скорость обработки грузов увеличилась на 45%."
                    </p>
                    <div class="flex items-center">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Директор" class="w-10 h-10 rounded-full mr-3">
                        <div>
                            <div class="font-medium">Смирнова О.И.</div>
                            <div class="text-sm text-gray-400">Директор по логистике</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-gradient-to-r from-gray-900 to-black">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Готовы внедрить экзоскелеты в вашей компании?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto text-gray-300">
                Оставьте заявку и получите бесплатный тест-драйв экзоскелета на вашем предприятии
            </p>
            <a href="#contact" class="gold-bg text-black hover:bg-yellow-700 font-bold py-3 px-8 rounded-lg inline-block transition duration-300">
                Оставить заявку
            </a>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-20">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row">
                <div class="md:w-1/2 mb-10 md:mb-0 md:pr-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">Свяжитесь с <span class="gold-text">нами</span></h2>
                    <p class="text-gray-300 mb-8 text-lg">
                        Наши специалисты ответят на все вопросы и помогут подобрать оптимальное решение
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="gold-text mr-4 mt-1">
                                <i class="fas fa-map-marker-alt text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-300 mb-1">Адрес</h4>
                                <p class="text-gray-400">г. Москва, ул. Промышленная, 42</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="gold-text mr-4 mt-1">
                                <i class="fas fa-phone-alt text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-300 mb-1">Телефон</h4>
                                <p class="text-gray-400">8 (800) 123-45-67</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="gold-text mr-4 mt-1">
                                <i class="fas fa-envelope text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-300 mb-1">Email</h4>
                                <p class="text-gray-400">sales@powerexo.ru</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="gold-text mr-4 mt-1">
                                <i class="fas fa-clock text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-300 mb-1">Режим работы</h4>
                                <p class="text-gray-400">Пн-Пт: 9:00 - 18:00</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8">
                        <h4 class="font-bold text-gray-300 mb-4">Мы в соцсетях</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-800 text-gray-300 flex items-center justify-center hover:bg-gray-700 transition duration-300">
                                <i class="fab fa-vk"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-800 text-gray-300 flex items-center justify-center hover:bg-gray-700 transition duration-300">
                                <i class="fab fa-telegram"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-800 text-gray-300 flex items-center justify-center hover:bg-gray-700 transition duration-300">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="md:w-1/2">
                    <form class="dark-bg p-8 rounded-xl shadow-xl">
                        <h3 class="text-2xl font-bold text-gray-300 mb-6">Оставить заявку</h3>
                        
                        <div class="mb-6">
                            <label for="name" class="block text-gray-300 font-medium mb-2">Ваше имя</label>
                            <input type="text" id="name" class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:border-transparent text-gray-300" placeholder="Иван Иванов">
                        </div>
                        
                        <div class="mb-6">
                            <label for="company" class="block text-gray-300 font-medium mb-2">Компания</label>
                            <input type="text" id="company" class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:border-transparent text-gray-300" placeholder="ООО 'ПромТех'">
                        </div>
                        
                        <div class="mb-6">
                            <label for="phone" class="block text-gray-300 font-medium mb-2">Телефон</label>
                            <input type="tel" id="phone" class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:border-transparent text-gray-300" placeholder="+7 (999) 123-45-67">
                        </div>
                        
                        <div class="mb-6">
                            <label for="model" class="block text-gray-300 font-medium mb-2">Интересующая модель</label>
                            <select id="model" class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:border-transparent text-gray-300">
                                <option value="">Выберите модель</option>
                                <option value="EXO-LIGHT">EXO-LIGHT</option>
                                <option value="EXO-PRO">EXO-PRO</option>
                                <option value="EXO-HEAVY">EXO-HEAVY</option>
                            </select>
                        </div>
                        
                        <div class="mb-6">
                            <label for="message" class="block text-gray-300 font-medium mb-2">Сообщение</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:border-transparent text-gray-300" placeholder="Опишите ваши задачи..."></textarea>
                        </div>
                        
                        <button type="submit" class="w-full gold-bg hover:bg-yellow-700 text-black font-bold py-3 px-6 rounded-lg transition duration-300">
                            Отправить заявку
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black py-12">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-robot text-3xl gold-text mr-3"></i>
                        <span class="text-2xl font-bold">POWER<span class="gold-text">EXO</span></span>
                    </div>
                    <p class="text-gray-400">
                        Производство промышленных экзоскелетов для повышения эффективности и безопасности труда.
                    </p>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold text-gray-300 mb-4">Модели</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition duration-300">EXO-LIGHT</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">EXO-PRO</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">EXO-HEAVY</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Аксессуары</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold text-gray-300 mb-4">Компания</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition duration-300">О нас</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Кейсы</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Новости</a></li>
                        <li><a href="#" class="hover:text-white transition duration-300">Карьера</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-bold text-gray-300 mb-4">Контакты</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-2 gold-text"></i>
                            <span>г. Москва, ул. Промышленная, 42</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone-alt mt-1 mr-2 gold-text"></i>
                            <span>8 (800) 123-45-67</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-2 gold-text"></i>
                            <span>sales@powerexo.ru</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 mb-4 md:mb-0">
                    © 2023 POWEREXO. Все права защищены.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-vk"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-telegram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition duration-300">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Simple form submission handler
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Спасибо! Ваша заявка отправлена. Наш менеджер свяжется с вами в ближайшее время.');
            this.reset();
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>