<?php
    namespace Sts\Controllers;

    class TesteUnitLogin
    {
        private $Dados;

        public function index()
        {

            $Dados = array(
                "email" => "victor_osk8@hotmail.com",
                "senha" => "1234"
            );

            $this->Dados = $Dados;
            $teste = new \Sts\Models\StsCliente();

            $teste->login($this->Dados);
            $passou = true;

            if (!$teste) {
                echo "nao criou";
                $passou = false;
            }
            else {
                echo "objeto criado" . "<br>";
            }

            if ($this->Dados['email'] == "victor_osk8@hotmail.com" and $this->Dados['senha'] == "1234") {
                echo "Passou" . "<br>";
            } else {
                echo "Falhou, esperado Email: victor_osk8@hotmail.com, Encontrado: " . $this->Dados['email'] . "<br>"."Esperado Senha:1234, encontrado :".$this->Dados['senha'];
            }

        }
    }
?>