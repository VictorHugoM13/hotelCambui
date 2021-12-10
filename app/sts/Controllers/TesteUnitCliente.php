<?php

namespace Sts\Controllers;

class TesteUnitCliente {
    private $Dados;

    public function index() {

        $dados = array(
            "nome" => "Victor",
            "cpf" => 11122233344,
            "email" => "victor_osk8@hotmail.com",
            "senha" => "123"
        );
        $this->Dados = $dados;

        $teste = new \Sts\Models\StsCliente();

        $teste->login($this->Dados);

        $passou = true;

        if (!$teste) {
            echo "nao criou";
            $passou = false;
        } else {
            echo "obeto criado". "<br>";
        }

        if ($this->Dados['nome'] == "Victor"){
            echo "correto" . "<br>";
        }
        else {
            echo "Falhou, esperado Victor, Encontrado: ".$this->Dados['nome'];
        }
        if ($this->Dados['email'] == "victor_osk8@hotmail.com") {
            echo "correto" . "<br>";
        }
        else {
            echo "Falhou, esperado victor_osk8@hotmail.com, Encontrado: ".$this->Dados['email'];
        }
        if ($this->Dados['cpf'] == 11122233344) {
            echo "correto" . "<br>";
        }
        else {
            echo "Falhou, esperado 11122233344, Encontrado: ".$this->Dados['cpf'];
        }
        if ($this->Dados['senha'] == "123") {
            echo "correto" . "<br>";
        }
        else {
            echo "Falhou, esperado 123, Encontrado: ".$this->Dados['senha'];
        }

    }
}