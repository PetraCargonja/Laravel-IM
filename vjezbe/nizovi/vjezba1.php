<?php

$primeNumbers = array(2, 3, 5, 7, 11);

var_dump(
    isset($primeNumbers[2])
);

var_dump($primeNumbers[2]);

$primeNumbers[] = 13;

echo count($primeNumbers), "\n";

var_dump($primeNumbers);

arsort($primeNumbers);

var_dump($primeNumbers);