<?php

require_once "./DBStrategyInterface.php";

//Obrigado a usar os mesmos metodos
class DBMySQL implements DBStrategyInterface
{
    public function conectar()
    {
        echo "conectado ao MySql<br/>";
    }

    public function salvar()
    {
        echo "Dado Salvo no Mysql ! <br/>";
    }

    public function ler()
    {
        echo "Dado retornado XXXXXXXX - MySQL <br/>";
    }
}