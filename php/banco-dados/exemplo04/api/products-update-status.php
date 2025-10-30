<?php

require "connect.php";
$status = filter_input(INPUT_GET, 'status', FILTER_DEFAULT);
$productId = filter_input(INPUT_GET, 'productId', FILTER_VALIDATE_INT);

//var_dump($status, $productId);

if(!isset($status, $productId)) {
    $response = [
        "type" => "error",
        "message" => "Informações inválidas!"
    ];
    echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

$query = "UPDATE products
          SET status = '{$status}'
          WHERE products.id = {$productId}";

$stmt = $conn->query($query);

if(!$stmt) {
    $response = [
        "type" => "error",
        "message" => "Houve um problema ao atualizar o produto!"
    ];
    echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

$response = [
    "type" => "success",
    "message" => "Produtos atualizado com sucesso!"
];

echo json_encode($response, JSON_UNESCAPED_UNICODE);