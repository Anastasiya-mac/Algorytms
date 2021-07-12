<?php

namespace decorator;

use decorator\NotificationInterface;


abstract class Decorator implements NotificationInterface
{
    public $notification = null;
    public $name;
    public $email;
    public $phone;
 
    public function __construct(NotificationInterface $notification)
    {
        $this->notification = $notification;
        $this->name = $notification->name;
        $this->email = $notification->email;
        $this->phone = $notification->phone;
    }

}
