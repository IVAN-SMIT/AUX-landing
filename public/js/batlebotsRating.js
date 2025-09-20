document.addEventListener('DOMContentLoaded', function () {
    const csvData = `
CHN | Roc | Iron Scrap | 9 | 3 | 1 | 1 | 14 | 46 | 0,86 | 0,712
RUS | Daddy Bots | Папочка | 9 | 2 | 1 | 1 | 13 | 43 | 0,85 | 0,708
IND | DS Robotics | Godspeed | 6 | 3 | 0 | 2 | 11 | 33 | 0,82 | 0,821
RUS | Всвядные | Медоед | 6 | 1 | 0 | 2 | 9 | 27 | 0,78 | 0,591
CHN | Ice Orange | Deep Sea Shark | 2 | 1 | 1 | 0 | 4 | 12 | 0,75 | 0,570
RUS | Турбомехатроники | Путевой | 7 | 4 | 0 | 3 | 14 | 40 | 0,79 | 0,568
RUS | Blackout | Легенда №17 | 4 | 1 | 1 | 1 | 7 | 20 | 0,71 | 0,517
RUS | Наследники Земли 2 | Буревестник | 1 | 1 | 1 | 0 | 3 | 8 | 0,67 | 0,451
RUS | Weber Labs | Колобаха | 3 | 1 | 1 | 1 | 6 | 16 | 0,67 | 0,451
RUS | Energy | Iron Wind | 4 | 0 | 0 | 2 | 6 | 16 | 0,67 | 0,451
RUS | Стилекс | ЕЖК | 3 | 1 | 0 | 2 | 6 | 15 | 0,67 | 0,423
RUS | Solarbot | Феникс | 2 | 2 | 1 | 1 | 6 | 15 | 0,67 | 0,423
RUS | Робозон | Rh-Bot | 4 | 1 | 2 | 1 | 8 | 21 | 0,62 | 0,417
RUS | Атом | Атом | 5 | 3 | 0 | 4 | 12 | 29 | 0,67 | 0,409
RUS | Istok Robotics | RedHorn | 2 | 2 | 0 | 2 | 6 | 14 | 0,67 | 0,395
IND | Blanka Bots | Dinanaji | 1 | 3 | 1 | 1 | 6 | 14 | 0,67 | 0,395
IRN | Lavan Team | Lavan | 1 | 1 | 0 | 1 | 3 | 7 | 0,67 | 0,395
TUR | Mersus | Lonley Wolf | 1 | 1 | 0 | 1 | 3 | 7 | 0,67 | 0,395
RUS | Наследники Земли 1 | Турбомаша | 4 | 0 | 2 | 1 | 7 | 18 | 0.57 | 0.374
RUS | Energy Girls | Барракуда | 5 | 3 | 1 | 4 | 13 | 30 | 0.62 | 0.361
IND | PY Robotics | Golden Fury | 2 | 1 | 0 | 2 | 5 | 11 | 0.60 | 0.335
BLR | Crazy Bunny Lab | Бульбатрон | 2 | 1 | 0 | 2 | 5 | 11 | 0.60 | 0.335
RUS | Гурманы | MacCheese | 1 | 0 | 1 | 0 | 2 | 5 | 0.50 | 0.319
RUS | Titans | Warbot | 1 | 0 | 1 | 0 | 2 | 5 | 0.50 | 0.319
IND | Panthers | War Machine | 1 | 0 | 1 | 0 | 2 | 5 | 0.50 | 0.319
RUS | Матанга | Матанга | 1 | 0 | 1 | 0 | 2 | 5 | 0.50 | 0.319
RUS | Team72th | 38th/138th | 3 | 1 | 0 | 3 | 7 | 15 | 0.57 | 0.311
RUS | Большой Брат | Weber | 2 | 2 | 1 | 2 | 7 | 15 | 0.57 | 0.311
RUS | Зверобой | Зверобой | 4 | 2 | 2 | 3 | 11 | 24 | 0.55 | 0.303
IND | Prixx | Sarkhel | 2 | 0 | 1 | 1 | 4 | 9 | 0.50 | 0.287
RUS | Pжавые Самураи | Shredder | 1 | 0 | 0 | 1 | 2 | 4 | 0.50 | 0.255
IRN | SCG | MES | 0 | 1 | 1 | 0 | 2 | 4 | 0.50 | 0.255
RUS | KRF | KRF | 1 | 0 | 0 | 1 | 2 | 4 | 0.50 | 0.255
ARE | TBD | Tohid | 1 | 0 | 0 | 1 | 2 | 4 | 0.50 | 0.255
IRN | Diaco | Roham | 1 | 0 | 0 | 1 | 2 | 4 | 0.50 | 0.255
RUS | Тимирязевцы | Хозяин Полей | 0 | 1 | 1 | 0 | 2 | 4 | 0.50 | 0.255
RUS | Мега Zurk | Зурк/ Кибер-Зурк | 0 | 1 | 1 | 0 | 2 | 4 | 0.50 | 0.255
RUS | Дезинтегратор | Циклобот/ Красный треугольник | 0 | 1 | 1 | 0 | 2 | 4 | 0.50 | 0.255
RUS | АUXILIUM | Б.О.Б.Р./А.L.F.А. | 1 | 1 | 0 | 2 | 4 | 7 | 0.50 | 0.223
RUS | Андромеда | Андромеда | 0 | 1 | 0 | 1 | 2 | 3 | 0.50 | 0.191
RUS | Destructor | Sinus | 2 | 0 | 1 | 2 | 5 | 9 | 0.40 | 0.184
RUS | Kiloff | Стрекоза и Мурабей | 1 | 0 | 1 | 1 | 3 | 5 | 0.33 | 0.143
RUS | Ремонт Свистков | BPTI | 1 | 0 | 1 | 1 | 3 | 5 | 0.33 | 0.143
RUS | Богатыри с Поволжья | Чернозём | 1 | 0 | 0 | 2 | 3 | 4 | 0.33 | 0.114
RUS | Тайфун | Пневмокракен/ Квант | 1 | 0 | 0 | 2 | 3 | 4 | 0.33 | 0.114
RUS | Урфин | Дуболом | 0 | 1 | 1 | 1 | 3 | 4 | 0.33 | 0.114
RUS | Нестибаемые | Гнутель | 0 | 1 | 1 | 1 | 3 | 4 | 0.33 | 0.114
RUS | Пожитители Молнии | Вольт | 0 | 1 | 0 | 2 | 3 | 3 | 0.33 | 0.086
KAZ | Хищники | Егерь | 1 | 0 | 1 | 3 | 5 | 5 | 0.20 | 0.052
BRA | Braabots | Braabum | 0 | 1 | 0 | 3 | 4 | 3 | 0.25 | 0.049
RUS | Шреддер | Шреддер | 0 | 0 | 1 | 0 | 1 | 1 | 0.00 | 0.003
RUS | Большая Семья | Блях Бургер | 0 | 0 | 1 | 0 | 1 | 1 | 0.00 | 0.003
RUS | Робовирус | Робовирус | 0 | 0 | 1 | 0 | 1 | 1 | 0.00 | 0.003
RUS | Алмазное Племя | Алмазный Воин | 0 | 0 | 1 | 0 | 1 | 1 | 0.00 | 0.003
RUS | 141 Мах | Терабол | 0 | 0 | 1 | 0 | 1 | 1 | 0.00 | 0.003
RUS | Красная Угроза | Red Alert | 0 | 0 | 1 | 0 | 1 | 1 | 0.00 | 0.003
RUS | Headliner | Headliner | 0 | 0 | 1 | 0 | 1 | 1 | 0.00 | 0.003
RUS | Izhevsk Dynamics | Дрампер | 0 | 0 | 1 | 0 | 1 | 1 | 0.00 | 0.003
RUS | Молот 0123 | Глепш | 0 | 0 | 1 | 0 | 1 | 1 | 0.00 | 0.003
RUS | Крокодил Гена и Его Друзья (RU) | Гена | 0 | 0 | 1 | 1 | 2 | 1 | 0.00 | 0.001
RUS | SCT | Носорог | 0 | 0 | 1 | 1 | 2 | 1 | 0.00 | 0.001
RUS | ОСБ | Дубр | 0 | 0 | 1 | 1 | 2 | 1 | 0.00 | 0.001
RUS | Мифические Гонщики | Нейтрино/ TE-104 | 0 | 0 | 1 | 1 | 2 | 1 | 0.00 | 0.001
ECU | Junge Demons | Iwias | 0 | 0 | 1 | 1 | 2 | 1 | 0.00 | 0.001
CHL | Chile Robotics Lab | Condor McInire | 0 | 0 | 1 | 1 | 2 | 1 | 0.00 | 0.001
RUS | Сороки Хаоса | Птенец | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Oskol Robotics | Аномалия | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | EPTЛ | Geek Pик | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Wolfram | Варан | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Феникс | Огненный Дракон | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Резолюция | Цефей | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Beekeepers | Vesper | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Kuбер Мамонты | Скорпион | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Rubots | Невалишка | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Кабаны | Франкенштейн | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Высокое Напряжение | Скарабей | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Байкальские Звери | Babr Monster | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Весёлые Тролли | Охотник | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Театр Toons | Bugs Bunny | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Колесо Фортуны | Колесо Фортуны | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Dragon Spirit | Dragon Spirit | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Шмель | Шмель | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Робокор | Робокор | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Matadors | Бык | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Бриллиантовое сердце | Бриллиантбот | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Hay-May | Бузинатор | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Шеф | Шеф | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Weber Robotics | Вульж | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Газонокосильщики | Газонокосилка | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Урал-Батыр | Урал-Батыр | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Регион 716 | Камаз | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Rescue Team | Rockfor | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Новая Эра | Тьма | 0 | 0 | 0 | 1 | 1 | 0 | 0.00 | 0.000
RUS | Мельники | Красный Мельник | 0 | 0 | 0 | 2 | 2 | 0 | 0.00 | 0.000
RUS | Robotic Unit | Дуся | 0 | 0 | 0 | 2 | 2 | 0 | 0.00 | 0.000
RUS | Механические Гладиаторы | Гладиатор/Цезарь | 0 | 0 | 0 | 2 | 2 | 0 | 0.00 | 0.000
RUS | Энтропия | Вакуум/Бозон | 0 | 0 | 0 | 2 | 2 | 0 | 0.00 | 0.000
`;

    // Функция для преобразования CSV в массив объектов
    function parseCSV(csv) {
        return csv.split('\n').map(row => {
            const items = row.split('|').map(item => item.trim());
            if (items.length < 11) return null; // Пропускаем строки с недостаточным количеством данных

            const [
                country,
                team,
                robot,
                wins,
                lossesJudgeDecision,
                lossesKnockout,
                _,
                battles,
                points,
                winCoefficient,
                pointsPerBattleCoefficient
            ] = items;

            return {
                country: country || '', // Если значение отсутствует, используем пустую строку
                team: team || '',
                robot: robot || '',
                wins: parseInt(wins, 10) || 0, // Преобразуем в число, если не получается, используем 0
                lossesJudgeDecision: parseInt(lossesJudgeDecision, 10) || 0,
                lossesKnockout: parseInt(lossesKnockout, 10) || 0,
                battles: parseInt(battles, 10) || 0,
                points: parseInt(points, 10) || 0,
                winCoefficient: parseFloat((winCoefficient || '0').replace(',', '.')) || 0,
                pointsPerBattleCoefficient: parseFloat((pointsPerBattleCoefficient || '0').replace(',', '.')) || 0
            };
        }).filter(row => row !== null); // Удаляем null строки
    }

    // Парсим CSV данные
    const data = parseCSV(csvData);

    // Функция для отображения данных в таблице
    function renderTable(data) {
        const tableBody = document.getElementById('tableBody');
        tableBody.innerHTML = ''; // Очищаем содержимое tbody

        data.forEach((row, index) => {
            const tr = document.createElement('tr');

            tr.innerHTML = `
                <td>${index + 1}</td> <!-- Место -->
                <td>${row.country}</td> <!-- Страна -->
                <td>${row.team}</td> <!-- Команда -->
                <td>${row.robot}</td> <!-- Робот -->
                <td>${row.wins}</td> <!-- Победы -->
                <td>${row.lossesJudgeDecision}</td> <!-- Поражения по решению судей -->
                <td>${row.lossesKnockout}</td> <!-- Поражения ноккаутом -->
                <td>${row.battles}</td> <!-- Количество боев -->
                <td>${row.points}</td> <!-- Набранные очки -->
                <td>${row.winCoefficient.toFixed(2)}</td> <!-- Коэффициент побед -->
                <td>${row.pointsPerBattleCoefficient.toFixed(3)}</td> <!-- Коэффициент очков за бой -->
            `;

            tableBody.appendChild(tr);
        });
    }

    // Функция для сортировки таблицы
    function sortTable(column) {
        let sortedData = [...data];

        switch (column) {
            case 'wins':
                sortedData.sort((a, b) => b.wins - a.wins);
                break;
            case 'lossesJudgeDecision':
                sortedData.sort((a, b) => a.lossesJudgeDecision - b.lossesJudgeDecision);
                break;
            case 'lossesknockout':
                sortedData.sort((a, b) => a.lossesKnockout - b.lossesKnockout);
                break;
            case 'battles':
                sortedData.sort((a, b) => b.battles - a.battles);
                break;
            case 'points':
                sortedData.sort((a, b) => b.points - a.points);
                break;
            case 'winCoefficient':
                sortedData.sort((a, b) => b.winCoefficient - a.winCoefficient);
                break;
            case 'pointsPerBattleCoefficient':
                sortedData.sort((a, b) => b.pointsPerBattleCoefficient - a.pointsPerBattleCoefficient);
                break;
            default:
                break;
        }

        renderTable(sortedData);
    }

    // Инициализация таблицы
    renderTable(data);
});