<?php

namespace App\College;

interface OnlineRoomConnectable
{
    const ROLE_ADMIN = 'admin';

    const ROLE_TEACHER = 'teacher';

    const ROLE_STUDENT = 'student';

    const ROLE_TOOL = 'tool';

    public function getRole(): string;

    public function getName(): string;
}