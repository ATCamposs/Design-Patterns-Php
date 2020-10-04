<?php

require_once "./Observable.php";

class Clima extends Observable
{
    private $temperatura;

    public function __construct($temperatura)
    {
        $this->temperatura = $temperatura;
    }
    //Toda vez que a temperatura for atualizada ele atualiza
    //os observers
    public function atualizarTemp($temperatura)
    {
        $this->temperatura = $temperatura;
        $this->notifyObservers();
    }
    //Pega a temperatura atual.
    public function getTemperatura()
    {
        return $this->temperatura;
    }
}