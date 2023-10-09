<?php

function echoName(string $name)
{
    echo "My name is $name\n";
}

function getSum(int $a, int $b)
{
    $sum = $a + $b;

    return $sum;
}

// pass by value by default
function getSquared(int $a)
{
    $a = $a * $a;

    return $a;
}

// default value
function makeCoffee(string $type = 'espresso')
{
    echo "Making a cup of $type.\n";
}

makeCoffee('cappuccino');
makeCoffee();

function makeYogurt($container = 'cup', $flavour = 'natural')
{
    echo "Making a $container of $flavour yogurt.\n";
}

// named arguments
makeYogurt(flavour: 'blueberry'); // works as expected

function sum(...$numbers)
{
    $sum = 0;

    foreach ($numbers as $number) {
        $sum += $number;
    }

    return $sum;
}

echo sum(1, 2, 3, 4, 50, 100), "\n"; // 3