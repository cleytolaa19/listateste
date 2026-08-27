<?php

$numeros = [45, 12, 89, 3, 67, 21, 100, 8, 55];

$maior = $numeros[0];
$menor = $numeros[0];

$posMaior = 0;
$posMenor = 0;

foreach ($numeros as $posicao => $numero) {
    if ($numero > $maior) {
        $maior = $numero;
        $posMaior = $posicao;
    }

    if ($numero < $menor) {
        $menor = $numero;
        $posMenor = $posicao;
    }
}

echo "Maior número: $maior<br>";
echo "Menor número: $menor<br>";
echo "Posição do maior: $posMaior<br>";
echo "Posição do menor: $posMenor<br>";

?>
