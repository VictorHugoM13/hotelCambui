<?php

namespace Sts\Controllers;

class Login
{

    private $Dados;

    public function index() {
        $this->Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if (!empty($this->Dados['UserLogin'])) {
            $vizualizarLogin = new \Sts\Models\StsLogin();
            $vizualizarLogin->login($this->Dados);
            if ($vizualizarLogin->getResultado()) {
                header('Location: '. URL . 'home');
            }
            else {
                echo "<script>alert('E-mail ou senha inválido!!');</script>";
            }
        }

        if (!empty($this->Dados['CadUserCadastro'])) {
            unset($this->Dados['CadUserCadastro']);

            $cadastro = new \Sts\Models\helper\StsCreate();

            $cadastro->execCreate('tb_cliente', $this->Dados);

            echo "<script>alert('Cliente cadastrado com sucesso!!');</script>";
        }

        else {
            $carregarView = new \Core\ConfigView('Views/login/login', $this->Dados);
            $carregarView->renderizarLogin();

        }

        $carregarView = new \Core\ConfigView('Views/login/login', $this->Dados);
        $carregarView->renderizarLogin();

    }

}