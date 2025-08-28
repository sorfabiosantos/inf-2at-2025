<?php

$temperature = filter_input(INPUT_POST, 'temperature', FILTER_DEFAULT, FILTER_FLAG_ALLOW_FRACTION);
$unit = filter_input(INPUT_POST, 'unit', FILTER_DEFAULT);

// Calculo...
$result = 200;
//$message = "Resultado: 30";
header("Location: ../index.php?message=Resultado {$result}");