<?php

namespace Sts\Models;

class StsSobreHotel {
    private $Result;

    public function index() {

        $listar = new helper\StsRead();
        $listar->execRead('sts_sobre', "LIMIT :limit", ":limit=1");
        $this->Result = $listar->getResultado();
        return $this->Result;
    }

}