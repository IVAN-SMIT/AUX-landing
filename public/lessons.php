<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="AUXILIUM">
    <meta name="keywords" content="AUXILIUM, IVAN SMIT, I1, html, exoskeleton, экзоскелет">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AUXILIUM | Уроки</title>

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400&display=swap" type="text/css">
	<?php include 'yandexM.php'; ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php 
    $currentPage = 'lessons'; 
    include_once 'header.php';
    ?>

<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-option">
                        <a href="index.php">Главная</a>
                        <span>Уроки</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumb-text">
                        <h3>Уроки</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- список мануалов здась -->
    <!-- Список мануалов -->
    <section class="manual-list-section spad">
        <div class="container">
            <div class="row">

                <!-- Карточка мануала  -->
                <div class="col-lg-4 col-md-6">
		    <a href="lessonGRIPPER.php" class="manual-card-link">
                    <div class="manual-card">
                        <div class="manual-thumb">
                            <img src="img/gripper/6.webp" alt="Захват экзоскелета">
                        </div>
                        <div class="manual-text">
                            <h4><a href="lessonGRIPPER.php">Разработка захвата экзоскелета</a></h4>
                            <p>Создание подвижной экзо перчатки с пневматическим типом привода (3д модель прилагается)</p>
                        </div>
                    </div>
                </div>

                <!-- Карточка мануала  -->
                <div class="col-lg-4 col-md-6">
		    <a href="lessonSITE.php" class="manual-card-link">
                    <div class="manual-card">
                        <div class="manual-thumb">
                            <img src="img/manuals/server.png" alt="Raspberry Pi">
                        </div>
                        <div class="manual-text">
                            <h4><a href="lessonSITE.php">Настройка сервера на Raspberry Pi</a></h4>
                            <p>Подробное руководство по настройке сервера на Raspberry Pi с использованием Nginx.</p>
                        </div>
                    </div>
                </div>

                <!-- Карточка мануала  -->
                <div class="col-lg-4 col-md-6">
		    <a href="lessonBATTLEBOTS.php" class="manual-card-link">
                    <div class="manual-card">
                        <div class="manual-thumb">
                            <img src="img/manuals/battlebots.png" alt="Расчет параметров оружия боевого робота">
                        </div>
                        <div class="manual-text">
                            <h4><a href="lessonBATTLEBOTS.php">Расчет параметров оружия боевого робота</a></h4>
                            <p>Онлайн калькуляторы для рассчета всех популярных типов орудий на битве роботов: пневмолифта, вертикального и горизонтального спиннеров</p>
                        </div>
                    </div>
                </div>

                <!-- Карточка мануала  -->
                <div class="col-lg-4 col-md-6">
                    <div class="manual-card">
                        <div class="manual-thumb">
                            <img src="img/manuals/robots.png" alt="Основы теории управления роботами">
                        </div>
                        <div class="manual-text">
                            <h4><a href="#">Основа теории управления роботами (скоро)</a></h4>
                            <p>Введение в ТАУ, классификация колесных платформ на примере кит-наборов AUXILIUM.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Список мануалов End -->



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

</body>

</html>