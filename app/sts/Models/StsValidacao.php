<?php

namespace Sts\Models;

class StsValidacao
{
    private $Resultado;
    private $Dados;

    public function getResultado()
    {
        return $this->Resultado;
    }

    public function validarEmail(array $Dados = null) {
        $this->Dados = $Dados;

        $email = $Dados['email'];
        $senha = $Dados['senha'];


        $this->Resultado = false;
        $sql = new \Sts\Models\helper\StsRead();

        $sql->execRead('tb_cliente', 'WHERE email =:email LIMIT :limit', ":email={$email}&:limit=1");

        if ($sql->getResultado()) {
            $this->Resultado = true;
        }

    }
    public function validarCpf(array $Dados = null) {
        $this->Dados = $Dados;
        $cpf = $Dados['cpf'];


        $this->Resultado = false;
        $sql = new \Sts\Models\helper\StsRead();

        $sql->execRead('tb_cliente', 'WHERE cpf =:cpf LIMIT :limit', ":cpf={$cpf}&:limit=1");

        if ($sql->getResultado()) {
            $this->Resultado = true;
        }

    }



}