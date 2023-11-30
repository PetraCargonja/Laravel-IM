<?php

namespace App;

use App\College\Exception\AccessDeniedException;
use App\College\Exception\OnlineRoomCapacityException;
use App\Common\Car;
use App\College\Group;
use App\College\OnlineRoom;
use App\College\OnlineRoomTool;
use App\College\Student;
use Exception;
use RuntimeException;

require __DIR__ . '/vendor/autoload.php';

$group = new Group();
$group->setName('OL-OBE_DEV_H-04/23');

$marko = new Student(name: 'Marko Markovic', years: 23);
$ivan = new Student('Ivan Ivic');
$petar = new Student('Petar Peric');
$eva = new Student('Eva Evic');

$group->addStudent($marko);
$group->addStudent($ivan);
$group->addStudent($petar);
$group->addStudent($eva);

$chatGPT = new OnlineRoomTool('ChatGPT');

$onlineRoom = new OnlineRoom();
$onlineRoom->connect($group->getTeacher());
$onlineRoom->connect($group->getAdmin());

foreach ($group->getStudents() as $student) {
    try {
        $onlineRoom->connect($student);
    } catch (OnlineRoomCapacityException) {
        echo "Student {$student->getName()} nije se uspio spojiti! Soba je puna! \n";
        continue;
    } catch (AccessDeniedException) {
        echo "Student {$student->getName()} nema pravo pristupa! \n";
        continue;
    } finally {
        echo "Broj spojenih sudionika: {$onlineRoom->getNumberOfParticipants()} \n";
    }
}

try {
    $onlineRoom->connect($chatGPT);
} catch (Exception $e) {
    echo "Nije se uspio spojiti alat {$chatGPT->getName()}! \n";
}