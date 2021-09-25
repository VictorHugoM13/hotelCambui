<?php

namespace Sts\Models;

class StsHome {



    public function index() {
        echo "<h1> Model Home</h1>";
        /*
        $connect = new helper\StsConn();
        $connect->getConn();*/

        $listar = new helper\StsRead();
        $listar->execRead('sts_carousels', "WHERE id=:id LIMIT :limit", ":id=2&:limit=1");
        var_dump($listar->getResultado());

    }
}