<?php
$num = readline();
$ht = readline();
$vlh = readline();

$sal = $ht * $vlh;
$sal = number_format($sal, 2, ".", "");
print("NUMBER = $num\n");
print("SALARY = U$ $sal\n");
?>