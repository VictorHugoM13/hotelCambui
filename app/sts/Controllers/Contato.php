<?php
    namespace Sts\Controllers;
    use Core\ConfigView;

    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class Contato {

        public function index() {
            echo "<h1>Pagina Controller Contato</h1>";
            $modelContato= new \Sts\Models\StsContato();
            $modelContato->index();
            $carregarView = new ConfigView('Views/contato/contato');
        }
    }