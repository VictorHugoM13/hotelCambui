<?php
    namespace Sts\Controllers;
    use Core\ConfigView;

    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class SobreHotel {

        public function index() {
            echo "Sobre o Hotel";
            $carregarView = new ConfigView('Views/sobre/sobrehotel');
        }
    }