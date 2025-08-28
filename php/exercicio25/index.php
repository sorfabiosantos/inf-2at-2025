<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Exercício 25 - Calculadora de Juros Simples</title>
</head>
<body>
    <main>
        <form action="api/calculate-interest.php" method="post">
            <label for="principal">Capital Inicial (R$):</label>
            <input type="number" name="principal" id="principal" placeholder="Digite o capital" step="0.01">

            <label for="rate">Taxa de Juros (%):</label>
            <input type="number" name="rate" id="rate" placeholder="Digite a taxa" step="0.01">

            <label for="time">Tempo (anos):</label>
            <input type="number" name="time" id="time" placeholder="Digite o tempo" step="1">

            <button type="submit">Calcular</button>
        </form>

        <section id="result">
            <?php if (isset($_GET['message'])): ?>
                <p><?= htmlspecialchars($_GET['message']) ?></p>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>
