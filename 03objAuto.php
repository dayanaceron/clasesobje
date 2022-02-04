<?php

    require_once("02_CLASESOBJETOS.PHP");

    $objvehiculo = new vehiculo("MCN-930","MAZDA",2020, 45500,70,30);
    $objvehiculo->getvehiculo();

    print_r('<pre>');
    print_r($objvehiculo);
    print_r('</pre>');

    echo "<br>";
    echo $objvehiculo->marca;
    echo "<br>";
    echo "La distancia recorrida es : " . $objvehiculo->calculo_distancia();
?>    