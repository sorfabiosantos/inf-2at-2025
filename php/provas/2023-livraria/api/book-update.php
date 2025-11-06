<?php

require "connection.php";

$book = filter_input_array(INPUT_POST);

$query = "UPDATE books 
          SET title = :title, category_id = :category_id, price = :price 
          WHERE id = :id";