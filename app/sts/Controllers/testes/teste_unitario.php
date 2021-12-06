<?php

include_once "StsLogin.php";

$dados = array(
    "nome"=>"Victor",
    "cpf"=>123,
    "email"=>"victor@gmail.com"
);

$p = new \Sts\Models\StsLogin();
$p->login($dados);

$passou = true;

if (!p) {
    echo "nao criou";
    $passou = false;
}
else {
    echo "obeto criado";
}
