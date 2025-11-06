<?php

require "connection.php";

$name = filter_input(INPUT_POST, "name", FILTER_DEFAULT);
$age = filter_input(INPUT_POST, "age", FILTER_DEFAULT);
$medicalRecord = filter_input(INPUT_POST, "medicalRecord", FILTER_DEFAULT);

// Persistir os dados

$query = "INSERT INTO patients (name, age, medical_record) 
          VALUES ('$name', $age, '$medicalRecord')";

$stmt = $conn->query($query);

if($stmt->rowCount() > 0) {
    $response = [
        "type" => "success",
        "message" => "Paciente cadastrado com sucesso!",
        "data" => [
            "id" => $conn->lastInsertId(),
            "name" => $name
        ]
    ];

    echo json_encode($response);
}

