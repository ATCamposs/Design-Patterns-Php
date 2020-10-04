<?php

require_once "./ArquivoInterface.php";
class Arquivo implements ArquivoInterface
{
    public $nome;
    
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    public function ls()
    {
        echo "Nome do arquivo: ".$this->nome. "<br/>";
    }
}