<?php

$food = 'apple';

$returnValue = match ($food) {
    'apple' => "Yummy.",
    'orange'  => "Not bad.",
    default => "I don't know such kind of food."
};

var_dump($returnValue);

$i = 5;

switch ('0') {
    case 0:
        echo "i equals 0\n";
        break;
    case 1:
        echo "i equals 1\n";
        break;
    case 2:
        echo "i equals 2\n";
        break;
    default:
        echo "i is not equal to 0, 1 or 2\n";
}

if ($i++ === 10) {
    echo "i equals 10\n";
} else if ($i++ === 11) {
    echo "i equals 11\n";
} else {
    echo "i does not equal 10 or 11\n";
}