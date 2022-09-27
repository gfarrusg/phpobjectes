<?php

echo " <h1>Exercici 1 Tema PHP i Objectes.</h1>";

    // creacio de la class

    class Employee{

        // Els atributs nom i sou per l'us tan a la clases com en els metodes.

        public $nom = "Gabriel Farrus";

        public $sou = 7000;

        // Primer metode creat, nomes es el nom i el sou

        public function initialize(){

            return $this-> nom;
            
            return $this->sou;
        
        }

        // segon metode creat per saber si la persona ha de pagar impostos o no.

        public function print(){




        }

    }




?>