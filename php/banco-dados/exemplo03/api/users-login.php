<?php

require "connect.php";

$email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
$password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

// persistir os dados

if(empty($email) || empty($password)) {
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

$query = "SELECT * FROM users WHERE email = '{$email}'";
$stmt = $conn->query($query);

if($stmt->rowCount() == 0) {
    $response = [
        "type" => "error",
        "message" => "E-mail não cadastrado!",
    ];
    echo json_encode($response);
    exit;
}

$user = $stmt->fetch();

if(!password_verify($password, $user->password)) {
    $response = [
        "type" => "error",
        "message" => "Senha Incorreta!",
    ];
    echo json_encode($response);
    exit;
}

unset($user->password);

$response = [
    "type" => "success",
    "message" => "Usuário logado com sucesso!",
    "data" => $user
];

echo json_encode($response);