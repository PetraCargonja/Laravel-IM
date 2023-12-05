<?php

namespace App\College;

use App\Common\Person;
use SplObserver;
use SplSubject;

class Student extends Person implements SplObserver
{
    public function sayHello(): void
    {
        echo "Ime: {$this->name}, godine: {$this->years} \n";
    }

    public function getRole(): string
    {
        return 'student';
    }

    public function update(SplSubject $subject): void
    {
        if ($subject instanceof NoticeBoard) {
            echo "Student {$this->name} je primio obavijest: {$subject->getLastNotice()} \n";
        }
    }
}