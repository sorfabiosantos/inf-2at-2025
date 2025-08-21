<?php

$array = [];

$array[] = 3;
$array[] = 4;
$array[] = 6;
$array[] = 7;
$array[] = 18;
$array[] = 20;
$array[] = 22;
$array[] = 3;
$array[] = 7;

$arrayPairs = [];

//var_dump($array);

echo "Os elementos pares do vetor são: [";
foreach ($array as $number) {
    if($number % 2 == 0) {
        echo "{$number} ";
    }
}
echo "]<br>";

foreach ($array as $number) {
    if($number % 2 == 0) {
        $arrayPairs[] = $number;
    }
}

var_dump($arrayPairs);