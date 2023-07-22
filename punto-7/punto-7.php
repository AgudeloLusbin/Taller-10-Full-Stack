<?php
    $n1 = 0;
    $n2 = 0;
    $operacion = 0;
    
    echo "Ingrese un número: ";
    fscanf(STDIN, "%d", $n1);
    
    echo "Ingrese otro número: ";
    fscanf(STDIN, "%d", $n2);
    
    echo "¿Qué operación desea realizar?: 
        1. Sumar
        2. Restar
        3. Multiplicar
        4. Dividir
        5. Módulo\n";
    fscanf(STDIN, "%d", $operacion);
    
    switch($operacion)
    {
        case 1:
            echo "La suma de los números ingresados es: ";
            $resultado = $n1 + $n2;
            echo $resultado;
            break;
            
        case 2:
            echo "La resta de los números ingresados es: ";
            $resultado = $n1 - $n2;
            echo $resultado;
            break;
            
        case 3:
            echo "La multiplicación de los números ingresados es: ";
            $resultado = $n1 * $n2;
            echo $resultado;
            break;
            
        case 4:
            echo "La división de los números ingresados es: ";
            $resultado = $n1 / $n2;
            echo $resultado;
            break;
            
        case 5:
            echo "El módulo de los números ingresados es: ";
            $resultado = $n1 % $n2;
            echo $resultado;
            break;
            
        default: 
        echo "El número ingresado no corresponde a ninguna operación";
    }
?>