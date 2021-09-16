<?php

namespace Core;

class ConfigView {

    private $Arquivo;
    private $Dados;

    public function __construct($Arquivo, array $Dados = null) {
        $this->Arquivo = $Arquivo;
        $this->Dados = $Dados;
        echo "<h1>$this->Arquivo</h1>";
        $this->renderizar();

    }

    private function renderizar() {
        echo "<h1>metodo renderizar</h1>";
        if (file_exists('app/sts/' . $this->Arquivo . '.php')) {
            include_once 'app/sts/' . $this->Arquivo . '.php';
        }
        else {
            include_once 'app/sts/Views/include/erro.php';
        }






        }
}
