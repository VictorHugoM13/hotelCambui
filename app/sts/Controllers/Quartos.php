<?php
    namespace Sts\Controllers;
    use Core\ConfigView;

    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class Quartos {

        public function index() {
            echo "<h1>Pagina Controller Quartos</h1>";
            $modelQuartos = new \Sts\Models\StsQuartos();
            $modelQuartos->index();
            $carregarView = new ConfigView('Views/quartos/quartos');

        }
    }