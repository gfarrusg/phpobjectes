<?php

//subclasse de Shape
require_once ("ClassShape.php");
class Rectangle extends Shape{
    
    protected $areaRectangle;

    

    public function calcularArea(){
        $arearectangle = ($this-> ample * $this-> alt);
        echo "el rectangle te una area de : ";
        return $arearectangle.'<br />';
    }
}

    

?>