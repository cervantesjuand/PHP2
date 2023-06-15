<?php

function palindromo($texto) {

    $palabraLimpia = preg_replace("/[^A-Za-z0-9]/", "", $texto);
    $palabra2 = strrev($palabraLimpia);

            if ($palabraLimpia == $palabra2) {
                return true;
            } else {
                echo "La palabra '$palabraLimpia' no es un palíndromo.";
                return false;
            }

}

$texto = readline("Ingrese una frase o palabra para saber si es palindromo \n");
 echo palindromo($texto);