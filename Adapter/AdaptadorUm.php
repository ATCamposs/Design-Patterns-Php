<?php

require_once "./MetodosInterface.php";
require_once "./BibliotecaAntiga.php";

class AdaptadorUm extends BibliotecaAntiga implements MetodosInterface
{
    public function metodo1()
    {
        echo "estou chegando aqui";
        $this->salvarNoBanco();
    }

    public function metodo2($name)
    {
        $this->gerarRelatorioTXT($name);
    }
}