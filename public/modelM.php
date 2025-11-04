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
                            <!-- <button id="view-3d-button" class="view-3d-button">Посмотреть в 3D</button> -->
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
                            <div id="step1Prompt" class="step-1-prompt">👉</div>
                            
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
                                <h6 class="mb-3">1/5 Выберите версию: <span class="desc-link" onclick="scrollToDescription('desc-spine')">[Что это?]</span></h6>
                                <div class="row">
                                    <div class="col-6 mb-3" data-price-category="BASE_VERSIONS" data-price-key="BASE">
                                        <div class="option-wrapper position-relative">
                                            
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="radio" name="spine" value="base" data-parts="base" class="d-none">
                                                <span class="icon-circle mb-2"><img src="img/versions/base.webp" alt="Базовая версия"></span>
                                                <p class="mb-0 text-center">Базовая версия</p>
                                                <!--div class="option-price" data-price-placeholder></div-->
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3" data-price-category="BASE_VERSIONS" data-price-key="WITH_SPINE">
                                        <div class="option-wrapper position-relative">
                                           
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="radio" name="spine" value="with-spine" data-parts="spine" class="d-none">
                                                <span class="icon-circle mb-2"><img src="img/versions/full.webp" alt="Со спиной"></span>
                                                <p class="mb-0 text-center">Со спиной</p>
                                                <!--div class="option-price" data-price-placeholder></div-->
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
                                <h6 class="mb-3">2/5 Выберите материал: <span class="desc-link" onclick="scrollToDescription('desc-material')">[Что дает материал?]</span></h6>
                                <div class="row">
                                    <div class="col-6 mb-3" data-price-category="MATERIALS" data-price-key="ALUMINUM" data-spine-context="BASE"> <!-- Добавлен data-spine-context -->
                                        <div class="option-wrapper position-relative">
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="radio" name="material" value="aluminum" data-price="-" class="d-none">
                                                <span class="icon-circle mb-2"><img src="img/versions/aisi.webp" alt="Нержавеющая сталь AISI 304"></span>
                                                <p class="mb-0 text-center">Нержавеющая сталь</p>
                                                <div class="price-note">Дешевая, но тяжелая</div>
                                                <div class="option-price" data-price-placeholder></div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3" data-price-category="MATERIALS" data-price-key="TITANIUM" data-spine-context="BASE"> <!-- Добавлен data-spine-context -->
                                        <div class="option-wrapper position-relative">
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="radio" name="material" value="titanium" data-price="-" class="d-none">
                                                <span class="icon-circle mb-2"><img src="img/versions/Ti.webp" alt="Титан ВТ-1"></span>
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
                                 <h6 class="mb-3">3/5 Выберите модули: <span class="desc-link" onclick="scrollToDescription('desc-modules')">[Что делают модули??]</span></h6>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="option-wrapper position-relative">
                                         
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">

                                                <input type="radio" name="module-group" value="none"  class="d-none module-checkbox">
                                                <span class="icon-circle mb-2">✖</span>
                                                <p class="mb-0 text-center">Без модулей</p>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3" data-price-category="MODULES" data-price-key="TACKLE"> 
                                        <div class="option-wrapper position-relative">
                                         
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">                
                                                <input type="radio" name="module-group" value="tackle" data-price="-" class="d-none module-checkbox">
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
                                                <input type="radio" name="module-group" value="knee" data-price="-" class="d-none module-checkbox">
                                                <span class="icon-circle mb-2"><img src="img/versions/full.webp" alt="Наколенник"></span>
                                                <p class="mb-0 text-center">Наколенник</p>
                                                <div class="price-note">для защиты колен</div>
                                                <div class="option-price" data-price-placeholder></div>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-3" data-price-category="MODULES" data-price-key="THIRD_HAND">
                                        <div class="option-wrapper position-relative">
                                           
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="radio" name="module-group" value="third-hand" class="d-none module-checkbox">
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
                                                <input type="radio" name="module-group" value="backpack" data-price="-" class="d-none module-checkbox">
                                                <span class="icon-circle mb-2"><img src="img/versions/backpack.webp" alt="Упор для груза"></span>
                                                <p class="mb-0 text-center">Упор для груза</p>
                                                <div class="price-note">складная платформа на уровне пояса</div>
                                                <div class="option-price" data-price-placeholder></div>
                                            </label>
                                        </div>
                                    </div>

                                    
                                    <!-- <div class="col-md-4 mb-3" data-price-category="MODULES" data-price-key="MULTI_SELECT"> 
                                        <div class="option-wrapper position-relative">
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="checkbox" name="module-group" value="Несколько модулей" class="d-none module-checkbox"> 
                                                <span class="icon-circle mb-2">🛒</span>
                                                <p class="mb-0 text-center">Выбрать несколько</p>
                                            </label>
                                        </div>
                                    </div> -->
                            
                                </div>

                                <div class="config-buttons mt-3 d-flex justify-content-between">
                                    <button class="btn btn-outline-light prev-step">←Назад</button>
                                    <button class="btn btn-outline-light next-step">Продолжить→</button>
                                </div>
                            </div>

                                                        <!-- Этап 4: Мягкие части и упоры (новая логика) -->
                            <div class="config-step" data-step="4">
                                <h6 class="mb-3">4/5 Выберите мягкую часть: <span class="desc-link" onclick="scrollToDescription('desc-soft-parts')">[Что это?]</span></h6>
                                <!-- Варианты для базовой версии -->
                                                                <!-- Варианты для базовой версии -->
                                <div id="soft-parts-base-options" style="display: none;">
                                    <div class="row">
                                        <div class="col-6 mb-3" data-price-category="SOFT_PARTS" data-price-key="NO" data-spine-context="BASE"> <!-- Добавлен data-spine-context -->
                                            <div class="option-wrapper position-relative">
                                                <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                    <input type="radio" name="soft-group-base" value="no" class="d-none">
                                                    <span class="icon-circle mb-2">✖</span>
                                                    <p class="mb-0 text-center">Без жилета</p>
                                                    <div class="price-note">только каркас + манжеты ног</div>
                                                    <div class="option-price" data-price-placeholder></div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3" data-price-category="SOFT_PARTS" data-price-key="WITH_SOFT" data-spine-context="BASE"> <!-- Добавлен data-spine-context -->
                                            <div class="option-wrapper position-relative">
                                                <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                    <input type="radio" name="soft-group-base" value="with_soft" data-price="-" class="d-none">
                                                    <span class="icon-circle mb-2">✔</span>
                                                    <p class="mb-0 text-center">Жилет и stkss упоры</p>
                                                    <div class="price-note">стандартный плитник + упоры + манжеты ног</div>
                                                    <div class="option-price" data-price-placeholder></div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Варианты для версии со спиной -->
                                <div id="soft-parts-with-spine-options" style="display: none;">
                                    <div class="row">
                                        <div class="col-6 mb-3" data-price-category="SOFT_PARTS" data-price-key="NO" data-spine-context="WITH_SPINE"> <!-- Добавлен data-spine-context -->
                                            <div class="option-wrapper position-relative">
                                                <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                    <input type="radio" name="soft-group-with-spine" value="no" class="d-none">
                                                    <span class="icon-circle mb-2">✖</span>
                                                    <p class="mb-0 text-center">Без жилета</p>
                                                    <div class="price-note">только манжеты ног</div>
                                                    <div class="option-price" data-price-placeholder></div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3" data-price-category="SOFT_PARTS" data-price-key="VEST" data-spine-context="WITH_SPINE"> <!-- Добавлен data-spine-context -->
                                            <div class="option-wrapper position-relative">
                                                <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                    <input type="radio" name="soft-group-with-spine" value="vest" class="d-none">
                                                    <span class="icon-circle mb-2">✖</span>
                                                    <p class="mb-0 text-center">Жилет</p>
                                                    <div class="price-note">стандартный плитник + манжеты ног</div>
                                                    <div class="option-price" data-price-placeholder></div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-6 mb-3" data-price-category="SOFT_PARTS" data-price-key="YES" data-spine-context="WITH_SPINE"> <!-- Добавлен data-spine-context и изменил key на YES для CAPSULE -->
                                             <!-- Или оставьте key="CAPSULE", но тогда измените в prices.js ключи на CAPSULE_WITH_SPINE -->
                                             <!-- Пока оставим YES, чтобы не менять prices.js, но это не очень чисто. Лучше key="CAPSULE" -->
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
                                <h6 class="mb-3">5/5 Выберите цвет мягких частей:</h6>
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <div class="option-wrapper position-relative">
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="radio" name="soft-color" value="black"  class="d-none">
                                                <span class="icon-circle mb-2"><img src="img/versions/black.webp" alt="Черный"></span>
                                                <p class="mb-0 text-center">Черный</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <div class="option-wrapper position-relative">
                                            <label class="config-option d-flex flex-column align-items-center p-3 rounded">
                                                <input type="radio" name="soft-color" value="multicam" class="d-none">
                                                <span class="icon-circle mb-2"><img src="img/versions/multicam.webp" alt="Мультикам"></span> 
                                                <p class="mb-0 text-center">Мультикам</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="config-buttons mt-3 d-flex justify-content-between">
                                    <button class="btn btn-outline-light prev-step">←Назад</button>
                                    <button class="btn btn-outline-light next-step">Завершить→</button> 
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
                                <div class="col-5">
                                    <div class="bm-item">
                                        <h4>Масса:</h4>
                                    </div>
                                </div>
                                <div class="col-7">  
                                    <ul>
                                        <li><p>ног (AiSi/Ti): 8/5 кг</p></li>
                                        <li><p>спины (AiSi/Ti): 5/2.5 кг</p></li>
                                        <li><p>модуля "третья рука": 1 кг</p></li>
                                        <li><p>модуля "упор для груза": 0.6 кг</p></li>
                                    </ul>
                                </div>      
                            </div>
                            <div class="tag-share"> </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="bm-item">
                                        <h4>Регулировка размеров:</h4>
                                        <h6>смотри фото</h6>
                                    </div>
                                </div>
                                <div class="col-7">  
                                    <ul>
                                        <li><p>ширина спины: 315-377 мм </p></li>
                                        <li><p>обхват талии: до 120 см </p></li>
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
                                <div class="col-5">
                                    <div class="bm-item">
                                        <h4>Допустимый вес:</h4>
                                    </div>
                                </div>
                                <div class="col-7">  
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







    <!-- About Us Section Begin -->
    <section class="counter-section spad">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="counter-text">
                        <div class="section-title">
                            <span>AUXILIUM MODEL M</span>
                            <h2>Какую версию выбрать?</h2>
                            <!-- Изображение сравнения (опционально, можно оставить или убрать) -->
                            <p style="text-align:center"><img src="img/modelM/compare.webp" alt="Сравнение версий" class="desc-image"></p>
                        </div>
                    </div>

                    <div class="bd-text">
                        <div class="bd-more-text">
                            <div id="desc-spine" class="bm-item config-desc-item">
                                <!-- Подраздел: Версия "Без спины" -->
                                <div class="spine-version-block">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <h4>Версия "Без спины"</h4>
                                            <p>Представляет собой каркасную конструкцию, предназначенную в первую очередь для <strong>разгрузки пояса и ног</strong>. Она идеально подходит для задач, где основная нагрузка приходится на нижнюю часть тела, и нет необходимости в распределении веса на плечи и спину.</p>
                                        </div>

                                        <div class="col-md-4">
                                            <img src="img/modelM/base.webp" alt="Версия без спины" class="desc-image">
                                        </div>

                                        <div class="col-md-8">
                                            
                                            <p><strong>Основные особенности:</strong></p>
                                            <ul>
                                                <li><p><strong>Целевое назначение:</strong> Основная функция — снижение нагрузки на поясничный отдел позвоночника и мышцы ног за счёт передачи веса на каркас экзоскелета и его распределения на точки опоры (бедра, голени).</p></li>
                                                <li><p><strong>Совместимость с модулями:</strong> Эта версия <strong>совместима</strong> с такими модулями, как <strong>"Третья рука"</strong> и <strong>"Наколенник"</strong> Это позволяет эффективно использовать дополнительное оборудование, сохраняя при этом поддержку для ног и поясницы.</p></li>
                                                <li><p><strong>Сценарий использования:</strong> К базовой версии можно присоединить жилет и STKSS упоры. В этом случае масса жилета и всех подсумков, размещенных на нём, разгружается <strong>напрямую через каркас в землю</strong>. Это позволяет использовать тяжёлый жилет (например, с установленными бронеплитами) с минимальной нагрузкой на пользователя — вес "сидит" на каркасе и упирается в землю, а не давит на тело.</p></li>
                                            </ul>
                                            <p><strong>Коротко:</strong> "Базовая" версия — это основа для разгрузки ног и поясницы, совместимая с рядом модулей, которая позволяет эффективно снимать нагрузку с пояса и передавая её на каркас и землю. (Рюкзаки не разгружает)</p>
                                        </div>
                                        
                                    </div>
                                </div> <!-- /spine-version-block -->

                                <div class="tag-share"> </div>

                                <!-- Подраздел: Версия "Со спиной" -->
                                <div class="spine-version-block">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <h4>Версия "Со спиной"</h4>
                                            <p>Представляет собой расширенную конструкцию, предназначенную для <strong>максимальной разгрузки спины, плеч и поясницы</strong>, а также для <strong>оптимального распределения нагрузки по всему телу</strong>. Она идеально подходит для задач, где требуется переносить значительный вес на спине или когда необходима полная поддержка позвоночника.</p>
                                        </div>

                                        <div class="col-md-4">
                                            <img src="img/modelM/full.webp" alt="Версия со спиной" class="desc-image">
                                        </div>

                                        <div class="col-md-8">
                                            
                                            <p><strong>Основные особенности:</strong></p>
                                            <ul>
                                                <li><p><strong>Целевое назначение:</strong> Основная функция — снижение нагрузки на <strong>позвоночник, поясницу и плечи</strong> за счёт передачи веса груза (например, рюкзака) и собственного веса конструкции на каркас экзоскелета, а затем на точки опоры (бедра, голени).</p></li>
                                                <li><p><strong>Совместимость с модулями:</strong> Эта версия <strong>совместима со всеми</strong> доступными модулями, включая <strong>"Третью руку"</strong>, <strong>"Упор для груза"</strong>, <strong>"Такелаж"</strong> и <strong>"Наколенник"</strong>. Это делает её универсальным решением для самых разных задач.</p></li>
                                                <li><p><strong>Сценарий использования:</strong> Благодаря конструкции каркаса, <strong>вес рюкзака или другого снаряжения на спине</strong> воспринимается не телом пользователя, а самим экзоскелетом. Это позволяет брать на плечи больше веса, не испытывая привычной усталости и давления.</p></li>
                                            </ul>
                                            <p><strong>Коротко:</strong> "Версия со спиной" — это комплексное решение для максимальной поддержки тела и переноса тяжёлых грузов, совместимое со всеми модулями, обеспечивающее полную разгрузку спины и плеч. (В том числе перенос рюкзаков)</p>
                                        </div>
                                        
                                    </div>
                                </div> 
                            </div> 

                            <div class="tag-share"> </div>

                            <!-- Описание материала -->
                            <div id="desc-material" class="bm-item config-desc-item">
                                <h4>Материал</h4>
                                <p>Выбор материала конструкции влияет на два ключевых параметра: стоимость и вес. В конструкции каркаса используется 
                                    оптимальная связка: менее нагруженные элементы (например, таз или спина) выполнены из лёгкого авиационного алюминия 
                                    для снижения общего веса, а для более нагруженных узлов (например, ноги, сочленения) предлагается 
                                    выбор между <strong>нержавеющей сталью</strong> и <strong>титаном.</strong></p>
                                <ul>
                                    <li><p><strong>Нержавеющая сталь</strong> Обеспечивает высокую прочность и устойчивость к механическим повреждениям, 
                                    но имеет более низкую стоимость и больший вес.</p></li>
                                    <li><p><strong>Титан:</strong> Обладает отличным соотношением прочности и веса, делая экзоскелет легче, при этом сохраняя надежность. Однако имеет повышенную стоимость.</p></li>
                                </ul>   
                            </div>

                            <div class="tag-share"> </div>

                            <!-- Описание модулей -->
                            <div id="desc-modules" class="bm-item config-desc-item">
                                <div class="row">

                                    <div class="col-md-12"> 
                                        <h4>Модули</h4>
                                        <img src="img/modelM/modules.webp" alt="Примеры модулей" class="rounded mx-auto d-block" width="80%">
                                        <p>Модули - это дополнительные функциональные детали, которые позволяют адаптировать экзоскелет <span>AUXILIUM MODEL M</span> под конкретные задачи.</p>
                                    </div>
                                
                                    <div class="col-md-12">   
                                        <ul>
                                            <li>
                                                <p><strong>"Третья рука":</strong> Является дополнительным модулем, который расширяет функциональность экзоскелета, обеспечивая внешнюю несущую руку для удержания инструментов или грузов до 7 кг. Модуль крепится к тазовой частии передаёт нагрузку напрямую 
                                                на каркас экзоскелета, не нагружая пользователя. Идеален для работ на складе, в строительстве или при монтаже — освобождает ваши руки, снижает усталость. В случае крепления стрелкового оружия, позволяет принять упор лёжа.</p>
                                                <img src="img/modelM/third_hand.webp" alt="упор для груза" class="rounded mx-auto d-block" width="30%">
                                            </li>
                                            <li>
                                                <p><strong>"Наколенник":</strong> Защищает при работе в положении приседа или на коленях. Имеет совместимость со стандартными тактическими наколенниками скрытого ношения. Имеет регулировку угла наклона.</p>
                                                <img src="img/modelM/knee.webp" alt="упор для груза" class="rounded mx-auto d-block" width="75%">
                                            </li>
                                            <li>
                                                <p><strong>"Такелаж":</strong> Является дополнительным модулем для демпфирования и снятия нагрузки с рук. Разгружает руки, полностью забирая массу до 4 кг с рук. Идеален для длительных работ с болгаркой. </p>
                                                <img src="img/modelM/tackle.webp" alt="упор для груза" class="rounded mx-auto d-block" width="30%">
                                            </li>
                                            <li>
                                                <p><strong>"Упор для груза":</strong> Складная платформа на спине, позволяющая более устойчиво размещать переносимый груз. Может быть трансформирована в раскладную ступеньку для переноса людей.</p>
                                                <img src="img/modelM/backpack.webp" alt="упор для груза" class="rounded mx-auto d-block" width="50%">
                                            </li>
                                        </ul>
                                        <p>❔ Можно выбрать несколько модулей, <strong>написав об этом в комментариях к заказу,</strong> или  же оставить экзоскелет без модулей.</p>
                                    </div> 
                                </div>
                            </div>

                            <div class="tag-share"> </div>

                            <!-- Описание мягких частей -->
                            <div id="desc-soft-parts" class="bm-item config-desc-item">
                                <h4>Мягкие части</h4>
                                <p>Мягкие части являются связующим звеном между человеком и каркасом экзоскелета, обеспечивают комфорт и правильное распределение нагрузки на тело. По умолчанию устанавливается пояс и манжеты на ноги (с функцией быстросброса). В зависимости от выбранной версии экзоскелета на туловище устанавливается ряд возможных конфигураций</p>
                                <p><strong>Для базовой версии:</strong></p>
                                <ul>
                                    <li>
                                        <p><strong>"Без жилета":</strong> Минимальная конфигурация, только тактический пояс и манжеты ног</p> 
                                    </li>
                                    <li>
                                        <p><strong>"Жилет и STKSS":</strong>Установка на пояс экзоскелета системы STKSS, к которой присоединяется разгрузочный жилет. В случае размещения в жилете бронепластин, их вес снимается с человека.</p> 
                                    </li>
                                </ul>
                                    <p><strong>Для версии со спиной:</strong></p>
                                <ul>
                                    <li><p><strong>"Жилет":</strong> На каркас экзоскелета устанавливается  разгрузочный жилет. Полная подвижность, надёжная фиксация и полная разгрузка спины.</p></li>
                                    <li><p><strong>"Капсула":</strong> Продвинутая система из полужесткого пластика, охватывающая грудную клетку, обеспечивающая максимальное распределение нагрузки, вентилируемость и комфорт.</p></li>
                                </ul>
                                
                            </div>


                        </div>
                    </div> 
                </div> 
            </div> 
        </div>
    </section>







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
                            7
                        </div>
                        <div class="ci-text">
                            <h4>Зон</h4>
                            <p>- В которых предусмотрена быстрая регулировка размеров:
                                это ширина плеч, ширина грудной клетки, ширина таза, длина бедра, вылет бедра, длина голени и длина позвоночника</p>
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
                <div class="col-lg-12 m-auto">
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
