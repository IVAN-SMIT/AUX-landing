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
    <title>AUXILIUM | Уроки</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Libre+Franklin:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Руководство по настройке сервера на Raspberry Pi</title>
    <style>
        .manual-container {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #191919;
            color: #ffffff;
        }
        .manual-container h1,
        .manual-container h2,
        .manual-container h3,
        .manual-container h4 {
            color: #ffffff;
        }
        .manual-container h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .manual-container h2 {
            margin-top: 40px;
            border-bottom: 2px solid #444;
            padding-bottom: 10px;
        }
        .manual-container h3 {
            margin-top: 30px;
        }
        .manual-container pre {
            background-color: #2d2d2d;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
        }
        .manual-container code {
            font-family: "Courier New", monospace;
            background-color: #2d2d2d;
            padding: 2px 5px;
            border-radius: 3px;
        }
        .manual-container .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #222;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        .manual-container .note {
            background-color: #333;
            padding: 10px;
            border-left: 4px solid #2196F3;
            margin: 20px 0;
            border-radius: 4px;
            color: #ffffff;
        }
        .manual-container a {
            color: #2196F3;
            text-decoration: none;
        }
        .manual-container a:hover {
            text-decoration: underline;
        }
    </style>
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
                        <span>Настройка сервера для сайта</span>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-right">
                    <div class="modelD-breadcrumb-text">
                        <h3>Настройка сервера для сайта</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- lesson site section begin -->
    <section class="lesson-site-section">
        <div class="manual-container">
            <div class="container">
                <h3>Руководство по настройке сервера на Raspberry Pi 3 Model B</h3>

                <h4>1. Подготовка Raspberry Pi</h4>
                <a>1.1 Установка ОС</a>
                <p>Скачайте <strong>Raspberry Pi Imager</strong> с <a href="https://www.raspberrypi.com/software/" target="_blank">официального сайта</a>.</p>
                <p>Выберите ОС: <strong>Raspberry Pi OS Lite</strong> (без графического интерфейса для экономии ресурсов).</p>
                <p>Запишите образ на microSD-карту, вставьте её в Raspberry Pi, подключите питание и Ethernet (или Wi-Fi).</p>

                <a>1.2 Настройка сети и SSH</a>
                <p>При первом запуске выполните базовую настройку через <code>sudo raspi-config</code>:</p>
                <pre><code class="language-bash">sudo raspi-config</code></pre>
                <p>Измените пароль пользователя <code>pi</code> (в разделе <strong>System Options</strong> → <strong>Password</strong>).</p>
                <p>Настройте Wi-Fi (если используете) в <strong>System Options</strong> → <strong>Wireless LAN</strong>.</p>
                <p>Включите SSH: <strong>Interfacing Options</strong> → <strong>SSH</strong> → <strong>Yes</strong>.</p>

                <p>Обновите систему:</p>
                <pre><code class="language-bash">sudo apt update && sudo apt upgrade -y</code></pre>

                <h4>2. Установка Nginx</h4>
                <p>Установите веб-сервер:</p>
                <pre><code class="language-bash">sudo apt install nginx -y</code></pre>
                <p>Проверьте статус службы:</p>
                <pre><code class="language-bash">sudo systemctl status nginx</code></pre>
                <p>Откройте порты 80 и 443 в брандмауэре (если включен <code>ufw</code>):</p>
                <pre><code class="language-bash">
sudo ufw allow 80/tcp
sudo ufw allow 443/tcp
sudo ufw reload
                </code></pre>
                <p>Проверьте работу Nginx, открыв браузер и перейдя по IP вашего Raspberry (найти IP можно через <code>hostname -I</code>).</p>

                <h4>3. Настройка статического сайта</h4>
                <a>3.1 Создание директории для сайта</a>
                <p>Создайте папку для файлов сайта:</p>
                <pre><code class="language-bash">
sudo mkdir -p /var/www/mysite/public_html</code></pre>
                <p>Назначьте права:</p>
                <pre><code class="language-bash">
sudo chown -R www-data:www-data /var/www/mysite
sudo chmod -R 755 /var/www/mysite</code></pre>
                <a>3.2 Конфигурация Nginx</a>
                <p>Создайте файл конфигурации:</p>
                <pre><code class="language-bash">sudo nano /etc/nginx/sites-available/mysite</code></pre>
                <p>Вставьте конфиг (замените <code>your_domain.com</code> на свой домен):</p>
                <pre><code class="language-nginx">
server {
    listen 80;
    server_name your_domain.com www.your_domain.com;

    root /var/www/mysite/public_html;
    index index.html;

    location / {
    try_files $uri $uri/ =404;
    }
}
                </code></pre>
                <p>Активируйте конфиг:</p>
                <pre><code class="language-bash">sudo ln -s /etc/nginx/sites-available/mysite /etc/nginx/sites-enabled/</code></pre>
                <p>Проверьте синтаксис и перезапустите Nginx:</p>
                <pre><code class="language-bash">
sudo nginx -t
sudo systemctl reload nginx
                </code></pre>

                <h4>4. Настройка домена и SSL</h4>
                <a>4.1 Регистрация домена</a>
                <p>Купите домен на любом регистраторе (например, GoDaddy, Namecheap). Настройте <strong>A-запись</strong>, указав IP вашего Raspberry Pi.</p>

                <a>4.2 Установка Let's Encrypt (Certbot)</a>
                <p>Установите Certbot:</p>
                <pre><code class="language-bash">sudo apt install certbot python3-certbot-nginx -y</code></pre>
                <p>Получите сертификат:</p>
                <pre><code class="language-bash">sudo certbot --nginx -d your_domain.com -d www.your_domain.com</code></pre>
                <p>Certbot автоматически обновит конфиг Nginx для HTTPS.</p>

                <a>4.3 Автоматическое продление сертификата</a>
                <p>Добавьте задание в cron:</p>
                <pre><code class="language-bash">sudo crontab -e</code></pre>
                <p>Добавьте строку:</p>
                <pre><code class="language-bash">0 12 * * * /usr/bin/certbot renew --quiet</code></pre>

                <h4>5. Оптимизация Nginx для статического контента</h4>
                <p>Добавьте в конфиг сайта (<code>/etc/nginx/sites-available/mysite</code>) после <code>index index.html;</code>:</p>
                <pre><code class="language-nginx">
gzip on;
gzip_types text/plain text/css application/json application/javascript text/xml application/xml application/xml+rss text/javascript;

location ~* \.(jpg|jpeg|png|gif|ico|css|js|woff2|glb|gltf)$ {
    expires 365d;
    add_header Cache-Control "public, no-transform";
}
                </code></pre>
                <p>Проверьте и перезагрузите Nginx:</p>
                <pre><code class="language-bash">sudo nginx -t && sudo systemctl reload nginx</code></pre>

                <h4>6. Размещение файлов сайта</h4>
                <p>Загрузите файлы (HTML, CSS, изображения, 3D-модели) в <code>/var/www/mysite/public_html</code>.</p>
                <p>Используйте <code>scp</code> для копирования с локального ПК:</p>
                <pre><code class="language-bash">scp -r /путь/к/файлам pi@ваш_IP:/var/www/mysite/public_html</code></pre>

                <h4>7. Дополнительные рекомендации</h4>
                    <p><strong>Мониторинг ресурсов</strong>: Установите <code>htop</code> для отслеживания нагрузки:</p>
                        <pre><code class="language-bash">sudo apt install htop</code></pre>
                    <p><strong>Резервное копирование</strong>: Настройте регулярный бэкап папки <code>/var/www/mysite</code>.</p>
                    <p>Отключите ненужные службы через <code>sudo raspi-config</code>.</p>
                    <p>Установите <code>fail2ban</code> для защиты от атак:</p>
                        <pre><code class="language-bash">sudo apt install fail2ban</code></pre>
                <div class="note">
                    <p><strong>Готово!</strong> Ваш сайт доступен по адресу <code>https://your_domain.com</code>. Если возникнут ошибки, проверьте логи Nginx:</p>
                    <pre><code class="language-bash">sudo tail -f /var/log/nginx/error.log</code></pre>
                </div>
            </div>
        </div>
    </section>
    <!-- lesson site section end -->


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