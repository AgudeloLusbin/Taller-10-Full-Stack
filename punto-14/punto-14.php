<?php
    function hasSecurityLong($pass){
        return strlen($pass) >= 8;
    }
    
    function hasUpperLetter($pass){
        $arrayPass = str_split($pass);
        foreach($arrayPass as $letter){
            if($letter == strtoupper($letter)){
                return true;
            }
        }
        return false;
    }
    
    function hasNumber($pass){
        $arrayPass = str_split($pass);
        foreach($arrayPass as $letter){
            if(is_numeric($letter)){
                return true;
            }
        }
        return false;
    }
    
    $password = "";
    
    echo "Ingrese la clave a registrar: ";
    fscanf(STDIN, "%s", $password);
    
    if(hasSecurityLong($password)){
        if(hasUpperLetter($password)){
            if(hasNumber($password)){
                echo "Felicidades, su contraseña es segura y se ha resgistrado correctamente.";
            }else{
                echo "La constraseña debe tener al menos un número.";   
            }
        }else{
            echo "La contraseña debe tener al menos una letra en mayúscula.";
        }
    }else{
        echo "Cuidado, su constraseña no es segura. Su contraseña debe tener al menos 8 caracteres.";
    }
?>

