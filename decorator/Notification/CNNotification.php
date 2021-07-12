<?php

declare(strict_types=1);

namespace decorator\Notification;

use decorator\Decorator;

class CNNotification extends Decorator
{

    public function send(): void
    {
        echo "Оповещение отправлено на Chrome Notification " . $this->notification->send();
    }
}