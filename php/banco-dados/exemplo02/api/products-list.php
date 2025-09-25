<?php

require "connect.php";

$query = "SELECT products.*, categories.name AS 'categoryName'
          FROM products
          JOIN categories ON products.categoryId = categories.id";

$stmt = $conn->query($query);

$response = [
    "type" => "success",
    "message" => "Products retrieved successfully.",
    "data" => $stmt->fetchAll()
];

echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);