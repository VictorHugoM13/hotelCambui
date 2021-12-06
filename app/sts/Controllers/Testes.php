<?php

namespace Sts\Controllers;

class Testes
{
    private $Dados;

    public function index() {

        $dados = array(
            "nome" => "Victor",
            "cpf" => 123,
            "email" => "victor@gmail.com",
            "senha" => "1234"
        );
        $this->Dados = $dados;
        var_dump($this->Dados);

        $teste = new \Sts\Models\StsLogin();

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
        if ($this->Dados['email'] == "victor@gmail.com") {
            echo "correto" . "<br>";
        }
        else {
            echo "Falhou, esperado victor@gmail.com, Encontrado: ".$this->Dados['email'];
        }
        if ($this->Dados['cpf'] == 123) {
            echo "correto" . "<br>";
        }
        else {
            echo "Falhou, esperado 123, Encontrado: ".$this->Dados['cpf'];
        }
        if ($this->Dados['senha'] == "1234") {
            echo "correto" . "<br>";
        }
        else {
            echo "Falhou, esperado 1234, Encontrado: ".$this->Dados['senha'];
        }



    }
}