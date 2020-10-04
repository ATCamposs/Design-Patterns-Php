<?php

require_once "./BibliotecaAntiga.php";
require_once "./AdaptadorUm.php";

class Cliente
{
    private $biblioteca;

    public function __construc()
    {
        $this->biblioteca = new AdaptadorUm();
    }

    public function principal()
    {
        
        $this->biblioteca->metodo1();
        echo "Estou chegando";
        $this->biblioteca->metodo2("Andre");
    }
}