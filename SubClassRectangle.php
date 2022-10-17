<?php

//subclasse de Shape
require_once ("ClassShape.php");
class Rectangle extends Shape{
    
    protected $areaRectangle;

    function __construct (int $ample, int $alt){

        parent::__construct($ample,$alt);

    }

    public function calcularArea($ample, $alt){
        $arearectangle = ($ample * $alt);
        echo "Un rectangle de base $ample i alçada $alt té un àrea de.";
        return $arearectangle;
        }

}


?>