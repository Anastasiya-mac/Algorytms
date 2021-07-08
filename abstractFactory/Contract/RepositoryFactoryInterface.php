<?php

declare(strict_types=1);

namespace AbstractFactory\Contract;

interface RepositoryFactoryInterface
{
    public function createRecordRepository(): RecordRepositoryInterface;

}