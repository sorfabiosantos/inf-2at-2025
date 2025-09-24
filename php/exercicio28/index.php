<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Exercício 28 - Calculadora de Idade</title>
</head>
<body>
    <main>
        <header>
            <h1>Calculadora de Idade</h1>
            <p>Informe sua data de nascimento para saber sua idade.</p>
        </header>

        <form action="api/calculate-age.php" method="post">
            <fieldset>
                <legend>Dados</legend>

                <label for="birthdate">Data de nascimento:</label>
                <input type="date" name="birthdate" id="birthdate" required>
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

