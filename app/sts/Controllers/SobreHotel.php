<?php
    namespace Sts\Controllers;
    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class SobreHotel {

        public function index() {
            echo "Sobre o Hotel";
        }
    }