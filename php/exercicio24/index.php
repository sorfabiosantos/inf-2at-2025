<?php
$message = filter_input(INPUT_GET, 'message', FILTER_DEFAULT);
var_dump($message);
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Exercício 24 - Conversor de Temperatura</title>
</head>
<body>
<main>
    <form action="api/convert-temperature.php" method="post">
        <label for="temperature">Temperatura (°C):</label>
        <input type="number" name="temperature" id="temperature" placeholder="Digite a temperatura" step="0.1">

        <label for="unit">Converter para:</label>
        <select name="unit" id="unit">
            <option value="fahrenheit">Fahrenheit</option>
            <option value="kelvin">Kelvin</option>
        </select>

        <button type="submit">Converter</button>
    </form>

    <section id="result">
        <?= $message ?? ""; ?>
    </section>
</main>
</body>
</html>
