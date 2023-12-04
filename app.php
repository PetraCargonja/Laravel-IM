<?php

namespace App;

use App\College\Exception\AccessDeniedException;
use App\College\Exception\OnlineRoomCapacityException;
use App\College\Group;
use App\College\OnlineRoom;
use App\College\OnlineRoomParticipantFactory;
use App\College\ParticipantType;
use Exception;

require __DIR__ . '/vendor/autoload.php';

$participantFactory = new OnlineRoomParticipantFactory();

$group = new Group();
$group->setName('OL-OBE_DEV_H-04/23');

$marko = $participantFactory->createParticipant(ParticipantType::Student, 'Marko Maric', 'Moj opis');
$ivan = $participantFactory->createParticipant(ParticipantType::Student, 'Ivan Ivic');
$petar = $participantFactory->createParticipant(ParticipantType::Student, 'Petar Peric');
$eva = $participantFactory->createParticipant(ParticipantType::Student, 'Eva Evic');

$group->addStudent($marko);
$group->addStudent($ivan);
$group->addStudent($petar);
$group->addStudent($eva);

$chatGPT = $participantFactory->createParticipant(ParticipantType::Tool, 'Chat GPT');

$onlineRoom = OnlineRoom::getInstance();
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
    }
}

try {
    $onlineRoom->connect($chatGPT);
} catch (Exception $e) {
    echo "Nije se uspio spojiti alat {$chatGPT->getName()}! \n";
}

$onlineRoom = OnlineRoom::getInstance();

echo "\n\n";
echo "Broj spojenih sudionika: {$onlineRoom->getNumberOfParticipants()} \n";