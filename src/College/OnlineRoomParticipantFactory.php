<?php

namespace App\College;

class OnlineRoomParticipantFactory
{
    // public function createStudent(string $name, string $description = '', ?int $years = null): Student
    // {
    //     if ($years !== null) {
    //         return new Student($name, $description, $years);
    //     }

    //     return new Student($name, $description);
    // }

    // public function createTool(string $name): OnlineRoomTool
    // {
    //     return new OnlineRoomTool($name);
    // }

    public function createParticipant(ParticipantType $participantType, string $name, string $description = ''): OnlineRoomConnectable
    {
        switch ($participantType) {
            case ParticipantType::Student:
                return new Student($name, $description);
            case ParticipantType::Tool:
                return new OnlineRoomTool($name);
            default:
                throw new \Exception('Unknown participant type');
        }
    }
}