<?php

namespace Sts\Models;

class StsHome {
    public function index() {
        echo "<h1> Model Home</h1>";
        $connect = new helper\StsConn();
        $connect->getConn();
    }
}