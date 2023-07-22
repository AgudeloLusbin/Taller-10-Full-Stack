<?php
    $nPersonas = 0;
    $tAfiliacion = '';
    $vPersona = 25000;
    
    echo "Ingrese el número de personas a participar en la bolera: ";
    fscanf(STDIN, "%d", $nPersonas);
    
    echo "Digite el tipo de afiliación que tiene: ";
    fscanf(STDIN, "%s", $tAfiliacion);
    $str = mb_strtoupper($tAfiliacion);
    
    switch($str)
    {
        case 'A':
            echo "El tipo de afiliación seleccionado es: " . $str . "\n";
            
            $precio = $vPersona * $nPersonas;
            echo "El precio para el número de personas ingresadas (" . $nPersonas . ") es de: " . $precio . "\n";
            
            $descuento = $precio * 0.3;
            echo "El descuento que se aplica debido al tipo de afiliación; Es el siguiente: " . $descuento . "\n";
            
            $totalPagar = $precio - $descuento;
            echo "El total a pagar es: " . $totalPagar;
            break;
            
        case 'B':
            echo "El tipo de afiliación seleccionado es: " . $str . "\n";
            
            $precio = $vPersona * $nPersonas;
            echo "El precio para el número de personas ingresadas (" . $nPersonas . ") es de: " . $precio . "\n";
            
            $descuento = $precio * 0.25;
            echo "El descuento que se aplica debido al tipo de afiliación; Es el siguiente: " . $descuento . "\n";
            
            $totalPagar = $precio - $descuento;
            echo "El total a pagar es: " . $totalPagar;
            break;
            
        case 'C':
            echo "El tipo de afiliación seleccionado es: " . $str . "\n";
            
            $precio = $vPersona * $nPersonas;
            echo "El precio para el número de personas ingresadas (" . $nPersonas . ") es de: " . $precio . "\n";
            
            $descuento = $precio * 0.1;
            echo "El descuento que se aplica debido al tipo de afiliación; Es el siguiente: " . $descuento . "\n";
            
            $totalPagar = $precio - $descuento;
            echo "El total a pagar es: " . $totalPagar;
            break;
            
        case 'D':
            echo "El tipo de afiliación seleccionado es: " . $str . "\n";
            
            $precio = $vPersona * $nPersonas;
            echo "El precio para el número de personas ingresadas (" . $nPersonas . ") es de: " . $precio . "\n";
            
            $descuento = $precio * 0.05;
            echo "El descuento que se aplica debido al tipo de afiliación; Es el siguiente: " . $descuento . "\n";
            
            $totalPagar = $precio - $descuento;
            echo "El total a pagar es: " . $totalPagar;
            break;
        
        default:
            echo "El valor ingresado no corresponde a ninguna de las opciones disponibles (A - D)";
    }
?>