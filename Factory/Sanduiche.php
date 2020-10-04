<?php
require_once "./Comida.php";
//classe básica de um sanduiche que se extende de comida.
class Sanduiche extends Comida
{
    public $recheio;
    public $molho;
    public $comVegetais;
}