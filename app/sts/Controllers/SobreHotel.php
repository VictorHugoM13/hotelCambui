<?php
    namespace Sts\Controllers;
    use Core\ConfigView;

    if (!defined('URL')) {
        header('Location : /pooii/');
        exit();
    }

    class SobreHotel {

        private $Result;

        public function index() {

            $modelSobreHotel= new \Sts\Models\StsSobreHotel();
            $this->Dados['sts_sobre'] = $modelSobreHotel->index();
            $carregarView = new ConfigView('Views/sobre/sobrehotel', $this->Dados);
        }
    }