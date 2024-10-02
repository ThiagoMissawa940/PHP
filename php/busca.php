<?php

$A = '10';
$B = '10';
$C = '40';

$somaAB = $A + $B;

echo $somaAB . ', ';

if ($somaAB < $C) {
    echo 'A soma de A + B é menor que C';
} else {
    echo 'A soma de A + B é maior que C';
}

?>