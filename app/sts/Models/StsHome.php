<?php

namespace Sts\Models;

class StsHome {

    private $Result;

    public function index() {
        //echo "<h1> Model Home</h1>";
        /*
        $connect = new helper\StsConn();
        $connect->getConn();*/

        $listar = new helper\StsRead();
        $listar->execRead('sts_carousels', "WHERE adms_sit_id=:adms_sit_id LIMIT :limit", ":adms_sit_id=1&:limit=3");
        $this->Result['sts_carousels'] = $listar->getResultado();
        return $this->Result;

    }
}