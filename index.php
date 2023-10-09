<?php

function echoHelloWorld() 
{
    echo "Hello World!\n";
}

function getHelloWorld() 
{
    return "Hello World!\n";
}

function isNumberEven($number) 
{
    return $number % 2 == 0;
}

if (isNumberEven(5)) {
    echo "Number is even\n";
}

// return multiple values
function getRandomNumbers()
{
    return [1, 2, 3];
}

[$a, $b, $c] = getRandomNumbers();

// return a reference
function getArrayElement(&$array, $key)
{
    return $array[$key];
}

$names = ['Maja', 'Filip', 'Ivan', 'Iva', 'Ana'];

// anonymous function
$namesLongerThanThreeCharacters = array_filter($names, function ($name) {
    var_dump($name);

    return strlen($name) > 3;
});

var_dump(
    $namesLongerThanThreeCharacters
);