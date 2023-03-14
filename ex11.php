<?php
$pi = 3.14159;
$r = readline();

$volume = (4.0/3) * $pi * ($r * $r * $r);
$volume = number_format($volume, 3, ".", "");

print("VOLUME = $volume");
?>