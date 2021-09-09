<?php

namespace Core;

class ConfigView {

    private $Arquivo;
    private $Dados;

    public function __construct($Arquivo, array $Dados = null) {
        $this->Arquivo = $Arquivo;
        $this->Dados = $Dados;
        echo $this->Arquivo;
        $this->renderizar();

    }

    private function renderizar() {
        echo "metodo renderizar";
        if (file_exists('app/sts/' . $this->Arquivo . '.php')) {
            include_once 'app/sts/' . $this->Arquivo . '.php';
        }
        else {
            include_once 'app/sts/Views/include/erro.php';
        }






        }
}
