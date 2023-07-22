<?php
    $nombre = "";
    $edad = "";
    
    echo "Ingrese su nombre: ";
    fscanf(STDIN, "%s", $nombre);
    
    echo "Ingrese su edad: ";
    fscanf(STDIN, "%d", $edad);
    
    if($edad >= 0 && $edad < 17)
    {
        echo "Nombre: " . $nombre . " - Edad: " . $edad . " -  Usted es menor de edad";   
    }else if ($edad >=18) {
        echo "Nombre: " . $nombre . " - Edad: " . $edad . " -  Usted es mayor de edad";
    }else{
        echo "Lo siento, usted no ha nacido por lo que quizás no tenga nombre todavía :)";
    }
?>