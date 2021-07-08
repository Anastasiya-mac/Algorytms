<?php

declare(strict_types=1);

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\RecordRepositoryInterface;
use AbstractFactory\Repository\PostgresRecordRepository;
use AbstractFactory\Db\Postgres;

class PostgresRepositoryFactory implements RepositoryFactoryInterface
{

    private $postgresConnection;

    public function __construct(Postgres $postgresConnection)
    {
        $this->postgresConnection = $postgresConnection;
    }

    public function createRecordRepository(): RecordRepositoryInterface
    {
        return new PostgresRecordRepository($this->postgresConnection);
    }

}
