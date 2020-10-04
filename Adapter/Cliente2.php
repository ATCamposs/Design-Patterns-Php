<?php

require_once "./BibliotecaNova.php";
require_once "./AdaptadorUm.php";
require_once "./AdaptadorDois.php";

class Cliente2
{
    private $biblioteca;

    public function __construc()
    {
        $this->biblioteca = new AdaptadorDois();
    }

    public function principal()
    {
        $this->biblioteca->metodo1();
        $this->biblioteca->metodo2("Andre");
    }
}