<?php

namespace Sts\Models;

class StsQuartos {

    private $Result;

    public function index() {

        $listar = new helper\StsRead();
        $listar->execRead('tb_quarto');
        $this->Result = $listar->getResultado();
        return $this->Result;
    }
}