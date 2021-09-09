<?php
    namespace Sts\Controllers;
    use Core\ConfigView;

    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class Reservas {

        public function index()
        {
            echo "Pagina Reservas";
            $carregarView = new ConfigView('Views/reservas/reservas');
        }
    }