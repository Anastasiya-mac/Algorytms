<?php

namespace decorator;

use decorator\Notification\PhoneNotification;
use decorator\Entity\User;
use decorator\Notification\EmailNotification;
use decorator\Notification\CNNotification;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^decorator/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$user = new User('Петя', 'test@mail', '89777878654');
$notification = new CNNotification((new PhoneNotification(new EmailNotification(new Notification($user)))));
$notification ->send();

