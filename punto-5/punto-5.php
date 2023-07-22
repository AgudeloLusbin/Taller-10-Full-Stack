<?php
    $tipoAfiliacion = '';
    $nPersonas = 0;
    $descuento = 0;
    $valorPersona = 25000;
    
    echo "Ingrese el tipo de afiliación: ";
    fscanf(STDIN, "%c", $tipoAfiliacion);
    
    echo "Ingrese el número de personas: ";
    fscanf(STDIN, "%d", $nPersonas);
    
    if(($tipoAfiliacion == 'A' || $tipoAfiliacion == 'B') || ($tipoAfiliacion == 'a' || $tipoAfiliacion == 'b'))
    {
        echo "El valor total con el número de personas ingresadas (" . $nPersonas . ") es de: ";
        $valor = $valorPersona * $nPersonas;
        echo $valor . "\n";
        
        echo "y el descuento generado es el siguiente: ";
        $descuento = ($valorPersona * $nPersonas) * 0.3 ;
        echo $descuento . "\n";
        
        echo "El total a pagar es: ";
        $resultado = $valor - $descuento;
        echo $resultado;
    }else
    {
         echo "El valor total con el número de personas ingresadas (" . $nPersonas . ") es de: ";
        $valor = $valorPersona * $nPersonas;   
        echo $valor;
    }
?>