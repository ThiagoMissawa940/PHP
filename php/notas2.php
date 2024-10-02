<?php

$aluno = readline('Digite seu nome:');


$notas = [
    "nota1" => "5.0",
    "nota2" => "7.0",
    "nota3" => "6.0",
    "nota4" => "10.0",
];

$media = array_sum($notas) / '4';

if ($media >= 7) {
    echo 'Parabens ' .$aluno. ' voce foi aprovado com uma media de ' .$media. ' pontos!' ;
} else {
    echo 'Que pena' .$aluno. 'voce reprovou por conta de sua media de ' .$media. ' pontos';
}

?>