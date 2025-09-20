<!-- Модальное окно -->

<!-- Контейнер для уведомления -->
<div id="notification" class="notification hidden">
    Заказ сделан успешно!
</div>
    <!-- Контейнер для уведомления об ошибке -->
<div id="errorNotification" class="notification error hidden">
    Введён некорректный email!
</div>
<!-- Контейнер для нейтрального уведомления -->
<div id="neutralNotification" class="notification neutral hidden">
    Пожалуйста, заполните все обязательные поля!
</div>
<div id="orderModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <section class="make-order">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="bd-text">
                            <div class="blog-author">   
                                <img src="img/BattleBots/AUX_BR.webp" alt="">
                                <h5>ООО 'AUXILIUM'</h5> 
                                <p>Дальнейшее оформление заказа производится нашами сотрудниками через ваш email. Убедитесь, что вы указали ее корректно.</p>  
                                <p>Цена может быть скорректирована в итоговом счёте</p>
                                <div class="bt-social">
                                    <a href="https://www.youtube.com/@IVANSMIT"><i class="fab fa-youtube"></i></a>
                                    <a href="https://t.me/ivansmittt"><i class="fab fa-telegram"></i></a>
                                    <a href="https://vk.com/auxiliumexo"><i class="fab fa-vk"></i></a>
                                </div>
                            </div>
                            <div class="leave-comment">
                                <h5>Ваш заказ:</h5>
                                <h2 id = "version"> AUXILIUM Model who?</h2>
                                <div id="configuration-details" class="configuration-details">
                                    <pre id="selected-configuration">Конфигурация не выбрана</pre>
                                </div>
                                <h5>Итоговая стоимость:</h5>
                                <h3 id="priceModal">Хм, какая-то ошибка при расчёте цены... Напишите на auxexo@bk.ru</h3>
                                <form action="#" class="comment-form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="text" id="fio" placeholder="Ваше ФИО"> <!-- Без лишних пробелов -->
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" id="email" placeholder="Ваш Email"> <!-- Без лишних пробелов -->
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" id="mobile" placeholder="Номер телефона"> <!-- Без лишних пробелов -->
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea id="comment" placeholder="Комментарий к заказу (необязательно)" ></textarea>
                                            <button type="submit" class="site-btn">Запросить счёт</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>