<?php

namespace App\College;

use App\College\Exception\OnlineRoomCapacityException;

class OnlineRoom
{
    private const MAX_NUMBER_OF_PARTICIPANTS = 5;

    private const ALLOWED_ROLES = ['admin', 'teacher', 'student'];

    private $participants = [];

    public function connect(OnlineRoomConnectable $onlineRoomConnectable)
    {
        if (!in_array($onlineRoomConnectable->getRole(), self::ALLOWED_ROLES)){
            throw new \App\College\Exception\AccessDeniedException();
        }

        if (count($this->participants) >= self::MAX_NUMBER_OF_PARTICIPANTS) {
            throw new OnlineRoomCapacityException('Soba je puna!');
        }

        $this->participants[] = $onlineRoomConnectable;
        echo "{$onlineRoomConnectable->getName()} je spojen/a! \n";
    }

    public function getNumberOfParticipants(): int
    {
        return count($this->participants);
    }
}