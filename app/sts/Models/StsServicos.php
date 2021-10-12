<?php

namespace Sts\Models;

class StsServicos {
    private $Result;

    public function index() {
        //echo "<h1> Model Home</h1>";
        /*
        $connect = new helper\StsConn();
        $connect->getConn();*/

        $listar = new helper\StsRead();
        $listar->execRead('sts_servicos', "LIMIT :limit", ":limit=1");
        $this->Result = $listar->getResultado();
        return $this->Result;

    }

}