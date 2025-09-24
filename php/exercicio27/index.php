<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Exercício 27 - Conversor de Distância</title>
</head>
<body>
    <main>
        <header>
            <h1>Conversor de Distância</h1>
            <p>Converta entre quilômetros e milhas.</p>
        </header>

        <form action="api/convert-distance.php" method="post">
            <fieldset>
                <legend>Dados</legend>

                <label for="distance">Distância:</label>
                <input type="number" name="distance" id="distance" placeholder="0,00" step="0.01" min="0" required>

                <label for="unit">Converter:</label>
                <select name="unit" id="unit" required>
                    <option value="km_to_mi">Quilômetros ➜ Milhas</option>
                    <option value="mi_to_km">Milhas ➜ Quilômetros</option>
                </select>
            </fieldset>

            <button type="submit">Converter</button>
        </form>

        <section id="result" aria-live="polite">
            <?php if (isset($_GET['message'])): ?>
                <p><?= htmlspecialchars($_GET['message']) ?></p>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>

