<?php

$idade = readline('Qual a Sua Idade?');

if ($idade >= '0' && $idade < '15') {
    echo "Criança";
} elseif ($idade >= '15' && $idade < '30') {
    echo "Jovem";
} elseif ($idade >= '30' && $idade < '60') {
    echo "Adulto";
} else {
    echo "Idoso";
}
?>