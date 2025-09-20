<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Страница не найдена - AUXILIUM">
    <meta name="keywords" content="AUXILIUM, 404, страница не найдена, экзоскелет">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 | AUXILIUM</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/mainpage.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400&display=swap" type="text/css">
    <?php include 'yandexM.php'; ?>
    <style>
        .error-section {
            background-color: #191919;
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            padding: 100px 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .error-content {
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .error-code {
            font-size: 120px;
            font-weight: 700;
            color: #baa98f;
            margin-bottom: 20px;
            font-family: 'Libre Franklin', sans-serif;
            line-height: 1;
        }
        
        .error-title {
            font-size: 45px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 20px;
            font-family: 'Libre Franklin', sans-serif;
            line-height: 1.3;
        }
        
        .error-description {
            font-size: 18px;
            color: #b3b3b3;
            margin-bottom: 40px;
            line-height: 1.6;
        }
        
        .error-btn {
            display: inline-block;
            background-color: #baa98f;
            color: #000000;
            padding: 12px 30px;
            border-radius: 4px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 16px;
            transition: all 0.3s ease;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }
        
        .error-btn:hover {
            background-color: #a9977d;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        @media (max-width: 768px) {
            .error-code {
                font-size: 80px;
            }
            
            .error-title {
                font-size: 32px;
            }
            
            .error-description {
                font-size: 16px;
            }
        }
        
        @media (max-width: 576px) {
            .error-section {
                padding: 60px 0;
            }
            
            .error-code {
                font-size: 60px;
            }
            
            .error-title {
                font-size: 28px;
            }
            
            .error-description {
                font-size: 14px;
            }
            
            .error-btn {
                font-size: 14px;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>

<?php include_once 'header.php';?>
    
    <!-- Error Section Begin -->
    <section class="error-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-content">
                        <div class="error-code">404</div>
                        <h1 class="error-title">Страница не найдена</h1>
                        <p class="error-description">
                            Ты чёт видимо какую-то битую ссылку ввёл, либо админы ее уже давно удалили. Лучше перейди на главную
                        </p>
                        <a href="./" class="error-btn">Вернуться на главную</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Error Section End -->
    
    
    
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/exoCounter.js"></script>
</body>
</html>