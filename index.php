<?php

$name = $argv[1];
$anotherName = &$name;


$name = 'Ivan Mandic';

echo "Hello, $name\n";
echo "Hello, $anotherName\n";