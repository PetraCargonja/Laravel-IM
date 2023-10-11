<?php

function addNumberToSum($number)
{
    static $sum = 0;

    $sum += $number;

    return $sum;
}

$foo = 'addNumberToSum';

echo $foo(rand(1, 10)), "\n";
echo $foo(rand(1, 10)), "\n";
echo $foo(rand(1, 10)), "\n";
echo $foo(rand(1, 10)), "\n";
echo $foo(rand(1, 10)), "\n";