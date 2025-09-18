<?php

require "connect.php";

$sql = "SELECT * FROM users";

$stmt = $conn->query($sql);

$users = $stmt->fetchAll();

var_dump($users);