<?php

require_once("SubClassTriangle.php");

    $objTriangle = new Triangle (2, 4);

    echo $objTriangle-> calcularArea (2, 4);

require_once("SubClassRectangle.php");

    $objRectangle = new Rectangle ( 4, 8);

    
    echo $objRectangle-> calcularArea (4,8);

    

    




    // $objetRectangle = new Rectangle (8,16);

    // echo $objRectangle-> getdades();

    

?>