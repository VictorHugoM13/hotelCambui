<?php
    namespace Sts\Controllers;
    use Core\ConfigView;

    if (!defined('URL')) {
        header('Location : /siteHotel/');
        exit();
    }

    class Home {

        private $Result;

        public function index() {
            #if (!isset($_SESSION['email'])) {
             #   header('Location: '. URL . 'login');
            #}
            //echo "<h1>Pagina Controller Home</h1>";
            $modelHome = new \Sts\Models\StsCarousels();
            $this->Dados['sts_carousels'] = $modelHome->index();

            $modelServicos = new \Sts\Models\StsServicos();
            $this->Dados['sts_servicos'] = $modelServicos->index();

            $modelHistoria = new \Sts\Models\StsHistoria();
            $this->Dados['sts_historia'] = $modelHistoria->index();

            $carregarView = new ConfigView('Views/home/home', $this->Dados);
            $carregarView->renderizar();
        }
    }

