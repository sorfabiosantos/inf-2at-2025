<?php




$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);

//var_dump($name, $lastname, $age);

echo "<h1>Olá, {$name} {$lastname}! Você tem {$age} anos.</h1>";

if($age >= 18) {
    echo "<h2>Você é maior de idade.</h2>";
} else {
    echo "<h2>Você é menor de idade.</h2>";
}
?>

<a href="index.html">Voltar</a>
