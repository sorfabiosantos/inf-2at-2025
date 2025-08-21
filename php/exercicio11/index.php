<?php

//echo "oi";

$user = [
    "name" => "Fábio",
    "email" => "fabiosantos@ifsul.edu.br"
];

var_dump($user);

$users = [
    [
        "name" => "Fábio",
        "email" => "fabiosantos@ifsul.edu.br"
    ],
    [
        "name" => "Clévis",
        "email" => "clevis@ifsul.edu.br"
    ]
];

var_dump($users);

$arrayNumbers = [2,3,6,8];
$sum = 0;
for($i = 0; $i < count($arrayNumbers); $i++) {
    $sum = $sum + $arrayNumbers[$i];
}
echo "Resultado com for {$sum} <br>";

$sum = 0;
foreach ($arrayNumbers as $index => $number) {
    //var_dump($index, $number);
    $sum = $sum + $number;
}
echo "Resultado com foreach {$sum} <br>";