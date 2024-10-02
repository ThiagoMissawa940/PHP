<?php 

$nascimento = readline('Digite o ano qe voce nasceu:');
$month = readline('Digite o mes que voce nasceu:');
$day = readline('Digite o dia que voce nasceu:');
$ano = 365;
$mes = 30;
$actualyear = 2024;
$actualmonth = 9;
$actualday = 17;

$anos = $actualyear - $nascimento;
$meses = $actualmonth - $month;
$dias =  $actualday - $day;



echo "voce esta vivo " .$anos. " anos," .$dias. "dias e " .round($meses). " meses";



?>