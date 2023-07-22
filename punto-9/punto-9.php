<?php
    $nCiclo = 30;
    $nMultiplicar = 0;
    $i = 0;
    
    echo "Ingrese un número a multiplicar: ";
    fscanf(STDIN, "%d", $nMultiplicar);
    

    echo "La tabla del :". $nMultiplicar . "\n";
    while($i <= 30)
    {
        $resultado = $nMultiplicar * $i;
        
        echo $nMultiplicar . " x " . "$i" . " = " . $resultado . "\n";
        
        $i++;
    }
?>