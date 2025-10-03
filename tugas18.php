<?php

echo "Urutan prioritas operator PHP<br />";

$a = 10;
$b = 20;
$c = 5;
$d = 2;

$hasil1 = $a + $b / $c - $d;
$hasil2 = $a AND $b || $c AND $d;

echo "\$hasil1 = \$a + \$b / \$c - \$d;<br />";
echo "Hasil1: $hasil1<br />";

echo "\$hasil2 = \$a AND \$b || \$c AND \$d;<br />";
echo "Hasil2: " . ($hasil2 ? "true" : "false");

?>