<?php

declare(strict_types=1);

namespace AbstractFactory\Contract;

use AbstractFactory\Entity\Record;

interface RecordRepositoryInterface
{

    public function DBRecord(Record $record);

    public function DBQueryBuiler(Record $record);

}