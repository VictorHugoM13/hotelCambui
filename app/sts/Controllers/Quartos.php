<?php
    namespace Sts\Controllers;
    use Core\ConfigView;

    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class Quartos {

        public function index() {
            $modelQuartos= new \Sts\Models\StsQuartos();
            $this->Dados['sts_quarto'] = $modelQuartos->index();
            $carregarView = new ConfigView('Views/quartos/quartos', $this->Dados);
            $carregarView->renderizar();
        }
    }