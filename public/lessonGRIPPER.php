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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/monokai-sublime.min.css">

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
                        <span>Разработка захвата экзоскелета</span>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <div class="modelD-breadcrumb-text">
                        <h3>Разработка захвата экзоскелета</h3>
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
                        <img src="img/gripper/6.webp" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="as-text ap-text">
                        <div class="section-title">
                            <h2>Разработка захвата экзоскелета</h2>
                        </div>
                        <p class="f-para">Разрабатывая экзоскелет<a href = "https://www.youtube.com/watch?v=HQ4dPM9HEoY&list=PLWpyTlDpWB7VcbTSHuB5RZk1U8fl26LKq"> AUXILIUM model B</a>, для него нужно было разработать и захват. Но процесс разработки затянулся...
                            Одной из главных проблем такого долгого процесса разработки захвата было желание усидеть сразу на всех стульях. 
                            Я поставил перед захватом задачи сохранения мелкой моторики и одновременно удержания тяжёлых грузов. При этом как можно меньшим количеством деталей, поскольку чем меньше - тем надёжнее.
                        </p>
                        <p class="s-para">В ходе перебора разных типов кострукции был создан интересный захват с уникальной кинематикой, который 
                            по итогам был отбракован в пользу более простой клешни. Однако конструкция вышла интересная, поэтому решил поделиться его устройством. 
                             </p>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="bd-text">                              
                        <div class="bd-more-text">
                        <div class="tag-share"> </div> 
                            <div class="bm-item">
                            <h4>Почему это важно?</h4>
                            </div>
                        </div>
                    </div>        
                </div>
                
                <div class="col-lg-12">
                    <div class="bd-text">                             
                        <div class="bd-more-text">
                        
                            <div class="bm-item">
                                <p> Представьте себе: вам нужно что-то поднять или удержать. Вместо того чтобы 
                                    напрягаться самому, вы просто надеваете экзоскелет, а он уже делает всю 
                                    работу за вас. Но есть одна проблема — как сделать так, чтобы эта 
                                    механическая рука не превратила хрупкий предмет в кучу мусора? Именно 
                                    эту задачу я и попытался решить.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="bd-text">                              
                        <div class="bd-more-text">
                            <div class="bm-item">
                            <h4>Концепция и задачи</h4>
                            </div>
                        </div>
                    </div>        
                </div>


                <div class="col-lg-12">
                    <div class="bd-text">                              
                        <div class="bd-more-text">
                            <div class="bm-item">    
                                <p>Итак, первым делом нужно было определиться с задачами. Я решил, что захват должен:</p>
                                <ul>
                                    <li><p>Усиливать силу хвата оператора.</p></li>
                                    <li><p>Быть эргономичным, чтобы человек чувствовал себя комфортно.</p></li>
                                    <li><p>Иметь возможность удерживать объекты разной формы и размера.</p></li>
                                    <li><p>Сохранять мелкую моторику пальцев, чтобы можно было открывать двери, нажимать на 
                                        кнопки и тому подобное</p></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="bd-text">                              
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <h4>Кинематическая схема</h4>
                            </div>
                        </div>
                    </div>        
                </div>


                <div class="col-lg-6">
                    <div class="bd-text">                              
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <p>Следующим шагом был синтез кинематической схемы. Если коротко, то это условный чертеж, который 
                                    показывает, как все части механизма двигаются. В данном случае я использую только набор шарниров вращения (A, B, C, D, E, F, G, H) 
                                    и поступательное перемещение пневмоцилиндра (привод Р). 
                                    Все это вместе позволяет перемещаться по траектории, наиболее приближенной к траектории сгиба пальцев человеческой руки. 
                                    При этом, с минимальным количеством деталей!</p>
                            </div>
                        </div>
                    </div>        
                </div>

                <div class="col-lg-6">
                    <div class="as-pic">
                        <img src="img/gripper/1.webp" alt="">
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="bd-text">                              
                        <div class="bd-more-text">
                        <div class="tag-share"> </div> 
                            <div class="bm-item">
                                <h4>Задаемся размерами</h4>
                            </div>
                        </div>
                    </div>        
                </div>


                <div class="col-lg-6">
                    <div class="bd-text">                              
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <p>Размеры звеньев были рассчитаны на основе средних антропометрических данных человека:</p>
                                <ul>
                                    <li><p>Длина предплечья: 260-280 мм.</p></li>
                                    <li><p>Ширина ладони: 80-100 мм.</p></li>
                                    <li><p>Длина пальцев: 100-120 мм. </p></li>
                                </ul>
                                <p>Эти параметры помогли определить геометрию звеньев и расстояние между шарнирами. 
                                    Использование антропометрических данных гарантирует биомеханическую совместимость устройства с руками оператора.</p>
                           
                                 </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="as-pic">
                        <img src="img/gripper/2.webp" alt="">
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="bd-text">                              
                        <div class="bd-more-text">
                            <div class="bm-item">
                            
                                <p>Отталкиваясь от габаритов пневматического привода и его хода, 
                                    определяются размеры звеньев рычагов механизма CH, BC, AI.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="bd-text">                              
                        <div class="bd-more-text">
                            <div class="bm-item">
                            <h4>3д моделирование</h4>
                            </div>
                        </div>
                    </div>        
                </div>

                <div class="col-lg-12">
                    <div class="bd-text">                              
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <p>Здесь начинается самое интересное. Взяв за основу кинематическую схему и 
                                    расчетные размеры, я создал 3D-модель захвата в программе Fusion 360. Эта модель включала:</p>
                                <ul>
                                    <li><p>Полный набор компонентов (звенья, шарниры, крепления).</p></li>
                                    <li><p>Крепежные элементы.</p></li>
                                    <li><p>Нейлон PA6 как основной конструкционный материал.</p></li>
                                </ul>
                                <p>Детали получились сложной формы, поэтому на этапе проектирования я отталкивался от того, 
                                    что они будут напечатаны из нейлона на 3д принтере (поэтому такая толщина). Но если у вас нет 3д принтера, способного печатать инженерными филаментами,
                                то в целом подойдет и популярный ABS или PLA, но прочность будет ниже.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="as-pic">
                        <img src="img/gripper/4.webp" alt="" style="width: 50%; max-width: 500px; height: auto;">
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="bd-text">                              
                        <div class="bd-more-text">
                        <div class="tag-share"> </div> 
                            <div class="bm-item">
                                
                                <h4>Схема сборки</h4>
                            </div>
                        </div>
                    </div>        
                </div>

                <div class="col-lg-6">
                    <div class="bd-text">                              
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <p>Схема сборки устройства включает следующие детали:</p>
                                <ul>
                                    <li>    <p>1. Ложе для пальцев.</p> </li>
                                    <li>    <p>2. Тяги 2 пина.</p> </li>
                                    <li>    <p>3. Тяги 3 пина.</p> </li>
                                    <li>    <p>4. Болт М6 </p></li>
                                    <li>    <p>5. Гайка М6.</p> </li>
                                    <li>    <p>6 .Основа ладони.</p> </li>
                                    <li>    <p>7. Тяга для привода на 2 пина.</p> </li>
                                    <li>   <p>8. Двухосевая основа запястья. </p></li>
                                    <li>   <p>9. Радиусная направляющая привода. </p></li>
                                    <li>   <p>10. Шарнирная основа каркаса предплечья. </p></li>
                                    <li>   <p>11. Соединение тензодатчиков. </p></li>
                                    <li>    <p>12. Тензодатчик.</p> </li>
                                    <li>   <p>13 Точка крепления к локтевому каркасу экзоскелета</p> </li>
                                </ul>
                               
                                
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6">
                    <div class="as-pic">
                        <img src="img/gripper/5.webp" alt="">
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="bd-text">                              
                        <div class="bd-more-text">
                        <div class="tag-share"> </div> 
                            <div class="bm-item">
                                  <h4>Подвижность</h4>
                            </div>
                        </div>
                    </div>        
                </div>

                <div class="col-lg-6">
                    <div class="as-pic">
                        <img src="img/gripper/8.webp" alt="">
                    </div>
		<div class="bd-text"> <div class="tag-share"> </div></div>
                </div>


                <div class="col-lg-6">
                    <div class="as-pic">
                        <img src="img/gripper/9.webp" alt="">
                    </div>
		<div class="bd-text"> <div class="tag-share"> </div></div>
                </div>

                <div class="col-lg-12">
                    <div class="bd-text"> 
                    <div class="tag-share"> </div>                              
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <p>«Тангаж» в запястном суставе согласован с движением пневмоцилиндра. Это решается установкой шарнирного 
                                    наконечника, что дает отклонения в пределах 10-15 градусов. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-12">
                    <div class="bd-text">                              
                        <div class="bd-more-text">
                            <div class="bm-item">
                                  <h4>Итоги</h4>
                            </div>
                        </div>
                    </div>        
                </div>

                <div class="col-lg-12">
                    <div class="bd-text">                              
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <p class="s-para">Разработанный захват для экзоскелета обладает высокой эргономичностью и функциональностью, 
                                    ну а скачать 3д модель можно <a href = "https://cloud.mail.ru/public/xbPT/CcV1BeqGC"> здесь</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="as-pic">
                        <img src="img/gripper/7.webp" alt="">
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- About Us Section End -->






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



</body>
</html>


