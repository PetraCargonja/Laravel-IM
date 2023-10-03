<?php

$emptyArray = [
    'name' => 'John',
    'surname' => 'Doe',
    'age' => 50,
    'skills' => ['PHP', 'MySQL', 'JavaScript'],
    'address' => [
        'street' => 'Main Street',
        'number' => '10',
        'city' => 'New York',
        'country' => 'USA'
    ]
];

$emptyArray2 = [1, 2, 3];
$emptyArray3 = [4, 5, 6];


var_dump(
    array_merge($emptyArray2, $emptyArray3)
);
