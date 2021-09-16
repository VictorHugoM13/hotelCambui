<?php

namespace Sts\Models;

class StsSobreHotel {

    public function index()
    {
        echo "<h1> Model Sobre o Hotel</h1>";
        $connect = new helper\StsConn();
        $connect->getConn();
    }

}