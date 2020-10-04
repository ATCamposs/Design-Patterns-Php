<?php

require_once "./DBStrategyInterface.php";

// Obrigado ao usar os mesmos metodos
class DBPostgree implements DBStrategyInterface
{
    public function conectar()
    {
        echo "conectado ao Postgree<br/>";
    }

    public function salvar()
    {
        echo "Dado Salvo no Postgree ! <br/>";
    }

    public function ler()
    {
        echo "Dado retornado XXXXXXXX - Postgree <br/>";
    }
}