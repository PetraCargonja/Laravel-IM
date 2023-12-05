<?php

namespace App\College;

use SplObserver;
use SplSubject;

class NoticeBoard implements SplSubject
{
    private array $notices = [];

    private array $observers = [];

    public function addNotice(string $notice): void
    {
        $this->notices[] = $notice;
        $this->notify();
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        $key = array_search($observer, $this->observers, true);

        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getLastNotice(): string
    {
        return $this->notices[array_key_last($this->notices)];
    }
}