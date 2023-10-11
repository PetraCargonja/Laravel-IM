<?php

$peopleJson = file_get_contents('people.json');

var_dump($peopleJson);

$people = json_decode($peopleJson, true);

$people[] = [
    'name' => 'Marko',
    'age' => 25,
    'gender' => 'male',
    'skills' => ['PHP', 'MySQL', 'JavaScript'],
    'isMarried' => false,
    'weight' => 80.5
];

$peopleJson = json_encode($people);

var_dump(
    file_put_contents('people.json', $peopleJson)
);