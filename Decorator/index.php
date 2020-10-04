<?php

require_once "./Sorvete.php";
require_once "./SaborMorango.php";
require_once "./Granulado.php";

$sorvete = new Sorvete();
echo $sorvete->preco() . "<br>";

//preço do sorvete basico(1) + preço do sorvete de morango(2)
$morango = new SaborMorango($sorvete);
echo $morango->preco() . "<br>";

//Preço do sorvete de morango com granulado.
$granulado = new Granulado($morango);
echo $granulado->preco() . "<br>";

//Mesma coisa do sorvete de morango com granulado porém mais
//intuitivo para se chamar.
$sorveteCompleto = new SaborMorango(new Granulado(new Sorvete()));
echo $sorveteCompleto->preco() . "<br>";


//Mesmo sorvete completo mas também mais intuitivo
$outroSorvete = new Sorvete();
$outroSorvete = new SaborMorango($outroSorvete);
$outroSorvete = new Granulado($outroSorvete);
echo $sorveteCompleto->preco() . "<br>";