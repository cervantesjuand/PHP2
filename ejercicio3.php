<?php


function burbuja($array) {
    $n = count($array);
    
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Compara los elementos adyacentes
            if ($array[$j] > $array[$j + 1]) {
                // Intercambia los elementos si están en el orden incorrecto
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    
    return $array;
}

// Ejemplo de uso
$array= [5, 2, 8, 12, 3];


$resultado = burbuja($array);
echo "Array ordenado: " . implode(", ", $resultado);
