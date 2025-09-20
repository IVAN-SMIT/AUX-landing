<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="AUXILIUM">
    <meta name="keywords" content="AUXILIUM, IVAN SMIT, I1, html, exoskeleton, экзоскелет">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AUXILIUM | Роботы</title>

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

     <link rel="stylesheet" href="libs/swiper/swiper-bundle.min.css">
     <link rel="stylesheet" href="css/robots.css">
    
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?php 
    $currentPage = 'robots'; 
    include_once 'header.php';
    ?>


<section class="showcase">

<h2 class="showcase__header">ROBOT <span>KIT</span></h2>

<div class="showcase__content-wrapper">
    <div class="showcase__content">

        <div class="showcase-carousel">

            <div class="swiper-wrapper">

                <div class="swiper-slide showcase-carousel__item">
                    <div class="showcase-carousel__image-wrapper">
                        <div class="showcase-carousel__image-left">
                            <div class="showcase-carousel__image" style="background-image: url(img/robots/1.png);"></div>
                        </div>
                        <div class="showcase-carousel__image-right">
                            <div class="showcase-carousel__image" style="background-image: url(img/robots/1.png);"></div>
                        </div>
                    </div>
                    <p>Дифференциальный привод</p>
                </div>

                <div class="swiper-slide showcase-carousel__item">
                    <div class="showcase-carousel__image-wrapper">
                        <div class="showcase-carousel__image-left">
                            <div class="showcase-carousel__image" style="background-image: url(img/robots/2.png);"></div>
                        </div>
                        <div class="showcase-carousel__image-right">
                            <div class="showcase-carousel__image" style="background-image: url(img/robots/2.png);"></div>
                        </div>
                    </div>
                    <p>Балансир</p>
                </div>

                <div class="swiper-slide showcase-carousel__item">
                    <div class="showcase-carousel__image-wrapper">
                        <div class="showcase-carousel__image-left">
                            <div class="showcase-carousel__image" style="background-image: url(img/robots/3.webp);"></div>
                        </div>
                        <div class="showcase-carousel__image-right">
                            <div class="showcase-carousel__image" style="background-image: url(img/robots/3.webp);"></div>
                        </div>
                    </div>
                    <p>Омни платформа</p>
                </div>


            </div>

        </div>

        <div class="showcase-navigation">
            <div class="showcase-navigation__prev"></div>
            <div class="showcase-navigation__next"></div>
        </div>

    </div>
</div>

</section>


   <!-- Blog Details Hero  Section Begin -->
    <section class="blog-hero-section set-bg spad" data-setbg="#">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center">
                    <div class="bh-text">
                        <h2>СКОРО В ПРОДАЖЕ.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero Section End -->


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

<script src="libs/swiper/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {

const showSlider = new Swiper('.showcase-carousel', {
    loop: true,
    slidesPerView: 3,
    speed: 1800,
    centeredSlides: true,
    navigation: {
        nextEl: '.showcase-navigation__next',
        prevEl: '.showcase-navigation__prev'
    }
})

})
</script>

</body>

</html>