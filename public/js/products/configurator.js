// js/products/configurator.js

(function () {
    'use strict';

    /**
     * Создает или обновляет маркер.
     * @param {string} text - Текст маркера.
     * @param {string} className - Дополнительный CSS класс.
     * @returns {Element} - Созданный или существующий элемент маркера.
     */
    function createOrUpdateMarker(text, className) {
        // Определяем класс позиционирования на основе типа маркера
        let positionClass = '';
        switch (className) {
            case 'spine-marker':
                positionClass = 'spine-marker-position';
                break;
            case 'material-marker':
                positionClass = 'material-marker-position';
                break;
            case 'module-marker':
                positionClass = 'module-marker-position';
                break;
            case 'soft-parts-marker':
                positionClass = 'soft-parts-marker-position';
                break;
            case 'waist-size-marker':
                positionClass = 'waist-size-marker-position';
                break;
            case 'soft-color-marker':
                positionClass = 'soft-color-marker-position';
                break;
            default:
                positionClass = ''; // Если тип неизвестен, позиционирование по умолчанию
        }

        let marker = document.querySelector(`#modelM-static-image-container .config-marker.${className}`);
        if (!marker) {
            marker = document.createElement('div');
            marker.classList.add('config-marker', className, positionClass); // Добавляем класс позиционирования
            const container = document.getElementById('modelM-static-image-container');
            if (container) {
                // Вставляем в начало, но после кнопки 3D, если она есть
                const view3dButton = document.getElementById('view-3d-button');
                if (view3dButton && view3dButton.parentNode === container) {
                    container.insertBefore(marker, view3dButton.nextSibling);
                } else {
                    container.insertBefore(marker, container.firstChild);
                }
            }
        }
        marker.textContent = text;
        // Убедимся, что класс позиционирования установлен (на случай, если маркер уже существовал)
        if (positionClass && !marker.classList.contains(positionClass)) {
            marker.classList.add(positionClass);
        }
        return marker;
        
    }


    /**
     * Удаляет маркер по классу.
     * @param {string} className - CSS класс маркера.
     */
    function removeMarker(className) {
        const marker = document.querySelector(`#modelM-static-image-container .config-marker.${className}`);
        if (marker) marker.remove();
    }

    // --- Карта изображений ---
    // Ключи: spine_modules_softParts (материал НЕ влияет)
    // spine: 'base' или 'with-spine'
    // modules: 'none', 'third-hand', 'knee', 'third-hand_knee', 'backpack', 'tackle', 'backpack_tackle' и т.д.
    // softParts: 'no' (Жилет) или 'yes' (Капсула) - для 'base' всегда 'no'
    const imageMap = {
        // --- Базовая версия (softParts всегда 'no') ---
        "base_none_no": "img/versions/base_al_black.webp",
        "base_third-hand_no": "img/versions/base_al_3rd_black.webp",
        "base_knee_no": "img/versions/base_al_knee_black.webp",
        "base_third-hand_knee_no": "img/versions/base_al_3rd_knee_black.webp",

        // --- Версия со спиной ---
        "with-spine_none_no": "img/versions/spine_al_black.webp",
        "with-spine_none_yes": "img/versions/spine_al_s_black.webp",
        "with-spine_third-hand_no": "img/versions/spine_al_3rd_black.webp",
        "with-spine_third-hand_yes": "img/versions/spine_al_3rd_s_black.webp",
        "with-spine_knee_no": "img/versions/spine_al_knee_black.webp",
        "with-spine_knee_yes": "img/versions/spine_al_knee_s_black.webp",
        "with-spine_third-hand_backpack_no": "img/versions/spine_al_3rd_backpack_black.webp",
        "with-spine_third-hand_backpack_yes": "img/versions/spine_al_3rd_backpack_s_black.webp",
        "with-spine_third-hand_tackle_no": "img/versions/spine_al_3rd_tackle_black.webp",
        "with-spine_third-hand_tackle_yes": "img/versions/spine_al_3rd_tackle_s_black.webp",
        "with-spine_third-hand_tackle_backpack_no": "img/versions/spine_al_3rd_tackle_backpack_black.webp",
        "with-spine_third-hand_tackle_backpack_yes": "img/versions/spine_al_3rd_tackle_backpack_s_black.webp",
        "with-spine_third-hand_knee_no": "img/versions/spine_al_3rd_knee_black.webp",
        "with-spine_third-hand_knee_yes": "img/versions/spine_al_3rd_knee_s_black.webp",
        "with-spine_third-hand_knee_tackle_no": "img/versions/spine_al_3rd_knee_tackle_black.webp",
        "with-spine_third-hand_knee_tackle_yes": "img/versions/spine_al_3rd_knee_tackle_s_black.webp",
        "with-spine_third-hand_knee_tackle_backpack_yes": "img/versions/spine_al_3rd_knee_tackle_backpack_s_black.webp",
        "with-spine_backpack_no": "img/versions/spine_al_backpack_black.webp",
        "with-spine_backpack_yes": "img/versions/spine_al_backpack_s_black.webp",
        "with-spine_tackle_no": "img/versions/spine_al_tackle_black.webp",
        "with-spine_tackle_yes": "img/versions/spine_al_tackle_s_black.webp",
        "with-spine_backpack_tackle_no": "img/versions/spine_al_backpack_tackle_black.webp",
        "with-spine_backpack_tackle_yes": "img/versions/spine_al_backpack_tackle_s_black.webp",
        // Добавьте остальные комбинации модулей для 'with-spine' по необходимости
    };

    // --- Основной класс конфигуратора ---
    class Configurator {
        constructor() {
            this.currentStep = 1;
            // Всего 6 шагов в HTML
            this.totalSteps = 6;
            this.selections = {
                spine: null, // 'base' или 'with-spine'
                material: 'aluminum', // 'aluminum' или 'titanium'
                module: [], // Массив выбранных модулей
                softParts: null, // 'no' (Жилет) или 'yes' (Капсула) - null если не выбрано
                waistSize: 'm', // 's', 'm', 'l'
                softColor: null // 'black' или 'multicam'
            };
            this.init();
        }

        init() {
            // Скрываем все шаги кроме первого
            document.querySelectorAll('.config-step').forEach((step, index) => {
                 if (index !== 0) step.style.display = 'none'; // Показываем только первый шаг
            });
            // Показываем первый шаг
            const firstStep = document.querySelector('.config-step[data-step="1"]');
            if (firstStep) firstStep.style.display = 'block';

            this.bindEvents();
            this.updateImage();
            this.updateModuleVisibility();
            this.updateStepButtons(1);
        }

        bindEvents() {
            // --- Шаг 1: Версия ---
            document.querySelectorAll('input[name="spine"]').forEach(radio => {
                radio.addEventListener('change', (e) => {
                    this.selections.spine = e.target.value;
                    this.updateImage();
                    this.updateMarkers();
                    this.updateStepButtons(1);
                    const view3dButton = document.getElementById('view-3d-button');
                    if (view3dButton) view3dButton.style.display = 'block';
                    this.updateModuleVisibility();
                });
            });

            // --- Шаг 2: Материал ---
            document.querySelectorAll('input[name="material"]').forEach(radio => {
                radio.addEventListener('change', (e) => {
                    this.selections.material = e.target.value;
                    this.updateMarkers(); // Обновляем маркер материала
                    this.updateStepButtons(2);
                });
            });

            // --- Шаг 3: Модули ---
            document.querySelectorAll('input[name="module-group"]').forEach(checkbox => {
                checkbox.addEventListener('change', (e) => {
                    const value = e.target.value;
                    const optionElement = e.target.closest('.config-option');

                    if (value === 'none') {
                        document.querySelectorAll('input[name="module-group"]').forEach(cb => {
                            if (cb !== e.target) {
                                cb.checked = false;
                                const cbOptionElement = cb.closest('.config-option');
                                if (cbOptionElement) cbOptionElement.classList.remove('selected');
                            }
                        });
                        this.selections.module = [];
                        if (optionElement) optionElement.classList.add('selected');
                    } else {
                        const noneCheckbox = document.querySelector('input[value="none"]');
                        if (noneCheckbox) {
                            noneCheckbox.checked = false;
                            const noneOptionElement = noneCheckbox.closest('.config-option');
                            if (noneOptionElement) noneOptionElement.classList.remove('selected');
                        }

                        if (e.target.checked) {
                            if (!this.selections.module.includes(value)) {
                                this.selections.module.push(value);
                            }
                            if (optionElement) optionElement.classList.add('selected');
                        } else {
                            this.selections.module = this.selections.module.filter(m => m !== value);
                            if (optionElement) optionElement.classList.remove('selected');
                        }
                    }
                    this.updateImage();
                    this.updateMarkers();
                    this.updateStepButtons(3);
                });
            });

            // --- Шаг 4: Мягкие части ---
            document.querySelectorAll('input[name="soft-group"]').forEach(radio => {
                radio.addEventListener('change', (e) => {
                    this.selections.softParts = e.target.value; // 'no' или 'yes'
                    this.updateImage();
                    this.updateMarkers();
                    this.updateWaistSizeSelector();
                    this.updateStepButtons(4);
                });
            });

            // --- Ползунок охвата талии ---
            const waistSlider = document.getElementById('waistSizeSlider');
            const waistDisplay = document.getElementById('waistSizeDisplay');
            const waistSizes = { 1: 'до 80 см', 2: 'до 100 см', 3: 'до 120 см' };
            if (waistSlider && waistDisplay) {
                waistSlider.addEventListener('input', () => {
                    const value = waistSlider.value;
                    this.selections.waistSize = value === '1' ? 's' : value === '2' ? 'm' : 'l';
                    waistDisplay.textContent = waistSizes[value];
                });
            }

            // --- Шаг 5: Цвет ---
             document.querySelectorAll('input[name="soft-color"]').forEach(radio => {
                radio.addEventListener('change', (e) => {
                    this.selections.softColor = e.target.value;
                    this.updateMarkers(); // Обновляем маркер цвета
                    this.updateStepButtons(5);
                });
            });

            // --- Кнопки навигации ---
            document.querySelectorAll('.next-step').forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.nextStep();
                });
            });
            document.querySelectorAll('.prev-step').forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.prevStep();
                });
            });

            // --- Кнопка "Завершить" (переход к шагу 6) ---
            const finishButton = document.querySelector('.config-step[data-step="5"] .next-step');
            if (finishButton) {
                finishButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.currentStep = 6;
                    this.updateUI();
                });
            }

            // --- Кнопка "Оформить заказ" (шаг 6) ---
            const openOrderModalBtn = document.getElementById('openOrderModal');
            if (openOrderModalBtn) {
                openOrderModalBtn.addEventListener('click', () => this.openOrderModal());
            }

            // --- Закрытие модального окна ---
            const modal = document.getElementById('orderModal');
            if (modal) {
                const closeBtn = modal.querySelector('.close');
                if (closeBtn) closeBtn.onclick = () => modal.style.display = 'none';
                window.onclick = (event) => {
                    if (event.target === modal) modal.style.display = 'none';
                };
            }
        }

        updateStepButtons(step) {
            const stepElement = document.querySelector(`.config-step[data-step="${step}"]`);
            if (!stepElement) return;

            const nextButton = stepElement.querySelector('.next-step');
            const prevButton = stepElement.querySelector('.prev-step');

            let isStepValid = false;
            switch (step) {
                case 1:
                    isStepValid = !!this.selections.spine;
                    break;
                case 2:
                    isStepValid = !!this.selections.material;
                    break;
                case 3:
                    isStepValid = document.querySelector('input[value="none"]').checked || this.selections.module.length > 0;
                    break;
                case 4:
                    isStepValid = (this.selections.softParts === 'no' || this.selections.softParts === 'yes');
                    break;
                case 5:
                    isStepValid = !!this.selections.softColor;
                    break;
                // Шаг 6 не требует кнопок
            }

            if (nextButton) nextButton.style.display = isStepValid ? 'inline-block' : 'none';
            if (prevButton) prevButton.style.display = (step > 1) ? 'inline-block' : 'none';
        }

        nextStep() {
            if (this.currentStep < this.totalSteps) {
                this.currentStep++;
                this.updateUI();
            }
        }

        prevStep() {
             if (this.currentStep > 1) {
                // Логика сброса при возврате
                if (this.currentStep === 2) {
                    this.selections.material = 'aluminum';
                    document.querySelectorAll('input[name="material"]').forEach(r => {
                        r.checked = (r.value === 'aluminum');
                    });
                    removeMarker('material-marker');
                    const view3dButton = document.getElementById('view-3d-button');
                    if (view3dButton) view3dButton.style.display = 'block';
                } else if (this.currentStep === 3) {
                    this.selections.module = [];
                    removeMarker('module-marker');
                    document.querySelectorAll('input[name="module-group"]').forEach(cb => {
                        const optionElement = cb.closest('.config-option');
                         if (cb.value === 'none') {
                             cb.checked = true;
                             if (optionElement) optionElement.classList.add('selected');
                         } else {
                             cb.checked = false;
                             if (optionElement) optionElement.classList.remove('selected');
                         }
                    });
                } else if (this.currentStep === 4) {
                    this.selections.softParts = null;
                    removeMarker('soft-parts-marker');
                    document.querySelectorAll('input[name="soft-group"]').forEach(r => r.checked = false);
                    this.updateWaistSizeSelector();
                } else if (this.currentStep === 5) {
                    this.selections.softColor = null;
                    removeMarker('soft-color-marker');
                    document.querySelectorAll('input[name="soft-color"]').forEach(r => r.checked = false);
                } else if (this.currentStep === 6) {
                    this.currentStep = 5;
                    this.updateUI();
                    return;
                }

                this.currentStep--;
                this.updateUI();
            }
        }


        updateUI() {
            document.querySelectorAll('.config-step').forEach(step => step.style.display = 'none');

            const currentStepElement = document.querySelector(`.config-step[data-step="${this.currentStep}"]`);
            if (currentStepElement) {
                currentStepElement.style.display = 'block';
            }

            const view3dButton = document.getElementById('view-3d-button');
            if (view3dButton) {
                view3dButton.style.display = (this.currentStep === 1 && this.selections.spine) ? 'block' : 'none';
            }

            if (this.currentStep === 4) {
                this.updateWaistSizeSelector();
            } else {
                const waistSelector = document.getElementById('waist-size-selector');
                if (waistSelector) waistSelector.style.display = 'none';
            }

            this.updateStepButtons(this.currentStep);

            if (this.currentStep === 6) {
                this.updateOrderSummary();
            }

            this.updateStepsIndicator(); // <-- Добавлено
        }

        updateStepsIndicator() {
            const dots = document.querySelectorAll('.steps-indicator .step-dot');
            dots.forEach((dot, index) => {
                // Предполагаем, что data-step у точки соответствует номеру шага (1, 2, 3, 4, 5)
                // Или можно просто ориентироваться на индекс index+1
                // Так как у нас логика пропусков, лучше завязаться на реальный номер шага.
                // Но в предоставленном HTML у .step-dot нет data-step. Поэтому завяжемся на индекс.
                // Шаги у нас 1, 2, 3, 4, 5 (6 - финальный заказ, не показываем в индикаторе)
                if (index + 1 === this.currentStep) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }

        updateImage() {
            const staticImage = document.getElementById('static-image');
            if (!staticImage) return;

            let imagePath = 'img/versions/9.webp';

            if (this.selections.spine) {
                let spineKey = this.selections.spine;

                if (this.currentStep === 1) {
                    imagePath = spineKey === 'base' ? 'img/versions/base_al_black.webp' : 'img/versions/spine_al_black.webp';
                } else if (this.currentStep >= 3) {
                    let modulesKey = this.selections.module.length > 0 ? this.selections.module.sort().join('_') : 'none';
                    // Для базовой версии мягкие части всегда 'no'
                    let softPartsKey = spineKey === 'base' ? 'no' : (this.selections.softParts || 'no');

                    let imageKey = `${spineKey}_${modulesKey}_${softPartsKey}`;
                    console.log("Ключ изображения:", imageKey);
                    imagePath = imageMap[imageKey] || 'img/versions/9.webp';
                }
            }

            staticImage.src = imagePath;
            staticImage.alt = `Экзоскелет: ${this.selections.spine || 'не выбрано'}, модули: [${this.selections.module.join(', ') || 'нет'}], мягкие части: ${this.selections.spine === 'base' ? 'Жилет (базовая)' : (this.selections.softParts === 'yes' ? 'Капсула' : (this.selections.softParts === 'no' ? 'Жилет' : 'не выбрано'))}, цвет: ${this.selections.softColor || 'не выбрано'}`;
        }

        updateMarkers() {
            if (this.selections.spine) {
                const spineText = this.selections.spine === 'base' ? 'Базовая' : 'Со спиной';
                createOrUpdateMarker(spineText, 'spine-marker');
            } else {
                removeMarker('spine-marker');
            }

            if (this.selections.material) {
                const materialText = this.selections.material === 'aluminum' ? 'Нержавеющая сталь' : 'Титан';
                createOrUpdateMarker(materialText, 'material-marker');
            } else {
                removeMarker('material-marker');
            }

            if (this.selections.module.length > 0) {
                const modulesText = this.selections.module.map(m => {
                    switch (m) {
                        case 'third-hand': return 'Третья рука';
                        case 'backpack': return 'Упор для груза';
                        case 'tackle': return 'Такелаж';
                        case 'knee': return 'Наколенник';
                        default: return m;
                    }
                }).join(', ');
                createOrUpdateMarker(modulesText, 'module-marker');
            } else if (document.querySelector('input[value="none"]')?.checked) {
                createOrUpdateMarker('Без модулей', 'module-marker');
            } else {
                removeMarker('module-marker');
            }

            if (this.selections.softParts !== null) {
                const softPartsText = this.selections.softParts === 'yes' ? 'Капсула' : 'Жилет';
                createOrUpdateMarker(softPartsText, 'soft-parts-marker');
            } else {
                removeMarker('soft-parts-marker');
            }

            removeMarker('waist-size-marker');

            if (this.selections.softColor) {
                const softColorText = this.selections.softColor === 'black' ? 'Черный' : 'Мультикам';
                createOrUpdateMarker(softColorText, 'soft-color-marker');
            } else {
                removeMarker('soft-color-marker');
            }
        }

        updateWaistSizeSelector() {
            const waistSelector = document.getElementById('waist-size-selector');
            if (this.currentStep === 4 && (this.selections.softParts === 'no' || this.selections.softParts === 'yes')) {
                if (waistSelector) waistSelector.style.display = 'block';
            } else {
                if (waistSelector) waistSelector.style.display = 'none';
            }
        }

        updateModuleVisibility() {
            const modulesSection = document.getElementById('modules-section');
            if (!modulesSection) return;

            const moduleOptions = modulesSection.querySelectorAll('.col-md-4');
            const isWithSpine = this.selections.spine === 'with-spine';

            moduleOptions.forEach(option => {
                const value = option.querySelector('input[name="module-group"]').value;
                if ((value === 'backpack' || value === 'tackle') && !isWithSpine) {
                    option.style.display = 'none';
                } else {
                    option.style.display = '';
                }
            });
        }

        updateOrderSummary() {
            const configurationDetails = document.getElementById('selected-configuration');
            // Найти оба элемента для отображения цены: на шаге 6 и в модальном окне
            const priceElementStep6 = document.querySelector('#price #priceModal'); // Селектор для шага 6
            const priceElementModal = document.getElementById('priceModal'); // Селектор для модального окна
            const versionElement = document.getElementById('version');

            if (!configurationDetails || !versionElement) {
                console.error("Элементы заказа не найдены на шаге 6");
                return;
            }

            let configText = `Версия: ${this.selections.spine === 'base' ? 'Базовая' : 'Со спиной'}\n`;
            configText += `Материал: ${this.selections.material === 'aluminum' ? 'Нержавеющая сталь' : 'Титан'}\n`;

            if (this.selections.module.length > 0) {
                configText += `Модули: ${this.selections.module.map(m => {
                    switch (m) {
                        case 'third-hand': return 'Третья рука';
                        case 'backpack': return 'Упор для груза';
                        case 'tackle': return 'Такелаж';
                        case 'knee': return 'Наколенник';
                        default: return m;
                    }
                }).join(', ')}\n`;
            } else {
                configText += `Модули: Без модулей\n`;
            }

            if (this.selections.spine === 'base') {
                configText += `Мягкие части: Жилет (базовая версия)\n`;
            } else {
                configText += `Мягкие части: ${this.selections.softParts === 'yes' ? 'Капсула' : 'Жилет'}\n`;
                if (this.selections.softParts && this.selections.waistSize) {
                    const waistSizes = { 's': 'до 80 см', 'm': 'до 100 см', 'l': 'до 120 см' };
                    configText += `Охват талии: ${waistSizes[this.selections.waistSize]}\n`;
                }
                if (this.selections.softColor) {
                    configText += `Цвет мягких частей: ${this.selections.softColor === 'black' ? 'Черный' : 'Мультикам'}\n`;
                }
            }

            configurationDetails.textContent = configText;
            versionElement.textContent = `AUXILIUM Model M (${this.selections.spine === 'base' ? 'Базовая' : 'Со спиной'})`;

            // --- Расчет и отображение цены ---
            try {
                // Проверяем наличие глобального объекта цен
                if (typeof window.PRODUCT_PRICES === 'undefined' ||
                    !window.PRODUCT_PRICES.MODEL_M ||
                    typeof window.PRODUCT_PRICES.MODEL_M.calculatePrice !== 'function') {
                    console.error("PRODUCT_PRICES.MODEL_M.calculatePrice не найден или некорректен.");
                    // Обновляем оба элемента сообщением об ошибке
                    const errorMessage = "Ошибка: Не найден скрипт расчета цены";
                    if (priceElementStep6) priceElementStep6.textContent = errorMessage;
                    if (priceElementModal) priceElementModal.textContent = errorMessage;
                    return;
                }

                // Создаем копию selections для расчета, чтобы не мутировать оригинальный объект
                // ВАЖНО: Передаем именно эту структуру, как ожидает prices.js
                const selectionsForPrice = {
                    spine: this.selections.spine,
                    material: this.selections.material,
                    module: [...this.selections.module], // Копируем массив
                    softParts: this.selections.spine === 'base' ? 'no' : this.selections.softParts, // Принудительно 'no' для базовой
                    waistSize: this.selections.waistSize,
                    softColor: this.selections.softColor
                };

                console.log("Передаем в calculatePrice:", selectionsForPrice);

                // Вызываем функцию расчета из prices.js
                const price = window.PRODUCT_PRICES.MODEL_M.calculatePrice(selectionsForPrice);

                // Проверяем, что цена рассчитана корректно
                if (typeof price === 'number' && !isNaN(price)) {
                    const formattedPrice = `${new Intl.NumberFormat('ru-RU').format(Math.round(price))} ₽`;
                    // Обновляем оба элемента рассчитанной ценой
                    if (priceElementStep6) priceElementStep6.textContent = formattedPrice;
                    if (priceElementModal) priceElementModal.textContent = formattedPrice;
                } else {
                    console.error("Функция calculatePrice вернула некорректное значение:", price);
                    const errorMessage = "Ошибка расчета: Некорректный результат";
                    if (priceElementStep6) priceElementStep6.textContent = errorMessage;
                    if (priceElementModal) priceElementModal.textContent = errorMessage;
                }
            } catch (error) {
                // Ловим любые ошибки, возникшие внутри calculatePrice или при его вызове
                console.error("Ошибка при расчете цены на шаге 6:", error);
                const errorMessage = "Ошибка расчета";
                if (priceElementStep6) priceElementStep6.textContent = errorMessage;
                if (priceElementModal) priceElementModal.textContent = errorMessage;
            }
        }

        openOrderModal() {
            const modal = document.getElementById('orderModal');
            if (modal) {
                modal.style.display = 'block';
                 // Обновляем итоги в модальном окне при его открытии
                 // Предполагается, что updateOrderSummary обновляет и элементы в модальном окне
                 this.updateOrderSummary();
            }
        }
    }

    // --- Инициализация после загрузки DOM ---
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            window.configurator = new Configurator();
             // Также вызываем injectPrices из prices.js, если он есть, чтобы обновить цены в HTML
             if (typeof window.injectPrices === 'function') {
                 window.injectPrices();
             }
        });
    } else {
        window.configurator = new Configurator();
        if (typeof window.injectPrices === 'function') {
             window.injectPrices();
        }
    }

})();