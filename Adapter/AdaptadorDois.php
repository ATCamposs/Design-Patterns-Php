<?php

require_once "./MetodosInterface.php";
require_once "./BibliotecaNova.php";

class AdaptadorDois extends BibliotecaNova implements MetodosInterface
{
    public function metodo1()
    {
        $this->salvarNoBancoDeDados();
    }

    public function metodo2($name)
    {
        $this->gerarRelatorioPDF($name);
    }
}