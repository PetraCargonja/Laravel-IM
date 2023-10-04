<?php

$users = [
    [
        'name' => 'John',
        'surname' => 'Doe',
        'age' => 25,
        'gender' => 'male',
    ],
    [
        'name' => 'Jane',
        'surname' => 'Doe',
        'age' => 20,
        'gender' => 'female'
    ]
];

var_dump($users);

unset($users[0]['gender'], $users[1]['gender']);

var_dump($users);

$users[] = [
    'name' => 'Mark',
    'surname' => 'Johnson',
    'age' => 50
];

var_dump($users);