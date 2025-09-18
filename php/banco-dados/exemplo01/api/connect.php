<?php

$host = "mysqllocal"; // "localhost" nos computadores da escola
$user = "root";
$password = "asdf1234"; // senha é vazia "" nos computadores da escola a
$database = "db_company";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
];

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$database",
        $user,
        $password,
        $options
    );
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}