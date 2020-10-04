<?php

require_once "./SorveteInterface.php";

class SaborMorango implements SorveteInterface
{
    private $objetoDecorado;

    public function __construct(SorveteInterface $objetoDecorado)
    {
        $this->objetoDecorado = $objetoDecorado;
    }

    public function preco()
    {
        return $this->objetoDecorado->preco() + 2;
    }
}