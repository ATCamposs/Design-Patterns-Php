<?php
require_once "./PizzaFactory.php";
/*
    Utilizando esta factory(dando um new objeto) só precisamos
    chamar o método criarComida e passar um id para termos resultados
    com objetos de saida completamente diferentes, sem precisar recriar
    toda a logica da factory para cada chamada.
    (aqui podemos usar os diferentes ID's para ter diferentes tipos
    de pizza)
*/
$fabrica = new PizzaFactory;
var_dump($fabrica->criarComida(0));