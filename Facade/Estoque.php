<?php

class Estoque
{
    public static function retornarPrecoDoProdutoPeloId($id)
    {
        if($id == 10){
            return 1000;
        }else{
            return 0;
        }
    }
}