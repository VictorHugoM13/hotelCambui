<?php
    namespace Sts\Controllers;
    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class Contato {

        public function index() {
            echo "Pagina Contato";
        }
    }