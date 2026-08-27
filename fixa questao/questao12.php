<?php

$notas = [7.5, 4.0, 8.5, 6.0, 9.0, 3.5, 10.0, 5.5];

$soma = 0;
$maior = $notas[0];
$menor = $notas[0];
$aprovados = 0;
$reprovados = 0;

foreach ($notas as $nota) {
    $soma += $nota;

    if ($nota >= 6) {
        $aprovados++;
    } else {
        $reprovados++;
    }

    if ($nota > $maior) {
        $maior = $nota;
    }

    if ($nota < $menor) {
        $menor = $nota;
    }
}

$media = $soma / count($notas);

echo "Média da turma: $media<br>";
echo "Alunos com nota maior ou igual a 6: $aprovados<br>";
echo "Alunos com nota menor que 6: $reprovados<br>";
echo "Maior nota: $maior<br>";
echo "Menor nota: $menor<br>";

?>
