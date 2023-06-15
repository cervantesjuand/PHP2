<?php

function numeros($array) {

    foreach($array as $num) {
        if($num % 3 == 0) {
            echo "Peso pluma \n";
        } else if ($num % 5 == 0){ 
            echo "peso\n";
        } else {
        echo $num . "\n";
        }
    }
}

$array = array();


for ($i = 1; $i <= 100; $i++) {
    $array[] = $i;
}

echo numeros($array);







/* 
$arrayLista = [10, 5, 3, 9, 8, 2, 9, 20];

foreach($arrayLista as $num) {
    
    if($num % 3 == 0) {
        echo "Peso pluma \n";
    } else if ($num % 5 == 0){ 
        echo "peso\n";
    } else {
    echo $num . "<br>";
    }
} */