// Получаем элементы DOM
const form = document.querySelector('.comment-form'); // Форма заказа
const notification = document.getElementById('notification'); // Уведомление об успехе
const errorNotification = document.getElementById('errorNotification'); // Уведомление об ошибке
const neutralNotification = document.getElementById('neutralNotification'); // Нейтральное уведомление

// Исправленные селекторы для полей ввода
const nameInput = document.getElementById('fio'); // Поле имени (по id)
const emailInput = document.getElementById('email'); // Поле email (по id)
const commentInput = document.getElementById('comment'); // Поле комментария (по id)
const mobileInput = document.getElementById('mobile');

// Регулярное выражение для проверки email
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Функция для проверки номера телефона
function isValidPhone(phone) {
    // Удаляем все нецифровые символы
    const cleaned = phone.replace(/\D/g, '');
    // Проверяем длину и начало номера (должно быть 11 цифр, начинается с 7 или 8)
    return cleaned.length === 11 && (cleaned.startsWith('7') || cleaned.startsWith('8'));
}

// Функция для проверки допустимых символов в номере телефона
function isValidPhoneChar(char) {
    // Разрешаем цифры, пробел, скобки, плюс и дефис
    return /[\d()+-\s]/.test(char);
}

// Запрещаем ввод недопустимых символов в поле телефона
mobileInput.addEventListener('keydown', function(e) {
    // Разрешаем служебные клавиши (backspace, delete, стрелки и т.д.)
    if (e.key.length === 1 && !isValidPhoneChar(e.key)) {
        e.preventDefault();
    }
});

// Запрещаем вставку недопустимых символов
mobileInput.addEventListener('paste', function(e) {
    const pasteData = e.clipboardData.getData('text/plain');
    if (!/^[\d()+-\s]*$/.test(pasteData)) {
        e.preventDefault();
    }
});

// Функция для форматирования номера телефона
function formatPhoneNumber(phone) {
    // Удаляем все нецифровые символы, кроме плюса в начале
    let cleaned = (phone.startsWith('+') ? '+' : '') + phone.replace(/\D/g, '');
    
    // Если номер начинается с 8, заменяем на 7
    if (cleaned.startsWith('8')) {
        cleaned = '7' + cleaned.substring(1);
    }
    
    // Если номер не начинается с +7 или 7, добавляем +7
    if (!cleaned.startsWith('+7') && !cleaned.startsWith('7')) {
        cleaned = '+7' + cleaned;
    } else if (cleaned.startsWith('7')) {
        cleaned = '+' + cleaned;
    }
    
    // Ограничиваем длину до 12 символов (+ и 11 цифр)
    cleaned = cleaned.substring(0, 12);
    
    // Форматируем номер: +7 (999) 123-45-67
    const match = cleaned.match(/^(\+\d)(\d{3})(\d{3})(\d{2})(\d{2})$/);
    if (match) {
        return `${match[1]} (${match[2]}) ${match[3]}-${match[4]}-${match[5]}`;
    }
    
    return phone;
}

// Обработчик ввода номера телефона
mobileInput.addEventListener('input', function(e) {
    // Получаем позицию курсора
    const cursorPosition = e.target.selectionStart;
    const initialValue = e.target.value;
    
    // Форматируем номер
    const formatted = formatPhoneNumber(e.target.value);
    
    // Устанавливаем отформатированное значение
    e.target.value = formatted;
    
    // Корректируем позицию курсора
    if (initialValue.startsWith('+7') && formatted.startsWith('+7')) {
        const diff = formatted.length - initialValue.length;
        e.target.setSelectionRange(cursorPosition + diff, cursorPosition + diff);
    }
});

// Обработчик отправки формы
form.addEventListener('submit', function (event) {
    event.preventDefault(); // Предотвращаем стандартную отправку формы

    // Проверяем, что элементы существуют
    if (!nameInput || !emailInput || !commentInput || !mobileInput) {
        console.error("Не найдены элементы ввода!");
        return;
    }

    const name = nameInput.value.trim();
    const email = emailInput.value.trim();
    const comment = commentInput.value.trim(); // Комментарий может быть пустым
    let mobile = mobileInput.value.trim();

    // Проверяем, заполнены ли обязательные поля
    if (!name || !email || !mobile) {
        // Показываем нейтральное уведомление
        neutralNotification.textContent = 'Заполните обязательные поля: ФИО, Email и номер телефона';
        neutralNotification.classList.remove('hidden');
        neutralNotification.style.opacity = 1;

        // Через 3 секунды скрываем нейтральное уведомление
        setTimeout(function () {
            neutralNotification.classList.add('hidden');
            neutralNotification.style.opacity = 0;
        }, 3000);

        return; // Прекращаем выполнение
    }

    // Проверяем email на валидность
    if (!isValidEmail(email)) {
        // Показываем уведомление об ошибке
        errorNotification.textContent = 'Некорректный email!';
        errorNotification.classList.remove('hidden');
        errorNotification.style.opacity = 1;

        // Через 3 секунды скрываем уведомление об ошибке
        setTimeout(function () {
            errorNotification.classList.add('hidden');
            errorNotification.style.opacity = 0;
        }, 3000);

        return; // Прекращаем выполнение
    }

    // Проверяем номер телефона на валидность
    if (!isValidPhone(mobile)) {
        // Показываем уведомление об ошибке
        errorNotification.textContent = 'Некорректный номер телефона!';
        errorNotification.classList.remove('hidden');
        errorNotification.style.opacity = 1;

        // Через 3 секунды скрываем уведомление об ошибке
        setTimeout(function () {
            errorNotification.classList.add('hidden');
            errorNotification.style.opacity = 0;
        }, 3000);

        return; // Прекращаем выполнение
    }

    // Нормализуем номер телефона для отправки на сервер
    mobile = mobile.replace(/\D/g, '');
    if (mobile.startsWith('8')) {
        mobile = '7' + mobile.substring(1);
    }
    if (!mobile.startsWith('7')) {
        mobile = '7' + mobile;
    }
    mobile = '+' + mobile;


    // Собираем данные формы (и если ты, гандон, читаешь это, то хуй ты чё взломаешь, я сделал защиту на сервере)
    const formData = {
        fio: name.replace(/</g, "&lt;").replace(/>/g, "&gt;"),
        email: email.replace(/</g, "&lt;").replace(/>/g, "&gt;"),
        mobile: mobile,
        comment: comment.replace(/</g, "&lt;").replace(/>/g, "&gt;"),
        configuration: document.getElementById('selected-configuration').textContent,
        price: document.getElementById('priceModal').textContent
    };

    // Логируем данные перед отправкой
    console.log("Отправляемые данные:", formData);

    // Отправляем данные на сервер
    fetch('/sendmail', {  
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(formData)
    })
    .then(response => {
        console.log("Ответ сервера:", response);
        return response.text();
    })
    .then(text => {
        console.log("Текст ответа:", text);
        try {
            const data = JSON.parse(text);
            console.log("Распарсенный JSON:", data);

            if (data.success) {
                // Показываем уведомление об успехе
                notification.textContent = 'Заказ успешно отправлен!';
                notification.classList.remove('hidden');
                notification.style.opacity = 1;

                // Через 3 секунды скрываем уведомление об успехе
                setTimeout(function () {
                    notification.classList.add('hidden');
                    notification.style.opacity = 0;
                }, 3000);

                // Очищаем форму после успешной отправки
                nameInput.value = '';
                emailInput.value = '';
                mobileInput.value = '';
                commentInput.value = '';
            } else {
                // Показываем уведомление об ошибке
                errorNotification.textContent = data.error || 'Ошибка отправки заказа!';
                errorNotification.classList.remove('hidden');
                errorNotification.style.opacity = 1;

                // Через 3 секунды скрываем уведомление об ошибке
                setTimeout(function () {
                    errorNotification.classList.add('hidden');
                    errorNotification.style.opacity = 0;
                }, 3000);
            }
        } catch (e) {
            console.error("Ошибка парсинга JSON:", e);
            // Показываем уведомление об ошибке
            errorNotification.textContent = 'Ошибка обработки ответа от сервера!';
            errorNotification.classList.remove('hidden');
            errorNotification.style.opacity = 1;

            // Через 3 секунды скрываем уведомление об ошибке
            setTimeout(function () {
                errorNotification.classList.add('hidden');
                errorNotification.style.opacity = 0;
            }, 3000);
        }
    })
    .catch(error => {
        console.error('Ошибка:', error);
        // Показываем уведомление об ошибке
        errorNotification.textContent = 'Ошибка отправки заказа!';
        errorNotification.classList.remove('hidden');
        errorNotification.style.opacity = 1;

        // Через 3 секунды скрываем уведомление об ошибке
        setTimeout(function () {
            errorNotification.classList.add('hidden');
            errorNotification.style.opacity = 0;
        }, 3000);
    });
});