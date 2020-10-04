<?php

interface ComidaFactoryInterface
{
    public function criarComida($id) : Comida;
}