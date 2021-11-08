<?php

namespace Core;

class ConfigView {

    private $Arquivo;
    private $Dados;

    public function __construct($Arquivo, array $Dados = null) {
        $this->Arquivo = $Arquivo;
        $this->Dados = $Dados;
        //echo "<h1>$this->Arquivo</h1>";

        if ($_SERVER["REQUEST_URI"] === '/siteHotel/Login') {
            $this->renderizarLogin();
        }
        else {
            $this->renderizar();
        }

    }

    private function renderizar() {
        include_once 'app/sts/Views/include/header.php';
        include_once 'app/sts/Views/include/menu.php';
        include_once 'app/sts/Views/include/footer.php';

        if (file_exists('app/sts/' . $this->Arquivo . '.php')) {
            include_once 'app/sts/' . $this->Arquivo . '.php';
        }
        else {
            include_once 'app/sts/Views/include/erro.php';
        }

    }

    private function renderizarLogin() {
        include_once 'app/sts/Views/include/header.php';
        include_once 'app/sts/Views/include/footer.php';

        if (file_exists('app/sts/' . $this->Arquivo . '.php')) {
            include_once 'app/sts/' . $this->Arquivo . '.php';
        }
        else {
            include_once 'app/sts/Views/include/erro.php';
        }

}


}
