<?php

declare(strict_types=1);

namespace decorator\Notification;

use decorator\Decorator;

class PhoneNotification extends Decorator
{

    public function send(): void
    {
        echo "Оповещение отправлено на телефон " .$this->notification->phone ." " . $this->notification->send();
    }
}