<?php

echo "Assignment by value<br />";

$a = 20;
$b = 15;
$c = 5;

echo "\$a = $a, \$b = $b, \$c = $c<br />";
// hasil proses: $a = 20, $b = 15, $c = 5

$a = $b = $c + 5;

echo "\$a = $a, \$b = $b, \$c = $c<br />";
// hasil proses: $a = 10, $b = 10, $c = 5

echo "<br />Assignment by reference<br />";

$a = 20;
$b = $a;

echo "\$a = $a, \$b = $b<br />";
// hasil proses: $a = 20, $b = 20

$a = $a + 5;

echo "\$a = $a, \$b = $b<br />";
// hasil proses: $a = 25, $b = 20

$b = $b + 10;

echo "\$a = $a, \$b = $b<br />";
// hasil proses: $a = 25, $b = 30

?>