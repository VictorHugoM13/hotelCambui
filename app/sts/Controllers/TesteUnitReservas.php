<?php

    namespace Sts\Controllers;

    class TesteUnitReservas {

        private $Dados;

        public function index() {

            $Dados = array(
                "checkin" => "06/12/2021",
                "checkout" => "20/12/2021",
                "tipo_quarto" => "Suite Casal",
                "valor_diaria"=> 150
            );

            $this->Dados = $Dados;
            $teste = new \Sts\Controllers\Reservas();
            $teste->setDadosTest($this->Dados);

            $passou = true;
            if (!$teste) {
                echo "nao criou";
                $passou = false;
            }
            else {
                echo "objeto criado" . "<br>";
            }

            if ($this->Dados['checkin'] == "06/12/2021"){
                echo "Passou" . "<br>";
            }
            else {
                echo "Falhou, esperado 06/12/2021, Encontrado: ".$this->Dados['checkin']. "<br>";
            }
            if ($this->Dados['checkout'] == "20/12/2021"){
                echo "Passou" . "<br>";
            }
            else {
                echo "Falhou, esperado 20/12/2021, Encontrado: ".$this->Dados['checkout']. "<br>";
            }
            if ($this->Dados['tipo_quarto'] == "Suite Casal"){
                echo "Passou" . "<br>";
            }
            else {
                echo "Falhou, esperado Suite Casal, Encontrado: ".$this->Dados['tipo_quarto']. "<br>";
            }
            if ($this->Dados['valor_diaria'] == 150){
                echo "Passou" . "<br>";
            }
            else {
                echo "Falhou, esperado 150, Encontrado: ".$this->Dados['valor_diaria']. "<br>";
            }
        }

    }

?>