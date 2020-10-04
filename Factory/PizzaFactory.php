<?php

require_once "./ComidaFactoryInterface.php";
require_once "./Pizza.php";

/*
*    A Factory implementa a interface ComidaFactory(que basicamente é
*    uma interface com o metodo basico).
*    Dentro da factory temos vários tipos de serviço que são resumidos
*    a um padrão que podem ser chamados de um metodo muito mais fácil
*    (no exemplo só usando o ID temos diversas saidas diferentes utilizando 
*    a mesma factory.)
*/
class PizzaFactory implements ComidaFactoryInterface
{
    public function criarComida($id) : Comida
    {
        if($id == 0){
            $p = new Pizza();
            $p->nome = "pizza de calabresa ";
            $p->sabor1 = "Calabresa";
            $p->sabor2 = "Queijo";
            $p->comPalmito = false;
            $p->bordaComRecheio = false;
            return $p;
        }elseif($id == 1){
            $p = new Pizza();
            $p->nome = "pizza de Frango ";
            $p->sabor1 = "Frango";
            $p->sabor2 = "Queijo";
            $p->comPalmito = true;
            $p->bordaComRecheio = true;
            return $p;
        }elseif($id == 2){
            $p = new Pizza();
            $p->nome = "pizza de Mista ";
            $p->sabor1 = "Presunto";
            $p->sabor2 = "Queijo";
            $p->comPalmito = false;
            $p->bordaComRecheio = true;
            return $p;
        }else{
            $p = new Pizza();
            $p->nome = "pizza de Portuguesa ";
            $p->sabor1 = "Presunto";
            $p->sabor2 = "Queijo";
            $p->comPalmito = true;
            $p->bordaComRecheio = false;
            return $p;
        }
    }
}