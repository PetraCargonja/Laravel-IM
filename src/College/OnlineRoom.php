<?php

namespace App\College;

use App\College\Exception\OnlineRoomCapacityException;

class OnlineRoom
{
    private static ?OnlineRoom $instance = null;

    private const MAX_NUMBER_OF_PARTICIPANTS = 25;

    private const ALLOWED_ROLES = ['admin', 'teacher', 'student', 'tool'];

    private $participants = [];

    private function __construct()
    {}

    public static function getInstance(): OnlineRoom
    {
        if (self::$instance === null) {
            self::$instance = new OnlineRoom();
        }

        return self::$instance;
    }

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