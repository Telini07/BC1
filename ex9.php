<?php
$nome = "JOAO";//readline();
$salfix = 500.00;//readline();
$tven = 1230.30;//readline();

$total = $salfix + ($tven * 0.15);
$total = number_format($total, 2, ".", "");

print("TOTAL = R$ $total\n");
?>