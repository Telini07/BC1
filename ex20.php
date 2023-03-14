<?php
$n = readline();

$ano = $n/365;


$mes = ($n%365)/30;

$dias = ($n%365)%30;



echo floor($ano), "ano(s)\n";
echo floor($mes), "mes(es)\n";
echo floor($dias), "dia(s)\n";

?>