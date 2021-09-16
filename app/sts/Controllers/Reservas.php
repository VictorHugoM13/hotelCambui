<?php
    namespace Sts\Controllers;
    use Core\ConfigView;

    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class Reservas {

        public function index() {
            echo "<h1>Pagina Controller Reservas</h1>";
            $modelReservas= new \Sts\Models\StsReservas();
            $modelReservas->index();
            $carregarView = new ConfigView('Views/reservas/reservas');
        }
    }