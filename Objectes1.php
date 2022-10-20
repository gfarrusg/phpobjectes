<?php

echo "<h1> Exercici 1 Tema PHP_Objectes.</h1> ";

// Crea una classe Employee, defineix com a atributs el seu nom i sou. 
// Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
// Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos 
// (si el sou supera 6000, paga impostos).

Class Employee{

    private $nom;
    
    private $sou;

    
        function initialize ($nom, $sou){

            $this -> nom = $nom; 

            $this -> sou = $sou;
        }

        
        function print (){

            print $this -> nom;

             if( $this-> sou <= 6000){
                 print ". No pagues impostos, ja que el teu sou, no supera els 6000€. ".$this-> sou."€ al mes de sou.".'<br />';
            } else {
                 print ". Pagues impostos, ja que el teu sou, supera els 6000€. ".$this-> sou. "€ al mes de sou.".'<br />';
                }   
            }
        }

         //declaracio dels objectes.

            $exercici = new Employee();
    
             $exercici-> initialize('Gabriel Farrus', 7500);
    
             $exercici-> print();
             
             $exercici-> initialize('Carlos Perez', 1000);
    
             $exercici-> print();
           



    
      
    
    
       

?>

