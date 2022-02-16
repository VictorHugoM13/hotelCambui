<?php

namespace Sts\Controllers;

class Cliente {

    private $Dados;
    private $Nome;
    private $Senha;
    private $Email;
    private $Cpf;


    public function index() {

        if (isset($_SESSION['email'])) {
            session_destroy();
        }
        
        $this->Cpf = filter_input(INPUT_POST, 'cpf');
        $this->Nome = filter_input(INPUT_POST, 'nome');
        $this->Email = filter_input(INPUT_POST, 'email');
        $this->Senha = password_hash(filter_input(INPUT_POST, 'senha'), PASSWORD_DEFAULT);
        
        $this->Dados = [
            'nome' => $this->Nome,
            'senha' => $this->Senha,
            'email' => $this->Email,
            'cpf' => $this->Cpf    
        ];

        

        $this->realizarLogin();
        $this->realizarCadastro();

    }

    # Validando Login
    public function realizarLogin() {
        if (!empty($this->Dados['UserLogin'])) {
            $realizarLogin = new \Sts\Models\StsCliente();
            $realizarLogin->login($this->Dados);
            if ($realizarLogin->getResultado()) {
                header('Location: ' . URL . 'home');

            }
            else {
                echo "<script>alert('E-mail ou senha inválido!!');</script>";
            }
        }
    }

    # Validando Cadastro
    public function realizarCadastro() {
        if (!empty($this->Dados['nome'])) {

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