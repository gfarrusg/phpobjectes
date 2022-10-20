<?php

//subclasse de Shape
require_once ("ClassShape.php");
class Rectangle extends Shape{
    
    

    

    public function calcularArea(){
        $area = ($this-> ample * $this-> alt);
        echo "el rectangle te una area de : ";
        return $area.'<br />';
    }
}

    

?>