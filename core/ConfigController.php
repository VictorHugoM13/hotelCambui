<?php
namespace Core;

class ConfigController
{
    private $Url;
    private $UrlConjunto;
    private $UrlController;
    private $UrlParametro;
    private static $Format;

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
                $this->UrlParametro = $this->slug($this->UrlConjunto[1]);
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

    private function slug($UrlController) {
        $UrlController = strtolower($UrlController);
        //Substituir - por " "
        $UrlController = str_replace("-", " ", $UrlController);
        //Primeira letra em maiuscula
        $UrlController = ucwords($UrlController);
        //Substituir " " por ""
        $UrlController = str_replace(" ", "", $UrlController);
        return $UrlController;
    }

    public function carregar() {

        $classe = "\\Sts\\Controllers\\" .  $this->UrlController;
        $carregarClase = new $classe;
        $carregarClase->index();
    }
}