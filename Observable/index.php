<?php

require_once "./Clima.php";
require_once "./PrintarNaTela.php";

//Gera algo para observar(clima com temp 10 no caso)
$meuClima = new Clima(10);
//Liga um observer no clima para que ele seja constantemente
//atualizado para mudanças de valores
$clientePrintador = new PrintarNaTela($meuClima);

//atualiza
$meuClima->atualizarTemp(20);
//atualiza
$meuClima->atualizarTemp(30);
//atualiza
$meuClima->atualizarTemp(25);