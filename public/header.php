<!-- Header Section Begin -->
<?php
// По умолчанию активной страницы нет
$currentPage = isset($currentPage) ? $currentPage : '';
?>

<header class="header-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2">
                <div class="logo"id="logo-container">
                    <a href="index.php" id="logo">AUXILIUM</a>
                </div>
            </div>
            <div class="col-lg-10 col-md-10">
                <div class="main-menu mobile-menu">
                    <ul>
                        <li <?= ($currentPage == 'home') ? 'class="active"' : '' ?>>
                            <a href="index.php">Главная</a>
                        </li>
                        <li <?= ($currentPage == 'about') ? 'class="active"' : '' ?>>
                            <a href="about-us.php">О нас</a>
                        </li>
                        <li <?= ($currentPage == 'products') ? 'class="active"' : '' ?>>
                            <a href="products.php">Продукция</a>
                        </li>
                        <li <?= ($currentPage == 'lessons') ? 'class="active"' : '' ?>>
                            <a href="lessons.php">Уроки</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
<!-- Header End -->