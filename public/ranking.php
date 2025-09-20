<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="AUXILIUM">
    <meta name="keywords" content="AUXILIUM, IVAN SMIT, I1, html, exoskeleton, экзоскелет">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AUXILIUM | Битва роботов</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Расчет параметров оружия для боевого робота</title>  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/modelD.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400&display=swap" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/monokai-sublime.min.css">
    <link rel="stylesheet" href="css/graph-styles.css" >

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>
<?php include 'yandexM.php'; ?>
</head>
<body>

<!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php include_once 'header.php';?>

<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-option">
                        <a href="index.php">Главная</a>
                        <span>Рейтинг команд битвы роботов</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="breadcrumb-text">
                        <h3>Рейтинг команд битвы роботов</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


    <section id="rankingSection">
        <div class="container">
            <div class="row">
                <table id="rankingTable">
                    <thead>
                        <tr>
                            <th>Место</th> <!-- Не сортируется -->
                            <th>Страна</th> <!-- Не сортируется -->
                            <th>Команда</th> <!-- Не сортируется -->
                            <th>Робот</th> <!-- Не сортируется -->
                            <th onclick="sortTable(4)">Победы</th> <!-- Индекс 4 -->
                            <th onclick="sortTable(5)">Поражения по решению судей</th> <!-- Индекс 5 -->
                            <th onclick="sortTable(6)">Поражения ноккаутом</th> <!-- Индекс 6 -->
                            <th onclick="sortTable(7)">Количество боев</th> <!-- Индекс 7 -->
                            <th onclick="sortTable(8)">Набранные очки</th> <!-- Индекс 8 -->
                            <th onclick="sortTable(9)">Коэффициент побед</th> <!-- Индекс 9 -->
                            <th onclick="sortTable(10)">Коэффициент очков за бой</th> <!-- Индекс 10 -->
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <!-- Данные будут вставлены сюда -->
                    </tbody>
                </table>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src= "js/spinerPlot.js"></script>
    <script src="js/pneumatic.js"></script>
    <script src="js/batlebotsRating.js"></script>

</body>
</html>


