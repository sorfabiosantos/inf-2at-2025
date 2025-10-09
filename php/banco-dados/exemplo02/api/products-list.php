<?php

require "connect.php";

$query = "SELECT products.*, categories.name AS 'categoryName'
          FROM products
          JOIN categories ON products.categoryId = categories.id";
/**
 * @global $conn
 */
$stmt = $conn->query($query);

//var_dump($stmt);
/*$product = $stmt->fetch();
var_dump($product);

$product = $stmt->fetch();
var_dump($product);*/

/*while ($product = $stmt->fetch()) {
    var_dump($product);
}*/

//var_dump($stmt->fetchAll());

$response = [
    "type" => "success",
    "message" => "Lista de produtos com sucesso!",
    "data" => $stmt->fetchAll()
];

echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);