<?php
    namespace Sts\Controllers;
    use Core\ConfigView;

    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class Home {

        private $Result;

        public function index() {
            //echo "<h1>Pagina Controller Home</h1>";
            $modelHome = new \Sts\Models\StsHome();
            $this->Dados = $modelHome->index();


            $carregarView = new ConfigView('Views/home/home', $this->Dados);
        }
    }

