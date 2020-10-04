<?php

//Utilizando esta interface para implementar as classes, todas 
//as classes de bancos de dados serão obrigadas a usar
//os mesmos métodos.
interface DBStrategyInterface
{
    public function conectar();
    public function salvar();
    public function ler();
}