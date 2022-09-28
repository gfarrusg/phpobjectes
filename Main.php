<?php

require_once("SubClassTriangle.php");

    $objTriangle = new Triangle (2, 4);

    echo $objTriangle-> getdades();

    echo $objTriangle-> triangle (2, 4);

require_once("SubClassRectangle.php");

    $objRectangle = new Rectangle ( 4, 8);

    echo $objRectangle-> getdades();
    echo $objRectangle-> rectangle(4,8);

    

    




    // $objetRectangle = new Rectangle (8,16);

    // echo $objRectangle-> getdades();

    

?>