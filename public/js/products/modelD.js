// Инициализация переменных
let currentModelPath = 'models/null2.glb'; // Начальная модель
const modal3D = document.getElementById('modal-3d-view'); // Новое модальное окно для 3D
const close3DModalButton = document.querySelector('.close-3d-modal'); // Кнопка закрытия модального окна
const view3DButton = document.getElementById('view-3d-button'); // Кнопка "Посмотреть в 3D"
const staticImage = document.getElementById('static-image'); // Статическое изображение
const radioButtons = document.querySelectorAll("input[name='config']"); // Радиокнопки выбора конфигурации
const priceElement = document.getElementById('price'); // Элемент для отображения цены
const configOptions = document.querySelectorAll('.config-option'); // Элементы конфигураций

const version = document.getElementById('version');


let modalScene, modalCamera, modalRenderer, modalControls, currentModel;

// Функция для инициализации Three.js в модальном окне
function initModal3D() {
    const modalContainer = document.getElementById('modal-model-container');
    modalContainer.innerHTML = ''; // Очищаем контейнер перед созданием нового рендерера

    // Создаем новую сцену, камеру и рендерер
    modalScene = new THREE.Scene();
    modalCamera = new THREE.PerspectiveCamera(75, modalContainer.offsetWidth / modalContainer.offsetHeight, 0.1, 1000);
    modalRenderer = new THREE.WebGLRenderer({ antialias: true });
    modalRenderer.setSize(modalContainer.offsetWidth, modalContainer.offsetHeight);
    modalContainer.appendChild(modalRenderer.domElement);

    // Настройка камеры
    modalCamera.position.set(0, 0, 5); // Расположим камеру немного ближе

    // Добавление освещения
    const directionalLight = new THREE.DirectionalLight(0xcccccc, 1);
    directionalLight.position.set(50, 10, 50);
    modalScene.add(directionalLight);

    const backLight = new THREE.DirectionalLight(0xFFFFCC, 0.5);
    backLight.position.set(0, 0, -10);
    modalScene.add(backLight);

    const ambientLight = new THREE.AmbientLight(0xffffff, 0.5);
    modalScene.add(ambientLight);

    // Инициализация OrbitControls
    modalControls = new THREE.OrbitControls(modalCamera, modalRenderer.domElement);
    modalControls.enablePan = false;
    modalControls.enableZoom = true;
    modalControls.enableDamping = true;
    modalControls.dampingFactor = 0.05;
    modalControls.minPolarAngle = Math.PI / 2;
    modalControls.maxPolarAngle = Math.PI / 2;
    modalControls.target.set(0, 0, 0);
    modalControls.update();
}

// Функция для загрузки модели в модальное окно
function loadModelInModal(modelPath) {
    

    const loader = new THREE.GLTFLoader();
    loader.load(
        modelPath,
        function (gltf) {
            if (currentModel) {
                modalScene.remove(currentModel); // Удаляем старую модель, если она есть
            }

            currentModel = gltf.scene;
            currentModel.scale.set(0.1, 0.1, 0.1); // Масштабирование модели
            currentModel.rotation.y = 135; // Начальное положение
            modalScene.add(currentModel);

            // Анимация вращения
            function animate() {
                requestAnimationFrame(animate);
                currentModel.rotation.y += 0.001; // Вращение по оси Y
                modalRenderer.render(modalScene, modalCamera);
                modalControls.update();
            }
            animate();

            
        },
        undefined,
        function (error) {
            console.error('Ошибка загрузки модели:', error);
                    }
    );
}

// Открытие модального окна при нажатии на кнопку "Посмотреть в 3D"
view3DButton.addEventListener('click', () => {
    modal3D.style.display = 'block';
    initModal3D();
    loadModelInModal(currentModelPath);
});

// Закрытие модального окна
close3DModalButton.addEventListener('click', () => {
    modal3D.style.display = 'none';
    // Очистка сцены при закрытии
    if (currentModel) {
        modalScene.remove(currentModel);
        currentModel = null;
    }
});

// Закрытие модального окна при клике вне его
window.addEventListener('click', (event) => {
    if (event.target === modal3D) {
        modal3D.style.display = 'none';
        // Очистка сцены при закрытии
        if (currentModel) {
            modalScene.remove(currentModel);
            currentModel = null;
        }
    }
});

// Обработчик изменения выбранной конфигурации
const priceElementModal = document.getElementById("priceModal");
const selectedConfigurationElement = document.getElementById("selected-configuration");


radioButtons.forEach((button, index) => {
    button.addEventListener("change", function () {
        const price = this.getAttribute("data-price");
        priceElement.textContent = `${price}₽`;
        priceElementModal.textContent = `${price}₽`;

        // Убираем окантовку со всех иконок
        configOptions.forEach(option => option.classList.remove('selected'));

        // Добавляем окантовку для выбранной конфигурации
        configOptions[index].classList.add('selected');

        // Обновляем статическое изображение
        const configName = this.value.toLowerCase();
        const imagePath = `img/products/${configName}.webp`; // Путь к изображению высокого качества
        staticImage.src = imagePath;

        // Обновляем путь к модели
        if (button.value === 'base') {
            currentModelPath = 'models/basemodeld.glb';
            selectedConfigurationElement.textContent = "Базовая конфигурация";
        } else if (button.value === 'premium') {
            currentModelPath = 'models/modelD-gen.glb';
            selectedConfigurationElement.textContent = "Генераторная конфигурация";
        }
        document.getElementById('version').textContent = 'AUXLIUM Model D';
        
    });
});

// Обновление рендера при изменении размера окна
window.addEventListener('resize', () => {
    if (modalRenderer) {
        const modalContainer = document.getElementById('modal-model-container');
        const width = modalContainer.offsetWidth;
        const height = modalContainer.offsetHeight;
        modalRenderer.setSize(width, height);
        modalCamera.aspect = width / height;
        modalCamera.updateProjectionMatrix();
    }
});

// Данные для характеристик
const versionData = {
    premium: {
        weight: "3.2 кг",
        material: "Алюминий",
        height: "100 см",
        width: "50 см",
        depth: "40 см",
        time: "4 ч"
    },
    base: {
        weight: "2.5 кг",
        material: "Алюминий",
        height: "100 см",
        width: "45 см",
        depth: "40 см",
        time: "-"
    }
};

// Элементы для изменения значений
const weightElement = document.getElementById("weight");
const materialElement = document.getElementById("material");
const heightElement = document.getElementById("height");
const widthElement = document.getElementById("width");
const depthElement = document.getElementById("depth");
const timeElement = document.getElementById("time");

// Обработчик события изменения выпадающего списка
document.getElementById("version-select").addEventListener("change", function () {
    const selectedVersion = this.value;

    // Обновляем значения в таблице
    weightElement.textContent = versionData[selectedVersion].weight;
    materialElement.textContent = versionData[selectedVersion].material;
    heightElement.textContent = versionData[selectedVersion].height;
    widthElement.textContent = versionData[selectedVersion].width;
    depthElement.textContent = versionData[selectedVersion].depth;
    timeElement.textContent = versionData[selectedVersion].time;
});