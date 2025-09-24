<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Exercício 29 - Calculadora de Desconto</title>
</head>
<body>
    <main>
        <header>
            <h1>Calculadora de Desconto</h1>
            <p>Calcule o preço final com base no desconto informado.</p>
        </header>

        <form action="api/calculate-discount.php" method="post">
            <fieldset>
                <legend>Dados</legend>

                <label for="price">Preço (R$):</label>
                <input type="number" name="price" id="price" placeholder="0,00" step="0.01" min="0" required>

                <label for="discount">Desconto (%):</label>
                <input type="number" name="discount" id="discount" placeholder="0" step="0.01" min="0" max="100" required>
            </fieldset>

            <button type="submit">Calcular</button>
        </form>

        <section id="result" aria-live="polite">
            <?php if (isset($_GET['message'])): ?>
                <p><?= htmlspecialchars($_GET['message']) ?></p>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>

