<?php

require "connection.php";

$bookId = filter_input(INPUT_GET, "bookId");

$query = "DELETE FROM books WHERE id = :bookId";