<?php

declare(strict_types=1);

namespace decorator\Notification;

use decorator\Decorator;

class EmailNotification extends Decorator
{
    public function send(): void
    {
        echo "Посылаем оповещение пользователю " .  $this->name . " на почту " 
         . $this->email . " " . $this->notification->send() ." " ;
    }
}