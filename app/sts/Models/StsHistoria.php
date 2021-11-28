<?php

namespace Sts\Models;

class StsHistoria {

    private $Result;

    public function index() {

        $listar = new helper\StsRead();
        $listar->execRead('sts_historia', "LIMIT :limit", ":limit=1");
        $this->Result = $listar->getResultado();
        return $this->Result;

    }
}