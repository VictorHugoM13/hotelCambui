<?php

namespace Sts\Models;

class StsReservas {
    public function index()
    {
        echo "<h1> Model Reservas</h1>";
        $connect = new helper\StsConn();
        $connect->getConn();
    }
}


