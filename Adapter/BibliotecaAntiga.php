<?php

class BibliotecaAntiga
{
    public function salvarNoBanco()
    {
        echo "Dado salvo no Banco de dados ! <br>";
    }

    public function gerarRelatorioTXT($nomeDoArquivo)
    {
        echo "Relatório gerado: " . $nomeDoArquivo.".txt Lib antiga<br>";
    }
}