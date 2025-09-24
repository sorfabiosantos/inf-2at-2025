<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Exercício 30 - Parcelas com Juros Simples</title>
</head>
<body>
    <main>
        <header>
            <h1>Parcelas com Juros Simples</h1>
            <p>Calcule o valor final e a parcela mensal.</p>
        </header>

        <form action="api/calculate-installments.php" method="post">
            <fieldset>
                <legend>Dados</legend>

                <label for="principal">Valor (R$):</label>
                <input type="number" name="principal" id="principal" placeholder="0,00" step="0.01" min="0" required>

                <label for="rate">Juros ao mês (%):</label>
                <input type="number" name="rate" id="rate" placeholder="0" step="0.01" min="0" required>

                <label for="months">Meses:</label>
                <input type="number" name="months" id="months" placeholder="0" step="1" min="1" required>
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

