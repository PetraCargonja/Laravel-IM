<?php

require_once 'app.php';
require_once 'app.php';

// expressions
# this is a comment
/*
 Multi line comment
*/
$a = $b = foo();

echo $a, "\n";
echo $b, "\n";

function foo()
{
    $c;
    
    return 5;
}