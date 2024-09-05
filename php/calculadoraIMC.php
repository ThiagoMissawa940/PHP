<?php

$nome = readline('Digite seu Nome:');
$altura = readline('Digite sua Altura em cm:');
$peso = readline('Digite seu Peso:');
$quadrado = 2;
$alturaConvertida = $altura / 100;

$IMC = $peso / $alturaConvertida ** 2;

if ($IMC <'16') {
    $classificacao = "Baixo peso muito grave";
} elseif ($IMC >= '16' && $IMC <= '16.99') {
    $classificacao = "Baixo peso grave";
} elseif ($IMC >= '17' && $IMC <= '18,49') {
    $classificacao = "Baixo peso";
} elseif ($IMC >= '18,50' && $IMC <= '24,99') {
    $classificacao = "Peso Normal";
} elseif ($IMC >= '25' && $IMC <= '29,99') {
    $classificacao = "Sobrepeso";
} elseif ($IMC >= '30' && $IMC <= '34,99') {
    $classificacao = "Obesidade grau I";
} elseif ($IMC >= '35' && $IMC <= '39,99') {
    $classificacao = "Obesidade grau II";
} else {
    $classificacao = "Obesidade grau III";
}

echo "$nome possui um índice de massa corporal igual a " . round($IMC) . ", sendo classificado como: $classificacao."


?>
