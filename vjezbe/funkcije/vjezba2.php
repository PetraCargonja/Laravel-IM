<?php

function getUppercaseFullName($name, $surname)
{
    $fullName = $name . ' ' . $surname;

    return strtoupper($fullName);
}

$fullname = getUppercaseFullName('John', 'Doe');

echo $fullname, "\n";