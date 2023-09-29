<?php

// variablies with different data types
$integer = 10;
$float = 10.10;
$string = "Hello World";
$boolean = false;

// print the variables
echo $integer, "\n", $float, "\n", $string, "\n", var_export($boolean, true), "\n";

// define a constant
const PI = 3.14;
echo PI, "\n";

// define two variables as references to the same value
$a = 5;
$b = &$a;

echo $b, "\n";

$a = 10;

echo $b, "\n";