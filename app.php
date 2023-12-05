<?php

namespace App;

use App\College\Group;
use App\College\OnlineRoomParticipantFactory;

require __DIR__ . '/vendor/autoload.php';

$participantFactory = new OnlineRoomParticipantFactory();

$group = new Group();
$group->setName('OL-OBE_DEV_H-04/23');

$marko = $participantFactory->createStudent('Marko Maric', 'Moj opis');
$ivan = $participantFactory->createStudent('Ivan Ivic');
$petar = $participantFactory->createStudent('Petar Peric');
$eva = $participantFactory->createStudent('Eva Evic');

$group->addStudent($marko);
$group->addStudent($ivan);
$group->addStudent($petar);
$group->addStudent($eva);

foreach ($group as $groupMember) {
    $groupMember->sayHello();
}