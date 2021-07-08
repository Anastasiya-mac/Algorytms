<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\RecordRepositoryInterface;
use AbstractFactory\Entity\Record;


class PostgresRecordRepository extends BasePostgresRepository implements RecordRepositoryInterface
{

    public function DBRecord(Record $record)
    {
        echo 'запись таблицы базы данных postgres' . PHP_EOL;
    }

    public function DBQueryBuiler(Record $record)
    {
        echo 'конструктор запросов к базе postgres'. PHP_EOL;
    }
}