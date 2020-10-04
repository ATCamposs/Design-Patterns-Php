<?php

require_once "./Clima.php";
require_once "./PrintarNaTela.php";

$meuClima = new Clima(10);

$clientePrintador = new PrintarNaTela($meuClima);
$meuClima->atualizarTemp(20);
$meuClima->atualizarTemp(30);
$meuClima->atualizarTemp(25);