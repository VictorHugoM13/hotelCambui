<?php

namespace Sts\Models;

class StsReservas {
    public function index() {
        
        $connect = new helper\StsConn();
        $connect->getConn();
    }
}


