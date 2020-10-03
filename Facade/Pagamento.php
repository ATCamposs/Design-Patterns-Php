<?php

class Pagamento
{
    public static function pagarComCartao($valor)
    {
        echo "Pago com cartao! " .$valor;
    }

    public static function pagarComBoleto($valor)
    {
        echo "Pago com boleto! " .$valor;
    }
}