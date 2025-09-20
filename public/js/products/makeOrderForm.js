// Получаем элементы DOM
const modal = document.getElementById("orderModal");
const btn = document.querySelector(".buy-button"); // Кнопка "Сделать заказ"
const span = document.getElementsByClassName("close")[0]; // Крестик для закрытия
const configNotification = document.getElementById("configNotification"); // Уведомление о выборе конфигурации


// При клике на кнопку "Сделать заказ" открываем модальное окно
btn.onclick = function () {
    modal.style.display = "block";
};

// Функция для проверки выбранной конфигурации
function isConfigurationSelected() {
    return Array.from(radioButtons).some(button => button.checked);
}

// При клике на кнопку "Сделать заказ"
btn.onclick = function () {
    if (!isConfigurationSelected()) {
        // Показываем уведомление о необходимости выбрать конфигурацию
        configNotification.classList.remove('hidden');
        configNotification.style.opacity = 1;

        // Через 3 секунды скрываем уведомление
        setTimeout(function () {
            configNotification.classList.add('hidden');
            configNotification.style.opacity = 0;
        }, 3000);

        return; // Прекращаем выполнение
    }

    // Если конфигурация выбрана, открываем модальное окно
    modal.style.display = "block";
};

// При клике на крестик закрываем модальное окно
span.onclick = function () {
    modal.style.display = "none";
};

// При клике вне модального окна также закрываем его
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};









