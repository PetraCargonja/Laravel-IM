<?php

namespace App;

use App\College\Group;
use App\College\NoticeBoard;
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

$noticeBoard = new NoticeBoard();

$noticeBoard->attach($marko);
$noticeBoard->attach($ivan);
$noticeBoard->attach($petar);
$noticeBoard->attach($eva);

$noticeBoard->addNotice('Nastava iduci tjedan je otkazana.');

$noticeBoard->detach($eva);
$noticeBoard->addNotice('Molim vas da se prijavite na e-learning sustav.');
$noticeBoard->addNotice('Sretni blagdani');