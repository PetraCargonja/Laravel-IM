<?php

class DivisionByZeroException extends Exception {}

function divide($num1, $num2) 
{
    if ($num2 === 0) {
        throw new DivisionByZeroException("Division by zero is not allowed");
    }

    return $num1 / $num2;
}

try {
    echo divide(5, 2), "\n";
    echo divide(5, 0), "\n";
} catch (DivisionByZeroException $e) {
    echo "An error occurred: " . $e->getMessage(), "\n";
} finally {
    echo "This is always executed\n";
}

