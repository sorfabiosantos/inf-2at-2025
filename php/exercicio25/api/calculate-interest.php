<?php

$principal = filter_input(INPUT_POST, 'principal', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$rate = filter_input(INPUT_POST, 'rate', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$time = filter_input(INPUT_POST, 'time', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

if ($principal === null || $rate === null || $time === null || !is_numeric($principal) || !is_numeric($rate) || !is_numeric($time)) {
    header('Location: ../index.php?message=Por favor, insira valores válidos.');
    exit;
}

$interest = $principal * ($rate / 100) * $time;
$total = $principal + $interest;

$message = "O montante final é R$ " . number_format($total, 2) . ".";
header("Location: ../index.php?message=" . urlencode($message));
exit;
