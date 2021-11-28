<?php

namespace Adms\Models\helper;

class StsUpdate extends StsConn {

    private $Tabela;
    private $Dados;
    private $Query;
    private $Conn;
    private $Result;
    private $Termos;
    private $Values;


    public function getResult()
    {
        return $this->Result;
    }


    public function execUpdate($Tabela, array $Dados, $Termos = null) {
        $this->Tabela = $Tabela;
        $this->Dados = $Dados;
        $this->Termos = $Termos;

        foreach ($this->Dados as $key => $Value) {
            $Values[] = $key . "= '" . $Value."'";
        }
        $Values = implode(", ", $Values);
        echo $this->Query = "UPDATE $this->Tabela SET $Values {$this->Termos}";
        $this->Conn = parent::getConn();
        $this->Query = $this->Conn->prepare($this->Query);

        try {
            $this->Query->execute();
        }
        catch(\Exception $e) {
            echo $e->getMessage();
        }

    }


}