<?php

require_once "./SorveteInterface.php";

class Granulado implements SorveteInterface
{
    private $objetoDecorado;

    public function __construct(SorveteInterface $objetoDecorado)
    {
        $this->objetoDecorado = $objetoDecorado;
    }

    public function preco()
    {
        return $this->objetoDecorado->preco() + 0.5;
    }
}