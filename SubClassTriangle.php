<?php

//subclasse de Shape
require_once ("ClassShape.php");

class Triangle extends Shape{

    protected $areaTriangle;

    
    public function calcularArea(){
        $areatriangle = ($this-> ample * $this -> alt) / 2;
        echo "El triangle te una area de: ";
        return  $areatriangle.'<br />' ;
    }

}

    

?>