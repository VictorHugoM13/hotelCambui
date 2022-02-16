<?php

namespace Sts\Models\helper;

class StsCreate extends StsConn {

    private $Table;
    private $Dados;
    private $Query;
    private $Conn;
    private $Result;

    public function getResult() {
        return $this->Result;
    }

    public function execCreate($Table, array $Dados) {
        $this->Table = $Table;
        $this->Dados = $Dados;
        $this->getInstrucao();
        $this->execInstrucao();
        

    }

    private function getInstrucao() {
        $colunas = implode(", ",  array_keys($this->Dados));
        $valores = ":" . implode(", :", array_keys($this->Dados));
        $this->Query = "INSERT INTO $this->Table ($colunas) VALUES ($valores)";
        
    }

    private function execInstrucao() {
        $this->connection();

        try {
            $this->Query->execute($this->Dados);
            $this->Result = $this->Conn->lastInsertId();
        }
        catch (\Exception $e) {
            echo $e->getMessage();
            $this->Result = null;
            echo "erro";
        }
        
        #return lastId();
    }

    private function connection() {
        $this->Conn = parent::getConn();
        $this->Query = $this->Conn->prepare($this->Query);
    }

}