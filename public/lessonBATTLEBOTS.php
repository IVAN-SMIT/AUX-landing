<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="description" content="AUXILIUM">
    <meta name="keywords" content="AUXILIUM, IVAN SMIT, I1, html, exoskeleton, экзоскелет, калькулятор, онлайн, маховик, пневмолифт, расчет пневмолифта, расчёт, расчёт редуктора, время разгона, передаточное число">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AUXILIUM | Уроки</title>

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
                <div class="col-lg-6 col-md-6">
                    <div class="breadcrumb-option">
                        <a href="index.php">Главная</a>
                        <a href="lessons.php"><span>Уроки</span></a>
                        <span>Расчет параметров оружия боевого робота</span>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <div class="modelD-breadcrumb-text">
                        <h3>Расчет параметров оружия боевого робота</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->


<section class="graph-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                    <div class="bd-text">
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <h4>Расчет передаточного числа редуктора оружия боевого робота</h4>
                                <p>Онлайн калькулятор, который позволяет определить необходимое передаточное число шестерен редуктора маховика оружия, при заданном желаемом времени разгона, моменте инерции маховика и параметров электродвигателя.</p>
                            </div>
                            <div class="bm-item">
                                <p>Мощность и максимальную скорость электродвигателя можно получить в каталоге производителя / документации / в описании товара на маркетплейсах / гугле.
                                    Момент инерции маховика может вычислить любой САПР, в котором вы проектируете рорбота. Для примера по умолчанию выбраны параметры двигателя hobbywing ezrun: мощность - 15 000 Вт,
                                    максимальное число оборотов в минуту - 27 000 </p>
                                Ниже показан пример вычисления момента инерции маховика в САПР КОМПАС-3Д
                            </div>
                            <div class="bd-pic">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="img/manuals/kompas1.png" alt="">
                                </div>
                                <div class="col-md-6">
                                    <img src="img/manuals/kompas2.png" alt="">
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- Форма ввода (левая колонка) -->
            <div class="col-md-4">
                <div class="input-form">
                    <h4>Введите параметры:</h4>
                    <form id="inputForm">
                        <div class="form-group">
                            <label for="J">Момент инерции маховика (кг*м²):</label>
                            <input type="number" id="J" name="J" value="0.439631" step="0.000001" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="n_m">Максимальная скорость мотора (об/мин):</label>
                            <input type="number" id="n_m" name="n_m" value="27000" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="P">Мощность мотора (Вт):</label>
                            <input type="number" id="P" name="P" value="15000" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="t">Время разгона (с):</label>
                            <input type="number" id="t" name="t" value="13" class="form-control">
                        </div>
                        <button type="button" onclick="plotGraph()" class="btn btn-primary">Построить график</button>
                    </form>
                </div>

            </div>

            <!-- График (правая колонка) -->
            <div class="col-md-8">
                <div class="chart-container">
                    <canvas id="myChart" width="400" height="200"></canvas>
                </div>
                <!-- Блок для вывода расчетных данных -->
                <div class="calculation-results">
                    <h4>Результаты расчетов:</h4>
                    <div id="results">
                        <!-- Сюда будут выводиться данные -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Секция для расчета пневмоцилиндра -->
<section class="graph-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                    <div class="bd-text">
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <h4>Расчет подъемной силы и скорости срабатывания пневмоцилиндра подъемного механизма оружия боевого робота</h4>
                                <p>Онлайн калькулятор позволяет определить подъемную силу штока пневмоцилиндра на основании его параметров, а также параметров пневмосистемы робота.</p>
                            </div>
                            <div class="bm-item">
                                <p>Параметры пневмоцилиндра (диаметр и ход) можно получить в каталоге производителя, давление воздуха и его расход - это параметры вашего робота, которые зависят от многих факторов, определяемых разработчиком.
                                    Это как и диаметр пневматических шлангов, так и объем ресивера.</p>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Форма ввода (левая колонка) -->
            <div class="col-md-4">
                <div class="input-form">
                    <h4>Введите параметры:</h4>
                    <form id="pneumaticForm">
                        <div class="form-group">
                            <label for="diameter">Диаметр цилиндра (мм):</label>
                            <input type="number" id="diameter" name="diameter" value="32" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="stroke">Ход цилиндра (мм):</label>
                            <input type="number" id="stroke" name="stroke" value="150" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="pressure">Давление воздуха (бар):</label>
                            <input type="number" id="pressure" name="pressure" value="10" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="flow">Расход воздуха (л/мин):</label>
                            <input type="number" id="flow" name="flow" value="2" class="form-control" required>
                        </div>
                        <button type="button" onclick="calculatePneumatic()" class="btn btn-primary">Рассчитать</button>
                    </form>
                </div>


            </div>

            <!-- График (правая колонка) -->
            <div class="col-md-8">
                <div class="chart-container">
                    <canvas id="pneumaticChart" width="400" height="200"></canvas>
                </div>

                <!-- Блок для вывода расчетных данных -->
                <div class="calculation-results">
                    <h4>Результаты расчетов:</h4>
                    <div id="pneumaticResults">
                        <!-- Сюда будут выводиться данные -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<div class="blog-section latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <a href="ranking.php">Рейтинг команд 2023-2024</a>
                    </div>
                </div>
            </div>
        </div>
</div>


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

</body>
</html>


