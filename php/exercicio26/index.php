<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Exercício 26 - Investimento com Juros Compostos</title>
</head>
<body>
    <main>
        <header>
            <h1>Simulador de Investimento</h1>
            <p>Calcule o montante final com juros compostos e aportes mensais.</p>
        </header>

        <form action="api/calculate-compound.php" method="post">
            <fieldset>
                <legend>Dados do investimento</legend>

                <label for="initial">Capital inicial (R$):</label>
                <input type="number" name="initial" id="initial" placeholder="0,00" step="0.01" min="0">

                <label for="monthly">Aporte mensal (R$):</label>
                <input type="number" name="monthly" id="monthly" placeholder="0,00" step="0.01" min="0">

                <label for="annual_rate">Taxa de juros (% ao ano):</label>
                <input type="number" name="annual_rate" id="annual_rate" placeholder="Ex.: 12" step="0.01" min="0">

                <label for="months">Prazo (meses):</label>
                <input type="number" name="months" id="months" placeholder="Ex.: 120" step="1" min="1">
            </fieldset>

            <button type="submit">Simular</button>
        </form>

        <section id="result" aria-live="polite">
            <?php if (isset($_GET['message'])): ?>
                <p><?= htmlspecialchars($_GET['message']) ?></p>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>

