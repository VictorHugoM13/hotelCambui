<?php

namespace Sts\Models;

class StsQuartos {
    public function index() {
        echo "<h1> Model Quartos</h1>";
        $connect = new helper\StsConn();
        $connect->getConn();
    }
}