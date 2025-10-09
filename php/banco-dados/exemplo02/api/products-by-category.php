<?php

require "connect.php";

$categoryId = filter_input(INPUT_GET, "categoryId", FILTER_VALIDATE_INT);
if (!filter_var($categoryId, FILTER_VALIDATE_INT)) {
    $response = [
        "type" => "error",
        "message" => "A categoria precisa ser informada"
    ];

    echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    return;
}

//var_dump($categoryId);

$query = "SELECT products.*, categories.name as 'categoryName'
          FROM products
          JOIN categories ON categories.id = products.categoryId
          WHERE products.categoryId = {$categoryId}";

$stmt = $conn->query($query);

$response = [
    "type" => "success",
    "message" => "Lista de produtos com sucesso!",
    "data" => $stmt->fetchAll()
];

echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);