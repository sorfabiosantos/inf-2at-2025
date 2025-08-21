<?php



$array = [2,4,5,7,9];

//var_dump($array, count($array));
$sum = 0;

// utilzando o for

for($i = 0; $i < count($array); $i++) {
  //var_dump($i, $array[$i]);
  $sum += $array[$i];
}
$avg = $sum / count($array);
echo "A soma dos elementos do vetor é {$sum}<br>";
echo "A média dos elementos é {$avg}<br>";
$sum = 0;

foreach ($array as $i => $number) {
    //var_dump($i, $number);
    $sum += $number;
}

$avg = $sum / count($array);
echo "A soma dos elementos do vetor é {$sum}<br>";
echo "A média dos elementos é {$avg}<br>";
$sum = 0;
// fazer com while
$sum = 0;
// fazer com do