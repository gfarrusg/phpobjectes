<?php

//subclasse de Shape
require_once ("ClassShape.php");

class Triangle extends Shape{

    

    
    public function calcularArea(){
        $area = ($this-> ample * $this -> alt) / 2;
        echo "El triangle te una area de: ";
        return  $area.'<br />' ;
    }

}

    

?>