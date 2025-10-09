<?php

require "connect.php";

// Somente para teste de dados recebidos
//echo json_encode($_POST);
//exit;

$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price');
$categoryId = filter_input(INPUT_POST, 'categoryId');

$query = "INSERT INTO products (id, categoryId, name, price)
          VALUES (NULL, {$categoryId}, '{$name}', {$price})";

$stmt = $conn->query($query);

if($stmt->rowCount() == 1){
    $response = [
        "type" => "success",
        "message" => "Produto cadastrado com sucesso!",
    ];
    echo json_encode($response);
    exit;
}

$response = [
    "type" => "error",
    "message" => "Produto não cadastrado!",
];
echo json_encode($response);
