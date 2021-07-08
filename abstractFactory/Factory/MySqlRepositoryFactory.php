<?php

declare(strict_types=1);

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\RepositoryFactoryInterface;
use AbstractFactory\Contract\RecordRepositoryInterface;
use AbstractFactory\Repository\MySqlRecordRepository;
use AbstractFactory\Db\MySql;

class MySqlRepositoryFactory implements RepositoryFactoryInterface
{

    private $mySqlConnection;

    public function __construct(MySql $mySqlConnection)
    {
        $this->mySqlConnection = $mySqlConnection;
    }

    public function createRecordRepository(): RecordRepositoryInterface
    {
        return new MySqlRecordRepository($this->mySqlConnection);
    }

}