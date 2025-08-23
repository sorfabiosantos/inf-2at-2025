<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/styles.css">
    <title>Exercício 21 - Envio de Informações</title>
</head>
<body>
<form action="user-hello.php" method="post">
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name">
    <label for="lastname">Sobrenome:</label>
    <input type="text" name="lastname" id="lastname">
    <label for="age">Idade:</label>
    <input type="number" name="age" id="age">
    <input type="submit" value="Enviar">
</form>
</body>
</html>
