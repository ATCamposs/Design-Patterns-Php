<?php

require_once "./Observer.php";


/*
    Padrao observable não existe nativamente no php.
    essa classe pode resolver o problema.
*/
abstract class Observable{
    private $observers = [];

    //Adiciona todos os observers dentro de um array
    public function addObservers(Observer $observer){
        array_push($this->observers,$observer);
    }

    //Notifica todos os observers
    public function notifyObservers(){
        foreach($this->observers as $observer ){
            $observer->update();
        }
    }
}