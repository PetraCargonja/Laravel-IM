<?php

namespace App;

use College\Group;
use College\OnlineRoom;
use College\OnlineRoomTool;
use College\Student;
use Common\Group as CommonGroup;

require_once 'College/OnlineRoomConnectable.php';
require_once 'Common/Person.php';
require_once 'Common/Group.php';
require_once 'College/Admin.php';
require_once 'College/Group.php';
require_once 'College/Teacher.php';
require_once 'College/OnlineRoom.php';
require_once 'College/OnlineRoomTool.php';
require_once 'College/Student.php';

function strlen(string $string): int
{
    return 5;
}

echo \strlen('abc'), "\n";

$group = new CommonGroup();
$group->addPerson(new Student(name: 'Marko Markovic', years: 23));
$group->addPerson(new Student('Ivan Ivic'));
$group->printInfo();

echo "\n";

$group = new Group();
$group->setName('OL-OBE_DEV_H-04/23');

$marko = new Student(name: 'Marko Markovic', years: 23);
$ivan = new Student('Ivan Ivic');
$petar = new Student('Petar Peric');

$group->addStudent($marko);
$group->addStudent($ivan);
$group->addStudent($petar);

$chatGPT = new OnlineRoomTool('ChatGPT');

$onlineRoom = new OnlineRoom($group);
$onlineRoom->connect($group->getTeacher());
$onlineRoom->connect($group->getAdmin());
$onlineRoom->connect($marko);
$onlineRoom->connect($ivan);
$onlineRoom->connect($petar);
$onlineRoom->connect($chatGPT);