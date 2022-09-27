<?php

echo " <h1>Exercici 1 Tema PHP i Objectes.</h1>";

    // creacio de la class.

    class Employee{

        // Els atributs nom i sou per l'us tan a la clases com en els metodes.

        public $nom = "Gabriel Farrus";

        public $sou = 7000;

        // Primer metode creat, nomes es el nom i el sou.

            public function initialize($nom, $sou){

                return $this-> nom ;
            
                return $this-> sou ;
        
            }

        // segon metode creat per saber si la persona ha de pagar impostos o no.

            public function print($sou){

                if($sou <= 6000) {
    
                    return " .No pagues impostos ja que el sou es inferior a 6000€. ".$sou;
                }Else{
                    return " .Pagues impostos ja que el sou es superior a 6000€. ".$sou;
                }

            }

    }

            //declaracio dels objectes.

        $exercici = new Employee();

        echo $exercici->initialize("Gabriel Farrus", 7000);

        echo $exercici->print(7000);

 echo " <h1>Exercici 2 Tema PHP i Objectes.</h1>";


    //Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
    //Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().
    //A l'arxiu main defineix dos objectes, un triangle i un rectangle i truca al mètode area de cadascun.

    class Shape{

            public $ample = "";
            public $alt = "";

    }

    class Triangle extends Shape{

       public function areatriangle(){

            $areatriangle = ($ample * $alt) / 2 ;
            return $areatriangle;
		    
       }
        
    }
    
    class Rectangle extends Shape{

        public function arearectangle(){
            
            $arearectangle = ($ample * $alt);
            return $arearectangle;
           

        }
    }


?>