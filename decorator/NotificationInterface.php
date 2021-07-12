<?php

declare(strict_types=1);

namespace decorator;

interface NotificationInterface
{
    public function send(): void;
}