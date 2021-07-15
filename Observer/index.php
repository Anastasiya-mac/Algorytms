<?php

namespace Observer;

use Observer\User;
use Observer\Vacancy;
use SplSubject;
use SplObserver;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^Observer/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$vacancy = new Vacancy('PHP developer');
$observer = new User('Иван', 'test@test', 10);
$vacancy->attach($observer);
//$vacancy->detach($observer);
$vacancy->newVacancy('PHP developer');
