<?php

namespace Sts\Controllers;
use Core\ConfigView;

class CadastrarUsuario {

    private $Dados;


    public function cadastrarUsuario() {

        $this->Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if (!empty($this->Dados['CadUserCadastro'])) {
            unset($this->Dados['CadUserCadastro']);

            $cadastro = new \Sts\Models\helper\StsCreate();
            $cadastro->execCreate('tb_cliente', $this->Dados);

            $carregarView = new \Core\ConfigView('Views/login/sucess', $this->Dados);
        }
        else {
            $carregarView = new \Core\ConfigView('Views/login/login', $this->Dados);
            $carregarView->renderizarLogin();

        }

    }



}