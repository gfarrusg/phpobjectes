<?php

echo "<h1> Exercici 2 Tema PHP_Objectes.</h1> ";

// Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
// Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().
// A l'arxiu main defineix dos objectes, un triangle i un rectangle i truca al mètode area de cadascun.

  abstract Class Shape{

    private $ample;
    
    private $alt;

    function __construct (int $ample, int $alt){

        $this -> ample = $ample;
        $this-> alt = $alt;
    }

    abstract protected function calcularArea(int $ample, int $alt);
        
        
    

}




?>