<?php

require "connection.php";

$bookId = filter_input(INPUT_GET,"bookId");

$query = "SELECT * FROM books WHERE id = :id";
