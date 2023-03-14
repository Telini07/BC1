<?php
$x = readline();
$y = readline();

$y = number_format($y, 1, ".", "");

$med = $x/$y;
$med = number_format($med, 3, ".", "");

print("$med km/l\n");
?>