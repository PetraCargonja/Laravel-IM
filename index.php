<?php

$people = ['Marko', 'Ivan', 'Jure', 'Ana', 'Iva', 'Luka', 'Ivona', 'Eva', 'Ivo'];

foreach ($people as $value) {
    echo "Polaznik: {$value}\n";
}

for ($i=0; $i < count($people); $i++) {
    if (strlen($people[$i]) < 4) {
        continue;
    }
    
    echo "Polaznik: {$people[$i]}\n";
}

for ($i = 0; $i < 10; $i++) {
    echo "Hello World\n";
}

$a = 1;

do {
    echo "Hello World\n";

    $a++;

    if ($a > 10) {
        break;
    }
} while (true);

while ($a <= 10) {
    echo "Hello World\n";

    $a++;
}