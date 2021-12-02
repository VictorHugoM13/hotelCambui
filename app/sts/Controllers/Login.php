<?php

namespace Sts\Controllers;

class Login {

    private $Dados;

    public function index() {
        # Validando Login
        if (isset($_SESSION['email'])) {
            session_destroy();
        }
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

        # Validando Cadastro
        if (!empty($this->Dados['CadUserCadastro'])) {

            unset($this->Dados['CadUserCadastro']);
            # Verificando se o E-mail ja existe no banco de dados
            $validarEmail = new \Sts\Models\StsValidacao();
            $validarEmail->validarEmail($this->Dados);

            # Verificando se o CPF ja existe no banco de dados
            $validarCpf = new \Sts\Models\StsValidacao();
            $validarCpf->validarCpf($this->Dados);

            if ($validarEmail->getResultado()) {
                echo "<script>alert('E-mail ja cadastrado!');</script>";
            }

            else if ($validarCpf->getResultado()) {
                echo "<script>alert('CPF ja cadastrado!');</script>";
            }
            else {

                $cadastro = new \Sts\Models\helper\StsCreate();

                $cadastro->execCreate('tb_cliente', $this->Dados);

                echo "<script>alert('Cliente cadastrado com sucesso!!');</script>";
            }
        }
        else {
            $carregarView = new \Core\ConfigView('Views/login/login', $this->Dados);
            $carregarView->renderizarLogin();

        }

        $carregarView = new \Core\ConfigView('Views/login/login', $this->Dados);
        $carregarView->renderizarLogin();

    }

}