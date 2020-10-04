<?php

require_once "./Observer.php";
require_once "./Clima.php";

class PrintarNaTela implements Observer
{
    private $climaObservable;

    public function __construct(Clima  $climaObservable)
    {
        $this->climaObservable = $climaObservable;
        $this->climaObservable->addObservers($this);
    }

    //Toda vez que o observable é atualizado o observer recebe
    //um update, e isso faz ele executar a o metodo abaixo
    public function update()
    {
        echo "temperatura atual: " . $this->climaObservable->getTemperatura(). "<br>";
    }
}