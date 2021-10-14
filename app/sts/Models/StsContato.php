<?php

namespace Sts\Models;

class StsContato {

    public function index() {
        echo "<h1> Model Contatos</h1>";
        $connect = new helper\StsConn();
        $connect->getConn();

    }
}