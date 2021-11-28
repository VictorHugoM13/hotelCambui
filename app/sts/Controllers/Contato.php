<?php
    namespace Sts\Controllers;
    use Core\ConfigView;

    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class Contato {

        public function index() {
        
            $carregarView = new ConfigView('Views/contato/contato');
            $carregarView->renderizar();
        }
    }