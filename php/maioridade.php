<?php

$nome = readline("digite seu nome:");
$idade = readline("digite sua idade:");
$peso = readline("digite seu peso:");

if ($idade >= 18) {
    $idade = 'maior de idade';
} else {
    $idade =  'menor de idade';
}

echo 'seu nome é ' .$nome. ' ,seu peso ' . $peso . ' e você é ' .$idade. '';




?>