<?php
    $primerNumero = 0;
    $segundoNumero = 0;
    
    echo "Ingrese un número para sumar: ";
    fscanf(STDIN, "%d", $primerNumero);
    
    echo "Ingrese otro número para sumar: ";
    fscanf(STDIN, "%d", $segundoNumero);
    
    $resultado = $primerNumero + $segundoNumero;
    
    echo "La suma de los dos números es: " . $resultado;
?>