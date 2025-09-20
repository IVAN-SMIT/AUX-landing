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
                        <span>AUXILIUM model D</span>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <div class="modelD-breadcrumb-text">
                        <h3>AUXILIUM model D</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Model D Section Begin -->
    <section class="about-us-section spad">

        <!-- Контейнер для уведомления о необходимости выбора конфигурации -->
        <div id="configNotification" class="notification neutral hidden">
            Пожалуйста, выберите конфигурацию!
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="modelM-3d">
                        <div id="model-container" class="hidden">
                            <!-- Здесь будет 3D модель -->
                        </div>
                        <div id="modelD-static-image-container">
                            <img id="static-image" src="img/versions/9.webp" alt="Конфигурация не выбрана">
                            <button id="view-3d-button" class="view-3d-button">Посмотреть в 3D</button>
                        </div>
                    </div>
                </div>
                
                <div id="modal-3d-view" class="modal-3d-view">
                    <div class="modal-3d-content">
                        <span class="close-3d-modal">&times;</span>
                        <div id="modal-model-container" style="width: 100%; height: 500px;"></div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="as-text modelD-text">
                        <div class="section-title">
                            <span>Экзоскелет</span>
                            <h2>AUXILIUM model D</h2>
                        </div>
                        <p class="f-para">Бедренный экзоскелет, который трансформирует энергию ходьбы в электричество,
                            а также разгружает поясницу</p>

                        <div class="configuration">
                            <h6>Выберите конфигурацию:</h6>
                            <div class="config-options">
                                <label class="config-option">
                                    <input type="radio" name="config" value="premium" data-price="119990">
                                    <span class="icon-circle"><img src="img/versions/gen.webp" alt="Генераторная конфигурация"></span>
                                    <p>С генератором</p>
                                </label>
                                <label class="config-option">
                                    <input type="radio" name="config" value="base" data-price="69800">
                                    <span class="icon-circle"><img src="img/versions/Dbase.webp" alt="Базовая конфигурация"></span>
                                    <p>Базовый</p>
                                </label>
                            </div>
                            <div class="config-footer">
                                <div class="final-price">
                                    <div class="price-label">Итоговая стоимость:</div>
                                    <div class="price-value" id="price">выбери</div>
                                </div>
                                <button class="buy-button" id="openOrderModal">Оформить заказ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Model D Section End -->


    

    <!-- Portfolio Section Begin -->
    <section class="modelD-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="section-title">
                        <span>Характеристики</span>
                    </div>
                    <div class="modelD-item">
                        <p>
                            <label for="version-select">Выберите конфигурацию:</label>
                            <select id="version-select">
                                <option value="premium">Генераторная конфигурация</option>
                                <option value="base">Базовая конфигурация</option>
                            </select>
                        </p>
                        <table>
                            <tr>
                                <th colspan="2">Вес</th>
                                <th id="weight">3.2 кг</th>
                            </tr>
                            <tr>
                                <th colspan="2">Материал</th>
                                <th id="material">Алюминий</th>
                            </tr>
                            <tr>
                                <th rowspan="3">Размеры</th>
                                <th>Высота</th>
                                <th id="height">100 см</th>
                            </tr>
                            <tr>
                                <th>Ширина</th>
                                <th id="width">50 см</th>
                            </tr>
                            <tr>
                                <th>Глубина</th>
                                <th id="depth">40 см</th>
                            </tr>
                            <tr>
                                <th colspan="2">Время работы</th>
                                <th id="time">4 ч</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="section-title">
                        <span>Фото</span>
                    </div>
                    <div class="modelD-item">
                        <div class="footer-widget">
                            <div class="insta-pic">
                                <img src="img/modelD/1.webp" alt="">
                                <img src="img/modelD/2.webp" alt="">
                                <img src="img/modelD/3.webp" alt="">
                                <img src="img/modelD/4.webp" alt="">
                                <img src="img/modelD/5.webp" alt="">
                                <img src="img/modelD/8.webp" alt="">
                                <img src="img/modelD/7.webp" alt="">
                                <img src="img/modelD/6.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



       <!-- About Us Section Begin -->

    <section class="about-us-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="as-pic">
                        <img src="img/modelD_front.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="as-text">
                        <div class="section-title">
                            <span>Бедренный экзоскелет</span>
                            <h2>Почему он вам нужен?</h2>
                        </div>
                        <p class="f-para">
                        </p>
                        <p class="s-para">Устали от боли в пояснице после долгого дня? Наш бедренный экзоскелет — это
                            революционное решение для тех, кто хочет двигаться легко и без усталости. Он снижает нагрузку на
                            мышцы таза и бедер, помогая вам дольше оставаться активным. А в расширенной версии с генератором энергии
                            вы сможете заряжать свои гаджеты прямо на ходу! Идеально для туристов, спортсменов, курьеров и всех, кто ценит комфорт и технологии. </p>
                        <a href="./modelD.php" class="primary-btn">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section End -->

        <!-- Counter Section Begin -->
    <section class="counter-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="counter-text">
                        <div class="section-title">
                            <span>AUXILIUM MODEL D</span>
                            <h2>Какие задачи решает <br />бедренный экзоскелет?</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="counter-item">
                        <div class="ci-number count">
                            16
                        </div>
                        <div class="ci-text">
                            <h4> Процентов </h4>
                            <p>- Настолько снижается нагрузка с тазового отдела благодаря уникальной запатентованной технологии созависимых сочленений</p>
                        </div>
                    </div>
                    <div class="counter-item">
                        <div class="ci-number count">
                            3
                        </div>
                        <div class="ci-text">
                            <h4>Килограмма</h4>
                            <p>- Низкая масса экзоскелета в совокупности с демпфирующими механизмами позволит сохранить легкость во время движения</p>
                        </div>
                    </div>
                    <div class="counter-item">
                        <div class="ci-number count">
                            10
                        </div>
                        <div class="ci-text">
                            <h4>Ампер-часов</h4>
                            <p>- Емкость внутренней батареи, которая позволит зарядить смартфон с 0% до 100% 3 раза подряд!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->




        <!-- Blog Details Section Begin -->
    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="bd-text">
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <h4>Легкость движений и энергия в каждом шаге</h4>
                                <p>Представьте, что вы можете ходить часами без усталости, а ваши гаджеты всегда заряжены,
                                    даже вдали от розеток. Наш бедренный экзоскелет делает это возможным!.</p>
                                <p>Экзоскелет поддерживает мышцы таза и бедер с помощью системы тросов и пружин,
                                    которые снижают нагрузку при ходьбе. В расширенной версии встроенные генераторы
                                    преобразуют ваши движения в электричество, заряжая аккумуляторы для питания устройств.
                                </p>
                            </div>
                            <div class="bm-item">
                                <h4>Кому это нужно?</h4>
                                <p>Вы когда-нибудь задумывались, как было бы здорово пройти десятки километров по горной тропе
                                    и не чувствовать, что ваши ноги горят огнем? Или разгрузить машину после долгой дороги,
                                    не хватаясь за поясницу от боли? А может, вы мечтали, чтобы ваш походный рюкзак не только не тянул вниз,
                                    но и заряжал фонарь или навигатор, пока вы идете? Этот экзоскелет — для тех, кто не готов жертвовать своими
                                    целями ради комфорта. Для тех, кто устал от вечного выбора между «сделать» и «не надорваться».
                                    Для тех, чья работа, хобби или приключения требуют больше, чем может выдержать тело. Если вы хотите,
                                    чтобы ваши движения стали легче, а энергия — вашим союзником, а не ограничением, вы нашли то, что искали.</p>
                            </div>

                            <div class="bd-pic">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="img/modelD/1.webp" alt="">
                                </div>
                                <div class="col-md-6">
                                    <img src="img/modelD/2.webp" alt="">
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="bd-quote">
                            <img src="img/BattleBots/details/quote.png" alt="">
                            <p>Не просто экзоскелет — это ваш новый уровень свободы!”</p>
                            <div class="quote-author">
                                <h5>Леонид Нагорный</h5>
                                <span>Разработчик AUXILIUM</span>
                            </div>
                        </div>
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <h4>Почему мы?</h4>
                                <p>Потому что мы не просто создали экзоскелет — мы подарили вам свободу.
                                    Свободу от усталости, которая копится в мышцах после каждого шага.
                                    Свободу от розеток, к которым вы привязаны в походах.
                                    Свободу от компромиссов между работой и здоровьем.
                                    Наш экзоскелет — это не груз, а продолжение вашего тела:
                                    он обнимает бедра мягкими креплениями, будто вторую кожу,
                                    и работает так незаметно, что вы забудете о
                                    его существовании — пока не поймете, что прошли
                                    вдвое больше обычного. А когда вы выбираете расширенную версию,
                                    каждый ваш шаг превращается в маленькую электростанцию:
                                    теперь вы не просто идете — вы создаете энергию для своих гаджетов.
                                    Это не технология будущего. Это то, что должно было появиться давно.
                                    И это теперь ваше.</p>
                                <h5>Хотите проверить, как это работает? Просто сделайте шаг. Остальное мы возьмём на себя</h5>

                            </div>
                            <div class="tag-share"> </div>
                            <p>Оставляйте свои отзывы об использовании экзоскелета в <a href="https://vk.com/topic-132621744_53168799" target="_blank">нашем сообществе!</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- partner-section Begin -->
    <section class="partner-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="footer-content">
                        <div class="logo-container">
                            <img src="img\BattleBots\details\faise.png" alt="Логотип" class="footer-logo">
                        </div>
                        <p class="footer-text">
                            Проект бедренного экзоскелета "AUXILIUM Model D" создан при поддержке Федерального государственного бюджетного учреждения 
                            "Фонд содействия развитию малых форм предприятий в научно-технической сфере" в рамках
                            программы "Студенческий стартап" федерального проекта "Платформа университетского технологического предпринимательства".
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- partner-section End -->


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

    
    <script src="https://cdn.jsdelivr.net/npm/@loaders.gl/gltf@3.1.5/dist/dist.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    
    <script src="js/products/OrbitControls.js"></script>
    <script src="js/products/GLTFLoader.js"></script>
    <script src="js/products/modelD.js"></script>



</body>

</html>