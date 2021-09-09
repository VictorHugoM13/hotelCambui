<?php
    namespace Sts\Controllers;
    use Core\ConfigView;

    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class Home {

        public function index()
        {
            echo "Pagina Controller Home" . "<br>";
            $carregarView = new ConfigView('Views/home/home');
        }
    }

