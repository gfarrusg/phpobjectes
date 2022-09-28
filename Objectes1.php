<?php

echo "<h1> Exercici 1 Tema PHP_Objectes.</h1> ";

// Crea una classe Employee, defineix com a atributs el seu nom i sou. 
// Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
// Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos 
// (si el sou supera 6000, paga impostos).

Class Employee{

    protected $nom;
    
    protected $sou;

    public function nom ($nom){

        $this -> nom = $nom = "Gabriel Farrus"; 
    }

    public function sou ($sou){
       
        $this -> sou = $sou = 7000;
    }

}

         function initialize ($nom, $sou){

        }

        function print ($nom, $sou){

            
            if($sou <= 6000){
                echo .$nom."No pagues impostos, ja que el teu sou no supera els 6000€".$sou.'<br />';
            } else {
                echo .$nom."Pagues impostos, ja que els teus ou supera els 6000€".$sou.'<br />';
            }   
        }




?>