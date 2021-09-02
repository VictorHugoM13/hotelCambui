<?php
    namespace Sts\Controllers;
    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class Reservas {

        public function index() {
            echo "Pagina Reservas";
        }
    }