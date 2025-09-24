<?php
$distance = filter_input(INPUT_POST, 'distance', FILTER_VALIDATE_FLOAT);
$unit = filter_input(INPUT_POST, 'unit', FILTER_DEFAULT);