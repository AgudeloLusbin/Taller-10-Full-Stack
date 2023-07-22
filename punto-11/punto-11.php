<?php
    $sum = 0;
    
    for($i = 0; $i <= 100; $i += 2)
    {
        echo $i . "\n";
        $sum += $i;
    }
    
    echo "La suma de los números pares es: " . $sum;
?>