<?php

require_once "./DBMySQL.php";
require_once "./DBPostgree.php";

/*
    Para mudar o banco de dados simplesmente trocamos o nome
    da classe e todo o comportamento continua o mesmo.

$bancoDeDados = new DBMySQL();

$bancoDeDados->conectar();
$bancoDeDados->salvar();
$bancoDeDados->ler();
*/

$bancoDeDados = new DBPostgree();

$bancoDeDados->conectar();
$bancoDeDados->salvar();
$bancoDeDados->ler();