<?php
    namespace Sts\Controllers;
    use Core\ConfigView;

    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class SobreHotel {

        public function index() {
            echo "<h1>Controller Sobre o Hotel</h1>";
            $modelobreHotel= new \Sts\Models\StsSobreHotel();
            $modelobreHotel->index();
            $carregarView = new ConfigView('Views/sobre/sobrehotel');
        }
    }