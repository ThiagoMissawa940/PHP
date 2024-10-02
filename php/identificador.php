<?php

$numero = readline('Digite Um Numero:');

$par = $numero % 2 == 0;
$impar = $numero % 2 != 0;
$positivo = $numero > 0;
$negativo = $numero < 0;
 
if ($impar && $positivo) {
    echo 'O numero que voce digitou é impar e positivo.';
} elseif ($impar && $negativo) {
    echo 'O numero que voce digitou é impar e negativo.';
}

if ($par && $positivo) {
    echo 'O numero que voce digitou é par e positivo.';
}elseif ($par && $negativo) {
    echo 'Não existe numero par e negativo.';
}

?>