<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Exercício 23 - Calculadora de IMC</title>
</head>
<body>
<form action="api/calculate-imc.php" method="post">
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" placeholder="Seu nome">

    <label for="weight">Peso (kg):</label>
    <input type="number" name="weight" id="weight" placeholder="Seu peso" step="0.1" min="0">

    <label for="height">Altura (m):</label>
    <input type="number" name="height" id="height" placeholder="Sua altura" step="0.01" min="0">

    <input type="submit" value="Calcular IMC">
</form>
</body>
</html>