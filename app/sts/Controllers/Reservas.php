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
            $modelQuartos= new \Sts\Models\StsQuartos();
            $this->Dados['tb_quarto'] = $modelQuartos->index();

            $carregarView = new ConfigView('Views/reservas/reservas', $this->Dados);
            $carregarView->renderizar();
        }




    }