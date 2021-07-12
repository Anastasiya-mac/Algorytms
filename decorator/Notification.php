<?php

namespace decorator;

use decorator\NotificationInterface;
use decorator\Entity\User;

class Notification implements NotificationInterface
{
    public $name;
    public $email;
    public $phone;
 
    public function __construct(User $user)
    {
        $this->name = $user->getName();
        $this->email = $user->getEmail();
        $this->phone = $user->getPhone();
    }

    public function send(): void
    {
    //0 класс
    }

}
