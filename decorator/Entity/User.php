<?php

declare(strict_types=1);

namespace decorator\Entity;

class User 
{
    public $name;
    public $email;
    public $phone;

    public function __construct(string $name, string $email, string $phone)
    {
        $this->email = $email;
        $this->phone = $phone;
        $this->name = $name;
    }
    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }
    
    public function getName(): string
    {
        return $this->name;
    }
}