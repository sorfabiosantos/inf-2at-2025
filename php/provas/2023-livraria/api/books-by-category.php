<?php

require "connection.php";

$categoryId = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);

$query = "SELECT * FROM books WHERE books.category_id = {$categoryId}";

