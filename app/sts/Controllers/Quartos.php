<?php
    namespace Sts\Controllers;
    use Core\ConfigView;

    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class Quartos {

        public function index() {
            echo "Pagina Quartos";
            $carregarView = new ConfigView('Views/quartos/quartos');

        }
    }