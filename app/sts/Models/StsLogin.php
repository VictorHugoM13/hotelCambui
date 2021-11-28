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



        if ($sql->getResultado()){
            $this->Resultado = true;
        }


    }

}