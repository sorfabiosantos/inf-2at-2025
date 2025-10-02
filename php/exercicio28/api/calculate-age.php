<?php
$birth = filter_input(INPUT_POST, 'birthdate', FILTER_DEFAULT) ?? null;

var_dump(date("Y-m-d"));

$today = explode("-", date("d-m-Y"));
var_dump($today);