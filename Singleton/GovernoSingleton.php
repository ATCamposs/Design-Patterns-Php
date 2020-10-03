<?php

class GovernoSingleton
{
    public $nomeDoPais = "Brasil";
    public $proximaEleicao = "2022";

    public function realizarEleicao()
    {
        echo "realizando... <br>";
    }


    //Esta estrutura vai ser oque vai garantir que somente
    //uma instancia esteja disponivel..

    // Criamos atributo estatico que recebe nulo por padrao
    // só poderemos ter acesso a UMA instancia da classe.
    private static $instancia = null;
    // Proibimos o acesso ao construtor
    private function __construct()
    {
        
    }
    //Impede que sua instancia seja clonada
    private function __clone()
    {

    }
    //Acessa a UNICA instancia da classe.
    public static function pegarInstancia()
    {
        // para chamar um atributo static dentro da classe
        //no php temos que usar self::$atributo
        if(self::$instancia == null) {
            self::$instancia = new GovernoSingleton();
        }
        return self::$instancia;
    }
}