<?php
    function sumar($n1, $n2)
    {
        $resultado = $n1 + $n2;
        echo "El resultado de la suma es: " . $resultado;
    }
    
    function restar($n1, $n2)
    {
        $resultado = $n1 - $n2;
        echo "El resultado de la resta es: " . $resultado;
    }
    
    function multiplicar($n1, $n2)
    {
        $resultado = $n1 * $n2;
        echo "El resultado de la multiplicación es: " . $resultado;
    }
    
    function dividir($n1, $n2)
    {
        $resultado = $n1 / $n2;
        echo "El resultado de la división es: " . $resultado;
    }
    
    function modulo($n1, $n2)
    {
        $resultado = $n1 % $n2;
       
       return $resultado;
    }
    
    $n1 = 0;
    $n2 = 0;
    $operacion = 0;
    
    echo "Ingrese un número: ";
    fscanf(STDIN, "%d", $n1);
    
    echo "Ingrese otro número: ";
    fscanf(STDIN, "%d", $n2);
    
    echo "Ingrese la operación que desea realizar: 
        1. Sumar
        2. Restar
        3. Multiplicar
        4. Dividir
        5. Módulo\n";
    fscanf(STDIN, "%d", $operacion);
    
    switch($operacion)
    {
        case 1:
            sumar($n1, $n2);
            break;
        
        case 2:
            restar($n1, $n2);
            break;
            
        case 3:
            multiplicar($n1, $n2);
            break;
            
        case 4:
            dividir($n1, $n2);
            break;
            
        case 5:
            echo "El resultado del módulo es: " . modulo($n1, $n2);
            break;
            
        default:
            echo "La operación a realizar no se encuentra disponible (1 - 5)";
    }    
?>