<?php

$A = readline('Digite Um Numero para A:');
$B = readline('Digite Um Numero para B:');

if ($A == $B) {
    $C = $A + $B;
} elseif ($A != $B) {
    $C = $A * $B;
}

echo $C

?>