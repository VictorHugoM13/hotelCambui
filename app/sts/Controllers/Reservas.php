<?php
    namespace Sts\Controllers;
    use Core\ConfigView;

    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class Reservas {

        private $Dados;

        public function index() {


            $this->Dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            if (!empty($this->Dados['CadReservas'])) {
                unset($this->Dados['CadReservas']);
                unset($this->Dados['nome']);
                unset($this->Dados['email']);
                $reserva = new \Sts\Models\helper\StsCreate();
                $reserva->execCreate('tb_reserva', $this->Dados);
                echo "<script>alert('Reserva realizada com Sucesso!');</script>";
                header('Location: '. URL . 'home');
            }
            $modelQuartos= new \Sts\Models\StsQuartos();
            $this->Dados['tb_quarto'] = $modelQuartos->index();

            $carregarView = new ConfigView('Views/reservas/reservas', $this->Dados);

            $carregarView->renderizar();


        }




    }