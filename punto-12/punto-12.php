<?php
    $nMultiplicar = 0;
    $x = 0;
    
    echo "Ingrese el número a multiplicar: ";
    fscanf(STDIN, "%d", $nMultiplicar);
    
    echo "Tabla de multiplicar del " . $nMultiplicar . "\n";
    for($i = $nMultiplicar; $x <= 30; $i++)
    {
        $resultado = $nMultiplicar * $x;
        echo $nMultiplicar . " x " . $x . " = " . $resultado . "\n";
        
        $x++;
    }
?>