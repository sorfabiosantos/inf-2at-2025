<?php

$password = "meuCãoRex02";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

var_dump($password, $passwordHash);

if(password_verify("2dfrsd", $passwordHash)){
    echo "Senha OK";
} else {
    echo "Senha Inválida";
}
