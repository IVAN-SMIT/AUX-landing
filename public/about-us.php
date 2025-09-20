<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="AUXILIUM">
    <meta name="keywords" content="AUXILIUM, IVAN SMIT, I1, html, exoskeleton, экзоскелет">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AUXILIUM | О нас</title>

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
    $currentPage = 'about'; 
    include_once 'header.php';
    ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="breadcrumb-option">
                        <a href="index.php">Главная</a>
                        <span>О нас</span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <div class="breadcrumb-text">
                        <h3>О нас</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About Us Section Begin -->
    <section class="about-us-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="as-pic">
                        <img src="img/RenderExo/photo_2022-11-06_12-35-22.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="as-text ap-text">
                        <div class="section-title">
                            <span>О нас</span>
                            <h2>Кто мы такие?</h2>
                        </div>
                        <p class="f-para">
                            Мы - команда AUXILIUM. Мы занимаемся прикладными исследованиями и разработкой экзоскелетов.
                        </p>
                        <p class="s-para">История нашей команды началась в 2017 году, с публикации видео на ютуб про самодельный экзоскелет на канале <a href="https://www.youtube.com/@IVANSMIT" target="_blank">IVAN SMIT.</a>
                            Гайды о том, как из подручных средств собирать силовые экзоскелеты, быстро набирали просмотры, и уже к 2021 году ряд единомышленников объединился вокруг этого канала, образовав команду. За все время удалось создать целый модельный ряд экзоскелетов разной конфигурации.
                             </p>
                        <div class="about-counter">
                            <div class="ac-item">
                                <h2 class="ab-count">7</h2>
                                <p>лет опыта</p>
                                <p>в разработке</p>
                            </div>
                            <div class="ac-item">
                                <h2 class="ab-count">25</h2>
                                <p>созданных моделей</p>
                                <p>экзоскелетов</p>
                            </div>
                            <div class="ac-item">
                                <h2 class="ab-count">40849</h2>
                                <p>человек</p>
                                <p>общей аудитории</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Member Section Begin -->
    <section class="member-section spad ap-member">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Модельный ряд экзоскелетов</span>
                        <h2>AUXILIUM</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="img/RenderExo/A.webp">
                        <div class="mi-text">
                            <p>Полноростовой активный пневматический экзоскелет с аналоговой системой управления.Грузоподъемность 80 кг.
                                Проект был создан в университете ИТМО.</p>
                            <div class="mt-title">
                                <h4>Model A</h4>
                                <span>AUXILIUM</span>
                            </div>
                            <div class="mt-social">
                                <a href="https://youtu.be/zp6gC8NK-qM?si=nEV_P97jjJX9R0I1"><i class="fab fa-youtube"></i></a>
                                <a href="https://t.me/s/ivansmittt?q=%23model_A"><i class="fab fa-telegram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="img/RenderExo/B.webp">
                        <div class="mi-text">
                            <p>Полноростовой активный пневматический экзоскелет с системой быстрого выхода. Грузоподъемность 60 кг.
                                Проект создан при поддержке Фонда содействия инновациям.</p>
                            <div class="mt-title">
                                <h4>Model B</h4>
                                <span>AUXILIUM</span>
                            </div>
                            <div class="mt-social">
                                <a href="https://www.youtube.com/playlist?list=PLWpyTlDpWB7VcbTSHuB5RZk1U8fl26LKq"><i class="fa fa-youtube"></i></a>
                                <a href="https://t.me/s/ivansmittt?q=%23model_B"><i class="fab fa-telegram"></i></a>
                                <a href="https://vkvideo.ru/playlist/-132621744_1"><i class="fab fa-vk"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="img/RenderExo/D.webp">
                        <div class="mi-text">
                            <p>Пассивный бедренный экзоскелет с механизмом созависимости сочленений бедер и генераторной установкой.
                                Проект создан при поддержке Фонда содействия инновациям.</p>
                            <div class="mt-title">
                                <h4>Model D</h4>
                                <span>AUXILIUM</span>
                            </div>
                            <div class="mt-social">
                                <a href="https://t.me/s/ivansmittt?q=%23model_D"><i class="fab fa-telegram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="img/RenderExo/G.webp">
                        <div class="mi-text">
                            <p>Активный экзоскелет с уменьшенными габаритами в сравнении с Model A. Имеет линейку модификаций под различные конкретные задачи.</p>
                            <div class="mt-title">
                                <h4>Model G</h4>
                                <span>AUXILIUM</span>
                            </div>
                            <div class="mt-social">
                                <a href="https://youtu.be/lP-JHHXS3Wo?si=mesBDdpCu2YgzLdx"><i class="fab fa-youtube"></i></a>
                                <a href="https://t.me/s/ivansmittt?q=%23model_G"><i class="fab fa-telegram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="img/RenderExo/M.webp">
                        <div class="mi-text">
                            <p>Пассивный экзоскелет ног и спины. Разработан как коммерческий продукт, и имеет широокий выбор модулей. </p>
                            <div class="mt-title">
                                <h4>Model M</h4>
                                <span>AUXILIUM</span>
                            </div>
                            <div class="mt-social">
                                <a href="https://t.me/s/ivansmittt?q=%23model_M"><i class="fab fa-telegram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="img/RenderExo/R.webp">
                        <div class="mi-text">
                            <p>Активный экзоскелет с электрической силовой установкой и с механизмом созависимости сочленений бедер, коленей и голеностопов. </p>
                            <div class="mt-title">
                                <h4>Model R</h4>
                                <span>AUXILIUM</span>
                            </div>
                            <div class="mt-social">
                                 <a href="https://youtu.be/5P-hnXUqVQE?si=DQTrUrE24Ra2fYlm"><i class="fab fa-youtube"></i></a>
                                <a href="https://t.me/s/ivansmittt?q=%23model_R"><i class="fab fa-telegram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="img/RenderExo/SPC.webp">
                        <div class="mi-text">
                            <p>Пассивный экзоскелет-тренажёр. Предназначен для симуляции работы в скафандре в условиях лунной микрогравитации. </p>
                            <div class="mt-title">
                                <h4>Model SPC</h4>
                                <span>AUXILIUM</span>
                            </div>
                            <div class="mt-social">
                                 <a href="https://t.me/s/ivansmittt?q=%23model_SPC"><i class="fab fa-telegram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="img/RenderExo/ST.webp">
                        <div class="mi-text">
                            <p>Пассивный экзоскелет-игровой реквизит. Разработан для игр в страйкбол/сталкерстрайк.
                                Имеет урезанный функционал экзоскелета в связи со спецификой задач. </p>
                            <div class="mt-title">
                                <h4>Model ST</h4>
                                <span>AUXILIUM</span>
                            </div>
                            <div class="mt-social">
                                <a href="https://youtu.be/fPORD_DhR3Q?si=Lv4KjAb5r3BW-liQ"><i class="fab fa-youtube"></i></a>
                                <a href="https://t.me/s/ivansmittt?q=%23model_ST"><i class="fab fa-telegram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="img/RenderExo/Sl.webp">
                        <div class="mi-text">
                            <p>Пассивный экзоскелет типа "экзостул". Предназначен для облегчения длительных работ в положении полуприседа.</p>
                            <div class="mt-title">
                                <h4>Model Sl</h4>
                                <span>AUXILIUM</span>
                            </div>
                            <div class="mt-social">
                                <a href="https://youtu.be/_1X2p51h45U?si=R-oNV1pdO-Fri_gb"><i class="fab fa-youtube"></i></a>
                                <a href="https://t.me/s/ivansmittt?q=%23model_Sl"><i class="fab fa-telegram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="img/RenderExo/T.webp">
                        <div class="mi-text">
                            <p>Пассивный экзоскелет ног с модульной базой. Проект создан при поддержке университета ИТМО.</p>
                            <div class="mt-title">
                                <h4>Model T</h4>
                                <span>AUXILIUM</span>
                            </div>
                            <div class="mt-social">
                                <a href="https://t.me/s/ivansmittt?q=%23model_T"><i class="fab fa-telegram"></i></a>
                                <a href="https://habr.com/ru/companies/spbifmo/articles/817981/"><i class="fas fa-paperclip"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="member-item set-bg" data-setbg="img/RenderExo/U.webp">
                        <div class="mi-text">
                            <p>Полуактивный экзоскелет с приводами переменной жесткости. Проект создан при поддержке гранта РНФ.</p>
                            <div class="mt-title">
                                <h4>Model U</h4>
                                <span>AUXILIUM</span>
                            </div>
                            <div class="mt-social">
                                <a href="https://t.me/s/ivansmittt?q=%23model_U"><i class="fab fa-telegram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Member Section End -->



    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>AUXILIUM</span>
                        <h2>Наша команда</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="members-item">
                        <img src="img/members/fed.png" alt="Фёдор Петриков">
                        <div class="service-content">
                            <h4 class="member-name">Фёдор Петриков</h4>
                            <p class="member-role">Разводка плат, электроника, программирование</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="members-item">
                        <img src="img/members/i1.png" alt="Иван Смирнов">
                        <div class="service-content">
                            <h4 class="member-name">Иван Смирнов</h4>
                            <p class="member-role">Проектирование, прототипирование, <a href="https://www.youtube.com/@IVANSMIT" target="_blank">пиар-медиа</a></p>
                        </div>    
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="members-item">
                        <img src="img/members/led.png" alt="Алексей Ледюков">
                        <div class="service-content">
                            <h4 class="member-name">Алексей Ледюков</h4>
                            <p class="member-role">Проектирование, прототипирование, 3д печать </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="members-item">
                        <img src="img/members/leo.png" alt="Леонид Нагорный">
                        <div class="service-content">
                            <h4 class="member-name">Леонид Нагорный</h4>
                            <p class="member-role">Менеджер НИОКТР, документы, проектирование</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->


    <!-- Call To Action Section Begin -->
    <section class="callto-section set-bg" data-setbg="img/ctc-bg.webp">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="ctc-text">
                        <h2>Мы делаем невозможное</h2>
                        <p>Наш коллектив способен разрабатывать мехатронные устройства любой сложности в максимально сжатые сроки.
                            Необходимо решить сложную инженерную задачу? Разработать робота?
                            Провести консультацию по технической части? Пишите! Мы поможем!
                        </p>
                        <a href="https://t.me/I1_feedback_bot" class="primary-btn ctc-btn">Работать с нами</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->


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