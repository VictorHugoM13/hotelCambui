<?php
namespace Core;

class ConfigController
{
    private $Url;
    private $UrlConjunto;
    private $UrlController;
    private $UrlParametro;
    private static $Format;
    private $UrlMetodo;

    public function __construct() {
        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            $this->Url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);

            $this->limparUrl();

            $this->UrlConjunto = explode("/",$this->Url);

            if(isset($this->UrlConjunto[0])) {
                $this->UrlController = $this->slug($this->UrlConjunto[0]);
            }
            else {
                $this->UrlController = CONTROLLER;
            }

            if(isset($this->UrlConjunto[1])) {
                $this->UrlMetodo = $this->slugMetodo($this->UrlConjunto[1]);
            }
            else {
                $this->UrlMetodo = METODO;
            }

            if(isset($this->UrlConjunto[2])) {
                $this->UrlParametro = $this->slug($this->UrlConjunto[2]);
            }
            else {
                $this->UrlParametro = null;
            }
        }
        else {
            $this->UrlController = CONTROLLER;
            $this->UrlParametro = null;
        }

        //echo "URL: " . $this->Url ."<br>";
        //echo "Url Controller: " . $this->UrlController ."<br>";
        //echo "Url Parametro: " . $this->UrlParametro ."<br>";
        #echo "Url Metodo: " . $this->UrlMetodo;

    }
    private function limparUrl() {
        //eliminar tags
        $this->Url = strip_tags($this->Url);
        //eliminar espacos
        $this->Url = trim($this->Url);
        //eliminar ultima barra
        $this->Url = rtrim($this->Url, "/");
        self::$Format = array();
        self::$Format['acentos'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+~={[}]?;:.,\\\'<>°ºª ';
        self::$Format['sem_acentos'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyrr----------------------------------';
        $this->Url = strtr(utf8_decode($this->Url), utf8_decode(self::$Format['acentos']), self::$Format['sem_acentos']);
        $this->Url = strtolower($this->Url);
    }

    private function slug($Valor){
        $UrlValor = strtolower($Valor);
        $UrlValor = explode("-",$UrlValor);
        $UrlValor = implode(" ",$UrlValor);
        $UrlValor = ucwords($UrlValor);
        $UrlValor = str_replace(" ", "", $UrlValor);
        return $UrlValor;
    }

    private function slugMetodo($UrlMetodo) {
        $UrlMetodo = $this->slug($UrlMetodo);
        $UrlMetodo = lcfirst($UrlMetodo); // primeira minusculo
        return $UrlMetodo;
    }

    public function carregar() {

        $classe = "\\Sts\\Controllers\\" .  $this->UrlController;
        $carregarClase = new $classe;
        if ($this->UrlParametro) {
            $carregarClase->{$this->UrlMetodo}($this->UrlParametro);
        }
        else {
            $carregarClase->{$this->UrlMetodo}();
        }
    }
}