<?php

// Contoh perbedaan prioritas antara 'and' dan '='
$hasil1 = true and false;
// dievaluasi sebagai: ($hasil1 = true) and false
// hasil1 tetap true, karena assignment dilakukan lebih dulu
echo '$hasil1 = ';
var_dump($hasil1); // bool(true)
echo "<br/>";

$hasil2 = (true and false);
// dievaluasi dalam kurung: true and false = false
echo '$hasil2 = ';
var_dump($hasil2); // bool(false)
echo "<br/>";

$hasil3 = (true xor false);
// true xor false = true
echo '$hasil3 = ';
var_dump($hasil3); // bool(true)
echo "<br/>";

$hasil4 = (false or true && false);
// && lebih tinggi dari or, jadi: false or (true && false) -> false or false -> false
echo '$hasil4 = ';
var_dump($hasil4); // bool(false)
echo "<br/>";

$a = true;
$b = false;

// Di sini urutannya: ($a and $b) || $a or b
// Evaluasi: (true and false) = false
// => false || true = true
// => true or b (seharusnya $b) = true
$hasil5 = ($a and $b || $a or $b);

echo '$hasil5 = ';
var_dump($hasil5); // bool(true)

?>