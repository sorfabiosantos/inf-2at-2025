<?php
$principal = filter_input(INPUT_POST, 'principal', FILTER_VALIDATE_FLOAT);
$rate = filter_input(INPUT_POST, 'rate', FILTER_VALIDATE_FLOAT);
$months = filter_input(INPUT_POST, 'months', FILTER_VALIDATE_INT);


