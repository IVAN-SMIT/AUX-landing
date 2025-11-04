// js/products/prices.js

// 1. Цены (структура, понятная функции injectPrices и calculatePrice)
const PRODUCT_PRICES = {
    MODEL_M: {

        // Базовая себестоимость (материалы + услуги + реклама) - это стоимость "голой" версии
        BASE_COSTS: {
            BASE: 91199, // 55 798,33 + 33 400,00 + 2 000,00
            WITH_SPINE: 128240 // 78 739,38 + 47 500,00 + 2 000,00
        },

        // Наценки за материал (относительно BASE_COSTS)
        // Для injectPrices: используем ключи MATERIALS.ALUMINUM, MATERIALS.TITANIUM
        // Для calculatePrice: нужно знать версию спины и материал
        MATERIAL_MARKUPS: {
            ALUMINUM_BASE: 11456, // Нержавеющая сталь на Базовой
            ALUMINUM_WITH_SPINE: 13456, // Нержавеющая сталь на Со спиной
            TITANIUM_BASE: 24156, // Титан на Базовой
            TITANIUM_WITH_SPINE: 26956  // Титан на Со спиной
        },

        // Итоговая стоимость мягких частей (материалы + услуги)
        // Для injectPrices: используем ключи SOFT_PARTS.NO, SOFT_PARTS.WITH_SOFT, SOFT_PARTS.VEST, SOFT_PARTS.CAPSULE
        // Для calculatePrice: нужно знать версию спины и тип мягких частей
        SOFT_PARTS_COSTS: {
            NO_BASE: 5225, // Без жилета на Базовой
            NO_WITH_SPINE: 0, // Без жилета на Со спиной (предположим 0)
            WITH_SOFT_BASE: 17151, // Жилет и STKSS на Базовой (9751 + 7400)
            VEST_WITH_SPINE: 17151, // Жилет на Со спиной (9751 + 7400)
            CAPSULE_WITH_SPINE: 17674 // Капсула на Со спиной (8362 + 9312)
        },

        // Стоимость модулей (для обоих случаев)
        MODULES: {
            THIRD_HAND: 21000,
            TACKLE: 5000,
            BACKPACK: 3000,
            KNEE: 3000,
            NONE: 0
        },

        // Наценки (проценты)
        MARKUPS: {
            COMPANY: 0.10, // 10%
            DEVELOPMENT: 0.15, // 15%
        },

        // Налог (процент)
        TAX: 0.06, // 6%

        // --- ОБНОВЛЁННЫЙ МЕТОД РАСЧЁТА ЦЕНЫ ---
        calculatePrice: function(selections) {
            let price = 0;

            // 1. Добавляем базовую себестоимость версии
            const baseCost = this.BASE_COSTS[selections.spine?.toUpperCase()];
            if (baseCost === undefined) {
                console.error(`Базовая себестоимость для версии "${selections.spine}" не найдена.`);
                return 0;
            }
            price += baseCost;
            console.log("Базовая стоимость:", baseCost, "Текущая цена:", price);

            // 2. Добавляем наценку за материал
            // Формируем ключ для MATERIAL_MARKUPS
            const materialKey = `${selections.material?.toUpperCase()}_${selections.spine?.toUpperCase()}`;
            const materialMarkup = this.MATERIAL_MARKUPS[materialKey];
            if (materialMarkup === undefined) {
                console.warn(`Наценка за материал "${selections.material}" для версии "${selections.spine}" (как "${materialKey}") не найдена. Используем 0.`);
            } else {
                price += materialMarkup;
                console.log("Наценка за материал (", materialKey, "):", materialMarkup, "Текущая цена:", price);
            }

            // 3. Добавляем стоимость мягких частей
            // Формируем ключ для SOFT_PARTS_COSTS
            // selections.softParts = 'no', 'with_soft', 'vest', 'capsule'
            // selections.spine = 'base', 'with-spine'
            let softPartsKey = '';
            if (selections.spine === 'base') {
                if (selections.softParts === 'no') {
                    softPartsKey = 'NO_BASE';
                } else if (selections.softParts === 'with_soft') {
                    softPartsKey = 'WITH_SOFT_BASE';
                } else {
                    console.warn(`Неизвестный тип мягких частей "${selections.softParts}" для базовой версии. Используем 0.`);
                    softPartsKey = 'NO_BASE'; // Или оставим как есть и проверим на undefined
                }
            } else if (selections.spine === 'with-spine') {
                if (selections.softParts === 'no') {
                    softPartsKey = 'NO_WITH_SPINE';
                } else if (selections.softParts === 'vest') {
                    softPartsKey = 'VEST_WITH_SPINE';
                } else if (selections.softParts === 'capsule') {
                    softPartsKey = 'CAPSULE_WITH_SPINE';
                } else {
                    console.warn(`Неизвестный тип мягких частей "${selections.softParts}" для версии со спиной. Используем 0.`);
                    softPartsKey = 'NO_WITH_SPINE'; // Или оставим как есть и проверим на undefined
                }
            } else {
                console.warn(`Неизвестная версия спины "${selections.spine}" для расчета стоимости мягких частей. Используем 0.`);
            }

            const softPartsCost = this.SOFT_PARTS_COSTS[softPartsKey];
            if (softPartsCost === undefined) {
                console.warn(`Стоимость мягких частей для ключа "${softPartsKey}" не найдена. Используем 0.`);
            } else {
                price += softPartsCost;
                console.log("Стоимость мягких частей (", softPartsKey, "):", softPartsCost, "Текущая цена:", price);
            }

            // 4. Добавляем стоимость модулей
            if (selections.module && Array.isArray(selections.module)) {
                selections.module.forEach(mod => {
                    const moduleCost = this.MODULES[mod];
                    if (moduleCost === undefined) {
                        console.warn(`Стоимость модуля "${mod}" не найдена. Пропускаем.`);
                    } else {
                        price += moduleCost;
                        console.log(`Добавлен модуль: ${mod}, цена: ${moduleCost}, текущая цена: ${price}`);
                    }
                });
            }

            // 5. Применяем наценку компании (10%)
            const companyMarkup = price * this.MARKUPS.COMPANY;
            price += companyMarkup;
            console.log("Наценка компании (10%):", companyMarkup, "Текущая цена:", price);

            // 6. Применяем наценку за разработку (15%)
            const developmentMarkup = price * this.MARKUPS.DEVELOPMENT;
            price += developmentMarkup;
            console.log("Наценка за разработку (15%):", developmentMarkup, "Текущая цена:", price);

            // 7. Применяем налог 6% (если что, тут сглаживание по физ лицам и усн, но не ндс)
            const tax = price * this.TAX;
            price += tax;
            console.log("Налог (6%):", tax, "Итоговая цена до округления:", price);

            // Возвращаем итоговую цену, округленную до целого числа
            const finalPrice = Math.round(price);
            console.log("Итоговая цена (округленная):", finalPrice);
            return finalPrice;
        }
    }
};

// 2. Функция для вставки цен в HTML
function injectPrices() {
    console.log("Вызов injectPrices"); // Отладка
    document.querySelectorAll('[data-price-placeholder]').forEach(el => {
        const container = el.closest('[data-price-category]');
        if (!container) return;

        const category = container.dataset.priceCategory;
        const key = container.dataset.priceKey;
        let price = 0;

        console.log(`Обработка элемента: category=${category}, key=${key}`); // Отладка

        // Получаем цену в зависимости от категории и ключа
        // Используем упрощённые ключи, которые соответствуют data-price-key в HTML
        switch (category) {
            case 'BASE_VERSIONS':
                // Отображаем базовую себестоимость
                price = PRODUCT_PRICES.MODEL_M.BASE_COSTS[key];
                break;
            case 'MATERIALS':
                // Для MATERIALS отображаем наценку.
                // injectPrices не знает текущий выбор спины.
                // Поэтому используем ключи, которые *не зависят* от спины в данном контексте,
                // или используем *базовые* наценки. Но HTML использует ALUMINUM, TITANIUM.
                // Это означает, что мы не можем отобразить *разную* цену для одного и того же материала
                // на разных версиях спины с помощью *одного* элемента с data-price-placeholder.
                // Решение: в HTML указать конкретный ключ, например, MATERIALS_ALUMINUM_BASE.
                // Или: не использовать injectPrices для материала, если цена зависит от спины.
                // Или: использовать атрибут data-spine-context в HTML.
                // Попробуем использовать атрибут data-spine-context.
                // Допустим, HTML будет выглядеть так:
                // <div data-price-category="MATERIALS" data-price-key="ALUMINUM" data-spine-context="BASE">
                // <div data-price-category="MATERIALS" data-price-key="ALUMINUM" data-spine-context="WITH_SPINE">
                const spineContext = container.dataset.spineContext?.toUpperCase();
                if (spineContext) {
                    const materialKey = `${key}_${spineContext}`;
                    price = PRODUCT_PRICES.MODEL_M.MATERIAL_MARKUPS[materialKey];
                } else {
                    // Если data-spine-context нет, используем старую логику или покажем 0
                    // Это не идеально, но если контекст не задан, сложно определить цену.
                    // Пока покажем 0.
                    console.warn(`Контекст версии спины не задан для элемента MATERIALS. Цена установлена в 0.`);
                    price = 0;
                }
                break;
            case 'MODULES':
                // Отображаем стоимость модуля
                price = PRODUCT_PRICES.MODEL_M.MODULES[key];
                break;
            case 'SOFT_PARTS':
                // Для SOFT_PARTS отображаем итоговую стоимость.
                // injectPrices не знает текущий выбор спины.
                // Решение: в HTML указать конкретный ключ, например, SOFT_PARTS_NO_BASE.
                // Или: использовать атрибут data-spine-context.
                // Допустим, HTML будет выглядеть так:
                // <div data-price-category="SOFT_PARTS" data-price-key="NO" data-spine-context="BASE">
                // <div data-price-category="SOFT_PARTS" data-price-key="VEST" data-spine-context="WITH_SPINE">
                const spineContextSoft = container.dataset.spineContext?.toUpperCase();
                if (spineContextSoft) {
                    // Для 'no' на 'BASE' -> NO_BASE, для 'no' на 'WITH_SPINE' -> NO_WITH_SPINE и т.д.
                    const softPartsKey = `${key}_${spineContextSoft}`;
                    price = PRODUCT_PRICES.MODEL_M.SOFT_PARTS_COSTS[softPartsKey];
                } else {
                    console.warn(`Контекст версии спины не задан для элемента SOFT_PARTS. Цена установлена в 0.`);
                    price = 0;
                }
                break;
            default:
                console.warn(`Неизвестная категория цены: ${category}`);
                price = 0;
        }

        if (price !== undefined) {
            el.textContent = (category !== 'BASE_VERSIONS' ? '+' : '') +
                           new Intl.NumberFormat('ru-RU').format(price) + ' ₽';
            console.log(`Установлена цена для элемента: ${el.textContent}`); // Отладка
        } else {
             console.warn(`Цена для элемента (category: ${category}, key: ${key}) осталась 0.`);
        }
    });

    // Обновляем подсказки (аналогично)
    document.querySelectorAll('.info-icon').forEach(icon => {
        const container = icon.closest('[data-price-category]');
        if (!container) return;

        const category = container.dataset.priceCategory;
        const key = container.dataset.priceKey;
        let price = 0;

        // Логика получения цены аналогична основному циклу
        // Учитываем data-spine-context
        switch (category) {
            case 'BASE_VERSIONS':
                price = PRODUCT_PRICES.MODEL_M.BASE_COSTS[key];
                break;
            case 'MATERIALS':
                 const spineContext = container.dataset.spineContext?.toUpperCase();
                 if (spineContext) {
                     const materialKey = `${key}_${spineContext}`;
                     price = PRODUCT_PRICES.MODEL_M.MATERIAL_MARKUPS[materialKey];
                 } else {
                     console.warn(`Контекст версии спины не задан для подсказки MATERIALS.`);
                     price = 0;
                 }
                break;
            case 'MODULES':
                price = PRODUCT_PRICES.MODEL_M.MODULES[key];
                break;
            case 'SOFT_PARTS':
                 const spineContextSoft = container.dataset.spineContext?.toUpperCase();
                 if (spineContextSoft) {
                     const softPartsKey = `${key}_${spineContextSoft}`;
                     price = PRODUCT_PRICES.MODEL_M.SOFT_PARTS_COSTS[softPartsKey];
                 } else {
                     console.warn(`Контекст версии спины не задан для подсказки SOFT_PARTS.`);
                     price = 0;
                 }
                break;
            default:
                console.warn(`Неизвестная категория цены для подсказки: ${category}`);
                price = 0;
        }

        if (price) {
            const currentTitle = icon.getAttribute('title') || '';
            icon.setAttribute('title', `${currentTitle} (${new Intl.NumberFormat('ru-RU').format(price)} ₽)`);
            if (typeof $ !== 'undefined') {
                $(icon).tooltip('dispose').tooltip();
            }
        }
    });
}

// 3. Инициализация после загрузки DOM
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', injectPrices);
} else {
    injectPrices();
}

// 4. Для использования в других скриптах
window.PRODUCT_PRICES = PRODUCT_PRICES;
