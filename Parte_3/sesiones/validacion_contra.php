<?php


function validar_clave($clave,&$error_clave){
        if(strlen($clave)< 6){
            $error_clave="La contraseña debe tener al menos 6 carácteres";
            return false;
        }
        if (strlen($clave)> 16) {
            $error_clave="La contraseña no debe tener más de 16 carácteres";
            return false;
        }
        if (!preg_match('/[a-z]/',$clave)) {
            $error_clave="La contraseña debe tener al menos una letra mayúscula";
            return false;
        }
        if (!preg_match('/[A-Z]/',$clave)) {
            $error_clave="La contraseña debe tener al menos una letra minúscula";
            return false;
        }
        if (!preg_match('/[0-9]/',$clave)) {
            $error_clave="La contraseña debe tener al menos un carater numérico";
            return false;
        }

        $error_clave="";
        return true;
        
}


?>