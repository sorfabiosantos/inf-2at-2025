<?php

require "connect.php";

$name = filter_input(INPUT_POST, 'name', FILTER_DEFAULT);
$email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
$password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

// persistir os dados

if(empty($name) || empty($email) || empty($password)) {
    $response = [
        "type" => "error",
        "message" => "Todos os campos devem ser preenchidos!",
    ];
    echo json_encode($response);
    exit;
}

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response = [
        "type" => "error",
        "message" => "Isso não é um e-0mail valido!",
    ];
    echo json_encode($response);
    exit;
}

// Verificar se o e-mail já existe
$query = "SELECT * FROM users WHERE email = '{$email}'";
$stmt = $conn->query($query);
if($stmt->rowCount() == 1){
    $response = [
        "type" => "error",
        "message" => "E-mail já cadastrado!",
    ];
    echo json_encode($response);
    exit;
}

// Criptografar a senha
$password = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO users (id, name, email, password)
          VALUES (NULL, '{$name}', '{$email}', '{$password}')";

$stmt = $conn->query($query);

if($stmt->rowCount() == 0){
    $response = [
        "type" => "error",
        "message" => "Ocorreu um erro ao cadastrar usuário!",
    ];
    echo json_encode($response);
    exit;
}

$response = [
    "type" => "success",
    "message" => "Usuário cadastrado com sucesso!",
];

echo json_encode($response);