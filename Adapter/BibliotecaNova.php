<?php

class BibliotecaNova
{
    public function salvarNoBancoDeDados()
    {
        echo "Dados salvos no banco de dados da lib nova";
    }

    public function gerarRelatorioPDF($nomedoArquivo)
    {
        echo "Relatorio gerado com o nome: " . $nomedoArquivo;
    }
}