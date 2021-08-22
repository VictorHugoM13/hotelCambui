<?php
namespace Core;
class ConfigController {
    private $Url;
    private $UrlConjunto;
    private $UrlController;
    private $UrlParametro;

    public function __construct(){

        $this->Url =  filter_input(INPUT_GET,'url', FILTER_DEFAULT);
        $this->UrlConjunto = explode("/", $this->Url);
        if (isset($this->UrlConjunto[0])) {
            $this->UrlController = $this->UrlConjunto[0];
        }
        else {
            $this->UrlController = 'Home';
        }

        if (isset($this->UrlConjunto[1])) {
            $this->UrlParametro = $this->UrlConjunto[1];
        }
        else {
            $this->UrlParametro = null;
        }


        echo "<br>URL: " . $this->Url;
        echo "<br>URL: " . $this->UrlConjunto;


        echo "<br>URL Parametro: " . $this->UrlParametro;

    }
}