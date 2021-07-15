<?php

namespace Observer;

use Observer\Vacancy;
use SplObserver;

class User implements SplObserver
{
    public $name;
    public $email;
    public $workExp;
 
    public function __construct(string $name, string $email, int $workExp)
    {
        $this->name = $name;
        $this->email = $email;
        $this->workExp = $workExp;
    }

    public function update($subject)
    {
        echo "Для пользователя " . $this->name . " появилась новая вакансия " . $subject->getVacancy();
    }
}
