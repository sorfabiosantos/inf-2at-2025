<?php

require "connection.php";

$id = filter_input(INPUT_POST, "id");
$title = filter_input(INPUT_POST, "title");
$categoryId = filter_input(INPUT_POST, "category_id");
$price = filter_input(INPUT_POST, "price");

$query = "UPDATE books 
          SET title = '{$title}', category_id = {$categoryId}, price = {$price} 
          WHERE id = {$id}";