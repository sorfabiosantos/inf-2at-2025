<?php

require "connect.php";

$sql = "SELECT * FROM products";
$stmt = $conn->query($sql);
$products = $stmt->fetchAll();

$response = [
    "message" => "Lista de produtos",
    "type" => "success",
    "data" => $products
];

echo json_encode($response);