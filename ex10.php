<?php
$linha1 = readline();
$linha2 = readline();

$p1cod = explode(' ',$linha1);
$p1num = intval($valores[1]);
$p1val = floatval($valores[2]);

$p2cod = explode(' ',$linha2);
$p2num = intval($valores[1]); 
$p2val = floatval($valores[2]);



$total = ($p1num * $p1val) + ($p2num * $p2val);
$total = number_format($total, 2, ".", "");

print("VALOR A PAGAR: R$ $total\n");
?>