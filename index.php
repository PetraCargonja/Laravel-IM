<?php

// integer
$a = 10;

// float
$b = 10.5;
var_dump(0.1 + 0.2);
var_dump(0.1 + 0.2 == 0.3);

// string
$age = 20;
$name = "John Doe";

echo "My name is $name and I am $age years old.\n";

// boolean
$flag = true;
$anotherFlag = false;

$isOfAge = $age >= 18;

var_dump($isOfAge);
var_dump((bool) '0');

// null
$test = null;

var_dump($test);
var_dump(null === 0);