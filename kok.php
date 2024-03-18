<!DOCTYPE html>
<html>
<head>
    <title>Преобразование температуры</title>
</head>
<body>
<h2>Преобразование температуры</h2>
<form method="post">
    <label>Выберите единицы измерения:</label><br>
    <input type="radio" name="unit" value="celsius" checked> Цельсия<br>
    <input type="radio" name="unit" value="fahrenheit"> Фаренгейта<br><br>
    <label>Введите температуру:</label><br>
    <input type="text" name="temperature"><br><br>
    <input type="submit" value="Преобразовать">
</form>

<?php
// Функция для преобразования температуры из Цельсия в Фаренгейты
function celsius_to_fahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

// Функция для преобразования температуры из Фаренгейтов в Цельсия
function fahrenheit_to_celsius($fahrenheit) {
    return ($fahrenheit - 32) * 5/9;
}

// Проверяем, были ли отправлены единицы измерения и температура из формы
if(isset($_POST['unit']) && isset($_POST['temperature'])) {
    // Получаем выбранные единицы измерения и введенную температуру из формы
    $unit = $_POST['unit'];
    $temperature = floatval($_POST['temperature']);

    // Преобразуем температуру в зависимости от выбранных единиц измерения
    if($unit === "celsius") {
        $converted_temperature = celsius_to_fahrenheit($temperature);
        echo "<p>Температура в Фаренгейтах: $converted_temperature °F</p>";
    } else {
        $converted_temperature = fahrenheit_to_celsius($temperature);
        echo "<p>Температура в Цельсиях: $converted_temperature °C</p>";
    }
}
?>
</body>
</html>