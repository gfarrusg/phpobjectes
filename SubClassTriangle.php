<?php

//subclasse de Shape
require_once ("ClassShape.php");

class Triangle extends Shape{

    protected $areaTriangle;

    function __construct (int $ample, int $alt){

        parent::__construct($ample,$alt);

    }
    public function calcularArea($ample, $alt){
        $areatriangle = ($ample * $alt) / 2;
        echo "Un triangle de base $ample i alçada $alt té un àrea de.";
        return  $areatriangle ;
        }

    
}
?>