<?php

namespace Sts\Models\helper;

class StsConn {

    private static $Host = HOST;
    private static $User = USER;
    private static $Pass = PASS;
    private static $DbName = DBNAME;
    private static $Port = PORT;
    private static $Connection = null;

    private static function connect() {
        try {
            //'mysql:host=localhost;port=3307;dbname=nome_banco,user,senha'
            if (self::$Connection==null) {
                self::$Connection = new \PDO('mysql:host='.self::$Host.';port='.self::$Port.';dbname='.self::$DbName.'',self::$User,self::$Pass);
            }
        }
        catch(\Exception $e) {
            echo "ERRO" . $e->getMessage() . "<br>Codigo: " . $e->getCode();
        }
    }

    public function getConn() {
        return self::connect();
    }
}