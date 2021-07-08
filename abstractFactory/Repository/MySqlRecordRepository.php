<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\RecordRepositoryInterface;
use AbstractFactory\Entity\Record;

class MySqlRecordRepository extends BaseMySqlRepository implements RecordRepositoryInterface
{

    public function DBRecord(Record $record)
    {
        echo 'запись таблицы базы данных mysql' . PHP_EOL;
    }

    public function DBQueryBuiler(Record $record)
    {
        echo 'конструктор запросов к базе mysql' . PHP_EOL;
    }
}