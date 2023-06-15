<?php

function suma($numero) {
    $numeroCadena = (string)$numero;
    $suma= 0;
    
    for($i = 0; $i < strlen($numeroCadena); $i++) {
        $digito = intval($numeroCadena[$i]);
        $suma += $digito;
    }

    return $suma;
}


$numero = intval(readline("ingrese un numero mayor a 2 digitos: \n"));


echo "El resultado de la suma es ".suma($numero);

