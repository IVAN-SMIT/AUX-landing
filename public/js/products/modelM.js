// Инициализация переменных
let currentModelPath = 'models/null.glb'; // Начальная модель
const modal3D = document.getElementById('modal-3d-view'); // Новое модальное окно для 3D
const close3DModalButton = document.querySelector('.close-3d-modal'); // Кнопка закрытия модального окна
const view3DButton = document.getElementById('view-3d-button'); // Кнопка "Посмотреть в 3D"
const staticImage = document.getElementById('static-image'); // Статическое изображение
const radioButtons = document.querySelectorAll("input[name='config']"); // Радиокнопки выбора конфигурации
const priceElement = document.getElementById('price'); // Элемент для отображения цены
const configOptions = document.querySelectorAll('.config-option'); // Элементы конфигураций


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
    modalCamera.position.set(0, 0, 15);

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
    modalControls.enableZoom = false;
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
            currentModel.scale.set(0.1, 0.1, 0.1);
            currentModel.rotation.y = 135;
            modalScene.add(currentModel);

            // Анимация вращения
            function animate() {
                requestAnimationFrame(animate);
                currentModel.rotation.y += 0.001;
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


