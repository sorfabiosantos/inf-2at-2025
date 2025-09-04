<?php
// Simulador de investimento com juros compostos e aportes mensais

// Leitura e sanitização mínima
$initialRaw = filter_input(INPUT_POST, 'initial', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$monthlyRaw = filter_input(INPUT_POST, 'monthly', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$annualRaw  = filter_input(INPUT_POST, 'annual_rate', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$monthsRaw  = filter_input(INPUT_POST, 'months', FILTER_SANITIZE_NUMBER_INT);

// Normalização para float/int
$initial = ($initialRaw === null || $initialRaw === '') ? null : (float) str_replace(',', '.', $initialRaw);
$monthly = ($monthlyRaw === null || $monthlyRaw === '') ? null : (float) str_replace(',', '.', $monthlyRaw);
$annual  = ($annualRaw  === null || $annualRaw  === '') ? null : (float) str_replace(',', '.', $annualRaw);
$months  = ($monthsRaw  === null || $monthsRaw  === '') ? null : (int) $monthsRaw;



