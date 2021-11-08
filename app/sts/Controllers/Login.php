<?php

    namespace Sts\Controllers;

    use Core\ConfigView;

    if (!defined('URL')) {
        header('Location : /siteHotel/');
        exit();
    }

    class Login {

        public function index() {

            $carregarView = new ConfigView('Views/login/login');

        }
    }