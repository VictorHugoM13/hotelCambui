<?php

namespace Sts\Models;

class StsLogin {

    private $Resultado;
    private $Dados;


    public function getResultado()
    {
        return $this->Resultado;
    }

    public function login(array $Dados = null) {
        $this->Dados = $Dados;


        $email = $Dados['email'];
        $senha = $Dados['senha'];


        $this->Resultado = false;
        $sql = new \Sts\Models\helper\StsRead();

        $sql->execRead('tb_cliente', 'WHERE email =:email and senha = :senha LIMIT :limit', ":email={$email}&:senha={$senha}&:limit=1");

        if ($sql->getResultado()) {
            $Dados = $sql->getResultado();
            $_SESSION['email'] = $Dados[0]['email'];
            $_SESSION['id'] = $Dados[0]['id'];
            $_SESSION['nome'] = $Dados[0]['nome'];
            $_SESSION['cpf'] = $Dados[0]['cpf'];
            $this->Resultado = true;
        }
    }

}