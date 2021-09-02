<?php
    namespace Sts\Controllers;
    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class Quartos {

        public function index() {
            echo "Pagina Quartos";
        }
    }