<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="AUXILIUM">
    <meta name="keywords" content="AUXILIUM, IVAN SMIT, I1, html, exoskeleton, экзоскелет">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AUXILIUM | Экзоскелеты</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/modelD.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400&display=swap" type="text/css">
    
<?php include 'yandexM.php'; ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php include_once 'header.php';?>
    <?php include_once 'makeOrder.php';?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="breadcrumb-option">
                        <a href="index.php">Главная</a>
                        <a href="products.php"><span>Продукция</span></a>
                        <span>AUXILIUM model M</span>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <div class="modelD-breadcrumb-text">
                        <h3>AUXILIUM model M</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Model M Section Begin -->
    <section class="about-us-section spad">

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="modelM-3d">
                        <div id="model-container" class="hidden">
                            <!-- Здесь будет 3D модель -->
                        </div>
                        <div id="modelM-static-image-container">
                            <img id="static-image" src="img/versions/9.webp" alt="Конфигурация не выбрана">
                            <button id="view-3d-button" class="view-3d-button">Посмотреть в 3D</button>
                        </div>
                    </div>
                </div>

                <div id="modal-3d-view" class="modal-3d-view">
                    <div class="modal-3d-content">
                        <span class="close-3d-modal">&times;</span>
                        <div id="modal-model-container" style="width: 100%; height: 500px;">
                            <!-- Прелоадер внутри модального окна -->
                            <div id="preloder" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                <div class="loader"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="as-text modelD-text">
                        <div class="section-title">
                            <span>Экзоскелет</span>
                            <h2>AUXILIUM model M</h2>
                        </div>
                        <p class="f-para">Пассивный экзоскелет, который разгружает ноги и спину при воздействии внешней нагрузки.</p>

                        <!-- Конфигуратор -->
                        <div id="configurator" class="configuration mt-4">
                            <h5 class="mb-4">Настройте ваш экзоскелет</h5>
                            
                            <!-- Индикатор шагов -->
                            <div class="steps-indicator mb-4">
                                <div class="step-dot active" data-step="1"></div>
                                <div class="step-dot" data-step="2"></div>
                                <div class="step-dot" data-step="3"></div>
                                <div class="step-dot" data-step="4"></div>
                                <div class="step-dot" data-step="5"></div>
                            </div>

                            <!-- Этап 1: Со спиной / Без -->
                            <div class="config-step" data-step="1">
                                <h6 class="mb-3">1/4 Выберите версию:</h6>
                                <div class="row">
                                    <div class="col-md-6 mb-3" data-price-category="BASE_VERSIONS" data-price-key="BASE">
                                        <div class="option-wrapper position-relative">
                                            
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="radio" name="spine" value="base" data-parts="base" class="d-none">
                                                <span class="icon-circle mb-2"><img src="img/versions/base.webp" alt="Базовая версия"></span>
                                                <p class="mb-0 text-center">Базовая версия</p>
                                                <div class="option-price" data-price-placeholder></div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3" data-price-category="BASE_VERSIONS" data-price-key="WITH_SPINE">
                                        <div class="option-wrapper position-relative">
                                           
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="radio" name="spine" value="with-spine" data-parts="spine" class="d-none">
                                                <span class="icon-circle mb-2"><img src="img/versions/full.webp" alt="Со спиной"></span>
                                                <p class="mb-0 text-center">Со спиной</p>
                                                <div class="option-price" data-price-placeholder></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="config-buttons mt-3 d-flex justify-content-end">
                                    <button class="btn btn-outline-light next-step">Продолжить→</button>
                                </div>
                            </div>


                            <!-- Этап 2: Материал -->
                            <div class="config-step active" data-step="2">
                                <h6 class="mb-3">2/4 Выберите материал:</h6>
                                <div class="row">
                                    <div class="col-md-6 mb-3" data-price-category="MATERIALS" data-price-key="ALUMINUM">
                                        <div class="option-wrapper position-relative">
                                        
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="radio" name="material" value="aluminum" data-price="-" class="d-none">
                                                <span class="icon-circle mb-2"><img src="img/versions/Al.webp" alt="Алюминий"></span>
                                                <p class="mb-0 text-center">Нержавеющая сталь</p>
                                                <div class="price-note">Дешевый, но тяжелый</div>
                                                <div class="option-price" data-price-placeholder></div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3" data-price-category="MATERIALS" data-price-key="TITANIUM">
                                        <div class="option-wrapper position-relative">
                                            
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="radio" name="material" value="titanium" data-price="-" class="d-none">
                                                <span class="icon-circle mb-2"><img src="img/versions/Ti.webp" alt="Титан"></span>
                                                <p class="mb-0 text-center">Титан</p>
                                                <div class="price-note">Более легкий, но дороже</div>
                                                <div class="option-price" data-price-placeholder></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="config-buttons mt-3 d-flex justify-content-between">
                                    <button class="btn btn-outline-light prev-step">←Назад</button>
                                    <button class="btn btn-outline-light next-step">Продолжить→</button>
                                </div>
                            </div>

                            <!-- Этап 3: Дополнительные модули -->
                            <div class="config-step" data-step="3" id="modules-section" style="display: none;">
                                <h6 class="mb-3">3/4 Выберите модуль (опционально):</h6>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="option-wrapper position-relative">
                                         
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <!-- Изменено на checkbox -->
                                                <input type="checkbox" name="module-group" value="none"  class="d-none module-checkbox">
                                                <span class="icon-circle mb-2">✖</span>
                                                <p class="mb-0 text-center">Без модулей</p>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3" data-price-category="MODULES" data-price-key="THIRD_HAND">
                                        <div class="option-wrapper position-relative">
                                           
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <!-- Изменено на checkbox -->
                                                <input type="checkbox" name="module-group" value="third-hand" class="d-none module-checkbox">
                                                <span class="icon-circle mb-2"><img src="img/versions/3rd-hand.webp" alt="Третья рука"></span>
                                                <p class="mb-0 text-center">Третья рука</p>
                                                <div class="price-note">дополнительная поддержка инструментов</div>
                                                <div class="option-price" data-price-placeholder></div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3" data-price-category="MODULES" data-price-key="BACKPACK">
                                        <div class="option-wrapper position-relative">
                                          
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">          
                                                <input type="checkbox" name="module-group" value="backpack" data-price="-" class="d-none module-checkbox">
                                                <span class="icon-circle mb-2"><img src="img/versions/backpack.webp" alt="Упор для груза"></span>
                                                <p class="mb-0 text-center">Упор для груза</p>
                                                <div class="price-note">складная платформа на уровне пояса</div>
                                                <div class="option-price" data-price-placeholder></div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3" data-price-category="MODULES" data-price-key="TACKLE"> 
                                        <div class="option-wrapper position-relative">
                                         
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">                
                                                <input type="checkbox" name="module-group" value="tackle" data-price="-" class="d-none module-checkbox">
                                                <span class="icon-circle mb-2"><img src="img/versions/full.webp" alt="Такелаж"></span>
                                                <p class="mb-0 text-center">Такелаж</p>
                                                <div class="price-note">для разгрузки рук</div>
                                                <div class="option-price" data-price-placeholder></div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3" data-price-category="MODULES" data-price-key="KNEE"> 
                                        <div class="option-wrapper position-relative">
                                            
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="checkbox" name="module-group" value="knee" data-price="-" class="d-none module-checkbox">
                                                <span class="icon-circle mb-2"><img src="img/versions/full.webp" alt="Наколенник"></span>
                                                <p class="mb-0 text-center">Наколенник</p>
                                                <div class="price-note">для защиты колен</div>
                                                <div class="option-price" data-price-placeholder></div>
                                            </label>
                                        </div>
                                    </div>

                                    
                                </div>

                                <div class="config-buttons mt-3 d-flex justify-content-between">
                                    <button class="btn btn-outline-light prev-step">←Назад</button>
                                    <button class="btn btn-outline-light next-step">Продолжить→</button>
                                </div>
                            </div>

                            <!-- Этап 4: Мягкие части -->
                            <div class="config-step" data-step="4">
                                <h6 class="mb-3">4/4 Мягкие части:</h6>
                                <div class="row">
                                    <div class="col-md-6 mb-3" data-price-category="SOFT_PARTS" data-price-key="NO">
                                        <div class="option-wrapper position-relative">
                                           
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="radio" name="soft-group" value="no" class="d-none">
                                                <span class="icon-circle mb-2">✖</span>
                                                <p class="mb-0 text-center">Жилет</p>
                                                <div class="price-note">Стандартный плитник</div>
                                                <div class="option-price" data-price-placeholder></div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3" data-price-category="SOFT_PARTS" data-price-key="YES">
                                        <div class="option-wrapper position-relative">
                                          
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="radio" name="soft-group" value="yes" data-price="-" class="d-none">
                                                <span class="icon-circle mb-2">✔</span>
                                                <p class="mb-0 text-center">Капсула</p>
                                                <div class="price-note">Прочная нейлоновая оболочка</div>
                                                <div class="option-price" data-price-placeholder></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-4" id="waist-size-selector" style="display: none;">
                                    <h6 class="mb-3">Охват талии:</h6>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2" style="font-family: Mokoto, 'Mokoto Glitch', sans-serif;">S</span>
                                        <input type="range" class="form-control-range flex-grow-1 mx-2" id="waistSizeSlider" min="1" max="3" value="2" step="1" list="waistOptions" style="accent-color:#baa98f;">
                                        <span class="ml-2" style="font-family: Mokoto, 'Mokoto Glitch', sans-serif;">L</span>
                                    </div>
                                    <div class="d-flex justify-content-between small mt-1">
                                        <span style="color:#aaa">80 см</span>
                                        <span style="color:#aaa">100 см</span>
                                        <span style="color:#aaa">120 см</span>
                                    </div>
                                    <div class="mt-2 text-center">
                                        <strong>Выбрано: <span id="waistSizeDisplay">до 100 см</span></strong>
                                    </div>
                                </div>
                                <div class="config-buttons mt-3 d-flex justify-content-between">
                                    <button class="btn btn-outline-light prev-step">←Назад</button>
                                    <button class="btn btn-outline-light next-step">Продолжить→</button>
                                </div>
                            </div>

                            <div class="config-step" data-step="5" style="display: none;">
                                <h6 class="mb-3">Выберите цвет мягких частей:</h6>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="option-wrapper position-relative">
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="radio" name="soft-color" value="black"  class="d-none">
                                                <span class="icon-circle mb-2">⚫</span>
                                                <p class="mb-0 text-center">Черный</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="option-wrapper position-relative">
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="radio" name="soft-color" value="multicam" class="d-none">
                                                <span class="icon-circle mb-2">🌿</span> 
                                                <p class="mb-0 text-center">Мультикам</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="config-buttons mt-3 d-flex justify-content-between">
                                    <button class="btn btn-outline-light prev-step">←Назад</button>
                                    <button class="btn btn-outline-light next-step">Завершить→</button> <!-- Изменено -->
                                </div>
                            </div>

                            <!-- Этап 6: Оформление заказа -->
                            <div class="config-step text-center" data-step="6" style="display: none;">
                                <div class="final-price-display">
                                    <div class="final-price-inner">
                                        <div class="final-price">
                                            <div class="price-label">Итоговая стоимость:</div>
                                            <div class="price-value" id="price"><h3 id="priceModal">не выбрано</h3></div>
                        
                                        </div>
                                        <div class="price-divider"></div>
                                        <div class="price-note">Цена может быть скоректирована в итоговом счёте</div>
                                    </div>
                                </div>
                                <button class="buy-button" id="openOrderModal">Оформить заказ</button>
                                <div class="mt-3">
                                    <button class="btn btn-link text-light prev-step">← Вернуться к настройкам</button>
                                </div>
                            </div>
                        </div>
                        <!-- Конец конфигуратора -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Model M Section End -->

   
    

    <!-- About Us Section Begin -->
    <section class="counter-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="counter-text">
                        <div class="section-title">
                            <span>AUXILIUM MODEL M</span>
                            <h2>Характеристики</h2>
                        </div>
                    </div>
                    <div class="bd-text">                              
                        <div class="bd-more-text">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="bm-item">
                                        <h4>Масса:</h4>
                                    </div>
                                </div>
                                <div class="col-lg-7">  
                                    <ul>
                                        <li><p>ног (Al/Ti): 2.5/5 кг</p></li>
                                        <li><p>спины (Al/Ti): 1/3 кг</p></li>
                                        <li><p>модуля "третья рука": 1 кг</p></li>
                                        <li><p>модуля "упор для груза": 0.6 кг</p></li>
                                    </ul>
                                </div>      
                            </div>
                            <div class="tag-share"> </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="bm-item">
                                        <h4>Регулировка размеров:</h4>
                                        <h6>смотри фото</h6>
                                    </div>
                                </div>
                                <div class="col-lg-7">  
                                    <ul>
                                        <li><p>ширина спины: 315-377 мм </p></li>
                                        <li><p>обхват талии: до 100 см </p></li>
                                        <li><p>длина спины: 421-473 мм</p></li>
                                        <li><p>длина бедра: 393-480 мм</p></li>
                                        <li><p>длина голени: 480-574 мм</p></li>
                                        <li><p>размер обуви: от 42 и выше</p></li>
                                    </ul>
                                </div> 
                                <p>❔ Не попадаешь в размеры? Не беда! Мы изготовим экзоскелет под заказ, для этого укажи свои параметры в комментарии к заказу.</p>     
                            </div>
                            <div class="tag-share"> </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="bm-item">
                                        <h4>Допустимый вес:</h4>
                                    </div>
                                </div>
                                <div class="col-lg-7">  
                                    <ul>
                                        <li><p>до 50 кг</p></li>
                                    </ul>
                                </div> 
                                   
                            </div>
                        </div>
                    </div>        
                </div>
                <div class="col-lg-7">
                    <div class="as-pic">
                        <img src="img/versions/sizes.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-10">
                    <p>❔ Сомневаешься в выборе, но живешь в Санкт-Петербурге? Есть возможность приехать к нам на тест драйв! Для этого напиши нам!</p> 
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget fw-links">
                        <ul>
                            <li><a href="mailto:auxexo@bk.ru">Почта</a></li>
                            <li><a href="https://t.me/ivansmittt">Телеграм</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



     <!-- Portfolio Section Begin -->
    <section class="portfolio-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="portfolio-item set-bg large-item" data-setbg="img/modelM/modelM-walk.webp" width="50%">
                        <div class="pi-hover">
                            <a href="img/modelM/modelM-walk.webp" class="search-icon image-popup"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="as-text">
                        <div class="section-title">
                            <h2>Для чего этот экзоскелет?</h2>
                        </div>
                        <p class="s-para">AUXILIUM Model M — ваш надежный помощник в работе и экстремальных условиях.
                            Он снимает нагрузку с ног и спины, позволяя удерживать тяжести без риска травм.
                            Модульная конструкция позволяет адаптировать его под любые задачи: от переноски грузов до эвакуации раненых.
                            Каркас способен выдержать самые тяжелые условия. Подходит для строителей, военных, спасателей, курьеров и всех,
                            кто работает на пределе возможностей.  </p>
                        <div class="config-options">
                            <div class="option-row">
                                <label class="config-option">
                                     Доставка
                                </label>
                                <label class="config-option">
                                     Войска
                                </label>
                                <label class="config-option">
                                     Путешествия
                                </label>
                            </div>
                            <div class="option-row">
                                <label class="config-option">
                                     Стройка
                                </label>
                                <label class="config-option">
                                     Логистика
                                </label>
                                <label class="config-option">
                                     Медицина
                                </label>
                            </div>
                            <div class="option-row">
                                <label class="config-option">
                                     МЧС
                                </label>
                                <label class="config-option">
                                     Добыча
                                </label>
                                <label class="config-option">
                                     Погрузки
                                </label>
                            </div>
                            <div class="option-row">
                                <label class="config-option">
                                     Ремонты
                                </label>
                                <label class="config-option">
                                    Производство
                                </label>
                                <label class="config-option">
                                     Эвакуации
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->


    <!-- Counter Section Begin -->
    <section class="counter-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="counter-text">
                        <div class="section-title">
                            <span>AUXILIUM MODEL M</span>
                            <h2>Какие задачи решает <br />пассивный экзоскелет ног и спины?</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="counter-item">
                        <div class="ci-number count">
                            56
                        </div>
                        <div class="ci-text">
                            <h4> Процентов </h4>
                            <p>- Настолько снижается нагрузка со всего опорно-двигательного аппарата человека
                                за счет упора каркаса экзоскелета в землю. Вся статическая нагрузка идет буквально в обход человека, и усилия тратятся только на перемещения</p>
                        </div>
                    </div>
                    <div class="counter-item">
                        <div class="ci-number count">
                            50
                        </div>
                        <div class="ci-text">
                            <h4>Килограмм</h4>
                            <p>- Полезной нагрузки позволяет добавить на себя несущая рама экзоскелета
                                благодаря многочисленным крепежным элементам, расположенным по всему каркасу </p>
                        </div>
                    </div>
                    <div class="counter-item">
                        <div class="ci-number count">
                            4
                        </div>
                        <div class="ci-text">
                            <h4>Зоны</h4>
                            <p>- В которых предусмотрена быстрая регулировка размеров:
                                это ширина таза, длина бедра, длина голени и длина позвоночника</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- About Us Section Begin -->
    <section class="about-us-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="as-pic">
                        <img src="img/versions/science.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="as-text">
                        <div class="section-title">
                            <span>Исследования нашей лаборатории</span>
                            <h2>Эффективен ли?</h2>
                        </div>
                        <p class="f-para">
                        </p>
                        <p class="s-para">Проведенные исследования в рамках нашей лаборатории показали эффективность разгрузки 
                            опорно-двигательного аппарата человека (главным образом ног) при ходьбе свыше 56%! 
                            Именно столько процентов массы груза не воздействует на человека в экзоскелете, 
                            а в положении стоя это значение доходит аж до 88%!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->


 <!-- Blog Details Section Begin -->
    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="bd-text">
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <h4>Cила и выносливость в каждой детали</h4>
                                <p>Тяжелая работа больше не будет проблемой. Наш пассивный экзоскелет —
                                    это надежная поддержка для вашей спины и ног, созданная для тех, кто работает на пределе.</p>
                                <p>Экзоскелет распределяет нагрузку на ноги и спину,
                                    снижая усталость и риск травм. Модульная конструкция позволяет добавлять дополнительные
                                    функции: например, упор для переноса груза на спине.
                                </p>
                            </div>
                            <div class="bm-item">
                                <h4>Кому это нужно?</h4>
                                <p>Вы знаете, каково это — чувствовать, как спина сжимается в тисках усталости после
                                    подъема очередного ящика? Или как ноги дрожат под весом груза,
                                    а вы мысленно считаете минуты до конца смены? Этот экзоскелет создан для тех,
                                    кто не готов платить здоровьем за тяжелую работу. Для тех,
                                    кто устал выбирать между «сделать сейчас» и «не сломаться потом».
                                    Для спасателей, которые носят на себе жизни, для строителей,
                                    поднимающих города, для военных, чья выносливость — это главное качество.
                                    Если ваша работа требует от тела невозможного, а дух рвется вперед,
                                    когда мышцы уже кричат «стоп», — вы нашли то, что превратит ваши пределы в новый старт.</p>
                            </div>

                        <div class="bd-pic">
                            <div class="row">
                                <div class="col-md-8">
                                    <img src="img/modelM/leg.webp" alt="">
                                </div>
                                <div class="col-md-4">
                                    <img src="img/modelM/4.webp" alt="">
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="bd-quote">
                            <img src="img/BattleBots/details/quote.png" alt="">
                            <p>Это не просто экзоскелет — это ваш новый уровень производительности!”</p>
                            <div class="quote-author">
                                <h5>Алексей Ледюков</h5>
                                <span>Разработчик AUXILIUM</span>
                            </div>
                        </div>
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <h4>Почему мы?</h4>
                                <p>Потому что мы не верим в компромиссы. Наш экзоскелет — это не просто металл и шарниры.
                                    Это броня для вашей спины, которая берет на себя вес мира,
                                    пока вы сосредоточены на главном.
                                    Мы не обещаем «волшебства» — мы даем то, что работает.
                                    Каркас, который подстраивается именно под вас.
                                    Модули, которые превращают экзоскелет в то, что нужно именно вам.
                                    И уверенность, что завтра вы встанете без боли — потому что сегодня вы выбрали силу,
                                    которая останется с вами даже после тяжелого дня. Это не гаджет. Это ваше право работать,
                                    не оглядываясь на ограничения.</p>
                                <h5>Хватит носить боль на плечах. Доверьте тяжесть нам — ваша сила заслуживает того, чтобы тратить ее на главное.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->



        <!-- Portfolio Section Begin -->
        <section class="modelD-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title">
                        <span>Фото</span>
                    </div>
                    <div class="bd-text">
                        <div class="tag-share"> </div>
                        <div class="bd-pic">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="img/modelM/1.webp" alt="">
                                </div>
                                <div class="col-md-4">
                                    <img src="img/modelM/5.webp" alt="">
                                </div>
                                <div class="col-md-4">
                                    <img src="img/modelM/6.webp" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-2">
                            <div class="service-item">
                                <p>Оставляйте свои отзывы об использовании экзоскелета в <a href="https://vk.com/topic-132621744_53168796" target="_blank">нашем сообществе!</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include 'footer.php'; ?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
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

    <script src="https://cdn.jsdelivr.net/npm/@loaders.gl/gltf@3.1.5/dist/dist.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="js/products/OrbitControls.js"></script>
    <script src="js/products/GLTFLoader.js"></script>

    <script src="js/products/modelM.js"></script>
    <script src="js/products/prices.js"></script>
    <script src="js/products/configurator.js"></script>
    
  
</body>

</html>