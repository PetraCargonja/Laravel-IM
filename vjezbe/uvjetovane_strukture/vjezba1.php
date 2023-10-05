<?php

$a = 5;
$b = 10;
$c = 15;

if (($b > $a && $b < $c) || ($b < $a && $b > $c)) {
    echo "$b is between $a and $c\n";
} else {
    echo "$b is NOT between $a and $c\n";
}