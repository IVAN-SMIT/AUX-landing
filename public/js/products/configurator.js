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
    // softParts: 'no' (Жилет/Без жилета) или 'yes' (Капсула/Жилет и упоры) - старые значения, но используем их для изображений
    const imageMap = {
        // --- Базовая версия ---
        "base_none_no": "img/versions/base_al_black.webp",
        "base_none_yes": "img/versions/base_al_black.webp",
        "base_third-hand_no": "img/versions/base_al_3rd_black.webp",
        "base_third-hand_yes": "img/versions/base_al_3rd_black.webp",
        "base_knee_no": "img/versions/base_al_knee_black.webp",
        "base_knee_yes": "img/versions/base_al_knee_black.webp",
        "base_third-hand_knee_no": "img/versions/base_al_3rd_knee_black.webp",
        "base_third-hand_knee_yes": "img/versions/base_al_3rd_knee_black.webp",
        

        // --- Версия со спиной ---
        "with-spine_none_no": "img/versions/spine_al_black.webp",
        "with-spine_none_yes": "img/versions/spine_al_s_black.webp",
        "with-spine_third-hand_no": "img/versions/spine_al_3rd_black.webp",
        "with-spine_third-hand_yes": "img/versions/spine_al_3rd_s_black.webp",
        "with-spine_knee_no": "img/versions/spine_al_knee_black.webp",
        "with-spine_knee_yes": "img/versions/spine_al_knee_s_black.webp",
        "with-spine_backpack_no": "img/versions/spine_al_backpack_black.webp",
        "with-spine_backpack_yes": "img/versions/spine_al_backpack_s_black.webp",
        "with-spine_tackle_no": "img/versions/spine_al_tackle_black.webp",
        "with-spine_tackle_yes": "img/versions/spine_al_tackle_s_black.webp",
        "with-spine_third-hand_backpack_no": "img/versions/spine_al_3rd_backpack_black.webp",
        "with-spine_third-hand_backpack_yes": "img/versions/spine_al_3rd_backpack_s_black.webp",
        "with-spine_third-hand_tackle_no": "img/versions/spine_al_3rd_tackle_black.webp",
        "with-spine_third-hand_tackle_yes": "img/versions/spine_al_3rd_tackle_s_black.webp",
        "with-spine_third-hand_knee_no": "img/versions/spine_al_3rd_knee_black.webp",
        "with-spine_third-hand_knee_yes": "img/versions/spine_al_3rd_knee_s_black.webp",
        "with-spine_third-hand_tackle_backpack_no": "img/versions/spine_al_3rd_tackle_backpack_black.webp",
        "with-spine_third-hand_tackle_backpack_yes": "img/versions/spine_al_3rd_tackle_backpack_s_black.webp",
        "with-spine_third-hand_knee_tackle_no": "img/versions/spine_al_3rd_knee_tackle_black.webp",
        "with-spine_third-hand_knee_tackle_yes": "img/versions/spine_al_3rd_knee_tackle_s_black.webp",
        "with-spine_third-hand_knee_tackle_backpack_no": "img/versions/spine_al_3rd_knee_tackle_backpack_black.webp",
        "with-spine_third-hand_knee_tackle_backpack_yes": "img/versions/spine_al_3rd_knee_tackle_backpack_s_black.webp",
        "with-spine_backpack_tackle_no": "img/versions/spine_al_backpack_tackle_black.webp",
        "with-spine_backpack_tackle_yes": "img/versions/spine_al_backpack_tackle_s_black.webp",
        // Добавьте остальные комбинации модулей для 'with-spine' по необходимости
    };

    // --- Основной класс конфигуратора ---
    class Configurator {
        constructor() {
        this.currentStep = 1;
        this.totalSteps = 6;
        // ... (остальные переменные) ...
        this.selections = {
            spine: null,
            material: null,
            module: [],
            softParts: null,
            waistSize: 'm',
            softColor: null
        };
        this.promptElement = document.getElementById('step1Prompt'); // Добавьте эту строку
        this.init();
        window.addEventListener('resize', () => {
            // Обновляем позицию подсказки при изменении размера окна, если она видна
            if (this.currentStep === 1 && this.promptElement && this.promptElement.style.display !== 'none') {
                this.updatePromptPosition();
            }
        });
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
            this.updateSoftPartsOptions(); // Обновляем опции мягк. частей при инициализации
            this.updateStepButtons(1);
            this.updateNextButtonVisibility();
        }

        bindEvents() {
            // --- Шаг 1: Версия ---
            document.querySelectorAll('input[name="spine"]').forEach(radio => {
                radio.addEventListener('change', (e) => {
                    this.selections.spine = e.target.value;
                    // Управление классом 'selected' для шага 1
                    document.querySelectorAll('input[name="spine"]').forEach(r => {
                        const optionElement = r.closest('.config-option');
                        if (r.checked && optionElement) {
                            optionElement.classList.add('selected');
                        } else if (optionElement) {
                            optionElement.classList.remove('selected');
                        }
                    });
                    this.updateUI(); // Обновляем UI (включая скрытие подсказки)
                    this.updateNextButtonVisibility(); // Показать кнопку "Далее"
                    this.triggerPromptTap(); // Анимация "нажатия" подсказки
                    this.updateImage();
                    this.updateMarkers();
                    this.resetFutureStepSelections(1); // Сбросить выборы после шага 1
                    this.updateStepButtons(1);
                    const view3dButton = document.getElementById('view-3d-button');
                    if (view3dButton) view3dButton.style.display = 'block';
                    this.updateModuleVisibility();
                    this.updateSoftPartsOptions(); // Обновляем опции мягк. частей после выбора версии
                });
            });

        

            // --- Шаг 2: Материал ---
            document.querySelectorAll('input[name="material"]').forEach(radio => {
                radio.addEventListener('change', (e) => {
                    this.selections.material = e.target.value;
                    // Управление классом 'selected' для шага 2
                    document.querySelectorAll('input[name="material"]').forEach(r => {
                        const optionElement = r.closest('.config-option');
                        if (r.checked && optionElement) {
                            optionElement.classList.add('selected');
                        } else if (optionElement) {
                            optionElement.classList.remove('selected');
                        }
                    });
                    this.updateMarkers(); // Обновляем маркер материала
                    this.resetFutureStepSelections(2); // Сбросить выборы после шага 2
                    this.updateStepButtons(2);
                });
            });

            // --- Шаг 3: Модули ---
            document.querySelectorAll('input[name="module-group"]').forEach(checkbox => {
                checkbox.addEventListener('change', (e) => {
                    const value = e.target.value;
                    const optionElement = e.target.closest('.config-option');

                    if (value === 'none') {
                        // Если выбран "Без модулей"
                        if (e.target.checked) {
                            // Сбросить все другие чекбоксы
                            document.querySelectorAll('input[name="module-group"]').forEach(cb => {
                                if (cb !== e.target) {
                                    cb.checked = false;
                                    const cbOptionElement = cb.closest('.config-option');
                                    if (cbOptionElement) cbOptionElement.classList.remove('selected');
                                }
                            });
                            // Установить модуль как "none" (пустой массив, но это означает "Без модулей" выбрано)
                            this.selections.module = [];
                            // Установить класс selected для "Без модулей"
                            if (optionElement) optionElement.classList.add('selected');
                        }
                    } else {
                        // Если выбран конкретный модуль
                        if (e.target.checked) {
                            // Сбросить "Без модулей"
                            const noneCheckbox = document.querySelector('input[value="none"]');
                            if (noneCheckbox) {
                                noneCheckbox.checked = false;
                                const noneOptionElement = noneCheckbox.closest('.config-option');
                                if (noneOptionElement) noneOptionElement.classList.remove('selected');
                            }
                            // Сбросить все другие модули
                            document.querySelectorAll('input[name="module-group"]').forEach(cb => {
                                if (cb !== e.target && cb.value !== 'none') {
                                    cb.checked = false;
                                    const cbOptionElement = cb.closest('.config-option');
                                    if (cbOptionElement) cbOptionElement.classList.remove('selected');
                                }
                            });
                            // Установить текущий модуль как единственный
                            this.selections.module = [value];
                            // Установить класс selected для текущего модуля
                            if (optionElement) optionElement.classList.add('selected');
                        }
                        // Если снимается чекбокс, но он был отмечен, и других модулей не выбрано,
                        // то можно оставить this.selections.module как есть (пустой массив), но снять выделение.
                        // Или установить "Без модулей" как выбранное. Второй вариант более явный.
                        // Однако, по требованиям, повторный клик не сбрасывает выбор.
                        // Главное - при выборе "Без модулей" (`value === 'none'`) выше, `this.selections.module` становится `[]`.
                    }

                    this.updateImage();
                    this.updateMarkers();
                    this.resetFutureStepSelections(3); // Сбросить выборы после шага 3
                    this.updateStepButtons(3);
                });
            });

            // --- Шаг 4: Мягкие части и упоры (новая логика) ---
            // Обработчики для базовой версии
            document.querySelectorAll('input[name="soft-group-base"]').forEach(radio => {
                radio.addEventListener('change', (e) => {
                    this.selections.softParts = e.target.value; // 'no' или 'with_soft'
                    // Управление классом 'selected' для шага 4 (базовая версия)
                    document.querySelectorAll('input[name="soft-group-base"]').forEach(r => {
                        const optionElement = r.closest('.config-option');
                        if (r.checked && optionElement) {
                            optionElement.classList.add('selected');
                        } else if (optionElement) {
                            optionElement.classList.remove('selected');
                        }
                    });
                    this.updateImage();
                    this.updateMarkers();
                    this.updateWaistSizeSelector(); // Показать ползунок после выбора
                    this.resetFutureStepSelections(4); // Сбросить выборы после шага 4
                    this.updateStepButtons(4);
                });
            });

            // Обработчики для версии со спиной
            document.querySelectorAll('input[name="soft-group-with-spine"]').forEach(radio => {
                radio.addEventListener('change', (e) => {
                    this.selections.softParts = e.target.value; // 'vest' или 'capsule'
                    // Управление классом 'selected' для шага 4 (версия со спиной)
                    document.querySelectorAll('input[name="soft-group-with-spine"]').forEach(r => {
                        const optionElement = r.closest('.config-option');
                        if (r.checked && optionElement) {
                            optionElement.classList.add('selected');
                        } else if (optionElement) {
                            optionElement.classList.remove('selected');
                        }
                    });
                    this.updateImage();
                    this.updateMarkers();
                    this.updateWaistSizeSelector(); // Показать ползунок после выбора
                    this.resetFutureStepSelections(4); // Сбросить выборы после шага 4
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
                    // Обновляем маркер размера талии (удалён)
                    // const waistSizeText = waistSizes[value];
                    // createOrUpdateMarker(waistSizeText, 'waist-size-marker');
                });
            }

            // --- Шаг 5: Цвет ---
            document.querySelectorAll('input[name="soft-color"]').forEach(radio => {
                radio.addEventListener('change', (e) => {
                    this.selections.softColor = e.target.value;
                    // Управление классом 'selected' для шага 5
                    document.querySelectorAll('input[name="soft-color"]').forEach(r => {
                        const optionElement = r.closest('.config-option');
                        if (r.checked && optionElement) {
                            optionElement.classList.add('selected');
                        } else if (optionElement) {
                            optionElement.classList.remove('selected');
                        }
                    });
                    this.updateMarkers(); // Обновляем маркер цвета
                    this.updateStepButtons(5); // Сброс для шага 6 будет в updateStepButtons или при выборе
                });
            });

            // --- КНОПКИ НАВИГАЦИИ ---
            // Обработчик для всех кнопок .next-step на всех шагах
            document.querySelectorAll('.next-step').forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault(); // Предотвращаем стандартное поведение ссылки
                    this.nextStep(); // Вызываем метод nextStep экземпляра класса
                });
            });

            // Обработчик для всех кнопок .prev-step на всех шагах
            document.querySelectorAll('.prev-step').forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault(); // Предотвращаем стандартное поведение ссылки
                    this.prevStep(); // Вызываем метод prevStep экземпляра класса
                });
            });

            // --- КНОПКА "ЗАВЕРШИТЬ" (шаг 5 -> шаг 6) ---
            // Найти кнопку "Завершить" на шаге 5 (она имеет класс next-step)
            const finishButton = document.querySelector('.config-step[data-step="5"] .next-step');
            if (finishButton) {
                // Заменить стандартное поведение nextStep на установку currentStep = 6
                finishButton.removeEventListener('click', this.nextStep); // Убедимся что старый обработчик удален (если был)
                finishButton.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.currentStep = 6; // Устанавливаем текущий шаг на 6
                    this.updateUI();     // Обновляем интерфейс
                });
            }

            // --- КНОПКА "ОФОРМИТЬ ЗАКАЗ" (шаг 6) ---
            const openOrderModalBtn = document.getElementById('openOrderModal');
            if (openOrderModalBtn) {
                openOrderModalBtn.addEventListener('click', () => this.openOrderModal());
            }

            // --- ЗАКРЫТИЕ МОДАЛЬНОГО ОКНА ЗАКАЗА ---
            const modal = document.getElementById('orderModal');
            if (modal) {
                const closeBtn = modal.querySelector('.close');
                if (closeBtn) {
                    closeBtn.onclick = () => modal.style.display = 'none';
                }
                // Закрытие при клике вне окна
                window.onclick = (event) => {
                    if (event.target === modal) {
                        modal.style.display = 'none';
                    }
                };
            }
        }

        updateNextButtonVisibility() {
            const nextButton = document.querySelector('.config-step[data-step="1"] .next-step');
            const hasSelection = this.selections.spine !== null;
            if (nextButton) {
                nextButton.style.display = hasSelection ? 'inline-block' : 'none';
            }
        }

        updateSoftPartsOptions() {
            const baseOptions = document.getElementById('soft-parts-base-options');
            const withSpineOptions = document.getElementById('soft-parts-with-spine-options');

            if (this.selections.spine === 'base') {
                if (baseOptions) baseOptions.style.display = 'block';
                if (withSpineOptions) withSpineOptions.style.display = 'none';
            } else if (this.selections.spine === 'with-spine') {
                if (baseOptions) baseOptions.style.display = 'none';
                if (withSpineOptions) withSpineOptions.style.display = 'block';
            } else {
                // Если версия еще не выбрана, скрываем оба
                if (baseOptions) baseOptions.style.display = 'none';
                if (withSpineOptions) withSpineOptions.style.display = 'none';
            }
        }

        updateStepButtons(step) {
            this.resetFutureStepSelections(step); // <-- Гарантированный сброс при любом выборе на шаге

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
                    // Кнопки появляются только после выбора softParts (независимо от spine)
                    isStepValid = this.selections.softParts !== null;
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
                // Логика сброса ПОСЛЕДУЮЩИХ выборов при возврате НАЗАД
                // Сбрасываем все, что идёт после текущего шага (куда возвращаемся)
                // Обратите внимание: при возврате с шага i+1 на i,
                // выбор на шаге i+1 (и всех последующих) должен быть сброшен.
                // Мы сбрасываем `selections` для шагов i+1, i+2, ...
                // Затем уменьшаем `this.currentStep` и вызываем `resetFutureStepSelections` для нового `this.currentStep`,
                // чтобы сбросить выбор на шаге i (куда вернулись) и на всех последующих (i+1, i+2, ...),
                // что включает уже сброшенные выше i+1, но теперь с правильным визуалом и маркерами.

                // Сбрасываем `selections` для шага, откуда возвращаемся (this.currentStep)
                // и всех последующих шагов *до* изменения `this.currentStep`.
                // Это предотвращает "залипание" выбора на этих шагах при возврате.
                if (this.currentStep === 2) {
                    // Возвращаемся с шага 2 на 1: сбрасываем 2, 3, 4, 5
                    this.selections.material = null;
                    this.selections.module = [];
                    this.selections.softParts = null;
                    this.selections.waistSize = 'm'; // Значение по умолчанию
                    this.selections.softColor = null;
                } else if (this.currentStep === 3) {
                    // Возвращаемся с шага 3 на 2: сбрасываем 3, 4, 5
                    this.selections.module = [];
                    this.selections.softParts = null;
                    this.selections.waistSize = 'm';
                    this.selections.softColor = null;
                } else if (this.currentStep === 4) {
                    // Возвращаемся с шага 4 на 3: сбрасываем 4, 5
                    this.selections.softParts = null;
                    this.selections.waistSize = 'm';
                    this.selections.softColor = null;
                } else if (this.currentStep === 5) {
                    // Возвращаемся с шага 5 на 4: сбрасываем 5
                    this.selections.softColor = null;
                } else if (this.currentStep === 6) {
                    // Возвращаемся с шага 6 на 5: сбрасываем 6 (на самом деле, просто перейдем на 5 без сброса 5-го в this.selections)
                    // Но сбросим его визуальное состояние и маркер, вызвав updateUI и resetFutureStepSelections позже.
                    this.currentStep = 5;
                    this.updateUI();
                    // Сбросить визуальные состояния и маркеры для шага 6 (и последующих, если бы были)
                    this.resetFutureStepSelections(this.currentStep); // Сбросит 6, так как fromStep = 5, i начинается с 6
                    return; // Выходим, так как шаг 6 не требует дальнейших действий после сброса
                }

                // Уменьшаем шаг
                this.currentStep--;
                // Обновляем UI (покажет правильный шаг, скроет неправильные, обновит кнопки)
                this.updateUI();

                // Теперь сбрасываем ВИЗУАЛЬНЫЙ выбор на шаге, КУДА ВЕРНУЛИСЬ (новый currentStep)
                // Это нужно делать *после* updateUI, чтобы интерфейс был готов к изменениям
                this.resetVisualSelection(this.currentStep);

                // ГАРАНТИРОВАННЫЙ сброс выбора (selections, визуал, маркеры) НА ВСЕХ ШАГАХ ПОСЛЕ шага, КУДА ВЕРНУЛИСЬ
                // Это также сбросит визуальные состояния и маркеры для шага, куда вернулись, если они были из-за бага.
                this.resetFutureStepSelections(this.currentStep);
            }
        }


   
    
        resetVisualSelection(step) {
            // Сбросить визуальный выбор на шаге 'step'
            // ВАЖНО: Не сбрасывает this.selections, только визуальные состояния!
            switch(step) {
                case 1:
                    document.querySelectorAll('input[name="spine"]').forEach(r => {
                        r.checked = false;
                        const optionElement = r.closest('.config-option');
                        if (optionElement) optionElement.classList.remove('selected');
                    });
                    removeMarker('spine-marker'); // Удаление маркера при визуальном сбросе
                    break;
                case 2:
                    document.querySelectorAll('input[name="material"]').forEach(r => {
                        r.checked = false;
                        const optionElement = r.closest('.config-option');
                        if (optionElement) optionElement.classList.remove('selected');
                    });
                    removeMarker('material-marker'); // Удаление маркера при визуальном сбросе
                    break;
                case 3:
                    // Сброс визуала: снимаем checked и selected со ВСЕХ
                    document.querySelectorAll('input[name="module-group"]').forEach(cb => {
                        cb.checked = false;
                        const optionElement = cb.closest('.config-option');
                        if (optionElement) optionElement.classList.remove('selected');
                    });
                    // НЕ устанавливаем "Без модулей" как checked или selected здесь
                    removeMarker('module-marker'); // Удаление маркера при визуальном сбросе
                    break;
                case 4:
                    // Сбрасываем обе группы радио-кнопок
                    document.querySelectorAll('input[name="soft-group-base"]').forEach(r => {
                        r.checked = false;
                        const optionElement = r.closest('.config-option');
                        if (optionElement) optionElement.classList.remove('selected');
                    });
                    document.querySelectorAll('input[name="soft-group-with-spine"]').forEach(r => {
                        r.checked = false;
                        const optionElement = r.closest('.config-option');
                        if (optionElement) optionElement.classList.remove('selected');
                    });
                    // Сбросить ползунок талии в UI
                    const waistSlider = document.getElementById('waistSizeSlider');
                    const waistDisplay = document.getElementById('waistSizeDisplay');
                    if (waistSlider) waistSlider.value = 2; // Значение 'm' (2)
                    if (waistDisplay) waistDisplay.textContent = 'до 100 см';
                    removeMarker('soft-parts-marker'); // Удаление маркера при визуальном сбросе
                    break;
                case 5:
                    document.querySelectorAll('input[name="soft-color"]').forEach(r => {
                        r.checked = false;
                        const optionElement = r.closest('.config-option');
                        if (optionElement) optionElement.classList.remove('selected');
                    });
                    removeMarker('soft-color-marker'); // Удаление маркера при визуальном сбросе
                    break;
                // Случай step === 6 не нужен, так как возврат на 6 не предусмотрен этим методом
            }
        }


        updateUI() {
            // Показываем/скрываем шаги и управляеем подсказкой в одном цикле
            document.querySelectorAll('.config-step').forEach((step, index) => {
                const stepNum = index + 1;
                const stepElement = step;

                if (stepNum === this.currentStep) {
                    stepElement.style.display = 'block';
                    stepElement.classList.add('active');
                    // --- Управление подсказкой ---
                    if (this.currentStep === 1) {
                        this.showStep1Prompt();
                    } else {
                        // Если текущий шаг не 1, скрываем подсказку
                        this.hideStep1Prompt();
                    }
                    // --- Конец управления подсказкой ---
                } else {
                    stepElement.style.display = 'none';
                    stepElement.classList.remove('active');
                    // Убедимся, что подсказка скрыта, если мы ушли с шага 1
                    // (хотя hideStep1Prompt() уже вызывается выше, лишним не будет)
                    if (this.currentStep !== 1) {
                        this.hideStep1Prompt();
                    }
                }
            });

            // Остальная логика updateUI
            const view3dButton = document.getElementById('view-3d-button');
            if (view3dButton) {
                view3dButton.style.display = (this.currentStep === 1 && this.selections.spine) ? 'block' : 'none';
            }
            if (this.currentStep === 4) {
                this.updateWaistSizeSelector();
                this.updateSoftPartsOptions();
            } else {
                const waistSelector = document.getElementById('waist-size-selector');
                if (waistSelector) waistSelector.style.display = 'none';
            }
            this.updateStepButtons(this.currentStep);
            if (this.currentStep === 6) {
                this.updateOrderSummary();
            }

            this.updateStepsIndicator(); // <-- Добавлено

            // --- Автоскроллинг к конфигуратору (только для мобильных) ---
            // Проверяем, был ли переход на шаг 4 И является ли устройство мобильным
            if (this.currentStep === 4) {
                // Определяем ширину экрана
                const screenWidth = window.innerWidth;

                // Условие для мобильной версии (ширина <= 768px, стандартный брейкпоинт Bootstrap)
                if (screenWidth <= 768) {
                    // Находим элемент конфигуратора (обычно это контейнер с id="configurator" или сам div.configuration)
                    const configuratorElement = document.getElementById('configurator'); // Или document.querySelector('.configuration');
                    if (configuratorElement) {
                        // Плавная прокрутка к верхней части элемента конфигуратора
                        configuratorElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }
                // Если ширина экрана > 768px (десктоп), прокрутка не выполняется
            }
            
        }



        updateStepsIndicator() {
            // Находим все точки индикатора
            const dots = document.querySelectorAll('.steps-indicator .step-dot');

            // Проходим по каждой точке
            dots.forEach((dot, index) => {
                // Предположим, что точки идут в порядке: шаг 1, шаг 2, шаг 3, шаг 4, шаг 5
                // (шаг 6 - финальный, обычно не отображается в индикаторе шагов)
                // Индекс начинается с 0, номер шага с 1, поэтому index + 1 = номер шага
                const stepNumber = index + 1;

                // Проверяем, соответствует ли номер шага точки текущему шагу конфигуратора
                if (stepNumber === this.currentStep) {
                    // Если да, добавляем класс active
                    dot.classList.add('active');
                } else {
                    // Если нет, убираем класс active
                    dot.classList.remove('active');
                }
            });
        }


        
        showStep1Prompt() {
            if (this.promptElement) {
                this.promptElement.style.animation = 'none';
                this.promptElement.style.opacity = '0';
                // Убедимся, что элемент виден для вычисления позиции
                this.promptElement.style.display = 'block';
                // Триггер перерисовки
                void this.promptElement.offsetWidth;
                // Обновляем позицию перед запуском анимации
                this.updatePromptPosition();
                // Применяем начальную анимацию
                this.promptElement.style.animation = 'promptFadeIn 1s ease-out 0.5s forwards, promptWiggle 1.5s ease-in-out infinite 2s';
            }
        }

        hideStep1Prompt() {
            if (this.promptElement) {
                // Останавливаем все анимации
                this.promptElement.style.animation = 'none';
                // Сбрасываем transform
                this.promptElement.style.transform = '';
                // Устанавливаем стили для скрытия
                this.promptElement.style.opacity = '0';
                // Скрываем элемент полностью
                this.promptElement.style.display = 'none';
            }
        }

        triggerPromptTap() {
            if (this.promptElement && this.currentStep === 1) {
                // Останавливаем основную анимацию перед "нажатием"
                this.promptElement.style.animation = 'none';
                this.promptElement.classList.add('tap');
                setTimeout(() => {
                    if (this.promptElement) {
                        this.promptElement.classList.remove('tap');
                        // Восстанавливаем основную анимацию покачивания
                        this.promptElement.style.animation = 'promptWiggle 1.5s ease-in-out infinite';
                        // Обновляем позицию после "нажатия", если нужно
                        // this.updatePromptPosition(); // Необязательно, если позиция не меняется после клика
                    }
                }, 300);
            }
        }


        
      
        updatePromptPosition() {
            if (this.promptElement && this.currentStep === 1) {
                // Найдем первый элемент опции на шаге 1 (блок с data-price-key="BASE")
                const firstOptionElement = document.querySelector('.config-step[data-step="1"] .col-6.mb-3[data-price-category="BASE_VERSIONS"][data-price-key="BASE"]');

                if (firstOptionElement) {
                    // Получим позицию первого блока относительно viewport
                    const targetRect = firstOptionElement.getBoundingClientRect();
                    // Получим позицию родительского контейнера конфигуратора
                    const containerElement = this.promptElement.offsetParent; // Это может быть body или #configurator
                    const containerRect = containerElement.getBoundingClientRect();

                    // Рассчитаем позицию подсказки относительно родителя
                    // Цель: разместить подсказку СЛЕВА от ПЕРВОГО элемента, немного выше его верхней границы
                    const targetTop = targetRect.top - containerRect.top - (this.promptElement.offsetHeight) - 5; // Сдвинуть вверх
                    const targetLeft = targetRect.left - containerRect.left - (this.promptElement.offsetWidth) - 10; // Слева от элемента, с небольшим отступом

                    // Применим рассчитанную позицию
                    this.promptElement.style.top = `${targetTop}px`;
                    this.promptElement.style.left = `${targetLeft}px`;

                    // Обновим transform для анимаций, чтобы они работали относительно новой позиции
                    // Анимации используют translate(-50%, -50%), поэтому установим их как базу
                    this.promptElement.style.transform = 'translate(-50%, -50%)';
                } else {
                    // Если целевой элемент не найден, сбросим позицию к начальному значению
                    this.promptElement.style.top = '50%';
                    this.promptElement.style.left = '50%';
                    this.promptElement.style.transform = 'translate(-50%, -50%)';
                }
            }
        }


        updateImage() {
            const staticImage = document.getElementById('static-image');
            if (!staticImage) return;

            let imagePath = 'img/versions/9.webp';
            if (this.selections.spine) {
                let spineKey = this.selections.spine;
                if (this.currentStep === 1) {
                    imagePath = spineKey === 'base' ? 'img/versions/base_al_black.webp' : 'img/versions/spine_al_black.webp';
                } else if (this.currentStep >= 3) { // Изменено: >= 3, так как softParts влияет
                    let modulesKey = this.selections.module.length > 0 ? this.selections.module.sort().join('_') : 'none';
                    // Отображение изображения зависит от softParts
                    // Сопоставляем новые значения с изображениями из imageMap:
                    // 'no' (без жилета) и 'vest' (жилет) -> 'no'
                    // 'with_soft' (жилет и упоры) и 'capsule' (капсула) -> 'yes'
                    let softPartsKey = 'no'; // Значение по умолчанию
                    if (this.selections.softParts === 'with_soft' || this.selections.softParts === 'capsule') {
                        softPartsKey = 'yes';
                    }
                    // Используем сопоставленное значение для ключа
                    let imageKey = `${spineKey}_${modulesKey}_${softPartsKey}`;
                    console.log("Ключ изображения:", imageKey);
                    imagePath = imageMap[imageKey] || 'img/versions/9.webp';
                }
            }
            staticImage.src = imagePath;
            staticImage.alt = `Экзоскелет: ${this.selections.spine || 'не выбрано'}, модули: [${this.selections.module.join(', ') || 'нет'}], мягкие части: ${this.selections.spine === 'base' ? (this.selections.softParts === 'no' ? 'Без жилета' : 'Жилет и упоры') : (this.selections.softParts === 'vest' ? 'Жилет' : 'Капсула')}, цвет: ${this.selections.softColor || 'не выбрано'}`;
        }

        updateMarkers() {
            // Обновляем маркер версии
            if (this.selections.spine) {
                const spineText = this.selections.spine === 'base' ? 'Базовая' : 'Со спиной';
                createOrUpdateMarker(spineText, 'spine-marker');
            } else {
                removeMarker('spine-marker');
            }

            // Обновляем маркер материала
            if (this.selections.material) {
                const materialText = this.selections.material === 'aluminum' ? 'Нержавеющая сталь' : 'Титан';
                createOrUpdateMarker(materialText, 'material-marker');
            } else {
                removeMarker('material-marker');
            }

            // Обновляем маркер модуля
            // Показываем маркер, только если выбран хотя бы один модуль ИЛИ "Без модулей" действительно выбран (т.е. чекбокс отмечен)
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
            } else if (this.selections.module.length === 0 && document.querySelector('input[value="none"]')?.checked) {
                // Показываем "Без модулей", если массив пуст и чекбокс "none" отмечен (т.е. это результат выбора)
                createOrUpdateMarker('Без модулей', 'module-marker');
            } else {
                // Если массив пуст, но чекбокс "none" не отмечен (состояние "ничего не выбрано"), или если условия не выполнены
                removeMarker('module-marker');
            }

            // Обновляем маркер мягких частей
            if (this.selections.softParts !== null) {
                let softPartsText = '';
                switch (this.selections.softParts) {
                    case 'no':
                        softPartsText = 'Без жилета';
                        break;
                    case 'with_soft':
                        softPartsText = 'Жилет и STKSS';
                        break;
                    case 'vest':
                        softPartsText = 'Жилет';
                        break;
                    case 'capsule':
                        softPartsText = 'Капсула';
                        break;
                    default:
                        softPartsText = this.selections.softParts; // На всякий случай
                }
                createOrUpdateMarker(softPartsText, 'soft-parts-marker');
            } else {
                removeMarker('soft-parts-marker');
            }

            // Обновляем маркер цвета
            if (this.selections.softColor) {
                const softColorText = this.selections.softColor === 'black' ? 'Черный' : 'Мультикам';
                createOrUpdateMarker(softColorText, 'soft-color-marker');
            } else {
                removeMarker('soft-color-marker');
            }
        }


        updateWaistSizeSelector() {
            const waistSelector = document.getElementById('waist-size-selector');
            if (this.currentStep === 4 && this.selections.softParts !== null) {
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


        
        
        // Новый метод для сброса выборов на всех шагах после указанного
        resetFutureStepSelections(fromStep) {
            // Сбросить выбор ТОЛЬКО на шагах ПОСЛЕ fromStep (fromStep + 1, fromStep + 2, ...)
            for (let i = fromStep + 1; i <= this.totalSteps; i++) { // Изменено: i = fromStep + 1
                switch(i) {
                    case 1:
                        // Ничего не сбрасываем на шаге 1, если он был fromStep
                        // или если fromStep < 1 (что невозможно)
                        break;
                    case 2:
                        this.selections.material = null; // Сброс selection
                        // Сброс визуала
                        document.querySelectorAll('input[name="material"]').forEach(r => {
                            r.checked = false;
                            const optionElement = r.closest('.config-option');
                            if (optionElement) optionElement.classList.remove('selected');
                        });
                        removeMarker('material-marker'); // Удаление маркера
                        break;
                    case 3:
                        this.selections.module = []; // Сброс selection
                        // Сброс визуала
                        document.querySelectorAll('input[name="module-group"]').forEach(cb => {
                            cb.checked = false;
                            const optionElement = cb.closest('.config-option');
                            if (optionElement) optionElement.classList.remove('selected');
                        });
                        // НЕ устанавливаем "Без модулей" как checked или selected здесь
                        removeMarker('module-marker'); // Удаление маркера
                        break;
                    case 4:
                        this.selections.softParts = null; // Сброс selection
                        // Сброс визуала для обеих групп
                        document.querySelectorAll('input[name="soft-group-base"]').forEach(r => {
                            r.checked = false;
                            const optionElement = r.closest('.config-option');
                            if (optionElement) optionElement.classList.remove('selected');
                        });
                        document.querySelectorAll('input[name="soft-group-with-spine"]').forEach(r => {
                            r.checked = false;
                            const optionElement = r.closest('.config-option');
                            if (optionElement) optionElement.classList.remove('selected');
                        });
                        // Сбросить ползунок талии в UI
                        const waistSlider = document.getElementById('waistSizeSlider');
                        const waistDisplay = document.getElementById('waistSizeDisplay');
                        if (waistSlider) waistSlider.value = 2; // Значение 'm' (2)
                        if (waistDisplay) waistDisplay.textContent = 'до 100 см';
                        this.updateWaistSizeSelector(); // Скрывает ползунок
                        removeMarker('soft-parts-marker'); // Удаление маркера
                        break;
                    case 5:
                        this.selections.softColor = null; // Сброс selection
                        // Сброс визуала
                        document.querySelectorAll('input[name="soft-color"]').forEach(r => {
                            r.checked = false;
                            const optionElement = r.closest('.config-option');
                            if (optionElement) optionElement.classList.remove('selected');
                        });
                        removeMarker('soft-color-marker'); // Удаление маркера
                        break;
                    case 6:
                        // Ничего не сбрасываем на шаге 6, так как он финальный
                        break;
                }
            }
            this.updateMarkers(); // Обновляем все маркеры после сброса
        }


     

       // - Обновленный метод для отображения итоговой конфигурации и цены на шаге 6 и в модальном окне -
        updateOrderSummary() {
            const configurationDetails = document.getElementById('selected-configuration');
            const versionElement = document.getElementById('version');
            // Правильный селектор для элемента цены на шаге 6 (внутри div#price)
            const priceElementStep6 = document.querySelector('#price #priceModal'); // <h3 id="priceModal"> находится внутри <div id="price">
            // Селектор для элемента цены в модальном окне
            const priceElementModal = document.getElementById('priceModal');

            if (!configurationDetails || !versionElement) {
                console.error("Элементы заказа не найдены на шаге 6");
                return;
            }

            // Формируем текст конфигурации БЕЗ отдельных цен на компоненты (кроме модулей, если вы хотите их показать)
            let configText = '';

            // --- Отображение версии ---
            if (this.selections.spine) {
                const spineText = this.selections.spine === 'base' ? 'Базовая' : 'Со спиной';
                configText += `Версия: ${spineText}\n`;
            }

            // --- Отображение материала ---
            if (this.selections.material) {
                const materialText = this.selections.material === 'aluminum' ? 'Нержавеющая сталь' : 'Титан';
                configText += `Материал: ${materialText}\n`;
            }

            // --- Отображение модулей (с ценами, если нужно показать их отдельно) ---
            // ВАЖНО: Эти цены НЕ влияют на итоговую сумму, которая рассчитывается в calculatePrice
            if (this.selections.module && this.selections.module.length > 0) {
                if (this.selections.module.length === 1) {
                    // Если один модуль
                    const moduleValue = this.selections.module[0];
                    const moduleTexts = {
                        'third-hand': 'Третья рука',
                        'backpack': 'Упор для груза',
                        'tackle': 'Такелаж',
                        'knee': 'Наколенник'
                    };
                    const moduleName = moduleTexts[moduleValue] || moduleValue;
                    // Цена модуля (для отображения, не для расчёта)
                    const modulePrice = window.PRODUCT_PRICES.MODEL_M.MODULES[moduleValue] || 0;
                    configText += `Модули: ${moduleName}`;
                    if (modulePrice > 0) {
                        configText += ` (+<span class="item-price">${modulePrice.toLocaleString('ru-RU')} ₽)</span>`;
                    }
                    configText += '\n';
                } else {
                    // Если несколько модулей
                    const moduleTexts = {
                        'third-hand': 'Третья рука',
                        'backpack': 'Упор для груза',
                        'tackle': 'Такелаж',
                        'knee': 'Наколенник'
                    };
                    const moduleNames = this.selections.module.map(m => moduleTexts[m] || m);

                    // Сумма цен модулей (для отображения, не для расчёта)
                    let totalModulesPrice = 0;
                    this.selections.module.forEach(m => {
                        totalModulesPrice += window.PRODUCT_PRICES.MODEL_M.MODULES[m] || 0;
                    });

                    configText += `Модули: ${moduleNames.join(', ')}`;
                    if (totalModulesPrice > 0) {
                        configText += ` (+<span class="item-price">${totalModulesPrice.toLocaleString('ru-RU')} ₽)</span>`;
                    }
                    configText += '\n';
                }
            } else {
                configText += 'Модули: Без модулей\n';
            }

            // --- Отображение мягких частей (без цены, так как она включена в итоговую) ---
            if (this.selections.softParts) {
                let softPartsText = '';
                if (this.selections.spine === 'base') {
                    softPartsText = this.selections.softParts === 'no' ? 'Без жилета' : 'Жилет и упоры';
                } else { // with-spine
                    softPartsText = this.selections.softParts === 'vest' ? 'Жилет' : 'Капсула';
                }
                configText += `Мягкие части: ${softPartsText}\n`; // Цена уже включена в итоговую через calculatePrice
            }

            // --- Отображение размера талии ---
            if (this.selections.waistSize) {
                const waistSizeLabels = ['XS', 'S', 'M', 'L', 'XL', 'XXL'];
                const sizeText = waistSizeLabels[parseInt(this.selections.waistSize) - 1] || 'M';
                configText += `Охват талии: ${sizeText}\n`;
            }

            // --- Отображение цвета мягких частей ---
            if (this.selections.softColor) {
                const colorText = this.selections.softColor === 'black' ? 'Чёрный' : 'Мультикам';
                configText += `Цвет мягких частей: ${colorText}\n`;
            }

            // ВАЖНО: Устанавливаем HTML, а не textContent, чтобы стили <span class="item-price"> применялись для модулей
            configurationDetails.innerHTML = configText;
            versionElement.textContent = `AUXILIUM Model M (${this.selections.spine === 'base' ? 'Базовая' : 'Со спиной'})`;

            // --- Расчет и отображение общей итоговой цены ---
            try {
                // Проверяем наличие глобального объекта цен и метода calculatePrice
                if (typeof window.PRODUCT_PRICES === 'undefined' || !window.PRODUCT_PRICES.MODEL_M || typeof window.PRODUCT_PRICES.MODEL_M.calculatePrice !== 'function') {
                    console.error("PRODUCT_PRICES.MODEL_M.calculatePrice не найден или некорректен.");
                    const errorMessage = "Ошибка: Не найден скрипт расчета цены";
                    if (priceElementStep6) priceElementStep6.textContent = errorMessage;
                    if (priceElementModal) priceElementModal.textContent = errorMessage;
                    return;
                }

                // Подготовим объект selections для передачи в calculatePrice
                // ВАЖНО: Передаем точные значения, как ожидает prices.js
                const selectionsForPrice = {
                    spine: this.selections.spine,
                    material: this.selections.material,
                    module: [...this.selections.module], // Копируем массив модулей
                    softParts: this.selections.softParts, // Передаём точное значение (no, with_soft, vest, capsule)
                    waistSize: this.selections.waistSize,
                    softColor: this.selections.softColor
                };

                // Вызываем calculatePrice из prices.js
                const calculatedPrice = window.PRODUCT_PRICES.MODEL_M.calculatePrice(selectionsForPrice);

                // Проверяем результат
                if (typeof calculatedPrice === 'number' && !isNaN(calculatedPrice)) {
                    const formattedPrice = `${new Intl.NumberFormat('ru-RU').format(Math.round(calculatedPrice))} ₽`;

                    // Обновляем элементы цены на шаге 6 и в модальном окне
                    if (priceElementStep6) {
                        priceElementStep6.textContent = formattedPrice;
                    }
                    if (priceElementModal) {
                        priceElementModal.textContent = formattedPrice;
                    }
                } else {
                    console.error("Функция calculatePrice вернула некорректное значение:", calculatedPrice);
                    const errorMessage = "Ошибка расчета: Некорректный результат";
                    if (priceElementStep6) priceElementStep6.textContent = errorMessage;
                    if (priceElementModal) priceElementModal.textContent = errorMessage;
                }
            } catch (error) {
                console.error("Ошибка при вызове calculatePrice в updateOrderSummary:", error);
                const errorMessage = "Ошибка расчета цены";
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
