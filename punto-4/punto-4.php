<?php
    $nombre = "";
    $apellido = "";
    
    echo "Ingrese su nombre: ";
    fscanf(STDIN, "%s", $nombre);
    
    echo "Ingrese su apellido: ";
    fscanf(STDIN, "%s", $apellido);
    
    $resultado = $nombre . " " . $apellido;
    echo "Bienvenid@ - " . $resultado; 
?>