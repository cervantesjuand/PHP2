<?php
echo "\n";

echo "Juego de Poker\n";
echo "\n";

function repartirCartas() {
    $mazo = array(
        "As de Picas",
        "2 de Picas",
        "3 de Picas",
        "Rey de Diamantes",
        "As de Corazones",
        "Rey de Tréboles",
        "As de Espadas",
        "Rey de Corazones"
    );

    $cartasRepartidas = array();

    for ($i = 0; $i < 5; $i++) {
        $cartaAleatoria = $mazo[array_rand($mazo)];
        $cartasRepartidas[] = $cartaAleatoria;
    }

    return $cartasRepartidas;
}

function mostrarCartas($cartasRepartidas) {
    foreach ($cartasRepartidas as $carta) {
        echo $carta . "\n";
    }
}




$cartasRepartidas = repartirCartas();
echo "\n";


echo "Cartas repartidas:\n";
mostrarCartas($cartasRepartidas);





?>












