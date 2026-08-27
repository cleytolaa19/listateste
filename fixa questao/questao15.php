<?php

$alunos = [
    ["nome" => "Ana", "nota1" => 8.0, "nota2" => 7.0],
    ["nome" => "Carlos", "nota1" => 5.0, "nota2" => 4.5],
    ["nome" => "Maria", "nota1" => 9.0, "nota2" => 9.5],
    ["nome" => "João", "nota1" => 6.0, "nota2" => 5.0],
    ["nome" => "Pedro", "nota1" => 3.0, "nota2" => 7.0]
];

$somaMedias = 0;
$maiorMedia = 0;
$menorMedia = 0;
$alunoMaiorMedia = "";
$alunoMenorMedia = "";

foreach ($alunos as $aluno) {
    $media = ($aluno["nota1"] + $aluno["nota2"]) / 2;

    $somaMedias += $media;

    if ($media >= 6) {
        $situacao = "Aprovado";
    } else {
        $situacao = "Reprovado";
    }

    echo "Nome: " . $aluno["nome"] . "<br>";
    echo "Média: " . $media . "<br>";
    echo "Situação: " . $situacao . "<br><br>";

    if ($maiorMedia == 0 || $media > $maiorMedia) {
        $maiorMedia = $media;
        $alunoMaiorMedia = $aluno["nome"];
    }

    if ($menorMedia == 0 || $media < $menorMedia) {
        $menorMedia = $media;
        $alunoMenorMedia = $aluno["nome"];
    }
}

$mediaGeral = $somaMedias / count($alunos);

echo "Aluno com maior média: $alunoMaiorMedia - $maiorMedia<br>";
echo "Aluno com menor média: $alunoMenorMedia - $menorMedia<br>";
echo "Média geral da turma: $mediaGeral<br>";

?>
