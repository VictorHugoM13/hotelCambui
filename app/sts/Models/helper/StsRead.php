<?php

namespace Sts\Models\helper;

class StsRead extends StsConn {

    private $Select;
    private $Values;
    private $Query;
    private $Result;
    private $Conn;

    public function getResultado() {
        return $this->Result;
    }

    public function execRead($Tabble, $Termo = null, $ParseString= null)
    {
        if (!empty($ParseString)) {
            parse_str($ParseString, $this->Values);
        }

        $this->Select = "SELECT * FROM $Tabble $Termo";
        //echo "<br>" . $this->Select;
        $this->execInstrucao();
    }

    private function execInstrucao() {
        $this->prepareConnection();
        $this->linkarValores();
        $this->Query->execute();
        $this->Result = $this->Query->fetchAll();
    }

    private function prepareConnection() {
        $this->Conn = parent::getConn();
        $this->Query = $this->Conn->prepare($this->Select);
        $this->Query->setFetchMode(\PDO::FETCH_ASSOC);
    }

    private function linkarValores() {
        if ($this->Values) {
            foreach($this->Values as $a => $b) {
                if ($a == ':limit'){
                    $b = (int) $b;
                    $this->Query->bindValue("$a", $b, \PDO::PARAM_INT);
                }else{
                    $this->Query->bindValue("$a", $b, \PDO::PARAM_STR);
                }
            }
        }
    }

}