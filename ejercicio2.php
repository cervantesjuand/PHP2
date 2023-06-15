<?php

function fibonacci(int $num) {

    $array =[0, 1];

    if ($num < 1) {
        echo "Error";
    } else if ($num == 1){
        echo "El primer número de la secuencia es ".$array[0]."\n";
    } else {
        echo "Número 1 de la secuancia es ".$array[0]. "\n";
        echo "Número 2 de la secuancia es ".$array[1]. "\n";

        for($i = 2; $i < $num; $i++ ) {
            $array[$i] = $array[$i - 1] + $array[$i - 2];
            echo "Número ".($i + 1)." de la secuencia es ".$array[$i]."\n";
        }
    }

    
}

$num = intval(readline("Ingrese el número de la secuencia que quiere ver: \n"));

fibonacci($num);