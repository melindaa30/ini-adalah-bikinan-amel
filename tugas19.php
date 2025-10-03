<?php

$a = 5;
$b = 8;
$c = 4.5;

$hasil1 = $a + $b;
$hasil2 = $a + $c;
$hasil3 = $a . $b; // penggabungan string

echo "\$hasil1: ";
var_dump($hasil1); // int(13)

echo "<br />";

echo "\$hasil2: ";
var_dump($hasil2); // float(9.5)

echo "<br />";

echo "\$hasil3: ";
var_dump($hasil3); // string(2) "58"

?>