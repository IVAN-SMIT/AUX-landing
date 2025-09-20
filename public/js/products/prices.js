// 1. Цены
const PRODUCT_PRICES = {
        MODEL_M: {
            BASE_VERSIONS: {
            BASE: 107736,
            WITH_SPINE: 133352
        },
        MATERIALS: {
            ALUMINUM: 0,
            TITANIUM: 51950
        },
        ADDITIONAL_COSTS: {
            TITANIUM_WITH_SPINE: 24977
        },
        MODULES: {
            THIRD_HAND: 16000,
            TACKLE: 5000,
            BACKPACK: 3000,
            KNEE:5800
        },
        SOFT_PARTS: {
            NO: 0,
            YES: 12777
        },
        
        // Добавляем метод расчета цены
        calculatePrice: function(selections) {
            let price = 0;
            // Базовая цена в зависимости от версии
            const baseVersion = selections.spine === 'with-spine'
                ? this.BASE_VERSIONS.WITH_SPINE
                : this.BASE_VERSIONS.BASE;
            price += baseVersion;
            // Добавляем стоимость материала
            if (selections.material === 'titanium') {
                price += this.MATERIALS.TITANIUM;
            } else {
                price += this.MATERIALS.ALUMINUM;
            }
            // ДОПОЛНИТЕЛЬНАЯ ПРОВЕРКА: если ТИТАН + СПИНА → добавляем специальную надбавку
            if (selections.material === 'titanium' && selections.spine === 'with-spine') {
                price += this.ADDITIONAL_COSTS.TITANIUM_WITH_SPINE;
            }
            // Добавляем стоимость модулей, если выбраны (обновлено для массива)
            if (selections.module && selections.module !== 'none' && Array.isArray(selections.module)) {
                selections.module.forEach(mod => {
                    const moduleKey = mod.toUpperCase().replace('-', '_');
                    if (this.MODULES[moduleKey] !== undefined) {
                        price += this.MODULES[moduleKey];
                    }
                });
            }
            // Добавляем стоимость мягких частей, если выбраны
            if (selections.softParts === 'yes') {
                price += this.SOFT_PARTS.YES;
            }
            return price;
        }
    }
};

// 2. Функция для вставки цен в HTML
function injectPrices() {
    document.querySelectorAll('[data-price-placeholder]').forEach(el => {
        const container = el.closest('[data-price-category]');
        if (!container) return;

        const category = container.dataset.priceCategory;
        const key = container.dataset.priceKey;
        const price = PRODUCT_PRICES.MODEL_M[category]?.[key];

        if (price !== undefined) {
            el.textContent = (category !== 'BASE_VERSIONS' ? '+' : '') + 
                           new Intl.NumberFormat('ru-RU').format(price) + ' ₽';
        }
    });

    // Обновляем подсказки
    document.querySelectorAll('.info-icon').forEach(icon => {
        const container = icon.closest('[data-price-category]');
        if (!container) return;

        const category = container.dataset.priceCategory;
        const key = container.dataset.priceKey;
        const price = PRODUCT_PRICES.MODEL_M[category]?.[key];

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
window.PRODUCT_PRICES = PRODUCT_PRICES; // <-- Исправленная строка
