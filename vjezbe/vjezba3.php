<?php

// Definiranje varijabli
$a = 10;
$b = 5;
$c = 'Algebra';
$d = 'Backend Developer';
// Ispis rezultata aritmetičkih operatora
echo $a + $b;
echo $a - $b;
echo $a * $b;
echo $a / $b;
echo $a % $b;
// Konkatenacija
$f = $c.'-'.$d;
echo $f;
// Kombinirani operator dodjele
$a += $b;
echo $a;
// Uperator usporedbe (veće od)
var_dump($a > $b);
// Operator inkrementa
echo ++$a;
// Operator dekrementa
echo --$b;